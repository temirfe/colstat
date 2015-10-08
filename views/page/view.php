<?php

use yii\helpers\Html;
use app\models\Contact;

/* @var $this yii\web\View */
/* @var $model app\models\Page */
$this->title=$model->title.' | CollegeStatistics.org';
$this->params['breadcrumbs']=$breadcrumbs;
?>
<?php if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin()){
    ?>
    <div class="pull-right">
        <div class="btn-group" role="group" aria-label="admin-actions">
            <?= Html::a('<span class="glyphicon glyphicon-pencil" aria-hidden="true" title="'.Yii::t('app', 'Update').'"></span>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm']) ?>
            <?= Html::a('<span class="glyphicon glyphicon-remove" aria-hidden="true" title="'.Yii::t('app', 'Delete').'"></span>', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger btn-sm',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        </div>
    </div>
<?php
}?>
    <h1><?= Html::encode($model->title) ?></h1>
<div class="page-view">
    <div class="row">
        <div class="col-md-9">
            <?=$model->content; ?>
            <?php
                if($model->id==27){
                    $cmodel=new Contact();
                    echo $this->render('/contact/_form.php',['model'=>$cmodel]);
                }
            ?>
        </div>
        <div class="col-md-3">
            <?php if($children){
                foreach($children as $child){
                    echo "<div class='page_menu'>".Html::a($child['title'],[$child['slug'].'/'.$child['id']])."</div>";
                }
            }?>
        </div>
    </div>
</div>

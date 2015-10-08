<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MedicalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medical Schools';
$this->params['breadcrumbs'][] = $this->title;
if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin())
{
    $avisible=true;
    $create="<div class='pull-right'>".Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"
        title="'.Yii::t('app', 'Add new').'"></span>', ['create'], ['class' => 'btn btn-success btn-sm'])."</div>";
}
else {$avisible=false; $create='';}
?>
<?=$create;?>
<div class="medical-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php $columns=[
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute' => 'name',
            'format' => 'raw',
            'value' => function($model) {
                return Html::a($model->name, ['medical/view','id'=>$model->id]);
            },
        ],
        'city',
        'state',
        //'address',
        // 'url:url',
        // 'about:ntext',
        // 'inst_type',
        // 'campus_set',
        // 'campus_house',
        // 'stud_popul',
        // 'grad_rate',
        // 'transfer_out_rate',

        ['class' => 'yii\grid\ActionColumn', 'headerOptions' => ['width' => '67'],'visible'=>$avisible],
    ]; ?>
    <?php
    if(!isset($controller)) $controller=Yii::$app->controller->id;
    include_once('/../layouts/_indexGrid.php');
    ?>
</div>

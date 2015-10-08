<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PharmacySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pharmacy Schools';
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
<div class="pharmacy-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php $columns=[
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute' => 'name',
            'format' => 'raw',
            'value' => function($model) {
                return Html::a($model->name, ['pharmacy/view','id'=>$model->id]);
            },
        ],
        'state',
        //'contact',
        'pharm_school_name',
        // 'accred_status',
        // 'inst_type',
        // 'main_campus',
        // 'branch_campuses',
        // 'curriculum:ntext',
        // 'addit_reqs:ntext',
        // 'prereq_courses:ntext',
        // 'enter_class_stat',
        // 'appl_process_reqs:ntext',

        ['class' => 'yii\grid\ActionColumn', 'headerOptions' => ['width' => '67'],'visible'=>$avisible],
    ];?>
    <?php
    if(!isset($controller)) $controller=Yii::$app->controller->id;
    include_once('/../layouts/_indexGrid.php');
    ?>
</div>

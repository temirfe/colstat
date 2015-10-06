<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tracks';
$this->params['breadcrumbs'][] = $this->title;
if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin())
{
    $avisible=true;
    $create="<div class='pull-right'>".Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"
        title="'.Yii::t('app', 'Add new').'"></span>', ['create'], ['class' => 'btn btn-success btn-sm'])."</div>";
}
else {$avisible=false; $create='';}
?>
<div class="track-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'user_id',
                'label'=>'User',
                'format'=>'raw',
                'value'=>function($model) {
                    return Html::a($model->user->name, ['/user/view','id'=>$model->user_id]);
                },
            ],
            [
                'attribute'=>'model_type',
                'label'=>'Page',
                'format'=>'raw',
                'value'=>function($model) {
                    return Html::a($model->model_type, ['/'.$model->model_type.'/view','id'=>$model->model_id]);
                },
            ],
            'specialty',
             'degree_desired',
             'test_score',
             'gpa',
             'scholarship_award',
             'status',
             'date_sent',
             'date_status_complete',
             'date_update',

            ['class' => 'yii\grid\ActionColumn', 'headerOptions' => ['width' => '67'],'visible'=>$avisible,]
        ],
    ]); ?>

</div>

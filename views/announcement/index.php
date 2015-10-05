<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AnnouncementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Announcements';
$this->params['breadcrumbs'][] = $this->title;
if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin())
{
    $avisible=true;
    $create="<p>".Html::a('Create Announcement', ['create'], ['class' => 'btn btn-success'])."</p>";
}
else {$avisible=false; $create='';}
?>
<div class="announcement-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?=$create; ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            [
                'attribute' => 'title',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::a($model->title, ['view', 'id' => $model->id]);
                },
                'headerOptions' => ['width' => '200'],
            ],
            'description:ntext',
            // 'updated_at',
            'created_at',
            ['class' => 'yii\grid\ActionColumn', 'visible'=>$avisible],
        ],
    ]); ?>

</div>

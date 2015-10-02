<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TrackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tracks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="track-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Track', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'model_id',
            'model_type',
            'specialty',
            // 'degree_desired',
            // 'test_score',
            // 'gpa',
            // 'scholarship_award',
            // 'status',
            // 'date_sent',
            // 'date_status_complete',
            // 'date_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

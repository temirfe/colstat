<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OptometrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Optometry Schools';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="optometry-index">
    <div class="pull-right">
        <?= Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true" title="'.Yii::t('app', 'Add new').'"></span>', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
    </div>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::a($model->name, ['optometry/view','id'=>$model->id]);
                },
            ],
            //'city',
            'state',
            //'address',
            // 'url:url',
            // 'about:ntext',
            // 'class_size',
            // 'matricul_female',
            // 'matricul_male',
            // 'matricul_total',
             'average_gpa',
             'aa1_avg_oat',
             'ts2_avg_oat',
            // 'pct_ba_deg',
            // 'in_state_amnt',
            // 'out_state_amnt',
            // 'prereqs:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BusinessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'MBA';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="business-index">
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
                    return Html::a($model->name, ['business/view','id'=>$model->id]);
                },
            ],
            'city',
            'state',
            // 'zip',
            // 'phone',
            // 'fax',
            // 'url:url',
            // 'president',
            // 'about:ntext',
            // 'url_fin_aid:url',
            // 'url_admissions:url',
            // 'url_apply:url',
            // 'grad_rate',
            // 'grad_rate_men',
            // 'grad_rate_women',
            // 'apply_fee',
            // 'pct_adm_men',
            // 'pct_adm_wmen',
            // 'pct_fullfirst_any_finaid',
            // 'avg_fullfirst_loan',
            // 'pct_fullfirst_loan',
            // 'avg_fullfirst_oloan',
            // 'appl_ttl',
            [
                'attribute' => 'pct_adm_ttl',
                'format' => 'raw',
                'value' => function($model) {
                    $percent=$model->pct_adm_ttl*100;
                    return $percent."%";
                },
            ],
            // 'appl_men',
            // 'appl_wmen',
            // 'adm_ttl',
            // 'adm_men',
            // 'adm_wmen',
            // 'tuition_in',
            // 'tuition_out',
            [
                'attribute' => 'grad_enr',
                'format' => 'raw',
                'value' => function($model) {
                    return number_format($model->grad_enr,0,'',',');
                },
            ],
            'avg_gmat',
            // 'ft_grad_empl_grad',
            // 'avg_start_sal',
            // 'avg_ugrad_gpa',
            // 'ft_grad_empl_3month',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
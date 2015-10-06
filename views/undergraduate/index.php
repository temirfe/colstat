<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UndergraduateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Undergraduate Schools';
$this->params['breadcrumbs'][] = $this->title;
if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin())
{
    $avisible=true;
    $create="<div class='pull-right'>".Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"
        title="'.Yii::t('app', 'Add new').'"></span>', ['create'], ['class' => 'btn btn-success btn-sm'])."</div>";
}
else {$avisible=false; $create='';}
?>
<div class="undergraduate-index">
    <?=$create;?>
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
                    return Html::a($model->name, ['undergraduate/view','id'=>$model->id]);
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
            [
                'attribute' => 'pct_adm_ttl',
                'format' => 'raw',
                'value' => function($model) {
                    $percent=$model->pct_adm_ttl*100;
                    return $percent."%";
                },
            ],
            // 'pct_adm_men',
            // 'pct_adm_wmen',
            // 'ugrad_enr',
            // 'pt_ugrad_enr',
            // 'pct_ue_native',
            // 'pct_ue_asian',
            // 'pct_ue_black',
            // 'pct_ue_latino',
            // 'pct_ue_white',
            // 'pct_ue_two',
            // 'pct_ue_unk',
            // 'pct_fullfirst_any_finaid',
            // 'avg_fullfirst_loan',
            // 'pct_fullfirst_loan',
            // 'avg_fullfirst_oloan',
            [
                'attribute' => 'appl_ttl',
                'format' => 'raw',
                'value' => function($model) {
                    return number_format($model->appl_ttl,0,'',',');
                },
            ],
            [
                'attribute' => 'ft_ugrad_enr',
                'format' => 'raw',
                'value' => function($model) {
                    return number_format($model->ft_ugrad_enr,0,'',',');
                },
            ],
            // 'appl_men',
            // 'appl_wmen',
            // 'adm_ttl',
            // 'adm_men',
            // 'adm_wmen',
            // 'sat_cr_25',
            // 'sat_cr_75',
            // 'sat_ma_25',
            // 'sat_ma_75',
            // 'sat_wr_25',
            // 'sat_wr_75',
            // 'act_co_25',
            // 'act_co_75',
            // 'act_en_25',
            // 'act_en_75',
            // 'act_ma_25',
            // 'act_ma_75',
            // 'act_wr_25',
            // 'act_wr_75',
            // 'tuition_in',
            // 'tuition_out',

            ['class' => 'yii\grid\ActionColumn', 'visible'=>$avisible],
        ],
    ]); ?>

</div>

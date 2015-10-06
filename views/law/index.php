<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LawSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Law Schools';
$this->params['breadcrumbs'][] = $this->title;
if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin())
{
    $avisible=true;
    $create="<div class='pull-right'>".Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"
        title="'.Yii::t('app', 'Add new').'"></span>', ['create'], ['class' => 'btn btn-success btn-sm'])."</div>";
}
else {$avisible=false; $create='';}

?>
<div class="law-index">
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
                    return Html::a($model->name, ['law/view','id'=>$model->id]);
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
            'appl_ttl',
            'pct_adm_ttl',
            // 'pct_adm_men',
            // 'pct_adm_wmen',
            // 'pct_fullfirst_any_finaid',
            // 'avg_fullfirst_loan',
            // 'pct_fullfirst_loan',
            // 'avg_fullfirst_oloan',
            // 'appl_men',
            // 'appl_wmen',
            // 'adm_ttl',
            // 'adm_men',
            // 'adm_wmen',
            // 'tuition_in',
            // 'tuition_out',
            'l_class_size',
            // 'gpa_75',
            // 'gpa_50',
            // 'gpa_25',
            // 'lsat_75',
            // 'lsat_50',
            // 'lsat_25',
            // 'expen_offcamp',
            // 'expen_athome',
            // 'scholar_less_full',
            // 'scholar_full',
            // 'scholar_more_full',
            // 'ttl_stud_granted',
            // 'grant_per_75',
            // 'grant_per_50',
            // 'grant_per_25',

            ['class' => 'yii\grid\ActionColumn', 'headerOptions' => ['width' => '67'],'visible'=>$avisible],
        ],
    ]); ?>

</div>

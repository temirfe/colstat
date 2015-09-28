<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DentalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dental Schools';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dental-index">
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
                    return Html::a($model->name, ['dental/view','id'=>$model->id]);
                },
            ],
            //'address',
            'city',
            'state',
            // 'zip',
            // 'phone',
            // 'fax',
            // 'url:url',
            // 'dean',
            // 'about:ntext',
            // 'url_fin_aid:url',
            // 'mission:ntext',
            // 'first_year_enr:ntext',
            // 'curriculum:ntext',
            // 'inst_type',
            // 'since_year',
            // 'term_type',
            // 'prog_length',
            // 'sem_start',
            // 'degr_offered',
            // 'contact_fin_aid',
            // 'college_cred_req',
            // 'bac_deg_pref',
            // 'prereq_courses',
            // 'recom_courses',
            // 'gpa',
            // 'dat_score',
            // 'dat_req',
            // 'dat_latest',
            // 'dat_oldest',
            // 'dat_several',
            // 'dat_canada',
            // 'second_appl_req',
            // 'interv_req',
            // 'residents_prefered',
            // 'instate_appl',
            // 'outstate_appl',
            // 'appl_start_date',
            // 'appl_end_date',
            // 'first_accept_date',
            // 'apply_fee',
            // 'fee_waiver_avail',
            // 'racial_dist',
            // 'age_dist',
            // 'research_oppor',
            // 'special_programs',
            // 'tuition',
            // 'living_exp',
            // 'campus_type',
            // 'oncampus_housing',
            // 'class_size',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

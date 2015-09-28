<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dental */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dentals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dental-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'address',
            'city',
            'state',
            'zip',
            'phone',
            'fax',
            'url:url',
            'dean',
            'about:ntext',
            'url_fin_aid:url',
            'mission:ntext',
            'first_year_enr:ntext',
            'curriculum:ntext',
            'inst_type',
            'since_year',
            'term_type',
            'prog_length',
            'sem_start',
            'degr_offered',
            'contact_fin_aid',
            'college_cred_req',
            'bac_deg_pref',
            'prereq_courses',
            'recom_courses',
            'gpa',
            'dat_score',
            'dat_req',
            'dat_latest',
            'dat_oldest',
            'dat_several',
            'dat_canada',
            'second_appl_req',
            'interv_req',
            'residents_prefered',
            'instate_appl',
            'outstate_appl',
            'appl_start_date',
            'appl_end_date',
            'first_accept_date',
            'apply_fee',
            'fee_waiver_avail',
            'racial_dist',
            'age_dist',
            'research_oppor',
            'special_programs',
            'tuition',
            'living_exp',
            'campus_type',
            'oncampus_housing',
            'class_size',
        ],
    ]) ?>

</div>

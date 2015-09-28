<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DentalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dental-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'city') ?>

    <?= $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'zip') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'dean') ?>

    <?php // echo $form->field($model, 'about') ?>

    <?php // echo $form->field($model, 'url_fin_aid') ?>

    <?php // echo $form->field($model, 'mission') ?>

    <?php // echo $form->field($model, 'first_year_enr') ?>

    <?php // echo $form->field($model, 'curriculum') ?>

    <?php // echo $form->field($model, 'inst_type') ?>

    <?php // echo $form->field($model, 'since_year') ?>

    <?php // echo $form->field($model, 'term_type') ?>

    <?php // echo $form->field($model, 'prog_length') ?>

    <?php // echo $form->field($model, 'sem_start') ?>

    <?php // echo $form->field($model, 'degr_offered') ?>

    <?php // echo $form->field($model, 'contact_fin_aid') ?>

    <?php // echo $form->field($model, 'college_cred_req') ?>

    <?php // echo $form->field($model, 'bac_deg_pref') ?>

    <?php // echo $form->field($model, 'prereq_courses') ?>

    <?php // echo $form->field($model, 'recom_courses') ?>

    <?php // echo $form->field($model, 'gpa') ?>

    <?php // echo $form->field($model, 'dat_score') ?>

    <?php // echo $form->field($model, 'dat_req') ?>

    <?php // echo $form->field($model, 'dat_latest') ?>

    <?php // echo $form->field($model, 'dat_oldest') ?>

    <?php // echo $form->field($model, 'dat_several') ?>

    <?php // echo $form->field($model, 'dat_canada') ?>

    <?php // echo $form->field($model, 'second_appl_req') ?>

    <?php // echo $form->field($model, 'interv_req') ?>

    <?php // echo $form->field($model, 'residents_prefered') ?>

    <?php // echo $form->field($model, 'instate_appl') ?>

    <?php // echo $form->field($model, 'outstate_appl') ?>

    <?php // echo $form->field($model, 'appl_start_date') ?>

    <?php // echo $form->field($model, 'appl_end_date') ?>

    <?php // echo $form->field($model, 'first_accept_date') ?>

    <?php // echo $form->field($model, 'apply_fee') ?>

    <?php // echo $form->field($model, 'fee_waiver_avail') ?>

    <?php // echo $form->field($model, 'racial_dist') ?>

    <?php // echo $form->field($model, 'age_dist') ?>

    <?php // echo $form->field($model, 'research_oppor') ?>

    <?php // echo $form->field($model, 'special_programs') ?>

    <?php // echo $form->field($model, 'tuition') ?>

    <?php // echo $form->field($model, 'living_exp') ?>

    <?php // echo $form->field($model, 'campus_type') ?>

    <?php // echo $form->field($model, 'oncampus_housing') ?>

    <?php // echo $form->field($model, 'class_size') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dental */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dental-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dean')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'url_fin_aid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mission')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'first_year_enr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'curriculum')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'inst_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'since_year')->textInput() ?>

    <?= $form->field($model, 'term_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prog_length')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sem_start')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'degr_offered')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_fin_aid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'college_cred_req')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bac_deg_pref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prereq_courses')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recom_courses')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gpa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dat_score')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dat_req')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dat_latest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dat_oldest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dat_several')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dat_canada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'second_appl_req')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interv_req')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'residents_prefered')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instate_appl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'outstate_appl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appl_start_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appl_end_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_accept_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apply_fee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fee_waiver_avail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'racial_dist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age_dist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'research_oppor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'special_programs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tuition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'living_exp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'campus_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oncampus_housing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class_size')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

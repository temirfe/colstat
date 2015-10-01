<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UndergradProfile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="undergrad-profile-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    <?=$form->field($model, 'gender')->dropDownList(['Male','Female'],['prompt'=>'Select..']); ?>
    <?=$form->field($model, 'ethnicity')->dropDownList(['American Indian or Alaska Native',
        'Asian/Native Hawaiian/Pacific Islander',
        'Black or African American','Hispanic/Latino','White','N/A'],['prompt'=>'Select..']); ?>

    <?= $form->field($model, 'entering_class')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'prospective_major')->dropDownList(['A','B'],['prompt'=>'Select..']); ?>

    <?= $form->field($model, 'high_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gpa_unweighted')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gpa_weighted')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class_rank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ap_courses_taken')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ib_student')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foreign_languages_taken')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'years_taken')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'extracur')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'leadership_roles')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'honors')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'additional_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'int_applicant')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

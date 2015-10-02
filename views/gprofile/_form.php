<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Gprofile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gprofile-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>
    <?=$form->field($model, 'gender')->dropDownList(['Male'=>'Male','Female'=>'Female'],['prompt'=>'Select..']); ?>
    <?=$form->field($model, 'ethnicity')->dropDownList(['American Indian or Alaska Native'=>'American Indian or Alaska Native',
        'Asian/Native Hawaiian/Pacific Islander'=>'Asian/Native Hawaiian/Pacific Islander',
        'Black or African American'=>'Black or African American','Hispanic/Latino'=>'Hispanic/Latino',
        'White'=>'White','N/A'=>'N/A'],['prompt'=>'Select..']); ?>

    <?= $form->field($model, 'appl_cycle_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'undergrad_inst')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'major')->textInput(['maxlength' => true]) ?>
    <?=$form->field($model, 'degree_awarded')->dropDownList(['Cum Laude'=>'Cum Laude',
        'Magma Cum Laude'=>'Magma Cum Laude',
        'Summa Cum Laude'=>'Summa Cum Laude','N/A'=>'N/A'],['prompt'=>'Select..']); ?>

    <?= $form->field($model, 'gpa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'class_rank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_exp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'study_abroad_exp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'extracur')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'leadership_roles')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'honors')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'additional_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'int_applicant')->checkbox() ?>

    <div class="offset-button col-sm-offset-3">
        <?php $btn=$model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'; echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' =>'col-sm-3 '.$btn]); ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

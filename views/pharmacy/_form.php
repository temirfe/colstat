<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pharmacy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pharmacy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pharm_school_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'accred_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inst_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'main_campus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'branch_campuses')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'curriculum')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'addit_reqs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'prereq_courses')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'enter_class_stat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appl_process_reqs')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

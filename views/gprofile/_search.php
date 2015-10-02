<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GprofileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gprofile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'ethnicity') ?>

    <?= $form->field($model, 'appl_cycle_year') ?>

    <?php // echo $form->field($model, 'undergrad_inst') ?>

    <?php // echo $form->field($model, 'major') ?>

    <?php // echo $form->field($model, 'degree_awarded') ?>

    <?php // echo $form->field($model, 'gpa') ?>

    <?php // echo $form->field($model, 'class_rank') ?>

    <?php // echo $form->field($model, 'work_exp') ?>

    <?php // echo $form->field($model, 'study_abroad_exp') ?>

    <?php // echo $form->field($model, 'extracur') ?>

    <?php // echo $form->field($model, 'leadership_roles') ?>

    <?php // echo $form->field($model, 'honors') ?>

    <?php // echo $form->field($model, 'additional_info') ?>

    <?php // echo $form->field($model, 'int_applicant') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="undergrad-profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'gender') ?>

    <?= $form->field($model, 'ethnicity') ?>

    <?= $form->field($model, 'entering_class') ?>

    <?php // echo $form->field($model, 'prospective_major') ?>

    <?php // echo $form->field($model, 'high_school') ?>

    <?php // echo $form->field($model, 'gpa_unweighted') ?>

    <?php // echo $form->field($model, 'gpa_weighted') ?>

    <?php // echo $form->field($model, 'class_rank') ?>

    <?php // echo $form->field($model, 'class_size') ?>

    <?php // echo $form->field($model, 'ap_courses_taken') ?>

    <?php // echo $form->field($model, 'ib_student') ?>

    <?php // echo $form->field($model, 'foreign_languages_taken') ?>

    <?php // echo $form->field($model, 'years_taken') ?>

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

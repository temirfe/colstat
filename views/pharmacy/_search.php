<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PharmacySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pharmacy-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'city') ?>

    <?= $form->field($model, 'state') ?>

    <?= $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'pharm_school_name') ?>

    <?php // echo $form->field($model, 'accred_status') ?>

    <?php // echo $form->field($model, 'inst_type') ?>

    <?php // echo $form->field($model, 'main_campus') ?>

    <?php // echo $form->field($model, 'branch_campuses') ?>

    <?php // echo $form->field($model, 'curriculum') ?>

    <?php // echo $form->field($model, 'addit_reqs') ?>

    <?php // echo $form->field($model, 'prereq_courses') ?>

    <?php // echo $form->field($model, 'enter_class_stat') ?>

    <?php // echo $form->field($model, 'appl_process_reqs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhysicalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="physical-therapy-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'city') ?>

    <?= $form->field($model, 'state') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'about') ?>

    <?php // echo $form->field($model, 'inst_type') ?>

    <?php // echo $form->field($model, 'campus_set') ?>

    <?php // echo $form->field($model, 'campus_house') ?>

    <?php // echo $form->field($model, 'stud_popul') ?>

    <?php // echo $form->field($model, 'grad_rate') ?>

    <?php // echo $form->field($model, 'transfer_out_rate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

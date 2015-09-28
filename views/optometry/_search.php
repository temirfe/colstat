<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OptometrySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="optometry-search">

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

    <?php // echo $form->field($model, 'class_size') ?>

    <?php // echo $form->field($model, 'matricul_female') ?>

    <?php // echo $form->field($model, 'matricul_male') ?>

    <?php // echo $form->field($model, 'matricul_total') ?>

    <?php // echo $form->field($model, 'average_gpa') ?>

    <?php // echo $form->field($model, 'aa1_avg_oat') ?>

    <?php // echo $form->field($model, 'ts2_avg_oat') ?>

    <?php // echo $form->field($model, 'pct_ba_deg') ?>

    <?php // echo $form->field($model, 'in_state_amnt') ?>

    <?php // echo $form->field($model, 'out_state_amnt') ?>

    <?php // echo $form->field($model, 'prereqs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ColnameSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="colname-search">

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

    <?php // echo $form->field($model, 'president') ?>

    <?php // echo $form->field($model, 'url_fin_aid') ?>

    <?php // echo $form->field($model, 'url_admissions') ?>

    <?php // echo $form->field($model, 'url_apply') ?>

    <?php // echo $form->field($model, 'grad_rate') ?>

    <?php // echo $form->field($model, 'grad_rate_men') ?>

    <?php // echo $form->field($model, 'grad_rate_women') ?>

    <?php // echo $form->field($model, 'apply_fee') ?>

    <?php // echo $form->field($model, 'about') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

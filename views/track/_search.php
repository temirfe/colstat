<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TrackSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="track-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'model_id') ?>

    <?= $form->field($model, 'model_type') ?>

    <?= $form->field($model, 'specialty') ?>

    <?php // echo $form->field($model, 'degree_desired') ?>

    <?php // echo $form->field($model, 'test_score') ?>

    <?php // echo $form->field($model, 'gpa') ?>

    <?php // echo $form->field($model, 'scholarship_award') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'date_sent') ?>

    <?php // echo $form->field($model, 'date_status_complete') ?>

    <?php // echo $form->field($model, 'date_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

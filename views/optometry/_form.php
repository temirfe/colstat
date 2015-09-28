<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Optometry */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="optometry-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'class_size')->textInput() ?>

    <?= $form->field($model, 'matricul_female')->textInput() ?>

    <?= $form->field($model, 'matricul_male')->textInput() ?>

    <?= $form->field($model, 'matricul_total')->textInput() ?>

    <?= $form->field($model, 'average_gpa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aa1_avg_oat')->textInput() ?>

    <?= $form->field($model, 'ts2_avg_oat')->textInput() ?>

    <?= $form->field($model, 'pct_ba_deg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'in_state_amnt')->textInput() ?>

    <?= $form->field($model, 'out_state_amnt')->textInput() ?>

    <?= $form->field($model, 'prereqs')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

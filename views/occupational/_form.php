<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Occupational */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="occupational-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'inst_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'campus_set')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'campus_house')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stud_popul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grad_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transfer_out_rate')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Colname */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="colname-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'president')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_fin_aid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_admissions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_apply')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grad_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grad_rate_men')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grad_rate_women')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apply_fee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'about')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

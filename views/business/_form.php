<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Business */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="business-form">

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

    <?= $form->field($model, 'about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'url_fin_aid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_admissions')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url_apply')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grad_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grad_rate_men')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grad_rate_women')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apply_fee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pct_adm_ttl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pct_adm_men')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pct_adm_wmen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pct_fullfirst_any_finaid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avg_fullfirst_loan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pct_fullfirst_loan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avg_fullfirst_oloan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appl_ttl')->textInput() ?>

    <?= $form->field($model, 'appl_men')->textInput() ?>

    <?= $form->field($model, 'appl_wmen')->textInput() ?>

    <?= $form->field($model, 'adm_ttl')->textInput() ?>

    <?= $form->field($model, 'adm_men')->textInput() ?>

    <?= $form->field($model, 'adm_wmen')->textInput() ?>

    <?= $form->field($model, 'tuition_in')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tuition_out')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grad_enr')->textInput() ?>

    <?= $form->field($model, 'avg_gmat')->textInput() ?>

    <?= $form->field($model, 'ft_grad_empl_grad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avg_start_sal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'avg_ugrad_gpa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ft_grad_empl_3month')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

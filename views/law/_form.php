<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Law */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="law-form">

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

    <?= $form->field($model, 'l_class_size')->textInput() ?>

    <?= $form->field($model, 'gpa_75')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gpa_50')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gpa_25')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lsat_75')->textInput() ?>

    <?= $form->field($model, 'lsat_50')->textInput() ?>

    <?= $form->field($model, 'lsat_25')->textInput() ?>

    <?= $form->field($model, 'expen_offcamp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expen_athome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scholar_less_full')->textInput() ?>

    <?= $form->field($model, 'scholar_full')->textInput() ?>

    <?= $form->field($model, 'scholar_more_full')->textInput() ?>

    <?= $form->field($model, 'ttl_stud_granted')->textInput() ?>

    <?= $form->field($model, 'grant_per_75')->textInput() ?>

    <?= $form->field($model, 'grant_per_50')->textInput() ?>

    <?= $form->field($model, 'grant_per_25')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

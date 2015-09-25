<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LawSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="law-search">

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

    <?php // echo $form->field($model, 'about') ?>

    <?php // echo $form->field($model, 'url_fin_aid') ?>

    <?php // echo $form->field($model, 'url_admissions') ?>

    <?php // echo $form->field($model, 'url_apply') ?>

    <?php // echo $form->field($model, 'grad_rate') ?>

    <?php // echo $form->field($model, 'grad_rate_men') ?>

    <?php // echo $form->field($model, 'grad_rate_women') ?>

    <?php // echo $form->field($model, 'apply_fee') ?>

    <?php // echo $form->field($model, 'pct_adm_ttl') ?>

    <?php // echo $form->field($model, 'pct_adm_men') ?>

    <?php // echo $form->field($model, 'pct_adm_wmen') ?>

    <?php // echo $form->field($model, 'pct_fullfirst_any_finaid') ?>

    <?php // echo $form->field($model, 'avg_fullfirst_loan') ?>

    <?php // echo $form->field($model, 'pct_fullfirst_loan') ?>

    <?php // echo $form->field($model, 'avg_fullfirst_oloan') ?>

    <?php // echo $form->field($model, 'appl_ttl') ?>

    <?php // echo $form->field($model, 'appl_men') ?>

    <?php // echo $form->field($model, 'appl_wmen') ?>

    <?php // echo $form->field($model, 'adm_ttl') ?>

    <?php // echo $form->field($model, 'adm_men') ?>

    <?php // echo $form->field($model, 'adm_wmen') ?>

    <?php // echo $form->field($model, 'tuition_in') ?>

    <?php // echo $form->field($model, 'tuition_out') ?>

    <?php // echo $form->field($model, 'l_class_size') ?>

    <?php // echo $form->field($model, 'gpa_75') ?>

    <?php // echo $form->field($model, 'gpa_50') ?>

    <?php // echo $form->field($model, 'gpa_25') ?>

    <?php // echo $form->field($model, 'lsat_75') ?>

    <?php // echo $form->field($model, 'lsat_50') ?>

    <?php // echo $form->field($model, 'lsat_25') ?>

    <?php // echo $form->field($model, 'expen_offcamp') ?>

    <?php // echo $form->field($model, 'expen_athome') ?>

    <?php // echo $form->field($model, 'scholar_less_full') ?>

    <?php // echo $form->field($model, 'scholar_full') ?>

    <?php // echo $form->field($model, 'scholar_more_full') ?>

    <?php // echo $form->field($model, 'ttl_stud_granted') ?>

    <?php // echo $form->field($model, 'grant_per_75') ?>

    <?php // echo $form->field($model, 'grant_per_50') ?>

    <?php // echo $form->field($model, 'grant_per_25') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

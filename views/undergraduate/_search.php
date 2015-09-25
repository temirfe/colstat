<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UndergraduateSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="undergraduate-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'graduate') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'state') ?>

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

    <?php // echo $form->field($model, 'ugrad_enr') ?>

    <?php // echo $form->field($model, 'ft_ugrad_enr') ?>

    <?php // echo $form->field($model, 'pt_ugrad_enr') ?>

    <?php // echo $form->field($model, 'pct_ue_native') ?>

    <?php // echo $form->field($model, 'pct_ue_asian') ?>

    <?php // echo $form->field($model, 'pct_ue_black') ?>

    <?php // echo $form->field($model, 'pct_ue_latino') ?>

    <?php // echo $form->field($model, 'pct_ue_white') ?>

    <?php // echo $form->field($model, 'pct_ue_two') ?>

    <?php // echo $form->field($model, 'pct_ue_unk') ?>

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

    <?php // echo $form->field($model, 'sat_cr_25') ?>

    <?php // echo $form->field($model, 'sat_cr_75') ?>

    <?php // echo $form->field($model, 'sat_ma_25') ?>

    <?php // echo $form->field($model, 'sat_ma_75') ?>

    <?php // echo $form->field($model, 'sat_wr_25') ?>

    <?php // echo $form->field($model, 'sat_wr_75') ?>

    <?php // echo $form->field($model, 'act_co_25') ?>

    <?php // echo $form->field($model, 'act_co_75') ?>

    <?php // echo $form->field($model, 'act_en_25') ?>

    <?php // echo $form->field($model, 'act_en_75') ?>

    <?php // echo $form->field($model, 'act_ma_25') ?>

    <?php // echo $form->field($model, 'act_ma_75') ?>

    <?php // echo $form->field($model, 'act_wr_25') ?>

    <?php // echo $form->field($model, 'act_wr_75') ?>

    <?php // echo $form->field($model, 'tuition_in') ?>

    <?php // echo $form->field($model, 'tuition_out') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Law */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Law Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="law-view">
    <?php if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin()){
        ?>
        <div class="pull-right">
            <div class="btn-group" role="group" aria-label="admin-actions">
                <?= Html::a('<span class="glyphicon glyphicon-pencil" aria-hidden="true" title="'.Yii::t('app', 'Update').'"></span>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm']) ?>
                <?= Html::a('<span class="glyphicon glyphicon-remove" aria-hidden="true" title="'.Yii::t('app', 'Delete').'"></span>', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger btn-sm',
                    'data' => [
                        'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
    <?php
    }?>
    <h1><?= Html::encode($this->title) ?></h1>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">User Applications</a></li>
        <li><a data-toggle="tab" href="#about">About University</a></li>
    </ul>

    <div class="tab-content mt10">
        <div id="home" class="tab-pane fade in active">
            <?=$this->render('/layouts/_track',['dataProvider'=>$dataProvider,'model'=>$model]); ?>
        </div>
        <div id="about" class="tab-pane fade">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'name',
                    'address',
                    'city',
                    'state',
                    'zip',
                    'phone',
                    'fax',
                    'url:url',
                    'president',
                    'about:ntext',
                    'url_fin_aid:url',
                    'url_admissions:url',
                    'url_apply:url',
                    'grad_rate',
                    'grad_rate_men',
                    'grad_rate_women',
                    'apply_fee',
                    'pct_adm_ttl',
                    'pct_adm_men',
                    'pct_adm_wmen',
                    'pct_fullfirst_any_finaid',
                    'avg_fullfirst_loan',
                    'pct_fullfirst_loan',
                    'avg_fullfirst_oloan',
                    'appl_ttl',
                    'appl_men',
                    'appl_wmen',
                    'adm_ttl',
                    'adm_men',
                    'adm_wmen',
                    'tuition_in',
                    'tuition_out',
                    'l_class_size',
                    'gpa_75',
                    'gpa_50',
                    'gpa_25',
                    'lsat_75',
                    'lsat_50',
                    'lsat_25',
                    'expen_offcamp',
                    'expen_athome',
                    'scholar_less_full',
                    'scholar_full',
                    'scholar_more_full',
                    'ttl_stud_granted',
                    'grant_per_75',
                    'grant_per_50',
                    'grant_per_25',
                ],
            ]) ?>
        </div>
    </div>
</div>

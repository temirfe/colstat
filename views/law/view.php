<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Law */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Laws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="law-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

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

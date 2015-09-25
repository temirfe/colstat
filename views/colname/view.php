<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Colname */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Colnames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colname-view">

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
            'url_fin_aid:url',
            'url_admissions:url',
            'url_apply:url',
            'grad_rate',
            'grad_rate_men',
            'grad_rate_women',
            'apply_fee',
            'about',
        ],
    ]) ?>

</div>

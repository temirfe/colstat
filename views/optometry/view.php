<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Optometry */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Optometries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="optometry-view">

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
            'city',
            'state',
            'address',
            'url:url',
            'about:ntext',
            'class_size',
            'matricul_female',
            'matricul_male',
            'matricul_total',
            'average_gpa',
            'aa1_avg_oat',
            'ts2_avg_oat',
            'pct_ba_deg',
            'in_state_amnt',
            'out_state_amnt',
            'prereqs:ntext',
        ],
    ]) ?>

</div>

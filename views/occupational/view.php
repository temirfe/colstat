<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Occupational */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Occupationals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="occupational-view">

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
            'inst_type',
            'campus_set',
            'campus_house',
            'stud_popul',
            'grad_rate',
            'transfer_out_rate',
        ],
    ]) ?>

</div>

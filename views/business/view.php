<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Business */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Businesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="business-view">

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
            'name',
            'city',
            'state',
            [
                'attribute' => 'pct_adm_ttl',
                'value' => ($model->pct_adm_ttl*100)."%",
            ],

            'tuition_in',
            'tuition_out',
            'grad_enr',
            'avg_gmat',
            [
                'attribute' => 'ft_grad_empl_grad',
                'value' => ($model->ft_grad_empl_grad*100)."%",
            ],
            [
                'attribute' => 'ft_grad_empl_3month',
                'value' => ($model->ft_grad_empl_3month*100)."%",
            ],
            [
                'attribute' => 'avg_start_sal',
                'format' => 'raw',
                'value' => "$".number_format($model->avg_start_sal,0,'',','),
            ],
            'avg_ugrad_gpa',

        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Track */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tracks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="track-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'model_id',
            'model_type',
            'specialty',
            'degree_desired',
            'test_score',
            'gpa',
            'scholarship_award',
            'status',
            'date_sent',
            'date_status_complete',
            'date_update',
        ],
    ]) ?>

</div>

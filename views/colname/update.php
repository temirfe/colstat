<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Colname */

$this->title = 'Update Colname: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Colnames', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="colname-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

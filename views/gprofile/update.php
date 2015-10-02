<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gprofile */

$this->title = 'Update Graduate Profile: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gprofile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

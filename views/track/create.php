<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Track */

$this->title = 'Add Your Application';
$this->params['breadcrumbs'][] = ['label' => 'Tracks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="track-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

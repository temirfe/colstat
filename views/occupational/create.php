<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Occupational */

$this->title = 'Create Occupational';
$this->params['breadcrumbs'][] = ['label' => 'Occupationals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="occupational-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

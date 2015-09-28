<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Optometry */

$this->title = 'Create Optometry';
$this->params['breadcrumbs'][] = ['label' => 'Optometries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="optometry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Medical */

$this->title = 'Create Medical';
$this->params['breadcrumbs'][] = ['label' => 'Medicals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medical-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

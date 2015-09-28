<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PhysicalTherapy */

$this->title = 'Create Physical Therapy';
$this->params['breadcrumbs'][] = ['label' => 'Physical Therapies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="physical-therapy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

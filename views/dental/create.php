<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Dental */

$this->title = 'Create Dental';
$this->params['breadcrumbs'][] = ['label' => 'Dentals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dental-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

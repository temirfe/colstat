<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nursing */

$this->title = 'Create Nursing';
$this->params['breadcrumbs'][] = ['label' => 'Nursings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nursing-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

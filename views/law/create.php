<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Law */

$this->title = 'Create Law';
$this->params['breadcrumbs'][] = ['label' => 'Laws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="law-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Engineering */

$this->title = 'Create Engineering';
$this->params['breadcrumbs'][] = ['label' => 'Engineerings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="engineering-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

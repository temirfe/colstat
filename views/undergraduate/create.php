<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Undergraduate */

$this->title = 'Create Undergraduate';
$this->params['breadcrumbs'][] = ['label' => 'Undergraduates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="undergraduate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Colname */

$this->title = 'Create Colname';
$this->params['breadcrumbs'][] = ['label' => 'Colnames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colname-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

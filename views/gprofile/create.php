<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Gprofile */

$this->title = 'Create Graduate Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gprofile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

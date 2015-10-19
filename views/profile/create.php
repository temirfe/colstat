<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UndergradProfile */

$this->title = 'Create Undergraduate Profile';
$this->params['breadcrumbs'][] = ['label' => 'Undergrad Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="undergrad-profile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

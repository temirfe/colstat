<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Announcement */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Announcements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin()){
    ?>
    <div class="pull-right">
        <div class="btn-group" role="group" aria-label="admin-actions">
            <?= Html::a('<span class="glyphicon glyphicon-pencil" aria-hidden="true" title="'.Yii::t('app', 'Update').'"></span>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm']) ?>
            <?= Html::a('<span class="glyphicon glyphicon-remove" aria-hidden="true" title="'.Yii::t('app', 'Delete').'"></span>', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger btn-sm',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        </div>
    </div>
<?php
}?>
<div class="announcement-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="date">
        <?=date('d M Y',strtotime($model->created_at));?>
    </div>
    <?=$model->description;?>
    <article>
        <?=$model->content;?>
    </article>


</div>

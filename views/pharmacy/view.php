<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pharmacy */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pharmacy Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pharmacy-view">
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
    <h1><?= Html::encode($this->title) ?></h1>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">User Applications</a></li>
        <li><a data-toggle="tab" href="#about">About University</a></li>
    </ul>

    <div class="tab-content mt10">
        <div id="home" class="tab-pane fade in active">
            <?=$this->render('/layouts/_track',['dataProvider'=>$dataProvider,'model'=>$model]); ?>
        </div>
        <div id="about" class="tab-pane fade">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'name',
                    'city',
                    'state',
                    'contact',
                    'pharm_school_name',
                    'accred_status',
                    'inst_type',
                    'main_campus',
                    'branch_campuses',
                    'curriculum:ntext',
                    'addit_reqs:ntext',
                    'prereq_courses:ntext',
                    'enter_class_stat',
                    'appl_process_reqs:ntext',
                ],
            ]) ?>
        </div>
    </div>
</div>

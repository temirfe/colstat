<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Business */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Business Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="business-view">
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
                    'name',
                    'city',
                    'state',
                    [
                        'attribute' => 'pct_adm_ttl',
                        'value' => ($model->pct_adm_ttl*100)."%",
                    ],

                    'tuition_in',
                    'tuition_out',
                    'grad_enr',
                    'avg_gmat',
                    [
                        'attribute' => 'ft_grad_empl_grad',
                        'value' => ($model->ft_grad_empl_grad*100)."%",
                    ],
                    [
                        'attribute' => 'ft_grad_empl_3month',
                        'value' => ($model->ft_grad_empl_3month*100)."%",
                    ],
                    [
                        'attribute' => 'avg_start_sal',
                        'format' => 'raw',
                        'value' => "$".number_format($model->avg_start_sal,0,'',','),
                    ],
                    'avg_ugrad_gpa',

                ],
            ]) ?>
        </div>
    </div>
</div>

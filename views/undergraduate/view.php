<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Undergraduate */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Undergraduate Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="undergraduate-view">
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
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'summary'=>'',
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'user_id',
                        'format' => 'raw',
                        'value' => function($model) {
                            return Html::a($model->user->name, ['/user/view', 'id' => $model->user_id]);
                        },
                        'headerOptions' => ['width' => '200'],
                    ],
                    'test_score',
                    'gpa',
                    'scholarship_award',
                    'status',
                    [
                        'attribute' => 'date_sent',
                        'format' => 'raw',
                        'value' => function($model) {
                            return date('d M Y',strtotime($model->date_sent));
                        },
                    ],

                    [
                        'attribute' => 'date_status_complete',
                        'format' => 'raw',
                        'value' => function($model) {
                            return date('d M Y',strtotime($model->date_status_complete));
                        },
                    ],

                    [
                        'attribute' => 'date_update',
                        'format' => 'raw',
                        'value' => function($model) {
                            return date('d M Y',strtotime($model->date_update));
                        },
                    ],
                ],
            ]); ?>
            <?php
            if(Yii::$app->user->isGuest){echo Html::a('Login', '/site/login')." to add your application";}
            else {echo Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add an application',
                ['/track/create', 'mid' => $model->id,'type'=>'undergraduate','name'=>$model->name], ['class' => 'btn btn-success']);}
             ?>
        </div>
        <div id="about" class="tab-pane fade">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'graduate',
                    'name',
                    'address',
                    'city',
                    'state',
                    'zip',
                    'phone',
                    'fax',
                    'url:url',
                    'president',
                    'about:ntext',
                    'url_fin_aid:url',
                    'url_admissions:url',
                    'url_apply:url',
                    'grad_rate',
                    'grad_rate_men',
                    'grad_rate_women',
                    'apply_fee',
                    'pct_adm_ttl',
                    'pct_adm_men',
                    'pct_adm_wmen',
                    'ugrad_enr',
                    'ft_ugrad_enr',
                    'pt_ugrad_enr',
                    'pct_ue_native',
                    'pct_ue_asian',
                    'pct_ue_black',
                    'pct_ue_latino',
                    'pct_ue_white',
                    'pct_ue_two',
                    'pct_ue_unk',
                    'pct_fullfirst_any_finaid',
                    'avg_fullfirst_loan',
                    'pct_fullfirst_loan',
                    'avg_fullfirst_oloan',
                    'appl_ttl',
                    'appl_men',
                    'appl_wmen',
                    'adm_ttl',
                    'adm_men',
                    'adm_wmen',
                    'sat_cr_25',
                    'sat_cr_75',
                    'sat_ma_25',
                    'sat_ma_75',
                    'sat_wr_25',
                    'sat_wr_75',
                    'act_co_25',
                    'act_co_75',
                    'act_en_25',
                    'act_en_75',
                    'act_ma_25',
                    'act_ma_75',
                    'act_wr_25',
                    'act_wr_75',
                    'tuition_in',
                    'tuition_out',
                ],
            ]) ?>
        </div>
    </div>
</div>

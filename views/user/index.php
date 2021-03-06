<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin())
{
    $avisible=true;
    $create="<div class='pull-right'>".Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"
        title="'.Yii::t('app', 'Add new').'"></span>', ['create'], ['class' => 'btn btn-success btn-sm'])."</div>";
}
else {$avisible=false; $create='';}
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'id',
                'headerOptions' => ['width' => '50'],

            ],
            'username',
            [
                'attribute'=>'email',
                'value'=>'email',
                'visible'=>$avisible,
            ],
            [
                'attribute' => 'created_at',
                'format' => 'raw',
                'value' => function($model) {
                    return date('Y-m-d',$model->created_at);
                },
                'contentOptions'=>['style'=>'max-width: 100px;']
            ],
            [
                'attribute' => 'updated_at',
                'format' => 'raw',
                'value' => function($model) {
                    return date('Y-m-d',$model->updated_at);
                },
            ],
            [
                'attribute' => 'status',
                'format' => 'raw',
                'value' => function($model) {
                    if($model->status==1) $status='Active'; else $status='Not active';
                    return $status;
                },
                'filter' => Html::activeDropDownList($searchModel, 'status', [1=>'Active',0=>'Not active'],['class'=>'form-control','prompt' => '']),
                'visible'=>$avisible,
            ],
            // 'email_confirm_token:email',
            // 'password_reset_token',
            'city',
            'state',
            [
                'attribute' => 'role',
                'format' => 'raw',
                'value' => function($model) {
                    if($model->role==20) $role='Admin'; else $role='User';
                    return $role;
                },
                'filter' => Html::activeDropDownList($searchModel, 'role', [20=>'Admin','10'=>'User'],['class'=>'form-control','prompt' => '']),
                'visible'=>$avisible,
            ],
            // 'hear',
            // 'fb_id',
            // 'twi_id',
            // 'google_id',
            // 'lastvisit',

            ['class' => 'yii\grid\ActionColumn', 'headerOptions' => ['width' => '67'],'visible'=>$avisible],
        ],
    ]); ?>

</div>

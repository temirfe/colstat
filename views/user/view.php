<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $profile app\models\Profile */
if(!isset($yiiuser)) $yiiuser=Yii::$app->user;
$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">
    <?php if(!$yiiuser->isGuest && ($yiiuser->identity->isAdmin() || $model->id==$yiiuser->id)){
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
    <h3><?= Html::encode($this->title) ?></h3>
    <div class="">
        from <?=$model->city;?>, <?=$model->state;?>
    </div>
    <br />

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">User Applications</a></li>
        <li><a data-toggle="tab" href="#profile">User Profile</a></li>
    </ul>

    <div class="tab-content mt10">
        <div id="home" class="tab-pane fade in active">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'summary'=>'',
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'label' => 'University Name',
                        'format'=>'html',
                        'value' => function($model) {
                            $table=$model->model_type; if($model->model_type=='undergraduate') $table='university';
                            $name=Yii::$app->db->createCommand("SELECT name FROM {$table} WHERE id='{$model->model_id}'")->queryScalar();
                            return Html::a($name, ['/'.$model->model_type.'/view', 'id' => $model->model_id]);
                        },
                        'headerOptions' => ['width' => '200'],
                    ],
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
                            if($model->date_status_complete) $date=date('d M Y',strtotime($model->date_status_complete));
                            else $date='N/A';
                            return $date;
                        },
                    ],

                    [
                        'attribute' => 'date_update',
                        'format' => 'raw',
                        'value' => function($model) {
                            if($model->date_update) $date=date('d M Y',strtotime($model->date_update));
                            else $date='N/A';
                            return $date;
                        },
                    ],
                    [
                        'attribute' => 'scholarship_award',
                        'format' => 'raw',
                        'value' => function($model) {
                            if($model->scholarship_award) $date='$'.number_format($model->scholarship_award,2);
                            else $date='N/A';
                            return $date;
                        },
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'headerOptions' => ['width' => '67'],
                        'visible'=> function($model) {
                            if($model->user_id==Yii::$app->user->id) $avisible=true; else $avisible=false;
                            return $avisible;
                        },
                        'urlCreator' => function ($action, $model, $key, $index) {
                            $table=$model->model_type; if($model->model_type=='undergraduate') $table='university';
                            $name=Yii::$app->db->createCommand("SELECT name FROM {$table} WHERE id='{$model->model_id}'")->queryScalar();
                            return Url::toRoute(['/track/'.$action, 'id' => $model->id,'name'=>$name]);
                        }
                    ],
                ],
            ]); ?>
        </div>
        <div id="profile" class="tab-pane fade">
            <div class="row">
                <div class="col-md-6">
                    <?php
                    if($profile){
                        echo "<h3>Undergraduate Profile</h3>";
                        echo DetailView::widget([
                            'model' => $profile,
                            'attributes' => [
                                'gender',
                                'ethnicity',
                                'entering_class',
                                'prospective_major',
                                'high_school',
                                'gpa_unweighted',
                                'gpa_weighted',
                                'class_rank',
                                'class_size',
                                'ap_courses_taken:ntext',
                                'ib_student',
                                'foreign_languages_taken',
                                'years_taken',
                                'extracur:ntext',
                                'leadership_roles:ntext',
                                'honors:ntext',
                                'additional_info:ntext',
                                [
                                    'attribute' => 'int_applicant',
                                    'value' => $profile->int_applicant==1 ? 'Yes':'No',
                                ],
                            ],
                            'template' => "<tr><th class='col-md-5'>{label}</th><td class='col-md-7'>{value}</td></tr>",
                        ]);
                        if(!$yiiuser->isGuest && $yiiuser->id==$model->id)
                        {
                            echo Html::a('update Undergraduate Profile', ['/profile/update','id'=>$profile->id], ['class' => '']);
                        }
                    }
                    else{
                        if(!$yiiuser->isGuest && $yiiuser->id==$model->id)
                        {
                            echo Html::a('add Undergraduate Profile', '/profile/create', ['class' => '']);
                        }
                    }

                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                    if($gprofile){
                        echo "<h3>Graduate Profile</h3>";
                        echo DetailView::widget([
                            'model' => $gprofile,
                            'attributes' => [
                                'gender',
                                'ethnicity',
                                'appl_cycle_year',
                                'undergrad_inst',
                                'major',
                                'degree_awarded',
                                'gpa',
                                'class_rank',
                                'work_exp',
                                'study_abroad_exp',
                                'extracur:ntext',
                                'leadership_roles:ntext',
                                'honors:ntext',
                                'additional_info:ntext',
                                [
                                    'attribute' => 'int_applicant',
                                    'value' => $gprofile->int_applicant==1 ? 'Yes':'No',
                                ],
                            ],
                            'template' => "<tr><th class='col-md-5'>{label}</th><td class='col-md-7'>{value}</td></tr>",
                        ]);
                        if(!$yiiuser->isGuest && $yiiuser->id==$model->id)
                        {
                            echo Html::a('update Graduate Profile', ['/gprofile/update','id'=>$gprofile->id], ['class' => '']);
                        }
                    }
                    else{
                        if(!$yiiuser->isGuest && $yiiuser->id==$model->id)
                        {
                            echo Html::a('add Graduate Profile', '/gprofile/create', ['class' => '']);
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

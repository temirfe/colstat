<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $profile app\models\Profile */
if(!isset($yiiuser)) $yiiuser=Yii::$app->user;
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <h3><?= Html::encode($this->title) ?></h3>
    <div class="">
        from <?=$model->city;?>, <?=$model->state;?>
    </div>

    <?php
    if($profile){
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
                'int_applicant',
            ],
            'template' => "<tr><th class='col-md-3'>{label}</th><td class='col-md-5'>{value}</td></tr>",
        ]);
    }
    else{
        if(!$yiiuser->isGuest && $yiiuser->id==$model->id)
        {
            echo Html::a('add Undergraduate Profile', '/profile/create', ['class' => '']);
        }
        else echo "User hasn't filled up Undergraduate Profile yet";
    }

    ?>

</div>

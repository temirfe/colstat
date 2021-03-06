<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Undergrad Profiles';
$this->params['breadcrumbs'][] = $this->title;
if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin())
{
    $avisible=true;
    $create="<div class='pull-right'>".Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"
        title="'.Yii::t('app', 'Add new').'"></span>', ['create'], ['class' => 'btn btn-success btn-sm'])."</div>";
}
else {$avisible=false; $create='';}
?>
<div class="undergrad-profile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Undergrad Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'gender',
            'ethnicity',
            'entering_class',
            // 'prospective_major',
            // 'high_school',
            // 'gpa_unweighted',
            // 'gpa_weighted',
            // 'class_rank',
            // 'class_size',
            // 'ap_courses_taken:ntext',
            // 'ib_student',
            // 'foreign_languages_taken',
            // 'years_taken',
            // 'extracur:ntext',
            // 'leadership_roles:ntext',
            // 'honors:ntext',
            // 'additional_info:ntext',
            // 'int_applicant',

            ['class' => 'yii\grid\ActionColumn', 'headerOptions' => ['width' => '67'],'visible'=>$avisible],
        ],
    ]); ?>

</div>

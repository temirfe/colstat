<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GprofileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gprofiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gprofile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Gprofile', ['create'], ['class' => 'btn btn-success']) ?>
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
            'appl_cycle_year',
            // 'undergrad_inst',
            // 'major',
            // 'degree_awarded',
            // 'gpa',
            // 'class_rank',
            // 'work_exp',
            // 'study_abroad_exp',
            // 'extracur:ntext',
            // 'leadership_roles:ntext',
            // 'honors:ntext',
            // 'additional_info:ntext',
            // 'int_applicant',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\UndergradProfile */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Undergrad Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="undergrad-profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

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

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
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
    ]) ?>

</div>

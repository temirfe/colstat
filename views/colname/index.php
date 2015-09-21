<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ColnameSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Colnames';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="colname-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Colname', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'address',
            'city',
            'state',
            // 'zip',
            // 'phone',
            // 'fax',
            // 'url:url',
            // 'president',
            // 'url_fin_aid:url',
            // 'url_admissions:url',
            // 'url_apply:url',
            // 'grad_rate',
            // 'grad_rate_men',
            // 'grad_rate_women',
            // 'apply_fee',
            // 'about',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

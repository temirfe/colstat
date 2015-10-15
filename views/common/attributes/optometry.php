<?php

use yii\helpers\Html;
$attributes=[
    [
        'attribute' => 'name',
        'format' => 'raw',
        'value' => Html::a($model['name'], ['/optometry/view','id'=>$model['id']])
    ],
    'city',
    'state',
    'class_size',
    'matricul_female',
    'matricul_male',
    'matricul_total',
    'average_gpa',
    'aa1_avg_oat',
    'ts2_avg_oat',
    'pct_ba_deg',
    'in_state_amnt',
    'out_state_amnt',
    'prereqs:ntext',
];
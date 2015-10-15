<?php

use yii\helpers\Html;
$attributes=[
    [
        'attribute' => 'name',
        'format' => 'raw',
        'value' => Html::a($model['name'], ['/physical/view','id'=>$model['id']])
    ],
    'city',
    'state',
    [
        'attribute' => 'inst_type',
        'label' => 'Institution Type',
    ],
    'campus_set',
    'campus_house',
    [
        'attribute' => 'stud_popul',
        'label' => 'Student Population',
    ],
    [
        'attribute' => 'grad_rate',
        'label' => 'Graduation Rate',
    ],
    'transfer_out_rate',
];
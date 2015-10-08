<?php

use yii\helpers\Html;
$attributes=[
    [
        'attribute' => 'name',
        'format' => 'raw',
        'value' => Html::a($model['name'], ['/medical/view','id'=>$model['id']])
    ],
    'city',
    'state',
    'about:ntext',
    'inst_type',
    'campus_set',
    'campus_house',
    'stud_popul',
    'grad_rate',
    'transfer_out_rate',
];
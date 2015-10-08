<?php

use yii\helpers\Html;
$attributes=[
    [
        'attribute' => 'name',
        'format' => 'raw',
        'value' => Html::a($model['name'], ['/engineering/view','id'=>$model['id']])
    ],
    'city',
    'state',
    'campus_set',
    'campus_house',
    'stud_popul',
    'grad_rate',
];
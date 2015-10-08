<?php

use yii\helpers\Html;
$attributes=[
    [
        'attribute' => 'name',
        'format' => 'raw',
        'value' => Html::a($model['name'], ['/pharmacy/view','id'=>$model['id']])
    ],
    'city',
    'state',
    'contact',
    'pharm_school_name',
    'accred_status',
    'inst_type',
    'main_campus',
    'branch_campuses',
    'curriculum:ntext',
    'addit_reqs:ntext',
    'prereq_courses:ntext',
    'enter_class_stat',
    'appl_process_reqs:ntext',

];
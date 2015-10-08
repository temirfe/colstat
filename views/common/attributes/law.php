<?php

use yii\helpers\Html;
$attributes=[
    [
        'attribute' => 'name',
        'format' => 'raw',
        'value' => Html::a($model['name'], ['/law/view','id'=>$model['id']])
    ],
    'city',
    'state',
    [
        'attribute' => 'grad_rate',
        'label' => 'Graduation Rate Total',
        'value' => ($model['grad_rate']*100)."%"
    ],
    [
        'attribute' => 'grad_rate_men',
        'label' => 'Graduation Rate Men',
        'value' => ($model['grad_rate_men']*100)."%"
    ],
    [
        'attribute' => 'grad_rate_women',
        'label' => 'Graduation Rate Women',
        'value' => ($model['grad_rate_women']*100)."%"
    ],
    [
        'attribute' => 'apply_fee',
        'label' => 'Application Fee',
    ],

    [
        'attribute' => 'pct_adm_ttl',
        'label'=>'Admit Rate'
        //'value' => ($model['pct_adm_ttl']*100)."%",
    ],

    [
        'attribute' => 'tuition_in',
        'label'=>'Tuition (In State)'
    ],
    [
        'attribute' => 'tuition_out',
        'label'=>'Tuition (Out of State)'
    ],
    [
        'attribute' => 'grad_enr',
        'label'=>'Enrollment (full-time)'
    ],
    [
        'attribute' => 'avg_gmat',
        'label'=>'Average GMAT'
    ],
    [
        'attribute' => 'ft_grad_empl_grad',
        'label'=>'Full-time Graduates Employed At Graduation',
    ],
    [
        'attribute' => 'ft_grad_empl_3month',
        'label'=>'Full-Time Graduates Employed Three Months After Graduation'
        //'value' => ($model['ft_grad_empl_3month']*100)."%",
    ],
    [
        'attribute' => 'avg_start_sal',
        'label'=>'Average Starting Salary (Including Bonus)'
    ],
    [
        'attribute' => 'avg_ugrad_gpa',
        'label'=>'Average Undergraduate GPA'
    ],

];
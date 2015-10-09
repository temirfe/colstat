<?php
use yii\helpers\Html;
$attributes=[
    [
        'attribute' => 'name',
        'format' => 'raw',
        'value' => Html::a($model['name'], ['/undergraduate/view','id'=>$model['id']])
    ],
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
        'label' => 'Percent Admitted (Total)',
        'value' => ($model['pct_adm_ttl']*100)."%"
    ],
    [
        'attribute' => 'pct_adm_men',
        'label' => 'Percent Admitted (Men)',
        'value' => ($model['pct_adm_men']*100)."%"
    ],
    [
        'attribute' => 'pct_adm_wmen',
        'label' => 'Percent Admitted (Women)',
        'value' => ($model['pct_adm_wmen']*100)."%"
    ],
    [
        'label' => 'Undergraduate Enrollment',
        'attribute' =>'ugrad_enr'
    ],
    [
        'label' => 'Full-time Undergraduate Enrollment ',
        'value' => $model['ft_ugrad_enr'],
    ],
    [
        'label' => 'Part-time Undergraduate Enrollment',
        'attribute' =>'pt_ugrad_enr'
    ],
    [
        'attribute' => 'pct_ue_native',
        'label' => 'Percent of undergraduate enrollment that are American Indian or Alaska Native',
        'value' => ($model['pct_ue_native']*100)."%"
    ],
    [
        'attribute' => 'pct_ue_asian',
        'label' => 'Percent of undergraduate enrollment that are Asian/Native Hawaiian/Pacific Islander',
        'value' => ($model['pct_ue_asian']*100)."%"
    ],
    [
        'attribute' => 'pct_ue_black',
        'label' => 'Percent of undergraduate enrollment that are Black or African American',
        'value' => ($model['pct_ue_black']*100)."%"
    ],
    [
        'attribute' => 'pct_ue_latino',
        'label' => 'Percent of undergraduate enrollment that are Hispanic/Latino',
        'value' => ($model['pct_ue_latino']*100)."%"
    ],
    [
        'attribute' => 'pct_ue_white',
        'label' => 'Percent of undergraduate enrollment that are White',
        'value' => ($model['pct_ue_white']*100)."%"
    ],
    [
        'attribute' => 'pct_ue_two',
        'label' => 'Percent of undergraduate enrollment that are two or more races',
        'value' => ($model['pct_ue_two']*100)."%"
    ],
    [
        'attribute' => 'pct_ue_unk',
        'label' => 'Percent of undergraduate enrollment that are Race/ethnicity unknown',
        'value' => ($model['pct_ue_unk']*100)."%"
    ],
    [
        'attribute' => 'pct_fullfirst_any_finaid',
        'label' => 'Percent of full-time first-time undergraduates receiving any financial aid',
        'value' => ($model['pct_fullfirst_any_finaid']*100)."%"
    ],
    [
        'attribute' => 'avg_fullfirst_loan',
        'label' => 'Average amount of student loan aid received by full-time first-time undergraduates',
    ],
    [
        'attribute' => 'pct_fullfirst_loan',
        'label' => 'Percent of full-time first-time undergraduates receiving student loan aid',
        'value' => ($model['pct_fullfirst_loan']*100)."%"
    ],
    [
        'attribute' => 'avg_fullfirst_oloan',
        'label' => 'Average amount of other student loan aid received by full-time first-time undergraduates',
    ],
    [
        'attribute' => 'appl_ttl',
        'label' => 'Total Applications',
    ],
    [
        'attribute' => 'appl_men',
        'label' => 'Applicants Men',
    ],
    [
        'attribute' => 'appl_wmen',
        'label' => 'Applicants Women',
    ],
    [
        'attribute' => 'adm_ttl',
        'label' => 'Admissions Total',
    ],
    [
        'attribute' => 'adm_men',
        'label' => 'Admissions Men',
    ],
    [
        'attribute' => 'adm_wmen',
        'label' => 'Admissions Women',
    ],
    [
        'attribute' => 'sat_cr_25',
        'label' => 'SAT Critical Reading 25th percentile score',
    ],
    [
        'attribute' => 'sat_cr_75',
        'label' => 'SAT Critical Reading 75th percentile score',
    ],
    [
        'attribute' => 'sat_ma_25',
        'label' => 'SAT Math 25th percentile score',
    ],
    [
        'attribute' => 'sat_ma_75',
        'label' => 'SAT Math 75th percentile score',
    ],
    [
        'attribute' => 'sat_wr_25',
        'label' => 'SAT Writing 25th percentile score',
    ],
    [
        'attribute' => 'sat_wr_75',
        'label' => 'SAT Writing 75th percentile score',
    ],
    [
        'attribute' => 'act_co_25',
        'label' => 'ACT Composite 25th percentile score',
    ],
    [
        'attribute' => 'act_co_75',
        'label' => 'ACT Composite 75th percentile score',
    ],
    [
        'attribute' => 'act_en_25',
        'label' => 'ACT English 25th percentile score',
    ],
    [
        'attribute' => 'act_en_75',
        'label' => 'ACT English 75th percentile score',
    ],
    [
        'attribute' => 'act_ma_25',
        'label' => 'ACT Math 25th percentile score',
    ],
    [
        'attribute' => 'act_ma_75',
        'label' => 'ACT Math 75th percentile score',
    ],
    [
        'attribute' => 'act_wr_25',
        'label' => 'ACT Writing 25th percentile score',
    ],
    [
        'attribute' => 'act_wr_75',
        'label' => 'ACT Writing 75th percentile score',
    ],
    [
        'attribute' => 'tuition_in',
        'label' => 'In-state tuition and fees',
    ],
    [
        'attribute' => 'tuition_out',
        'label' => 'Out-of-state tuition and fees',
    ],
];
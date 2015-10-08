<?php
use yii\widgets\DetailView;
use yii\helpers\Html;
if($index==0) $template="<tr><th>{label}</th><td>{value}</td></tr>";
else $template="<tr><td>{value}</td></tr>";
?>
<?= DetailView::widget([
    'model' => $model,
    'template' => $template,
    'attributes' => [
        [
            'attribute' => 'name',
            'format' => 'raw',
            'value' => Html::a($model->name, ['/undergraduate/view','id'=>$model->id])
        ],
        'state',
        [
            'attribute' => 'grad_rate',
            'value' => ($model->grad_rate*100)."%"
        ],
        [
            'attribute' => 'grad_rate_men',
            'value' => ($model->grad_rate_men*100)."%"
        ],
        [
            'attribute' => 'grad_rate_women',
            'value' => ($model->grad_rate_women*100)."%"
        ],
        'apply_fee',
        [
            'label' => 'Percent Admitted (Total)',
            'value' => ($model->pct_adm_ttl*100)."%"
        ],
        [
            'attribute' => 'pct_adm_men',
            'value' => ($model->pct_adm_men*100)."%"
        ],
        [
            'attribute' => 'pct_adm_wmen',
            'value' => ($model->pct_adm_wmen*100)."%"
        ],
        'ugrad_enr',
        [
            'label' => 'Full-time Undergraduate Enrollment ',
            'value' => $model->ft_ugrad_enr,
        ],
        'pt_ugrad_enr',
        [
            'attribute' => 'pct_ue_native',
            'value' => ($model->pct_ue_native*100)."%"
        ],
        [
            'attribute' => 'pct_ue_asian',
            'value' => ($model->pct_ue_asian*100)."%"
        ],
        [
            'attribute' => 'pct_ue_black',
            'value' => ($model->pct_ue_black*100)."%"
        ],
        [
            'attribute' => 'pct_ue_latino',
            'value' => ($model->pct_ue_latino*100)."%"
        ],
        [
            'attribute' => 'pct_ue_white',
            'value' => ($model->pct_ue_white*100)."%"
        ],
        [
            'attribute' => 'pct_ue_two',
            'value' => ($model->pct_ue_two*100)."%"
        ],
        [
            'attribute' => 'pct_ue_unk',
            'value' => ($model->pct_ue_unk*100)."%"
        ],
        [
            'attribute' => 'pct_fullfirst_any_finaid',
            'value' => ($model->pct_fullfirst_any_finaid*100)."%"
        ],
        'avg_fullfirst_loan',
        [
            'attribute' => 'pct_fullfirst_loan',
            'value' => ($model->pct_fullfirst_loan*100)."%"
        ],
        'avg_fullfirst_oloan',
        'appl_ttl',
        'appl_men',
        'appl_wmen',
        'adm_ttl',
        'adm_men',
        'adm_wmen',
        'sat_cr_25',
        'sat_cr_75',
        'sat_ma_25',
        'sat_ma_75',
        'sat_wr_25',
        'sat_wr_75',
        'act_co_25',
        'act_co_75',
        'act_en_25',
        'act_en_75',
        'act_ma_25',
        'act_ma_75',
        'act_wr_25',
        'act_wr_75',
        'tuition_in',
        'tuition_out',
    ],
]) ?>
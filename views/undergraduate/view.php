<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Undergraduate */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Undergraduate Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="undergraduate-view">
    <?php if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin()){
        ?>
        <div class="pull-right">
            <div class="btn-group" role="group" aria-label="admin-actions">
                <?= Html::a('<span class="glyphicon glyphicon-pencil" aria-hidden="true" title="'.Yii::t('app', 'Update').'"></span>', ['update', 'id' => $model->id], ['class' => 'btn btn-primary btn-sm']) ?>
                <?= Html::a('<span class="glyphicon glyphicon-remove" aria-hidden="true" title="'.Yii::t('app', 'Delete').'"></span>', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger btn-sm',
                    'data' => [
                        'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
        </div>
    <?php
    }?>

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="about_school row">
        <div class="col-md-3">
            <?=$model->address;?><br />
            <?=$model->city.', '.$model->state;?> <?php if($model->zip) echo ' '.$model->zip;?><br />
        </div>
        <div class="col-md-3">
            <span class='gicon glyphicon glyphicon-phone-alt'></span><?=$model->phone;?><br />
            <span class='gicon glyphicon glyphicon-globe'></span>
            <?php if(strpos('http',$model->url)) $url=$model->url; else $url='https://'.$model->url; echo Html::a($model->url,$url);?><br />
        </div>
        <div class="col-md-3">
            <?php if($model->fax) echo '<span class="gicon">fax:</span>'.$model->fax.'<br />';?>
            <?php if($model->president) echo '<span class="gicon">president:</span>'.$model->president.'<br />';?>
        </div>
        <div><?php if($model->about) echo '<p>'.$model->about.'</p>';?></div>
    </div>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">User Applications</a></li>
        <li><a data-toggle="tab" href="#about">Additional Information</a></li>
        <li><a data-toggle="tab" href="#majors">Majors Offered</a></li>
    </ul>

    <div class="tab-content mt10">
        <div id="home" class="tab-pane fade in active">
            <?=$this->render('/layouts/_track',['dataProvider'=>$dataProvider,'model'=>$model]); ?>
        </div>

        <div id="about" class="tab-pane fade">
            <?= DetailView::widget([
                'model' => $model,
                'options'=>['class'=>'table table-striped table-bordered detail-view about-college'],
                'template'=>'<tr><th width="450">{label}</th><td>{value}</td></tr>',
                'attributes' => [
                    'url_fin_aid:url',
                    'url_admissions:url',
                    'url_apply:url',
                    [
                        'attribute' => 'grad_rate',
                        'value' => ($model->grad_rate*100)."%",
                    ],
                    [
                        'attribute' => 'grad_rate_men',
                        'value' => ($model->grad_rate_men*100)."%",
                    ],
                    [
                        'attribute' => 'grad_rate_women',
                        'value' => ($model->grad_rate_women*100)."%",
                    ],
                    'apply_fee',
                    [
                        'attribute' => 'pct_adm_ttl',
                        'value' => ($model->pct_adm_ttl*100)."%",
                    ],
                    [
                        'attribute' => 'pct_adm_men',
                        'value' => ($model->pct_adm_men*100)."%",
                    ],
                    [
                        'attribute' => 'pct_adm_wmen',
                        'value' => ($model->pct_adm_wmen*100)."%",
                    ],
                    'ugrad_enr',
                    'ft_ugrad_enr',
                    'pt_ugrad_enr',
                    [
                        'attribute' => 'pct_ue_native',
                        'value' => ($model->pct_ue_native*100)."%",
                    ],
                    [
                        'attribute' => 'pct_ue_asian',
                        'value' => ($model->pct_ue_asian*100)."%",
                    ],
                    [
                        'attribute' => 'pct_ue_black',
                        'value' => ($model->pct_ue_black*100)."%",
                    ],
                    [
                        'attribute' => 'pct_ue_latino',
                        'value' => ($model->pct_ue_latino*100)."%",
                    ],
                    [
                        'attribute' => 'pct_ue_white',
                        'value' => ($model->pct_ue_white*100)."%",
                    ],
                    [
                        'attribute' => 'pct_ue_two',
                        'value' => ($model->pct_ue_two*100)."%",
                    ],
                    [
                        'attribute' => 'pct_ue_unk',
                        'value' => ($model->pct_ue_unk*100)."%",
                    ],
                    [
                        'attribute' => 'pct_fullfirst_any_finaid',
                        'value' => ($model->pct_fullfirst_any_finaid*100)."%",
                    ],
                    'avg_fullfirst_loan',
                    [
                        'attribute' => 'pct_fullfirst_loan',
                        'value' => ($model->pct_fullfirst_loan*100)."%",
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
                    'med_sat_cr',
                    'med_sat_math',
                    'med_sat_wr',
                    'avg_sat',
                    'med_act_cum',
                    'med_act_eng',
                    'med_act_math',
                    'med_act_wr',
                    'pct_fed_loan',
                    'med_debt_grad',
                    'med_loan_monthly_payment',
                    'pct_loan_principal_paid',
                    'med_earn_grad_fed_aid',
                    'pct_std_over25k',
                ],
            ]) ?>
        </div>
        <div id="majors" class="tab-pane fade">
            <?php
            if($model->majors_offered){
                $majors=explode(';',$model->majors_offered);
                sort($majors);
                echo "<ul>";
                foreach($majors as $major){
                    echo "<li>".$major."</li>";
                }
                echo "</ul>";
            }
            ?>
        </div>
    </div>
</div>

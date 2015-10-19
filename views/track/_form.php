<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Track */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="track-form">

    <?php
    $user_id=Yii::$app->user->id;
    if($model->model_type) $model_type=$model->model_type; else $model_type=Yii::$app->request->get('type');
    $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

    <?= $form->field($model, 'model_id')->hiddenInput(['value'=>Yii::$app->request->get('mid')])->label(false); ?>

    <?= $form->field($model, 'model_type')->hiddenInput(['value'=>$model_type])->label(false);  ?>

    <?php
    if($model_type=='business' || $model_type=='engineering')
    {
        if($model_type=='business'){
            $s_items=[
                'MBA (Full Time)'=>'MBA (Full Time)',
                'Online MBA'=>'Online MBA',
                'MBA (Part Time)'=>'MBA (Part Time)',
                'Executive MBA'=>'Executive MBA',
                'Master - Accounting'=>'Master - Accounting',
                'Master - Finance'=>'Master - Finance',
                'Master - Information Systems'=>'Master - Information Systems',
                'Master - International Management'=>'Master - International Management',
                'Master - Entrepreneurship'=>'Master - Entrepreneurship',
                'Master - Marketing'=>'Master - Marketing',
                'Master - Supply Chain / Logistics'=>'Master - Supply Chain / Logistics',
                'Master - Production / Operations'=>'Master - Production / Operations',
                'Other'=>'Other',
            ];
        }
        else{
            $s_items=[
                'Aerospace / Aeronautical / Astronautical' => 'Aerospace / Aeronautical / Astronautical',
                'Biological / Agricultural' => 'Biological / Agricultural',
                'Biomedical / Bioengineering' => 'Biomedical / Bioengineering' ,
                'Chemical' => 'Chemical',
                'Civil' => 'Civil',
                'Computer' => 'Computer',
                'Electrical / Electronic / Communications' => 'Electrical / Electronic / Communications' ,
                'Environmental / Environmental Health' => 'Environmental / Environmental Health',
                'Industrial / Manufacturing / Systems' => 'Industrial / Manufacturing / Systems',
                'Materials' => 'Materials',
                'Mechanical' => 'Mechanical',
                'Nuclear' => 'Nuclear',
                'Other'=>'Other',
            ];
        }

        echo $form->field($model, 'specialty')->dropDownList($s_items,['prompt'=>'Select..']);
        if($model->specialty=='Other') $display=''; else $display='display:none;';
        echo "<div class='js_sp_other' style='".$display."'>".$form->field($model, 'specialty_other')->textInput(['maxlength' => true])."</div>";
    }
    ?>

    <?php
    if($model_type=='nursing')
        {
            echo $form->field($model, 'degree_desired')->textInput(['maxlength' => true]);
        }
     ?>

    <?= $form->field($model, 'test_score')->textInput(['maxlength' => true]) ?>

    <?php if($model->isNewRecord){
        if($model_type=='undergraduate')
        {
            $userprofile=Yii::$app->db->createCommand("SELECT * FROM profile WHERE user_id='{$user_id}'")->queryOne();
            if($userprofile && $userprofile['gpa_unweighted']) $model->gpa=$userprofile['gpa_unweighted'];
        }

        else
        {
            $usergprofile=Yii::$app->db->createCommand("SELECT * FROM gprofile WHERE user_id='{$user_id}'")->queryOne();
            if($usergprofile && $usergprofile['gpa']) $model->gpa=$usergprofile['gpa'];
        }
    }
    echo $form->field($model, 'gpa')->textInput(['maxlength' => true]); ?>

    <?= $form->field($model, 'scholarship_award', [
    'template' => '{label}<div class="col-sm-6 inner-addon left-addon"><i class="fa fa-usd"></i>{input}{error}{hint}</div>'
])->textInput(['maxlength' => true]) ?>

    <?php
    $status_items=['Sent'=>'Sent','File Complete'=>'File Completed','Undergoing Review'=>'Undergoing Review',
        'Accepted'=>'Accepted','Rejected'=>'Rejected','Waitlisted'=>'Waitlisted'];
    echo $form->field($model, 'status')->dropDownList($status_items,['prompt'=>'Select..']); ?>

    <?php
    echo $form->field($model, 'date_sent')->widget(DatePicker::classname(), [
        'removeButton' => false,
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true,
        ]
    ]);
    ?>
    <?php
    echo $form->field($model, 'date_status_complete')->widget(DatePicker::classname(), [
        'removeButton' => false,
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true,
        ]
    ]);
    ?>

    <div class="offset-button col-sm-offset-3">
        <?php $btn=$model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'; echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' =>'col-sm-3 '.$btn]); ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script type="text/javascript">
    window.onload=function(){
        $('#track-specialty').change(function(){
            if($(this).val()==='Other'){$('.js_sp_other').slideDown();}
            else{$('.js_sp_other').val('').slideUp();}
        });
    };
</script>
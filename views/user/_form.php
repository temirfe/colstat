<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?php
    if(Yii::$app->request->get('type')=='complete' && !$model->email || User::isAdmin())
        echo $form->field($model, 'email')->textInput(['maxlength' => true]);
    ?>

    <?php
    if(User::isAdmin()){
        echo $form->field($model, 'status',['options'=>['class'=>'form-group field140']])->dropDownList([1=>'Active',0=>'Not active']);
        echo $form->field($model, 'role',['options'=>['class'=>'form-group field140']])->dropDownList([10=>'User',20=>'Admin']);
    }
    ?>

    <?php if($model->city=='N/A') $model->city=''; echo $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?php if($model->state=='N/A') $model->state=''; echo $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hear')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

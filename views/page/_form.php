<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(Widget::className(), [
        'settings' => [
            'minHeight' => 200,
            'imageUpload' => Url::to(['/page/image-upload']),
            'imageManagerJson' => Url::to(['/page/images-get']),
            'fileUpload' => Url::to(['/page/file-upload']),
            'fileManagerJson' => Url::to(['/page/files-get']),
            'plugins' => [
                'imagemanager',
                'filemanager',
                'fontcolor',
                'table',
                'fontsize',
                //'clips',
                'fullscreen',
                'video'
            ],
        ]
    ]); ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

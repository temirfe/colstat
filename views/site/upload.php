<style type="text/css">
    .row{margin-bottom: 15px;}
    .noborder{border:none; box-shadow: none;padding:0;}
</style>
<h2>Upload Excel File</h2>
<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use kartik\builder\Form;
echo Html::beginForm('', '', ['class'=>'form-vertical','enctype' => 'multipart/form-data']);
$rows=Yii::$app->db->createCommand("SELECT `title`,`table_name` FROM schooltype")->queryAll();
echo Form::widget([
    // formName is mandatory for non active forms
    // you can get all attributes in your controller
    // using $_POST['upform']
    'formName'=>'upform',

    // default grid columns
    'columns'=>1,

    'attributes'=>[       // 2 column layout
        'field1'=>['type'=>Form::INPUT_DROPDOWN_LIST, 'options'=>['prompt'=>'Select Category'],'items'=>ArrayHelper::map($rows, 'table_name', 'title')],
        'xfile'=>['type'=>Form::INPUT_FILE, 'options'=>['class'=>'noborder']],
    ]
]);
echo Html::button('Submit', ['type'=>'submit', 'class'=>'btn btn-primary']);
echo Html::endForm();
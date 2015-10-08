<?php
use yii\helpers\Html;
use yii\grid\GridView;

if (isset($_SESSION['compare']) && isset($_SESSION['compare'][$controller]))
{
    $compare_class='table-hover js_table_compare';
    $compare_init_hidden='hidden';
    $compare_select_hidden='';
}
else{$compare_class=''; $compare_select_hidden='hidden';}
?>

<div class="js_compare_init compare_init <?=$compare_init_hidden;?>">Compare Schools</div>
<div class="js_select_below compare_select_below <?=$compare_select_hidden;?>"><span class="glyphicon glyphicon-arrow-down"></span> Select schools below to compare</div>

<?=GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'tableOptions'=>['class' => 'table table-striped table-bordered '.$compare_class],
    'rowOptions'=>function ($model, $key, $index, $grid){
        $class='';
        if(isset($_SESSION['compare'][Yii::$app->controller->id]) && in_array($key,$_SESSION['compare'][Yii::$app->controller->id]))
            $class='selected';
        return array('class'=>$class);
    },
    'columns' => $columns
]);

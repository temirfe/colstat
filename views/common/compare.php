<?php
use yii\widgets\ListView;
$ctg='';$m='';
if(!empty($_GET['m'])){
    $m=$_GET['m'];
    switch($_GET['m']){
        case "business":$ctg='Business Schools'; break;
        default: $ctg='Undergraduate Universities';
    }
}
$this->params['breadcrumbs'][] = ['label' => $ctg, 'url' => ['/'.$m.'/index']];
$this->params['breadcrumbs'][] = 'Compare';
?>
<h1>Compare <?=$ctg;?></h1>
<?php

echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemOptions' => ['class' => 'item compare_item pull-left'],
    'options' => [
        'tag' => 'div',
        'class' => 'list-wrapper',
        'id' => 'list-wrapper',
    ],
    'layout' => "{items}",
    'itemView' => function ($model, $key, $index, $widget) {
        $m=$_GET['m'];
        return $this->render('_compare_item',['model' => $model,'index'=>$index, 'm'=>$m]);
    },
]);
?>
<?php
use yii\widgets\DetailView;
if($index==0) $template="<tr><th>{label}</th><td>{value}</td></tr>";
else $template="<tr><td>{value}</td></tr>";
include('attributes/'.$m.'.php');
?>
<?= DetailView::widget([
    'model' => $model,
    'template' => $template,
    'attributes' => $attributes,
]) ?>
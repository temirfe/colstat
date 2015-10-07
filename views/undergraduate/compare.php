<?php
use yii\widgets\ListView;
$this->params['breadcrumbs'][] = ['label' => 'Undergraduate Schools', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Compare';
?>
<h1>Compare Undergraduate Universities</h1>
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
        return $this->render('_compare_item',['model' => $model,'index'=>$index]);

        // or just do some echo
        // return $model->title . ' posted by ' . $model->author;
    },
]);
?>
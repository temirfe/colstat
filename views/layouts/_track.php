<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
$controller=Yii::$app->controller->id;
if($controller=='business' || $controller=='engineering') $visible=true; else $visible=false;
if($controller=='nursing') $dvisible=true; else $dvisible=false;
if(Yii::$app->user->identity->isAdmin()) $avisible=true; else $avisible=false;
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'summary'=>'',
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        [
            'attribute' => 'user_id',
            'format' => 'raw',
            'value' => function($model) {
                return Html::a($model->user->username, ['/user/view', 'id' => $model->user_id]);
            },
            'headerOptions' => ['width' => '200'],
        ],
        [
            'attribute' => 'specialty',
            'visible'=>$visible
        ],
        [
            'attribute' => 'degree_desired',
            'visible'=>$dvisible
        ],
        'test_score',
        'gpa',
        [
            'attribute' => 'scholarship_award',
            'format' => 'raw',
            'value' => function($model) {
                if($model->scholarship_award) $date='$'.number_format($model->scholarship_award,2);
                else $date='N/A';
                return $date;
            },
        ],
        'status',
        [
            'attribute' => 'date_sent',
            'format' => 'raw',
            'value' => function($model) {
                return date('d M Y',strtotime($model->date_sent));
            },
        ],

        [
            'attribute' => 'date_status_complete',
            'format' => 'raw',
            'value' => function($model) {
                if($model->date_status_complete) $date=date('d M Y',strtotime($model->date_status_complete));
                else $date='N/A';
                return $date;
            },
        ],

        [
            'attribute' => 'date_update',
            'format' => 'raw',
            'value' => function($model) {
                if($model->date_update) $date=date('d M Y',strtotime($model->date_update));
                else $date='N/A';
                return $date;
            },
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'headerOptions' => ['width' => '67'],
            'visible'=> $avisible,
            'urlCreator' => function ($action, $model, $key, $index) {
                $table=$model->model_type; if($model->model_type=='undergraduate') $table='university';
                $name=Yii::$app->db->createCommand("SELECT name FROM {$table} WHERE id='{$model->model_id}'")->queryScalar();
                return Url::toRoute(['/track/'.$action, 'id' => $model->id,'name'=>$name]);
            }
        ],
    ],
]); ?>
<?php
if(Yii::$app->user->isGuest){echo Html::a('Login', '/site/login')." to add your application";}
else {echo Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add an application',
    ['/track/create', 'mid' => $model->id,'type'=>$controller,'name'=>$model->name], ['class' => 'btn btn-success']);}
?>
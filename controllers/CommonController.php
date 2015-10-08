<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\web\NotFoundHttpException;

class CommonController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionCompare()
    {
        $session = Yii::$app->session;
        if (!$session->isActive) $session->open();
        $ids=[];
        if(isset($_GET['m'])) {
            $model=$_GET['m'];
            if($model=='undergraduate') $table='university'; else $table=$model;
            foreach($_SESSION['compare'][$model] as $row)
            {
                $ids[]=$row;
            }
            $query = new Query;
            $dataProvider = new ActiveDataProvider([
                'query' => $query->from($table)->where(['id' => $ids])
            ]);

            $this->view->title = 'Compare Schools | '.Yii::$app->name;
            return $this->render('compare', ['dataProvider' => $dataProvider]);
        }
        else
            throw new NotFoundHttpException('The requested page does not exist.');
    }
}

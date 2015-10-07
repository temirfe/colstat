<?php

namespace app\controllers;

use Yii;
use app\models\Undergraduate;
use app\models\UndergraduateSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;
use yii\filters\VerbFilter;
use app\models\TrackSearch;
use app\models\Track;
use yii\filters\AccessControl;
use app\models\User;

/**
 * UndergraduateController implements the CRUD actions for Undergraduate model.
 */
class UndergraduateController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create','admin','update','delete'],
                'rules' => [
                    [
                        'actions' => ['create','admin','update','delete'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return User::isAdmin();
                        }
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Undergraduate models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UndergraduateSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Undergraduate model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $searchModel = new TrackSearch();
        $dataProvider = new ActiveDataProvider([
            'query' => Track::find()->where(['model_id'=>$id,'model_type'=>'undergraduate']),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new Undergraduate model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Undergraduate();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Undergraduate model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Undergraduate model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Undergraduate model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Undergraduate the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Undergraduate::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionCompare()
    {
        $session = Yii::$app->session;
        if (!$session->isActive) $session->open();
        $ids=[];
        foreach($_SESSION['compare']['undergraduate'] as $row)
        {
            $ids[]=$row;
        }

        $dataProvider = new ActiveDataProvider([
            'query' => Undergraduate::find()->where(['id' => $ids])
        ]);

        $this->view->title = 'Compare Schools | '.Yii::$app->name;
        return $this->render('compare', ['dataProvider' => $dataProvider]);

    }
}

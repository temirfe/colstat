<?php

namespace app\controllers;

use Yii;
use yii\helpers\Html;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\ContactForm;
use app\models\EmailConfirmForm;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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

    public function actionIndex()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {

        }

        return $this->render('index', [
            'model'=>$model,
        ]);
    }

    public function actionUpload()
    {

        if(isset($_POST['upform'])){
            if($cat=$_POST['upform']['field1'])
            {

                if($file=UploadedFile::getInstanceByName('upform[xfile]'))
                {
                    if($file->extension !='xls' && $file->extension !='xlsx')
                        return "Error: only Excel files should be uploaded!".$file->extension;
                    $fileName=time().'.'.$file->extension;
                    $saveFile='uploads/'.$fileName;
                    $file->saveAs($saveFile);

                    $this->Excelparse($saveFile,$cat);
                    Yii::$app->getSession()->setFlash('success', 'File has been parsed.');
                    return $this->goHome();
                }
                else return "No file selected!";
            }
            else return "Please select category";
        }

        return $this->render('upload');
    }

    public function actionExcelOne($file){
        //echo 'asdf'; Yii::$app->end();

        //$objPHPExcel = new \PHPExcel();

        //$file=mb_convert_encoding($file, 'Windows-1251', 'UTF-8');
        $inputFileType = \PHPExcel_IOFactory::identify($file);
        $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel=$objReader->load($file);

        $objWorksheet = $objPHPExcel->getActiveSheet();

        $highestRow = $objWorksheet->getHighestRow(); // e.g. 10
        $highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
        //$columnIndex=\PHPExcel_Cell::stringFromColumnIndex($highestColumn);
        $highestColumnIndex = \PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5

        $headRow=false;
        $parsedData=array();

        $name=['Institution Name']; $parsedData['name']=array(); $nameCol=false; //CI = ColumnIndex
        $address=['Address']; $parsedData['address']=array(); $addressCol=false;
        $city=['City']; $parsedData['city']=array(); $cityCol=false;
        //parse each row
        for ($row = 1; $row <= $highestRow; ++$row) {
            if(!$headRow) //set index variables
            {
                //parse each column
                for ($col = 0; $col <= $highestColumnIndex; ++$col) {
                    if ($curval = $objWorksheet->getCellByColumnAndRow($col, $row)->getValue()) //if current cell has text
                    {
                        if(!$nameCol && in_array($curval,$name)) { $nameCol=$col; $headRow=$row;}
                        elseif(!$addressCol && in_array($curval,$address)) { $addressCol=$col;}
                        elseif(!$cityCol && in_array($curval,$city)) { $cityCol=$col;}
                    }
                }
            }
            else //header has been set, now insert data
            {
                //parse each column
                for ($col = 0; $col <= $highestColumnIndex; ++$col) {
                    if ($curval = $objWorksheet->getCellByColumnAndRow($col, $row)->getValue()) //if current cell has text
                    {
                        if($col==$nameCol) {$parsedData['name'][$row]=$curval;}
                        elseif($col==$addressCol) {$parsedData['address'][$row]=$curval;}
                        elseif($col==$cityCol) {$parsedData['city'][$row]=$curval;}
                    }
                }
            }
        }


        echo 'nameCol: '.$nameCol."<br />";
        echo 'addressCol: '.$addressCol."<br />";
        echo 'cityCol: '.$cityCol."<br /><br />";


        $db=Yii::$app->db;
        for ($i = 1; $i<= $highestRow; ++$i) {
            if($parsedData['name'][$i]){
                $db->createCommand()->insert('university', [
                    'name' => $parsedData['name'][$i],
                    'address' => $parsedData['address'][$i],
                    'city' => $parsedData['city'][$i],
                ])->execute();
            }
        }
    }

    public function Excelparse($file, $table){
        //echo 'asdf'; Yii::$app->end();
        //$objPHPExcel = new \PHPExcel();

        //$file=mb_convert_encoding($file, 'Windows-1251', 'UTF-8');
        $inputFileType = \PHPExcel_IOFactory::identify($file);
        $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel=$objReader->load($file);

        $objWorksheet = $objPHPExcel->getActiveSheet();

        $highestRow = $objWorksheet->getHighestRow(); // e.g. 10
        $highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
        //$columnIndex=\PHPExcel_Cell::stringFromColumnIndex($highestColumn);
        $highestColumnIndex = \PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5

        $headRow=false;
        $parsedData=array();

        $keyray=array();
        $colindex=array();
        $headerNames=array();
        $colnameTableRows=Yii::$app->db->createCommand("SELECT * FROM colname")->queryAll();

        foreach($colnameTableRows as $ctrow){
            foreach($ctrow as $key=>$val){
                if($val) $keyray[$key][]=$val;
                $parsedData[$key]=array();
                if($key!='id' && $key!='about')$headerNames[]=$key; //$headerNames=['name','city','address','..'];
            }
        }
        //parse each row
        for ($row = 1; $row <= $highestRow; ++$row) {
            if(!$headRow) //set index variables
            {
                //parse each column
                for ($col = 0; $col <= $highestColumnIndex; ++$col) {
                    if ($curval = trim($objWorksheet->getCellByColumnAndRow($col, $row)->getValue())) //if current cell has text
                    {
                        foreach($keyray as $colname=>$colvals){
                            if(in_array($curval,$colvals)) {$colindex[$col]=$colname; break;}
                        }
                    }
                }
                $headRow=true;
            }
            else //header has been set, now insert data
            {
                //parse each column
                for ($col = 0; $col <= $highestColumnIndex; ++$col) {
                    if ($curval = $objWorksheet->getCellByColumnAndRow($col, $row)->getValue()) //if current cell has text
                    {
                        if($curval[0] == "=") $curval = $objWorksheet->getCellByColumnAndRow($col, $row)->getFormattedValue(); //if it's a formula in a cell
                        $parsedData[$colindex[$col]][$row]=$curval; //$parsedData['name']['1']='Adelaide'; or $parsedData = ['name'=>['Adelaide']]
                    }
                }
            }
        }

        //$batchRow=array(); //uncomment if u remove actionSyncuni
        $insRow=array();//from actionSyncUni
        $db=Yii::$app->db;
        for ($i = 0; $i<= $highestRow; $i++) {
            if($parsedData['name'][$i]){
                foreach($headerNames as $hname){
                    //$batchRow[$i][]=$parsedData[$hname][$i]; //uncomment if u remove actionSyncuni
                    $insRow[$hname]=$parsedData[$hname][$i]; //from actionSyncUni
                }

                /* --BEGIN can be a stand alone function in actionSyncuni --*/
                $params = [':name' => $insRow['name'], ':state' => $insRow['state']];
                $targetrow=$db->createCommand("SELECT id FROM {$table} WHERE name=:name AND state=:state", $params)->queryOne();
                if($targetrow) //update fields except name
                {
                    unset($insRow['name']);
                    $upd=array_filter($insRow);//filters out arrays that has empty value
                    $db->createCommand()->update($table, $upd, "id='{$targetrow['id']}'")->execute();
                }
                else //insert
                {
                    $ins=array_filter($insRow);
                    $db->createCommand()->insert($table,$ins)->execute();
                }
                /* --END can be a stand alone function in actionSyncuni --*/
            }
        }
        //$db->createCommand()->batchInsert('university_import', $headerNames, $batchRow)->execute(); //uncomment if u remove actionSyncuni
    }


    public function actionSyncuni(){
        $db=Yii::$app->db;
        $sourcerows=$db->createCommand("SELECT * FROM university_import")->queryAll();
        foreach($sourcerows as $srow){
            $name=trim($srow['name']);
            $params = [':name' => $name, ':state' => $srow['state']];
            $targetrow=$db->createCommand("SELECT id FROM university WHERE name=:name AND state=:state", $params)->bindValue(':name', $name)->queryOne();
            if($targetrow) //update fields except name
            {
                unset($srow['id'],$srow['name']);
                $upd=array_filter($srow); //filters out arrays that has empty value
                $db->createCommand()->update('university', $upd, "id='{$targetrow['id']}'")->execute();
            }
            else //insert
            {
                unset($srow['id']);
                $ins=array_filter($srow);
                $db->createCommand()->insert('university',$ins)->execute();
            }
        }
    }


    public function actionRun(){
        $db=Yii::$app->db;
        $colnames=$db->createCommand("SELECT * FROM university_import")->queryAll();
        foreach($colnames as $row){
            $params = [':name' => $row['name'], ':state' => $row['state'], ':id' => $row['id']];
            $check=$db->createCommand("SELECT id FROM university_import WHERE name=:name AND state=:state AND id<>:id", $params)->queryOne();
            if($check) echo $row['id']." = ".$check['id'].'<br />';
        }

        /*foreach($keyray as $colname=>$colvals){
            if(in_array('Institution Name',$colvals)) {echo "<b>".$colname."</b><br />"; break;}
            else echo $colname."<br />";
        }*/

    }

    public function actionExcel(){
        $file='uploads/Undergrad.xlsx';
        //$objPHPExcel = new \PHPExcel();

        //$file=mb_convert_encoding($file, 'Windows-1251', 'UTF-8');
        $inputFileType = \PHPExcel_IOFactory::identify($file);
        $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
        $objPHPExcel=$objReader->load($file);

        $objWorksheet = $objPHPExcel->getActiveSheet();

        $highestRow = $objWorksheet->getHighestRow(); // e.g. 10
        $highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
        $columnIndex=\PHPExcel_Cell::stringFromColumnIndex($highestColumn);
        $highestColumnIndex = \PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5



        for ($row = 1; $row <= $highestRow; ++$row) {
            $title=''; $price='';
            for ($col = 0; $col <= $highestColumnIndex; ++$col) {
                $curval=$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
                if($col==2) echo "-->".$curval."<--";
                if (isset($tcolumn) && isset($prcolumn)) {
                    if($col==$tcolumn && $curval) $title=$curval;
                    elseif($col==$prcolumn && $curval) $price=$curval;
                }
            }
            echo "<br />";

            if($title && $price)
            {
                echo 'title: '.$title." price:".$price."</br>";
            }
        }
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                Yii::$app->getSession()->setFlash('success', 'Your account has been created, activation code has been sent to your email.');
                return $this->goHome();
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionEmailConfirm($token)
    {
        try {
            $model = new EmailConfirmForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($test=$model->confirmEmail()) {
            $signin=Html::a('sign in', Yii::$app->urlManager->createUrl(['site/login']));
            Yii::$app->getSession()->setFlash('success', 'Your Email has been successfully confirmed! You can now '.$signin);
        } else {
            Yii::$app->getSession()->setFlash('error', "Couldn't confirm your Email.");
        }

        return $this->goHome();
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}

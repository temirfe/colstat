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
use app\models\User;

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
                    @unlink($saveFile);
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

        $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
        //$objWorksheet = $objPHPExcel->getActiveSheet();

        $highestRow = $objWorksheet->getHighestRow(); // e.g. 10
        $highestColumn = $objWorksheet->getHighestColumn(); // e.g 'F'
        //$columnIndex=\PHPExcel_Cell::stringFromColumnIndex($highestColumn);
        $highestColumnIndex = \PHPExcel_Cell::columnIndexFromString($highestColumn); // e.g. 5

        $headRow=false;
        $parsedData=array();

        $keyray=array();
        $colindex=array();
        $headerNames=array();
        if($table=='dental') $colname='dental_colname';
        elseif($table=='pharmacy') $colname='pharmacy_colname';
        elseif($table=='optometry') $colname='optometry_colname';
        else $colname='colname';
        $colnameTableRows=Yii::$app->db->createCommand("SELECT * FROM {$colname}")->queryAll();

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
                    $colindex[$col]='';
                    if ($curval = trim($objWorksheet->getCellByColumnAndRow($col, $row)->getValue())) //if current cell has text
                    {
                        foreach($keyray as $colname=>$colvals){
                            if(in_array($curval,$colvals)) {
                                $colindex[$col]=$colname;
                                if($colname=='name') $headRow=true;
                                break;
                            }
                        }
                    }
                }
            }
            else //header has been set, now insert data
            {
                //parse each column
                for ($col = 0; $col <= $highestColumnIndex; ++$col) {
                    if ($curval = $objWorksheet->getCellByColumnAndRow($col, $row)->getFormattedValue()) //if current cell has text
                    {
                        $parsedData[$colindex[$col]][$row]=$curval; //$parsedData['name']['1']='Adelaide'; or $parsedData = ['name'=>['Adelaide']]
                    }
                }
            }
        }
        //$batchRow=array(); //uncomment if u remove actionSyncuni
        $insRow=array();//from actionSyncUni
        $db=Yii::$app->db;
        for ($i = 0; $i<= $highestRow; $i++) {
            if(isset($parsedData['name'][$i])&&$parsedData['name'][$i]){
                foreach($headerNames as $hname){
                    //$batchRow[$i][]=$parsedData[$hname][$i]; //uncomment if u remove actionSyncuni
                    if(isset($parsedData[$hname][$i])) $insRow[$hname]=$parsedData[$hname][$i]; //from actionSyncUni
                }

                /* --BEGIN can be a stand alone function in actionSyncuni --*/
                if(isset($insRow['state']))
                {
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

    public $fb_client_id='1021642147856249';
    public $fb_client_secret='6ceac7e0efc27d6f28b7e3364ab8c55a';
    public $fb_redirect_uri='http://yii.collegestatistics.org/site/loginfb';

    public $google_client_id='57130310-5sitaflvkdeq61f0gc4b4h1qqcum884k.apps.googleusercontent.com';
    public $google_client_secret='q2BJg8g8E_PFjbcQCBX6lAh2';
    public $google_redirect_uri='http://yii.collegestatistics.org/site/logingoogle';

    public function actionOauth()
    {
        //echo 'req '.$_SERVER['REQUEST_URI'];
        //echo '<br />qs '.$_SERVER['QUERY_STRING'];
       // if(isset($_GET['from']) && isset($_GET['to']))
        //{
            //$action='login';
            //$sender=$_GET['from'];
            //Yii::$app->session['return_url']=$sender;
            if($_GET['to']=='fb')
            {
                header('Location: https://www.facebook.com/dialog/oauth?client_id='
                .$this->fb_client_id.'&redirect_uri='.$this->fb_redirect_uri.'&scope=email');
            }
            //if($_GET['to']=='vk') {header('Location: http://oauth.vk.com/authorize?client_id=4195734&response_type=code&redirect_uri=http://desko.kg/auth/'.$action.'vk');}
           // if($_GET['to']=='ok') {header('Location: http://www.odnoklassniki.ru/oauth/authorize?client_id=223808256&response_type=code&redirect_uri=http://desko.kg/auth/'.$action.'ok');}
            //if($_GET['to']=='mailru') {header('Location: https://connect.mail.ru/oauth/authorize?client_id=717376&response_type=code&redirect_uri=http%3A%2F%2Fdesko.kg%2Fauth%2F'.$action.'mailru');}
            if($_GET['to']=='google')
            {
                header('Location: https://accounts.google.com/o/oauth2/auth?client_id='
                .$this->google_client_id.'&response_type=code&scope=openid%20email&redirect_uri='.$this->google_redirect_uri.'&state=test');
            }
       // }
        //else echo 'nope';
    }

    public function actionLogingoogle(){
        $app=Yii::$app;
        if(isset($_GET['error']))
        {
            if(isset($app->session['return_url']) && $rurl=$app->session['return_url'])
            {
                $this->redirect($rurl);
            }
            else
                $this->redirect('/site/login');
        }
        elseif(isset($_GET['code']))
        {
            $key=$_GET['state'];
            $code=$_GET['code'];
            $url="https://accounts.google.com/o/oauth2/token";
            if( $curl = curl_init() ) {
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
                curl_setopt($curl, CURLOPT_POST,true);
                curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query(array('code'=>$code,'redirect_uri'=>$this->google_redirect_uri, 'grant_type'=>'authorization_code', 'client_id'=>$this->google_client_id, 'client_secret'=>$this->google_client_secret)));
                $out = curl_exec($curl);
                $decode=json_decode($out);
                $access_token=$decode->access_token;
                $id_token_hash=$decode->id_token;
                curl_close($curl);
            }

            if(isset($access_token))
            {
                $url="https://www.googleapis.com/plus/v1/people/me/openIdConnect?scope=openid%20profile&access_token={$access_token}";
                if( $curl = curl_init() ) {
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
                    $out = curl_exec($curl);
                    $outObj=json_decode($out);
                    curl_close($curl);
                }
                if(isset($outObj))
                {
                    $dao=$app->db;
                    $google_user_id=$outObj->sub;
                    $user_id=$dao->createCommand("SELECT id FROM user WHERE google_id='{$google_user_id}'")->queryScalar();
                    if($user_id)
                    {
                        $identity=User::findOne($user_id); //parameters are required
                        $duration=3600*24*30; // 30 days
                        $app->user->login($identity, $duration);
                        $sql="UPDATE user SET lastvisit=UNIX_TIMESTAMP() WHERE id='{$user_id}'";
                        $dao->createCommand($sql)->execute();
                        $this->goHome();

                    }
                    else
                    {
                        $user_id2=$dao->createCommand("SELECT id FROM user WHERE email='{$outObj->email}'")->queryScalar();
                        if($user_id2)
                        {
                            $identity=User::findOne($user_id2); //parameters are required
                            $duration=3600*24*30; // 30 days
                            $app->user->login($identity, $duration);
                            $sql="UPDATE user SET lastvisit=UNIX_TIMESTAMP(), google_id='{$outObj->sub}' WHERE id='{$user_id2}'";
                            $dao->createCommand($sql)->execute();
                            Yii::$app->getSession()->setFlash('success', 'Your Google Plus account has been linked to your local account.');
                            $this->goHome();

                        }
                        else{
                            $dao->createCommand()->insert('user', [
                                'name' => $outObj->name,
                                'username' =>$outObj->email,
                                'password_hash' => 'asdfasdfsdfasdf',
                                'email' => $outObj->email,
                                'fb_id' => $outObj->sub,
                                'status' => 1,
                                'city' => 'N/A',
                                'state' => 'N/A',
                                'created_at' => time(),
                            ])->execute();
                            $identity=User::findOne(['username'=>$outObj->email]);
                            $duration=3600*24*30; // 30 days
                            $app->user->login($identity, $duration);
                            Yii::$app->getSession()->setFlash('success', 'You have been registered via Google Plus. Please complete your profile.');
                            $this->goHome();
                        }
                    }
                }
            }
        }
    }

    public function actionLoginfb()
    {
        $app=Yii::$app;
        if(isset($_GET['error_reason']) && $_GET['error_reason']=='user_denied')
        {
            if(isset($app->session['return_url']) && $rurl=$app->session['return_url'])
            {
                $this->redirect($rurl);
            }
            else
                $this->redirect('/site/login');
        }
        elseif(isset($app->session['fb_token']) && $app->session['fb_token'])
        {
            $fb_token=$app->session['fb_token'];
            $this->fbauth($fb_token);
        }
        elseif(isset($_GET['code']))
        {
            $code=$_GET['code'];
            $url="https://graph.facebook.com/v2.3/oauth/access_token?client_id={$this->fb_client_id}&redirect_uri={$this->fb_redirect_uri}&client_secret={$this->fb_client_secret}&code={$code}";
            if($curl = curl_init()) {
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_HEADER, 0);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
                $out = curl_exec($curl);
                $outObj=json_decode($out);
                $app->session['fb_token']=$outObj->access_token;;
                curl_close($curl);
                $this->fbauth($outObj->access_token);
            }

        }
    }

    protected function fbauth($fb_token)
    {
        $app=Yii::$app;
        $dao=$app->db;
        $url="https://graph.facebook.com/debug_token?input_token={$fb_token}&access_token={$this->fb_client_id}|{$this->fb_client_secret}";
        if( $curl = curl_init() ) {
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
            $out = curl_exec($curl);
            //$outarray=json_decode(preg_replace('/("\w+"):(\d+(\.\d+)?)/', '\\1:"\\2"', $out), true); //converting integer to string so that json_decode can convert
            $outObj=json_decode($out); //converting integer to string so that json_decode can convert
            curl_close($curl);
        }

        if(isset($outObj))
        {
            if($outObj->data->app_id==$this->fb_client_id && $outObj->data->is_valid) //token app id is equal to app id, then it is reliable
            {
                $fb_user_id=$outObj->data->user_id;
                $user_id=$dao->createCommand("SELECT id FROM user WHERE fb_id='{$fb_user_id}'")->queryScalar();
                if($user_id)
                {
                    $identity=User::findOne($user_id); //parameters are required
                    $duration=3600*24*30; // 30 days
                    $app->user->login($identity, $duration);
                    $sql="UPDATE user SET lastvisit=UNIX_TIMESTAMP() WHERE id='{$user_id}'";
                    $dao->createCommand($sql)->execute();
                    return $this->goHome();

                }
                else
                {
                    //graph request
                    $url="https://graph.facebook.com/{$fb_user_id}?fields=first_name,last_name,email&access_token={$fb_token}";
                    if( $curl = curl_init() ) {
                        curl_setopt($curl, CURLOPT_URL, $url);
                        curl_setopt($curl, CURLOPT_HEADER, 0);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
                        $out = curl_exec($curl);
                        $graph=json_decode($out);
                        curl_close($curl);
                    }

                    if(isset($graph)){
                        $user_id2=$dao->createCommand("SELECT id FROM user WHERE email='{$graph->email}'")->queryScalar();
                        if($user_id2)
                        {
                            $identity=User::findOne($user_id2); //parameters are required
                            $duration=3600*24*30; // 30 days
                            $app->user->login($identity, $duration);
                            $sql="UPDATE user SET lastvisit=UNIX_TIMESTAMP(), fb_id='{$graph->id}' WHERE id='{$user_id2}'";
                            $dao->createCommand($sql)->execute();
                            Yii::$app->getSession()->setFlash('success', 'Your facebook account has been linked to your local account.');
                            return $this->goHome();

                        }
                        else{
                            $dao->createCommand()->insert('user', [
                                'name' => $graph->first_name." ".$graph->last_name,
                                'username' =>$graph->email,
                                'password_hash' => 'asdfasdfsdfasdf',
                                'email' => $graph->email,
                                'fb_id' => $graph->id,
                                'status' => 1,
                                'city' => 'N/A',
                                'state' => 'N/A',
                                'created_at' => time(),
                            ])->execute();
                            $identity=User::findOne(['username'=>$graph->email]);
                            $duration=3600*24*30; // 30 days
                            $app->user->login($identity, $duration);
                            Yii::$app->getSession()->setFlash('success', 'You have been registered via facebook. Please complete your profile.');
                            return $this->goHome();
                        }
                    }
                    else return "error";
                }
            }
            else return "error";
        }
        else return "error";
    }

    public function actionRun2(){
        $session = Yii::$app->session;
        $session['myhump']='sekasa';
        echo $session['myhump'];
// check if a session is already open
        //if ($session->isActive) echo 'open'; else echo 'nope';
    }
}

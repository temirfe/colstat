<?php

    use app\models\User;
    $app=Yii::$app;
    $session=$app->session;
    $CONSUMER_KEY='lIJpABxy9JnJv95opscC03zcc';
    $CONSUMER_SECRET='ITrwFNY6JLmHJ7caYNKEFhhvfGV4Tvp0Mh7NPdaIOLyuWRABrM';

    require_once('twitteroauth.php'); // path to twitteroauth library

    if(isset($_GET['oauth_token']))
    {

        $connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $session['twi_request_token'], $session['twi_request_token_secret']);
        $access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
        if($access_token)
        {
            $dao=$app->db;
            $connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
            $params =array();
            $params['include_entities']='false';
            $content = $connection->get('account/verify_credentials',$params);
            if($content && isset($content->screen_name))
            {
                $twi_user_id=$content->id;
                $user_id=$dao->createCommand("SELECT id FROM user WHERE twi_id='{$twi_user_id}'")->queryScalar();
                if($user_id) //login
                {
                    $identity=User::findOne($user_id); //parameters are required
                    $duration=3600*24*30; // 30 days
                    $app->user->login($identity, $duration);
                    $sql="UPDATE user SET lastvisit=UNIX_TIMESTAMP() WHERE id='{$user_id}'";
                    $dao->createCommand($sql)->execute();
                    $this->goHome();
                }
                else //register
                {
                    $dao->createCommand()->insert('user', [
                        'name' => $content->name,
                        'username' =>$content->screen_name,
                        'password_hash' => 'asdfasdfsdfasdf',
                        'twi_id' => $content->id,
                        'status' => 0,
                        'city' => 'N/A',
                        'state' => 'N/A',
                        'created_at' => time(),
                    ])->execute();
                    $identity=User::findOne(['username'=>$content->screen_name]);
                    $duration=3600*24*30; // 30 days
                    $app->user->login($identity, $duration);
                    Yii::$app->getSession()->setFlash('success', 'Please complete your profile to activate.');
                    $this->goHome();
                }
                //redirect to main page. Your own
            }
        }
    }
    else
    {
        if(isset($app->session['return_url']) && $rurl=$app->session['return_url'])
        {
            $this->redirect($rurl);
        }
        else
        $this->redirect('/site/login');
    }
?>
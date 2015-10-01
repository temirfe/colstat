<?php
    $session=Yii::$app->session;
    $requestTokenUrl = "http://api.twitter.com/oauth/request_token";
    $authorizeUrl = "http://api.twitter.com/oauth/authorize";


    $CONSUMER_KEY='lIJpABxy9JnJv95opscC03zcc';
    $CONSUMER_SECRET='ITrwFNY6JLmHJ7caYNKEFhhvfGV4Tvp0Mh7NPdaIOLyuWRABrM';
    $OAUTH_CALLBACK='http://yii.collegestatistics.org/site/twiauth';

    require_once('twitteroauth.php');
    $type=$_GET['type'];
    $session['twi_type']=$type;
    $sender=$_GET['from'];
    $session['return_url']=$sender;


    $connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET);
    $request_token = $connection->getRequestToken($OAUTH_CALLBACK); //get Request Token

    if(	$request_token)
    {
        $token = $request_token['oauth_token'];
        $session['twi_request_token'] = $token ;
        $session['twi_request_token_secret'] = $request_token['oauth_token_secret'];

        switch ($connection->http_code)
        {
            case 200:
                $url = $connection->getAuthorizeURL($token);
                //redirect to Twitter .
                header('Location: ' . $url);
                break;
            default:
                echo "Coonection with twitter Failed";
                break;
        }

    }
    else //error receiving request token
    {
        echo "Error Receiving Request Token";
    }

?>
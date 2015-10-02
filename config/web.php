<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'name'=>'College Statistics',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'HubIo8zzyFB5AAb-BYqK77dIxoTP9UvA',
            'baseUrl'=>''
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@app/mail',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'prosoftmailer@gmail.com',
                'password' => 'temirbek',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            // Disable index.php
            'showScriptName' => false,
            // Disable r= routes
            'enablePrettyUrl' => true,
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<_a:(login|logout|signup|email-confirm|request-password-reset|password-reset)>' => '/site/<_a>',
                '<_m:[\w\-]+>/<_c:[\w\-]+>/<_a:[\w\-]+>/<id:\d+>' => '<_m>/<_c>/<_a>',
                '<_m:[\w\-]+>/<_c:[\w\-]+>/<id:\d+>' => '<_m>/<_c>/view',
                'graduate-schools/pharmacy-schools' => 'pharmacy',
                'graduate-schools/law-schools' => 'law',
                'graduate-schools/occupational-therapy-schools' => 'occupational',
                'graduate-schools/physical-therapy-schools' => 'physical',
                'graduate-schools/medical-schools' => 'medical',
                'graduate-schools/dental-schools' => 'dental',
                'graduate-schools/nursing-schools' => 'nursing',
                'graduate-schools/optometry-schools' => 'optometry',
                'graduate-schools/engineering-schools' => 'engineering',
                'graduate-schools/business-schools' => 'business',
                'test-prep-books'=>'page/view/18',
                'test-prep-courses'=>'page/view/19',
                'test-prep'=>'page/17',
            ),
        ],
        'assetManager' => [
                'appendTimestamp' => true,
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;

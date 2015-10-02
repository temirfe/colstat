<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\components\widgets\Alert;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <?php
    $yiiuser=Yii::$app->user;
    ?>
    <div class="wrap">
        <?php
            if (!$yiiuser->isGuest) {
                $username=$yiiuser->identity->username;
                $userid=$yiiuser->identity->id;
                $logout=[
                    'label' => $username,
                    'options'=>['class'=>'dropdown'],
                    'url'=>['#'],
                    'template' => '<a href="{url}" class="dropdown-toggle" data-toggle="dropdown">{label}<b class="caret"></b></a>',
                    'items' => [
                        ['label' => 'Profile', 'url' => ['/user/view','id'=>$userid]],
                        ['label' => 'Logout', 'url' => ['/site/logout'], 'template' => '<a href="{url}" data-method="post">{label}</a>',],
                    ]
                ];
            }
        else{
            $logout=['label' => 'Sign In', 'url' => ['/site/login']];
        }
        ?>

        <div class="top_menu_container">
            <div class="container">

                <div class="slogan">Admissions facts, statistics, support, and real guidance</div>
                <?php
                echo Menu::widget([
                    'items' => [
                        ['label' => 'About us', 'url' => ['/page/24']],
                        ['label' => 'FAQ', 'url' => ['/page/25']],
                        ['label' => 'Terms of Use', 'url' => ['/page/26']],
                        ['label' => 'Contact us', 'url' => ['/page/27']],
                        $logout
                    ],

                    'submenuTemplate' => "\n<ul class='dropdown-menu' role='menu'>\n{items}\n</ul>\n",
                    'options' => [
                        'class' => 'top_menu',
                    ],
                ]);
                ?>
            </div>
        </div>

        <div class="container">
            <a class="logo" href="<?=Yii::$app->homeUrl?>">
                <img class="logo_image" src="/images/logo.jpg">
            </a>

            <?php
            NavBar::begin([
                'options' => [
                    'class' => 'navbar_hidden for_working_submenu',
                ],
            ]);
            NavBar::end();

            echo Menu::widget([
                'items' => [
                    ['label' => 'HOME', 'url' => ['/']],
                    ['label' => 'UNDERGRADUATE SCHOOLS', 'url' => ['/undergraduate']],
                    ['label' => 'GRADUATE SCHOOLS',
                        'options'=>['class'=>'dropdown'],
                        'url'=>['#'],
                        'template' => '<a href="{url}" class="dropdown-toggle" data-toggle="dropdown">{label}<b class="caret"></b></a>',
                        'items' => [
                            ['label' => 'BUSINESS (MBA)', 'url' => ['/graduate-schools/business-schools']],
                            ['label' => 'LAW', 'url' => ['/graduate-schools/law-schools']],
                            ['label' => 'PHARMACY', 'url' => ['/graduate-schools/pharmacy-schools']],
                            ['label' => 'OCCUPATIONAL THERAPY', 'url' => ['/graduate-schools/occupational-therapy-schools']],
                            ['label' => 'PHYSICAL THERAPY', 'url' => ['/graduate-schools/physical-therapy-schools']],
                            ['label' => 'MEDICAL', 'url' => ['/graduate-schools/medical-schools']],
                            ['label' => 'DENTAL', 'url' => ['/graduate-schools/dental-schools']],
                            ['label' => 'NURSING', 'url' => ['/graduate-schools/nursing-schools']],
                            ['label' => 'OPTOMETRY', 'url' => ['/graduate-schools/optometry-schools']],
                            //['label' => 'PODIATRY', 'url' => ['/podiatry']],
                            ['label' => 'ENGINEERING', 'url' => ['/graduate-schools/engineering-schools']],
                        ],
                    ],
                    ['label' => 'APPLICATION PROCESS', 'url' => ['/application-process']],
                    ['label' => 'TEST PREP','url'=>['/test-prep']],
                ],
                'submenuTemplate' => "\n<ul class='dropdown-menu' role='menu'>\n{items}\n</ul>\n",
                'options' => [
                    'class' => 'main_menu',
                ],
            ]);
            ?>
        </div>


        <section id="content">
            <div class="container bread_container">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
            </div>

            <div class="container">
                <?= Alert::widget() ?>
                <?= $content ?>
                <?php
                $com_models=['undergraduate','medical','business','physical','dental','engineering','law','nursing','occupational','optometry','pharmacy','user'];
                $model_type=Yii::$app->controller->id;
                $model_action=Yii::$app->controller->action->id;
                if(in_array($model_type,$com_models) && $model_action=='view'){

                    $model_id=Yii::$app->request->get('id');
                    echo $this->render('_comment', [
                        'model_type' => $model_type,
                        'model_id' => $model_id,
                    ]);
                }
                ?>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; <?= date('Y') ?> COLLEGE STATISTICS </p>

            <p class="pull-right"><?=Html::a('upload', '/site/upload');?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
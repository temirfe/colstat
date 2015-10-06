<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
                if($yiiuser->identity->isAdmin()) $upload=['label' => 'Upload', 'url' => ['/site/upload']]; else $upload='';
                $logout=[
                    'label' => $username,
                    'options'=>['class'=>'dropdown'],
                    'url'=>['#'],
                    'template' => '<a href="{url}" class="dropdown-toggle" data-toggle="dropdown">{label}<b class="caret"></b></a>',
                    'items' => [
                        ['label' => 'Profile', 'url' => ['/user/view','id'=>$userid]],
                        $upload,
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
                        ['label' => 'Search', 'url' => ['#'],'options'=>['class'=>'js_search','data-target'=>"#search-modal", 'data-toggle'=>"modal"]],
                        ['label' => 'About us', 'url' => ['/about-us/24']],
                        ['label' => 'FAQ', 'url' => ['/faq/25']],
                        ['label' => 'Contact us', 'url' => ['/contacts/27']],
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
                    ['label' => 'APPLICATION PROCESS', 'url' => ['/application-process/1']],
                    ['label' => 'TEST PREP','url'=>['/test-prep/17']],
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

    <section id="social">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="social-sharing" data-permalink="http://labs.carsonshold.com/social-sharing-buttons">
                        <a class="share-facebook" href="http://www.facebook.com/sharer.php?u=http://labs.carsonshold.com/social-sharing-buttons" target="_blank">
                            <span class="icon icon-facebook" aria-hidden="true"></span>
                            <span class="share-title">Share</span>
                            <span class="share-count is-loaded">0</span>
                        </a>
                        <a target="_blank" href="http://twitter.com/share?url=http://labs.carsonshold.com/social-sharing-buttons" class="share-twitter">
                            <span class="icon icon-twitter"></span>
                            <span class="share-title">Tweet</span>
                            <span class="share-count">0</span>
                        </a>
                        <a class="share-pinterest" href="http://pinterest.com/pin/create/button/?url=http://labs.carsonshold.com/social-sharing-buttons&media=http://labs.carsonshold.com/social-sharing-buttons/demo.png&description=jQuery%20social%20media%20buttons%20with%20share%20counts%20on%20GitHub" target="_blank">
                            <span class="icon icon-pinterest" aria-hidden="true"></span>
                            <span class="share-title">Pin it</span>
                        </a>
                        <a class="share-google" href="http://plus.google.com/share?url=http://labs.carsonshold.com/social-sharing-buttons" target="_blank">
                            <span class="icon icon-google" aria-hidden="true"></span>
                            <span class="share-count is-loaded">0</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <?php
                    echo Menu::widget([
                        'items' => [
                            ['label' => 'About us', 'url' => ['/about-us/24']],
                            ['label' => 'FAQ', 'url' => ['/faq/25']],
                            ['label' => 'Terms of Use', 'url' => ['/terms/26']],
                            ['label' => 'Contact us', 'url' => ['/contacts/27']],
                        ],
                        'options' => [
                            'class' => 'bottom_menu',
                        ],
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; <?= date('Y') ?> COLLEGE STATISTICS </p>
        </div>
    </footer>
    <?php
        include_once('_search.php');
    ?>
    <?php $this->registerCssFile('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');?>
    <?php $this->registerCssFile('/css/social-buttons.css');?>
    <?php $this->registerJsFile('/js/social-buttons.js');?>
    <script type="text/javascript">
        window.onload=function(){
            $('.js_search').click(function(e){e.preventDefault();});
        };
    </script>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
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
    if(!$yiiuser->isGuest){
        $username=$yiiuser->identity->username;
        $userid=$yiiuser->identity->id;
    }

//    $isAdmin=$yiiuser->identity->isAdmin;
    ?>
    <div class="wrap">
        <?php
            if (!empty(Yii::$app->user->identity)) {
                NavBar::begin([
                    'brandLabel' => 'Colledge Statistics',
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => 'navbar-inverse navbar-fixed-top',
                    ],
                ]);
                $navItems=[
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],

                ];
                if ($yiiuser->isGuest) {
                    array_push($navItems,['label' => 'Sign In', 'url' => ['/site/login']],['label' => 'Sign Up', 'url' => ['/site/signup']]);
                } else {
                    array_push($navItems,[
                            'label' => $username,
                            'items' => [
                                ['label' => 'Profile', 'url' => ['/user/profile?id='.$userid]],
                                ['label' => 'Logout', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']],
                            ],
                        ]
                    );
                }
                echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $navItems,
                ]);
                NavBar::end();
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
                    ],
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
                            ['label' => 'BUSINESS (MBA)', 'url' => ['/business']],
                            ['label' => 'LAW', 'url' => ['/law']],
                            ['label' => 'PHARMACY', 'url' => ['/pharmacy']],
                            ['label' => 'OCCUPATIONAL THERAPY', 'url' => ['/occupational-therapy']],
                            ['label' => 'PHYSICAL THERAPY', 'url' => ['/physical-therapy']],
                            ['label' => 'MEDICAL', 'url' => ['/medical']],
                            ['label' => 'DENTAL', 'url' => ['/dental']],
                            ['label' => 'NURSING', 'url' => ['/nursing']],
                            ['label' => 'OPTOMETRY', 'url' => ['/optometry']],
                            ['label' => 'PODIATRY', 'url' => ['/podiatry']],
                            ['label' => 'ENGINEERING', 'url' => ['/engineering']],
                        ],
                    ],
                    ['label' => 'APPLICATION PROCESS', 'url' => ['/application-process']],
                    ['label' => 'TEST PREP', 'url' => ['/test-prep']],
                ],
                'submenuTemplate' => "\n<ul class='dropdown-menu' role='menu'>\n{items}\n</ul>\n",
                'options' => [
                    'class' => 'main_menu',
                ],
            ]);
            ?>
        </div>


        <section id="content">
            <div class="container">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
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
                        <a class="share-fancy" href="http://www.thefancy.com/fancyit?ItemURL=http://labs.carsonshold.com/social-sharing-buttons&Title=Tina%20the%20dachsund&Category=Other&ImageURL=http://distilleryimage3.ak.instagram.com/6477684ac48d11e19ab222000a1e8819_7.jpg" target="_blank">
                            <span class="icon icon-fancy" aria-hidden="true"></span>
                            <span class="share-title">Fancy</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
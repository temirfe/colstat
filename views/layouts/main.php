<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
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
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <?php
    if(!isset($yapp)) $yapp=Yii::$app;
    if(!isset($yiiuser)) $yiiuser=$yapp->user;
    if(!isset($controller)) $controller=$yapp->controller->id;
    if(!isset($action)) $action=$yapp->controller->action->id;
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
                $model_type=$controller;
                $model_action=$action;
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
                    <?php $url=Url::current([],true); ?>
                    <div class="social-sharing" data-permalink="<?=$url?>">
                        <a class="share-facebook" href="http://www.facebook.com/sharer.php?u=<?=$url?>" target="_blank">
                            <span class="icon icon-facebook" aria-hidden="true"></span>
                            <span class="share-title">Share</span>
                            <span class="share-count is-loaded">0</span>
                        </a>
                        <a target="_blank" href="http://twitter.com/share?url=<?=$url?>" class="share-twitter">
                            <span class="icon icon-twitter"></span>
                            <span class="share-title">Tweet</span>
                            <span class="share-count">0</span>
                        </a>
                        <a class="share-pinterest" href="http://pinterest.com/pin/create/button/?url=<?=$url?>&media=http://collegestatistics.org/images/logo.jpg&description=Admissions%20facts,%20statistics,%20support,%20and%20real%20guidance" target="_blank">
                            <span class="icon icon-pinterest" aria-hidden="true"></span>
                            <span class="share-title">Pin it</span>
                        </a>
                        <a class="share-google" href="http://plus.google.com/share?url=<?=$url?>" target="_blank">
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
    <?php if(!Yii::$app->user->isGuest && Yii::$app->user->identity->isAdmin()){
        ?>
        <section>
            <div class="admin-panel js_panel">
                <span class='adminicon glyphicon glyphicon-option-vertical js_panel_toggle' style='padding-left:13px;'></span>
                <ul>
                    <li>
                        <?=Html::a("<span class='adminicon glyphicon glyphicon-open-file'></span>".Yii::t('app','Upload Excel'), ['/site/upload'],
                            ['title'=>Yii::t('app','Upload'),'data-toggle'=>'tooltip','data-placement'=>'left']);?>
                    </li>
                    <li>
                        <?=Html::a("<span class='adminicon glyphicon glyphicon-duplicate'></span>".Yii::t('app','Pages'), ['/page/index'],
                            ['title'=>Yii::t('app','Pages'),'data-toggle'=>'tooltip','data-placement'=>'left']);?>
                    </li>
                    <li>
                        <?=Html::a("<span class='adminicon glyphicon glyphicon-bullhorn'></span>".Yii::t('app','Announcements'), ['/announcement/index'],
                            ['title'=>Yii::t('app','Announcements'),'data-toggle'=>'tooltip','data-placement'=>'left']);?>
                    </li>
                    <li>
                        <?=Html::a("<span class='adminicon glyphicon glyphicon-user'></span>".Yii::t('app','Users'), ['/user/index'],
                            ['title'=>Yii::t('app','Users'),'data-toggle'=>'tooltip','data-placement'=>'left']);?>
                    </li>
                    <li>
                        <?=Html::a("<span class='adminicon glyphicon glyphicon-envelope'></span>".Yii::t('app','Contacts'), ['/contact/index'],
                            ['title'=>Yii::t('app','Contacts '),'data-toggle'=>'tooltip','data-placement'=>'left']);?>
                    </li>
                    <li>
                        <?=Html::a("<span class='adminicon glyphicon glyphicon-picture'></span>".Yii::t('app','Slides '), ['/slider/index'],
                            ['title'=>Yii::t('app','Slides'),'data-toggle'=>'tooltip','data-placement'=>'left']);?>
                    </li>
                </ul>
            </div>
        </section>
    <?php
    }?>
    <?php
        include_once('_search.php');
        if (isset($_SESSION['compare']) && isset($_SESSION['compare'][$controller]) && $action=='index')
        {
            $compare_hidden='';
            $comp_count=count($_SESSION['compare'][$controller]);
        }
        else{$compare_hidden='hidden';$comp_count='0';}
    ?>
    <div class="js_compare_modal compare_modal fixed <?=$compare_hidden;?>">
        <span class="js_compare_count" style="font-weight:bold;"><?=$comp_count;?></span> schools selected
        <div class="js_compare_button compare_button">Compare</div>
        <div class="js_compare_cancel compare_cancel">cancel</div>
    </div>
    <div class="hidden js_controller_name"><?=$controller;?></div>
    <?php $this->registerCssFile('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');?>
    <?php $this->registerCssFile('/css/social-buttons.css');?>
    <?php $this->registerJsFile('/js/social-buttons.js');?>
    <script type="text/javascript">
        window.onload=function(){
            $('.js_search').click(
                function(e){
                    e.preventDefault();
                    setTimeout(function(){ $('.js_search_input').focus();}, 500);
                }

            );
            var controller=$('.js_controller_name').text();
            $(document).on('click','.js_compare_init',function(){
                $('.table-striped').addClass('table-hover js_table_compare');
                $('.js_compare_modal').removeClass('hidden').show();
                $(this).addClass('hidden');
                $('.js_select_below').removeClass('hidden');
            });
            $(document).on('click','.js_compare_cancel',function(){

                $.ajax({
                    url: "/site/save-to-compare",
                    datatype: "JSON",
                    type: "POST",
                    data: {cancel:controller},
                    cache: false,
                    success: function(){
                        $('.table-striped').removeClass('table-hover js_table_compare');
                        $('.js_compare_count').text('0');
                        $('.js_compare_modal').hide();
                        $('.js_compare_init').removeClass('hidden');
                        $('.js_select_below').addClass('hidden');
                        $('tr').removeClass('selected');
                    }
                });
            });
            $(document).on('click','.js_table_compare tbody a',function(e){e.preventDefault();});
            $(document).on('click','.js_table_compare tbody tr',function(){
                var counter=$('.js_compare_count');
                if($(this).hasClass('selected')){$(this).removeClass('selected');}
                else
                {
                    if(counter.text()=='4'){alert("You cannot select more than 4 schools");}
                    else $(this).addClass('selected');
                }
                var id=$(this).attr('data-key');
                var controller=$('.js_controller_name').text();
                $.ajax({
                    url: "/site/save-to-compare",
                    datatype: "JSON",
                    type: "POST",
                    data: {id: id, controller:controller},
                    cache: false,
                    success: function(count){
                        counter.text(count);
                    }
                });
            });

            $(document).on('click','.js_compare_button ',function(){
                var count=$('.js_compare_count').text();
                if(parseInt(count)<2 || parseInt(count)>4){alert('Please select between 2 and 4 schools');}
                else{
                    window.location='/common/compare?m='+controller;
                }
            });

            var panel=$('.js_panel');
            $(document).on('click','.js_panel_toggle',function () {
                if(panel.hasClass('panel-opened')) //if open do close
                {
                    panel.removeClass('panel-opened tooltiphide');
                    $(this).addClass('glyphicon-option-vertical').removeClass('glyphicon-option-horizontal');
                }
                else //if closed do open
                {
                    panel.addClass('panel-opened tooltiphide');
                    $(this).removeClass('glyphicon-option-vertical').addClass('glyphicon-option-horizontal');
                }
            });

            $("[data-toggle='tooltip']").tooltip();
        };
    </script>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>
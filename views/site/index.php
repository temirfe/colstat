<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
$db=Yii::$app->db;
$announcements =$db->createCommand("SELECT id,title,description FROM announcements ORDER BY id DESC LIMIT 3")->queryAll();
$this->title = 'College statistics';

$sliderModels = [
    0=>['image'=>'banner1.jpg', 'text'=>'College Statistics is your portal to transparency into the admissions process. Find information and statistics about schools you are interested in, and see where applicants similar to yourself have been admitted.'],
    1=>['image'=>'banner1.jpg', 'text'=>'College Statistics is your portal to transparency into the admissions process. Find information and statistics about schools you are interested in, and see where applicants similar to yourself have been admitted.'],
    2=>['image'=>'banner1.jpg', 'text'=>'College Statistics is your portal to transparency into the admissions process. Find information and statistics about schools you are interested in, and see where applicants similar to yourself have been admitted.'],
]
?>
<style type="text/css">
    .container {
        background-color: transparent;
    }
    .logo {
        margin-top: -121px;
    }
    .wrap > .container {
        padding: 70px 15px 20px;
    }
    section#content {
        margin-top: 53px;
    }

</style>
<div class="site-index">

    <div class="slider_container">
        <?php if (!empty($sliderModels)): ?>
            <ul class="bxslider">
                <?php $i=-1; ?>
                <?php foreach ($sliderModels as $slider): ?>
                    <?php $i++ ?>
                    <li>
                        <img id="image_<?=$i?>" class="images" src="/images/slider/<?= $slider['image'] ?>" />

                        <div class="slider_text_container">
                            <?php if (!empty($slider['text'])): ?>
                                <div class="slider_title"><?= $slider['text'] ?></div>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <div class="col-md-4 trio">
        <div class="box white">
            <h3>Announcements</h3>
            <?php foreach ($announcements as $an){
                echo "<div class='announcement text1'>".Html::a($an['title'],['/announcement/view','id'=>$an['id']],['class'=>'an-title'])."<p>".$an['description']."</p></div>";
            } ?>
        </div>
    </div>
    <div class="col-md-4 trio">
        <div class="box grey">
            <h3>Undergraduate Schools</h3>
            <ul class="list1">
                <li><a href="/undergraduate//index?sort=name">Schools A/Z</a></li>
                <li><a href="/undergraduate/index?sort=state">By State</a></li>
                <li><a href="/undergraduate/index?sort=-ft_ugrad_enr">By Class Size</a></li>
            </ul>
        </div>
        <div class="box grey">
            <h3>Graduate School </h3>
            <ul class="list2">
                <li><a href="/graduate-schools/business-schools">Business</a></li>
                <li><a href="/graduate-schools/dental-schools">Dental</a></li>
                <li><a href="/graduate-schools/engineering-schools">Engineering</a></li>
            </ul>
            <ul class="list2">
                <li><a href="/graduate-schools/law-schools">Law</a></li>
                <li><a href="/graduate-schools/medical-schools">Medical / Healthcare</a></li>
                <li><a href="#">Additional Graduate Specialties</a></li>
            </ul>
        </div>
        <div class="box grey">
            <h3>Helpful Resources  </h3>
            <ul class="list2">
                <li><a href="/financial-aid/6">Financial Aid</a></li>
                <li><a href="/budgeting-while-working/15">Budgeting for College </a></li>
            </ul>
            <ul class="list2">
                <li><a href="#">Working While Studying </a></li>
                <li><a href="#">Extracurricular Activities</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-4 trio">
        <?php $br="<br /><br />"; ?>
    <?php if (!Yii::$app->user->identity): ?>
        <?php $br="<br />"; ?>
        <div class="box white">
                <h3>Login / Register </h3>
                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'options' => ['class' => 'form-horizontal'],
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
                    ],
                ]); ?>

                <?= $form->field($model, 'username',[
                ])->textInput(['placeholder'=>'Email'])->label(false); ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password'])->label(false); ?>
                <button class="btn btn-primary btn_login" type="submit">
                    <i class="fa fa-unlock"></i>
                </button>
                <div class="clear"></div>
                <?php ActiveForm::end(); ?>

                <div class="row index-login">
                    <div class="col-md-7">
                        <a class="register" href="/signup">Register</a>
                        <a class="forgot_password" href="/request-password-reset">Forgot your password?</a>
                    </div>
                    <div class="col-md-5" style="padding-top: 15px;">
                        or with:
                        <a href="http://yii.collegestatistics.org/site/oauth?to=fb" class="index-social-login">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="http://yii.collegestatistics.org/site/oauth?to=google" class="index-social-login">
                            <i class="fa fa-google"></i>
                        </a>
                        <a href="http://yii.collegestatistics.org/site/twilogin" class="index-social-login">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                </div>
        </div>
    <?php endif; ?>
        <div class="box white text1">
            <h3>Test Prep </h3>
            <p>For most universities, standardized test scores are heavily weighted while evaluating a student’s candidacy for admission.
                <?=$br;?>
                Higher test scores can also compensate for lower GPAs.
                <?=$br;?>
                Taking a test prep course can prepare you to tackle the toughest exam questions and may significantly improve you score.
                <?=$br;?>
                Click to find out more information about test prep courses and which one is right one for you.
            </p>
        </div>
        <div class="box white">
            <div class="green-box"><i class="fa fa-question-circle"></i> <a href="/test-prep-courses/19">Which Test Prep course is right for you?</a></div>
            <br /><br />
        </div>
    </div>
</div>

<?php $this->registerJsFile('/js/jquery.bxslider.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);?>
<?php $this->registerCssFile('/css/jquery.bxslider.css');?>

<script type="text/javascript">
    $(document).ready(function(){
        $('.bxslider').bxSlider({
            auto: false,
            speed: 1000,
            autoHover: true
        });

        $('nav').css('overflow', 'visible');
    });
</script>

<script>
    $('.slider_container').hover(function(){

        $('.bx-controls-direction').animate({opacity: 1}, 'fast');
    });

    $('.slider_container').mouseleave(function(){
        $('.bx-controls-direction').animate({opacity: 0}, 'fast');
    });
</script>
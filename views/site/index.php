<?php

/* @var $this yii\web\View */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'College statistics';

$sliderModels = [
    0=>['image'=>'banner1.jpg', 'text'=>'College Statistics is your portal to transparency into the admissions process. Find information and statistics about schools you are interested in, and see where applicants similar to yourself have been admitted.'],
    1=>['image'=>'banner1.jpg', 'text'=>'College Statistics is your portal to transparency into the admissions process. Find information and statistics about schools you are interested in, and see where applicants similar to yourself have been admitted.'],
    2=>['image'=>'banner1.jpg', 'text'=>'College Statistics is your portal to transparency into the admissions process. Find information and statistics about schools you are interested in, and see where applicants similar to yourself have been admitted.'],
]
?>
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

    <div class="col-md-4">
        <div class="box white">
            <h3>Announcements</h3>
        </div>
    </div>
    <div class="col-md-4">
        <div class="box grey">
            <h3>Undergraduate Schools</h3>
            <ul class="list1">
                <li><a href="/undergraduate-schools/sort/a-z">Schools A/Z</a></li>
                <li><a href="/undergraduate-schools/sort/state">By State</a></li>
                <li><a href="/undergraduate-schools/sort/rankings">By Rankings</a></li>
            </ul>
        </div>
        <div class="box grey">
            <h3>Graduate School </h3>
            <ul class="list2">
                <li><a href="">Business</a></li>
                <li><a href="">Education</a></li>
                <li><a href="">Engineering</a></li>
            </ul>
            <ul class="list2">
                <li><a href="/graduate-schools/law-schools">Law</a></li>
                <li><a href="">Medical / Healthcare</a></li>
                <li><a href="">Additional Graduate Specialties</a></li>
            </ul>
        </div>
        <div class="box grey">
            <h3>Helpful Resources  </h3>
            <ul class="list2">
                <li><a href="">Financial Aid</a></li>
                <li><a href="">Budgeting for College </a></li>
            </ul>
            <ul class="list2">
                <li><a href="">Working While Studying </a></li>
                <li><a href="">Extracurricular Activities</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <div class="box white">
            <?php if (!Yii::$app->user->identity): ?>
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
                <a class="register" href="/signup">Register</a>
                <a class="forgot_password" href="/request-password-reset">Forgot your password?</a>

                <?php ActiveForm::end(); ?>
            <?php endif; ?>
        </div>
        <div class="box white">
            <h3>Test Prep </h3>
            <p>For most universities, standardized test scores are heavily weighted while evaluating a student’s candidacy for admission. Higher test scores can also compensate for lower GPAs. Taking a test prep course can prepare you to tackle the toughest exam questions and may significantly improve you score. Click to find out more information about test prep courses and which one is right one for you.
            </p>
        </div>
        <div class="box white">
            <div class="green-box"><i class="fa fa-question-circle"></i> <a href="">Which Test Prep course is right for you?</a></div>
            <br /><br /><br />
        </div>
    </div>
</div>

<?php $this->registerJsFile('/js/jquery.bxslider.min.js', ['depends' => [\yii\web\JqueryAsset::className()]]);?>
<?php $this->registerCssFile('/css/jquery.bxslider.css');?>
<?php $this->registerCssFile('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');?>
<?php $this->registerCssFile('/css/social-buttons.css');?>
<?php $this->registerJsFile('/js/social-buttons.js');?>

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
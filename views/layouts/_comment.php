<?php
use yii\helpers\Html;
use app\models\Comment;
use yii\widgets\ActiveForm;
?>
<div class="comment-wrap">

    <h3 class="dots"><?=Yii::t('app', 'Comments');?></h3>
    <div class="news-comments">
        <?php
        $comments=Comment::findAll(['model_type'=>$model_type,'model_id'=>$model_id]);
        foreach($comments as $comment){ ?>
            <div class="comment-row">
                <div class="comment-col">
                    <div class="comment-name pull-left"><?=$comment['user']['name'];?></div>
                    <div class="comment-date"><?=$comment['date'];?></div>
                    <div class="comment-content"><?=$comment['text'];?></div>
                </div>
            </div>
        <?php
        }?>
    </div>
    <hr />
    <div class="comment-form row">
        <div class="col-sm-6">
            <?php
            if(Yii::$app->user->isGuest){echo Html::a('Login', '/site/login')." to add comment";}
            else{
                $cmodel=new Comment; $form = ActiveForm::begin([
                    'action'=>['comment/create'],
                ]);
                ?>
                <?= $form->field($cmodel, 'text')->textArea(['maxlength' => true, 'rows'=>6])->label('') ?>

                <?=Html::activeHiddenInput($cmodel,'model_type',['value'=>$model_type])?>
                <?=Html::activeHiddenInput($cmodel,'model_id',['value'=>$model_id])?>

                <div class="form-group">
                    <?= Html::submitButton( Yii::t('app', 'Add comment'), ['class' => 'btn btn-primary']) ?>
                </div>
                <?php
                ActiveForm::end();
            }
            ?>
        </div>
    </div>
</div>

<?php
use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <table style="border-collapse: collapse;border-spacing: 0;">
        <tr>
            <td style="vertical-align: top;text-align: -webkit-left;">
                <div style="max-width:600px;margin:0 auto;">
                    <?= $content ?>
                </div>
            </td>
        </tr>
    </table>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

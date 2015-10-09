<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $text
 * @property string $date
 */
class Contact extends \yii\db\ActiveRecord
{
    public $verifyCode;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email','text'], 'required'],
            [['text'], 'string'],
            [['date'], 'safe'],
            [['email'], 'email'],
            [['name', 'email'], 'string', 'max' => 255],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'text' => 'Text',
            'date' => 'Date',
            'verifyCode' => 'Verification Code',
        ];
    }

    public function contact($email)
    {
        Yii::$app->mailer->compose('contactEmail',['user'=>$this])
            ->setTo($email)
            ->setFrom([Yii::$app->params['supportEmail'] => 'CollegeStatistics.org'])
            ->setSubject('User sent a feedback on website')
            ->send();
    }
}

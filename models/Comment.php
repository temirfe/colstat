<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $model_id
 * @property string $model_type
 * @property string $text
 * @property string $date
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'model_id', 'model_type', 'date'], 'required'],
            [['user_id', 'model_id'], 'integer'],
            [['text'], 'string'],
            [['model_type', 'date'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'model_id' => 'Model ID',
            'model_type' => 'Model Type',
            'text' => 'Text',
            'date' => 'Date',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}

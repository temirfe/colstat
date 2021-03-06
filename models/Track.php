<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "track".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $model_id
 * @property string $model_type
 * @property string $specialty
 * @property string $degree_desired
 * @property string $test_score
 * @property string $gpa
 * @property string $scholarship_award
 * @property string $status
 * @property string $date_sent
 * @property string $date_status_complete
 * @property string $date_update
 */
class Track extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'track';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['model_id', 'model_type', 'specialty', 'degree_desired', 'test_score', 'gpa', 'scholarship_award', 'status', 'date_sent', 'date_status_complete', 'date_update'], 'required'],
            [['user_id', 'model_id','test_score','scholarship_award'], 'integer'],
            [['test_score'], 'validateTest'],
            [['gpa'], 'double'],
            [['date_sent', 'date_status_complete', 'date_update'], 'safe'],
            [['model_type', 'status'], 'string', 'max' => 20],
            [['specialty','specialty_other', 'degree_desired'], 'string', 'max' => 50],
        ];
    }

    public function validateTest($attribute, $params)
    {
        if ($this->$attribute<1 || $this->$attribute>2400) {
            $this->addError($attribute, 'Test Score should be between 1 and 2400');
        }
    }
    public function validateGpa($attribute, $params)
    {
        if ($this->$attribute<1 || $this->$attribute>10) {
            $this->addError($attribute, 'GPA should be between 1 and 10.0');
        }
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User Name',
            'model_id' => 'Model ID',
            'model_type' => 'Model Type',
            'specialty' => 'Specialty',
            'specialty_other' => 'Specialty Other',
            'degree_desired' => 'Desired Degree',
            'test_score' => 'Test Score',
            'gpa' => 'GPA',
            'scholarship_award' => 'Scholarship Award',
            'status' => 'Status',
            'date_sent' => 'Date Sent',
            'date_status_complete' => 'Date Status Complete',
            'date_update' => 'Date Last Updated',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}

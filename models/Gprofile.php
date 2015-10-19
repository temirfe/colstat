<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gprofile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $gender
 * @property string $ethnicity
 * @property string $appl_cycle_year
 * @property string $undergrad_inst
 * @property string $major
 * @property string $degree_awarded
 * @property string $gpa
 * @property string $class_rank
 * @property string $work_exp
 * @property string $study_abroad_exp
 * @property string $extracur
 * @property string $leadership_roles
 * @property string $honors
 * @property string $additional_info
 * @property integer $int_applicant
 */
class Gprofile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gprofile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['user_id', 'gender', 'ethnicity', 'appl_cycle_year', 'undergrad_inst', 'major', 'degree_awarded', 'gpa', 'class_rank', 'work_exp', 'study_abroad_exp', 'int_applicant'], 'required'],
            [['user_id', 'int_applicant', 'class_rank', 'appl_cycle_year'], 'integer'],
            [['extracur', 'leadership_roles', 'honors', 'additional_info'], 'string'],
            [['gender'], 'string', 'max' => 10],
            [['ethnicity', 'major', 'work_exp'], 'string', 'max' => 50],
            [['undergrad_inst', 'study_abroad_exp'], 'string', 'max' => 255],
            [['degree_awarded'], 'string', 'max' => 20],
            [['gpa'], 'boolean']
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
            'gender' => 'Gender',
            'ethnicity' => 'Ethnicity',
            'appl_cycle_year' => 'Application Cycle Year',
            'undergrad_inst' => 'Undergraduate Institution',
            'major' => 'Major',
            'degree_awarded' => 'Degree Awarded',
            'gpa' => 'GPA',
            'class_rank' => 'Class Rank',
            'work_exp' => 'Work Experience',
            'study_abroad_exp' => 'Study Abroad Experience',
            'extracur' => 'Extracurricular Activities',
            'leadership_roles' => 'Leadership Roles',
            'honors' => 'Honors/Awards',
            'additional_info' => 'Additional Information',
            'int_applicant' => 'International Applicant',
        ];
    }
}

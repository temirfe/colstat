<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $gender
 * @property string $ethnicity
 * @property string $entering_class
 * @property string $prospective_major
 * @property string $high_school
 * @property string $gpa_unweighted
 * @property string $gpa_weighted
 * @property string $class_rank
 * @property string $class_size
 * @property string $ap_courses_taken
 * @property string $ib_student
 * @property string $foreign_languages_taken
 * @property string $years_taken
 * @property string $extracur
 * @property string $leadership_roles
 * @property string $honors
 * @property string $additional_info
 * @property integer $int_applicant
 */
class UndergradProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'int_applicant'], 'integer'],
            [['ap_courses_taken', 'extracur', 'leadership_roles', 'honors', 'additional_info'], 'string'],
            [['gender'], 'string', 'max' => 10],
            [['ethnicity', 'class_rank', 'class_size', 'ib_student', 'foreign_languages_taken', 'years_taken'], 'string', 'max' => 50],
            [['entering_class', 'prospective_major', 'high_school'], 'string', 'max' => 255],
            [['gpa_unweighted', 'gpa_weighted'], 'string', 'max' => 20]
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
            'entering_class' => 'Entering Class',
            'prospective_major' => 'Prospective Major',
            'high_school' => 'High School',
            'gpa_unweighted' => 'GPA Unweighted',
            'gpa_weighted' => 'GPA Weighted',
            'class_rank' => 'Class Rank',
            'class_size' => 'Class Size',
            'ap_courses_taken' => 'AP Courses Taken',
            'ib_student' => 'IB Student',
            'foreign_languages_taken' => 'Foreign Languages Taken',
            'years_taken' => 'Years Taken',
            'extracur' => 'Extra Curricular Activities',
            'leadership_roles' => 'Leadership Roles',
            'honors' => 'Honors/Awards',
            'additional_info' => 'Additional Info',
            'int_applicant' => 'International Applicant',
        ];
    }
}

<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pharmacy".
 *
 * @property integer $id
 * @property string $name
 * @property string $city
 * @property string $state
 * @property string $contact
 * @property string $pharm_school_name
 * @property string $accred_status
 * @property string $inst_type
 * @property string $main_campus
 * @property string $branch_campuses
 * @property string $curriculum
 * @property string $addit_reqs
 * @property string $prereq_courses
 * @property string $enter_class_stat
 * @property string $appl_process_reqs
 */
class Pharmacy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pharmacy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'city', 'state', 'contact', 'pharm_school_name', 'accred_status', 'inst_type', 'main_campus', 'branch_campuses', 'enter_class_stat','about'], 'safe'],
            [['curriculum', 'addit_reqs', 'prereq_courses', 'appl_process_reqs'], 'string'],
            [['name', 'city', 'pharm_school_name', 'branch_campuses'], 'string', 'max' => 255],
            [['state', 'accred_status', 'inst_type'], 'string', 'max' => 20],
            [['contact', 'enter_class_stat'], 'string', 'max' => 500],
            [['main_campus'], 'string', 'max' => 100]
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
            'city' => 'City',
            'state' => 'State',
            'contact' => 'Contact',
            'pharm_school_name' => 'Pharmacy School Name',
            'accred_status' => 'Accreditation Status',
            'inst_type' => 'Institution Type',
            'main_campus' => 'Main Campus',
            'branch_campuses' => 'Branch Campuses',
            'curriculum' => 'Curriculum',
            'addit_reqs' => 'Additional Requirements',
            'prereq_courses' => 'Prerequisite Courses',
            'enter_class_stat' => 'Enter Class Stat',
            'appl_process_reqs' => 'Application Process Requirements',
        ];
    }
}

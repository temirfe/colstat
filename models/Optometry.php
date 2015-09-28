<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "optometry".
 *
 * @property integer $id
 * @property string $name
 * @property string $city
 * @property string $state
 * @property string $address
 * @property string $url
 * @property string $about
 * @property integer $class_size
 * @property integer $matricul_female
 * @property integer $matricul_male
 * @property integer $matricul_total
 * @property string $average_gpa
 * @property integer $aa1_avg_oat
 * @property integer $ts2_avg_oat
 * @property string $pct_ba_deg
 * @property integer $in_state_amnt
 * @property integer $out_state_amnt
 * @property string $prereqs
 */
class Optometry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'optometry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'city', 'state', 'address', 'url', 'average_gpa', 'pct_ba_deg'], 'safe'],
            [['about', 'prereqs'], 'string'],
            [['class_size', 'matricul_female', 'matricul_male', 'matricul_total', 'aa1_avg_oat', 'ts2_avg_oat', 'in_state_amnt', 'out_state_amnt'], 'integer'],
            [['name', 'city', 'address'], 'string', 'max' => 255],
            [['state', 'url', 'average_gpa', 'pct_ba_deg'], 'string', 'max' => 20]
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
            'address' => 'Address',
            'url' => 'Website',
            'about' => 'About',
            'class_size' => 'Class Size',
            'matricul_female' => 'Matriculants (Female)',
            'matricul_male' => 'Matriculants (Male)',
            'matricul_total' => 'Matriculants (Total)',
            'average_gpa' => 'Average GPA',
            'aa1_avg_oat' => 'AA1 Average OAT Score',
            'ts2_avg_oat' => 'TS2 Average OAT Score',
            'pct_ba_deg' => "% of Matriculants with a  Bachelor's Degree",
            'in_state_amnt' => '# of Matriculants In-State',
            'out_state_amnt' => '# of Matriculants Out-of-State (Domestic)',
            'prereqs' => 'Prerequsities',
        ];
    }
}

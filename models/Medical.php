<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medical".
 *
 * @property integer $id
 * @property string $name
 * @property string $city
 * @property string $state
 * @property string $address
 * @property string $url
 * @property string $about
 * @property string $inst_type
 * @property string $campus_set
 * @property string $campus_house
 * @property string $stud_popul
 * @property string $grad_rate
 * @property string $transfer_out_rate
 */
class Medical extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'medical';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'city', 'state', 'address', 'url', 'inst_type', 'campus_set', 'campus_house', 'stud_popul', 'grad_rate', 'transfer_out_rate'], 'required'],
            [['about'], 'string'],
            [['name', 'city', 'address'], 'string', 'max' => 255],
            [['state', 'url', 'inst_type', 'campus_set', 'campus_house', 'stud_popul', 'grad_rate', 'transfer_out_rate'], 'string', 'max' => 20]
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
            'url' => 'Url',
            'about' => 'About',
            'inst_type' => 'Inst Type',
            'campus_set' => 'Campus Set',
            'campus_house' => 'Campus House',
            'stud_popul' => 'Stud Popul',
            'grad_rate' => 'Grad Rate',
            'transfer_out_rate' => 'Transfer Out Rate',
        ];
    }
}

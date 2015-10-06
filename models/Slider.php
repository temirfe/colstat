<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property integer $id
 * @property string $caption
 * @property string $image
 */
class Slider extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['caption'], 'string', 'max' => 1000],
            [['image'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'extensions' => 'jpg,jpeg,gif,png']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Caption',
            'image' => 'Image',
        ];
    }
}

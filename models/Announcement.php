<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "announcements".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property string $updated_at
 * @property string $created_at
 */
class Announcement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'announcements';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'slug', 'description', 'content'], 'required'],
            [['id'], 'integer'],
            [['description', 'content'], 'string'],
            [['updated_at', 'created_at'], 'safe'],
            [['title', 'slug'], 'string', 'max' => 255],
            [['id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'content' => 'Content',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}

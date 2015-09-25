<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property string $meta_title
 * @property string $meta_description
 * @property integer $parent
 * @property string $updated_at
 * @property string $created_at
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'title', 'slug', 'content', 'meta_title', 'meta_description', 'parent'], 'safe'],
            [['id', 'parent'], 'integer'],
            [['content'], 'string'],
            [['updated_at', 'created_at'], 'safe'],
            [['title', 'slug', 'meta_title', 'meta_description'], 'string', 'max' => 255]
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
            'content' => 'Content',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'parent' => 'Parent',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}

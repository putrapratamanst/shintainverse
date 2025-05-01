<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string|null $image
 * @property int|null $is_active
 * @property int|null $is_deleted
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string|null $meta_image
 * @property string|null $created_at
 */
class Service extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['meta_title', 'meta_description', 'meta_keywords', 'meta_image'], 'default', 'value' => null],
            [['is_active'], 'default', 'value' => 1],
            [['is_deleted'], 'default', 'value' => 0],
            [['title', 'slug', 'description'], 'required'],
            [['description', 'meta_description', 'meta_keywords','coverage','summary','types'], 'string'],
            [['is_active', 'is_deleted'], 'integer'],
            [['created_at'], 'safe'],
            [['title', 'slug', 'meta_title', 'meta_image'], 'string', 'max' => 255],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'maxSize' => 5 * 1024 * 1024], // max 1MB
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'image' => 'Image',
            'is_active' => 'Is Active',
            'is_deleted' => 'Is Deleted',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'meta_image' => 'Meta Image',
            'created_at' => 'Created At',
        ];
    }

}

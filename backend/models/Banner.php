<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property int $id
 * @property string $image
 * @property string $url
 * @property int $is_active
 * @property string|null $description
 * @property string|null $title
 */
class Banner extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'title'], 'default', 'value' => null],
            [['is_active'], 'default', 'value' => 0],
            [['url'], 'required'],
            [['is_active'], 'integer'],
            [['image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg', 'maxSize' => 5 * 1024 * 1024], // max 1MB
            [['description'], 'string'],
            [['url', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'url' => 'Url',
            'is_active' => 'Is Active',
            'description' => 'Description',
            'title' => 'Title',
        ];
    }

}

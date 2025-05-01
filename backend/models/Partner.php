<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "partner".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $category
 * @property string|null $image
 * @property string|null $description
 */
class Partner extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category', 'description'], 'default', 'value' => null],
            [['name', 'category'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
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
            'name' => 'Name',
            'category' => 'Category',
            'image' => 'Image',
            'description' => 'Description',
        ];
    }
}

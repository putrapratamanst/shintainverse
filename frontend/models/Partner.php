<?php

namespace frontend\models;

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
            [['name', 'category', 'image', 'description'], 'default', 'value' => null],
            [['name', 'category', 'image'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
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

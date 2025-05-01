<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "testimonies".
 *
 * @property int $id
 * @property string $name
 * @property string $role
 * @property string|null $image
 * @property string $description
 * @property string|null $created_at
 */
class Testimonies extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'default', 'value' => null],
            [['name', 'role', 'description'], 'required'],
            [['description'], 'string'],
            [['created_at'], 'safe'],
            [['name', 'role', 'image'], 'string', 'max' => 255],
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
            'role' => 'Role',
            'image' => 'Image',
            'description' => 'Description',
            'created_at' => 'Created At',
        ];
    }

}

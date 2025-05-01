<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "callback".
 *
 * @property int $id
 * @property string $first_name
 * @property string $phone_number
 * @property string $category
 */
class Callback extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'callback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'phone_number', 'category'], 'required'],
            [['first_name', 'phone_number', 'category'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'phone_number' => 'Phone Number',
            'category' => 'Category',
        ];
    }

}

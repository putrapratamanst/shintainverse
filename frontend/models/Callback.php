<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "callback".
 *
 * @property int $id
 * @property string $first_name
 * @property string $phone_number
 * @property string $category
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $is_read
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
            [['created_at', 'updated_at'], 'default', 'value' => null],
            [['first_name', 'phone_number', 'category'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['is_read'], 'integer'],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'is_read' => 'Is Read',
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'createdAtAttribute' => 'created_at', // Kolom untuk created_at
                'updatedAtAttribute' => 'updated_at', // Kolom untuk updated_at
                'value' => new \yii\db\Expression('NOW()'), // Format waktu default
            ],
        ];
    }
}

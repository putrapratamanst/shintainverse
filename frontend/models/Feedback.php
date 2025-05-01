<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone_number
 * @property string $city
 * @property string $province
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $is_read
 */
class Feedback extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'is_read'], 'default', 'value' => null],
            [['first_name', 'last_name', 'email', 'phone_number', 'city', 'province'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['is_read'], 'integer'],
            [['first_name', 'last_name', 'email', 'phone_number', 'city', 'province'], 'string', 'max' => 255],
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
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone_number' => 'Phone Number',
            'city' => 'City',
            'province' => 'Province',
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

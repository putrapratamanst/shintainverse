<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "question".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone_number
 * @property string $comment
 * @property int $is_read
 * @property int $created_at
 * @property int $updated_at
 */
class Question extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'question';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['updated_at'], 'default', 'value' => 0],
            [['first_name', 'last_name', 'email', 'phone_number', 'comment'], 'required'],
            [['is_read', 'created_at', 'updated_at'], 'integer'],
            [['first_name', 'last_name', 'email', 'phone_number', 'comment'], 'string', 'max' => 255],
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
            'comment' => 'Comment',
            'is_read' => 'Is Read',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}

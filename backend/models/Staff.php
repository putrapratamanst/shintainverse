<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $position
 * @property string $expertise
 * @property string $education
 * @property string $profile
 * @property int|null $is_active
 * @property int|null $is_deleted
 * @property string|null $created_at
 */
class Staff extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_active'], 'default', 'value' => 1],
            [['is_deleted'], 'default', 'value' => 0],
            [['name', 'slug', 'position', 'expertise', 'education', 'profile'], 'required'],
            [['expertise', 'education', 'profile'], 'string'],
            [['is_active', 'is_deleted'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'slug', 'position'], 'string', 'max' => 255],
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
            'slug' => 'Slug',
            'position' => 'Position',
            'expertise' => 'Expertise',
            'education' => 'Education',
            'profile' => 'Profile',
            'is_active' => 'Is Active',
            'is_deleted' => 'Is Deleted',
            'created_at' => 'Created At',
        ];
    }

}

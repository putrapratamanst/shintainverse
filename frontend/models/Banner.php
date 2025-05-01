<?php

namespace frontend\models;

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
 * @property int|null $order
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
            [['description', 'title', 'order'], 'default', 'value' => null],
            [['is_active'], 'default', 'value' => 0],
            [['image', 'url'], 'required'],
            [['is_active', 'order'], 'integer'],
            [['description'], 'string'],
            [['image', 'url', 'title'], 'string', 'max' => 255],
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
            'order' => 'Order',
        ];
    }

    public function getActiveBanners()
    {
        return self::find()->where(['is_active' => 1])->orderBy(['order' => SORT_ASC])->all();
    }

}

<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string|null $image
 * @property int|null $is_active
 * @property int|null $is_deleted
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $meta_keywords
 * @property string|null $meta_image
 * @property string|null $created_at
 */
class Service extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image', 'meta_title', 'meta_description', 'meta_keywords', 'meta_image'], 'default', 'value' => null],
            [['is_active'], 'default', 'value' => 1],
            [['is_deleted'], 'default', 'value' => 0],
            [['title', 'slug', 'description'], 'required'],
            [['description', 'meta_description', 'meta_keywords', 'summary'], 'string'],
            [['is_active', 'is_deleted'], 'integer'],
            [['created_at'], 'safe'],
            [['title', 'slug', 'image', 'meta_title', 'meta_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'image' => 'Image',
            'is_active' => 'Is Active',
            'is_deleted' => 'Is Deleted',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'meta_image' => 'Meta Image',
            'created_at' => 'Created At',
            'summary' => 'Summary',
        ];
    }

   
    public function getActiveServicess($limit = null)
    {
        if ($limit) {
            return $this->find()->where(['is_active' => 1, 'is_deleted' => 0])->limit($limit)->all();
        }
        return $this->find()->where(['is_active' => 1, 'is_deleted' => 0])->all();
    }
    public function getServiceById($id)
    {
        return $this->find()->where(['id' => $id, 'is_deleted' => 0])->one();
    }
    public function getServiceBySlug($slug)
    {
        return $this->find()->where(['slug' => $slug, 'is_deleted' => 0])->one();
    }
}

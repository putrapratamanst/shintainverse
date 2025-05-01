<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string|null $page
 * @property string|null $content
 */
class Page extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page', 'content'], 'default', 'value' => null],
            [['content'], 'string'],
            [['page'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'page' => 'Page',
            'content' => 'Content',
        ];
    }

}

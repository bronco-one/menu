<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "page_text".
 *
 * @property int $id
 * @property string $page
 * @property string $title
 * @property string $content
 */
class PageText extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page_text';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page', 'title', 'content'], 'required'],
            [['content'], 'string'],
            [['page'], 'string', 'max' => 30],
            [['title'], 'string', 'max' => 150],
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
            'title' => 'Title',
            'content' => 'Content',
        ];
    }
}

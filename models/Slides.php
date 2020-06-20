<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "slides".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $page
 */
class Slides extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slides';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'page'], 'string', 'max' => 30],
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
            'page' => 'Page',
        ];
    }
}

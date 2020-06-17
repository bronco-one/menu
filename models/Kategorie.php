<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategorie".
 *
 * @property int $id_kategorii
 * @property string $kategoria_nazwa
 */
class Kategorie extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategorie';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kategoria_nazwa'], 'required'],
            [['kategoria_nazwa'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategorii' => 'Id Kategorii',
            'kategoria_nazwa' => 'Kategoria Nazwa',
        ];
    }
    public function getMenu() {
        return $this->hasMany(Menu::className(), ['kategoria_id'=>'id_kategorii']);
    }
}

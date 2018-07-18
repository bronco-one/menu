<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id_potrawy
 * @property string $nazwa_potrawy
 * @property string $skladniki_potrawy
 * @property int $kategoria_potrawy
 * @property string $gramatura
 * @property string $cena
 *
 * @property Kategorie $kategoriaPotrawy
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nazwa_potrawy', 'skladniki_potrawy', 'kategoria_potrawy', 'gramatura', 'cena'], 'required'],
            [['skladniki_potrawy'], 'string'],
            [['kategoria_potrawy'], 'integer'],
            [['cena'], 'number'],
            [['nazwa_potrawy'], 'string', 'max' => 70],
            [['gramatura'], 'string', 'max' => 10],
            [['kategoria_potrawy'], 'exist', 'skipOnError' => true, 'targetClass' => Kategorie::className(), 'targetAttribute' => ['kategoria_potrawy' => 'id_kategorii']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_potrawy' => 'Id Potrawy',
            'nazwa_potrawy' => 'Nazwa Potrawy',
            'skladniki_potrawy' => 'Skladniki Potrawy',
            'kategoria_potrawy' => 'Kategoria Potrawy',
            'gramatura' => 'Gramatura',
            'cena' => 'Cena',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriaPotrawy()
    {
        return $this->hasOne(Kategorie::className(), ['id_kategorii' => 'kategoria_potrawy']);
    }
    public function getPotrawy()
    {
        return $this->hasMany(Menu::className(), [ 'kategoria_potrawy'=>'id_potrawy']);
    }

    /**
     * @inheritdoc
     * @return MenuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MenuQuery(get_called_class());
    }

    /* public function potrawy($id){
    $potrawy = Yii::$app->db->createCommand('SELECT *FROM menu WHERE kategoria_potrawy=:id')
    ->bindValue(':id', $id)
    ->queryAll();
    return $potrawy;
    }*/
}

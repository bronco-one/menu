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
 * @property float $cena
 *
 * @property Kategorie $kategoriaPotrawy
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
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
     * Gets query for [[KategoriaPotrawy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriaPotrawy()
    {
        return $this->hasOne(Kategorie::className(), ['id_kategorii' => 'kategoria_potrawy']);
    }
}

<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Menu;

/**
 * MenuSearch represents the model behind the search form of `app\models\Menu`.
 */
class MenuSearch extends Menu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_potrawy', 'kategoria_potrawy'], 'integer'],
            [['nazwa_potrawy', 'skladniki_potrawy', 'gramatura'], 'safe'],
            [['cena'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Menu::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_potrawy' => $this->id_potrawy,
            'kategoria_potrawy' => $this->kategoria_potrawy,
            'cena' => $this->cena,
        ]);

        $query->andFilterWhere(['like', 'nazwa_potrawy', $this->nazwa_potrawy])
            ->andFilterWhere(['like', 'skladniki_potrawy', $this->skladniki_potrawy])
            ->andFilterWhere(['like', 'gramatura', $this->gramatura]);

        return $dataProvider;
    }
}

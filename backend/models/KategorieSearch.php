<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kategorie;

/**
 * KategorieSearch represents the model behind the search form of `app\models\Kategorie`.
 */
class KategorieSearch extends Kategorie
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategorii'], 'integer'],
            [['kategoria_nazwa'], 'safe'],
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
        $query = Kategorie::find();

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
            'id_kategorii' => $this->id_kategorii,
        ]);

        $query->andFilterWhere(['like', 'kategoria_nazwa', $this->kategoria_nazwa]);

        return $dataProvider;
    }
}

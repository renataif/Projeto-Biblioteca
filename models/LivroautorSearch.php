<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Livroautor;

/**
 * LivroautorSearch represents the model behind the search form of `app\models\Livroautor`.
 */
class LivroautorSearch extends Livroautor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'autor_id', 'livrola_id'], 'integer'],
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
        $query = Livroautor::find();

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
            'id' => $this->id,
            'autor_id' => $this->autor_id,
            'livrola_id' => $this->livrola_id,
        ]);

        return $dataProvider;
    }
}

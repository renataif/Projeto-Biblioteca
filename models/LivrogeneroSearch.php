<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Livrogenero;

/**
 * LivrogeneroSearch represents the model behind the search form of `app\models\Livrogenero`.
 */
class LivrogeneroSearch extends Livrogenero
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genero_id', 'livrog_id', 'id'], 'integer'],
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
        $query = Livrogenero::find();

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
            'genero_id' => $this->genero_id,
            'livrog_id' => $this->livrog_id,
            'id' => $this->id,
        ]);

        return $dataProvider;
    }
}

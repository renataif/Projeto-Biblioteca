<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Livro;

/**
 * LivroSearch represents the model behind the search form of `app\models\Livro`.
 */
class LivroSearch extends Livro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ano_obra', 'classificacao', 'genero_id', 'autor_id'], 'integer'],
            [['nome', 'sinopse'], 'safe'],
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
        $query = Livro::find();

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
            'ano_obra' => $this->ano_obra,
            'classificacao' => $this->classificacao,
            'genero_id' => $this->genero_id,
            'autor_id' => $this->autor_id,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'sinopse', $this->sinopse]);

        return $dataProvider;
    }
}

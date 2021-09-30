<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Exemplar;

/**
 * ExemplarSearch represents the model behind the search form of `app\models\Exemplar`.
 */
class ExemplarSearch extends Exemplar
{
    
    public function attributes(){      
        return array_merge(parent::attributes(), ['livro.nome','editora.nome']);
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'edicao', 'numpaginas', 'anopublicacao'], 'integer'],
            [['livro.nome','editora.nome'], 'safe'],
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
        $query = Exemplar::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->joinWith(['livro']);
        $dataProvider->sort->attributes['livro.nome'] = [
            'asc' => ['livro.nome' => SORT_ASC],
            'desc' => ['livro.nome' => SORT_DESC],
        ];
        $query->joinWith(['editora']);
        $dataProvider->sort->attributes['editora.nome'] = [
            'asc' => ['editora.nome' => SORT_ASC],
            'desc' => ['editora.nome' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'edicao' => $this->edicao,
            'numpaginas' => $this->numpaginas,
            'anopublicacao' => $this->anopublicacao,
            'livro_id' => $this->livro_id,
            'editora_id' => $this->editora_id,
        ]);

        $query->andFilterWhere(['LIKE', 'livro.nome',$this->getAttribute('livro.nome')]);
        $query->andFilterWhere(['LIKE', 'editora.nome',$this->getAttribute('editora.nome')]);

        return $dataProvider;
    }
}

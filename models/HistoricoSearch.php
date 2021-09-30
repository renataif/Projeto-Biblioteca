<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Historico;

/**
 * HistoricoSearch represents the model behind the search form of `app\models\Historico`.
 */
class HistoricoSearch extends Historico
{
    public function attributes(){      
        return array_merge(parent::attributes(), ['usuario.nome']);
    }
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'usuario.nome'], 'safe'],
            [['pagslidas', 'usuario_id', 'exemplar_id', 'id'], 'integer'],
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
        $query = Historico::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->joinWith(['usuario']);
        $dataProvider->sort->attributes['usuario.nome'] = [
            'asc' => ['usuario.nome' => SORT_ASC],
            'desc' => ['usuario.nome' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pagslidas' => $this->pagslidas,
            'usuario_id' => $this->usuario_id,
            'exemplar_id' => $this->exemplar_id,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status]);
        $query->andFilterWhere(['LIKE', 'usuario.nome',$this->getAttribute('usuario.nome')]);

        return $dataProvider;
    }
}

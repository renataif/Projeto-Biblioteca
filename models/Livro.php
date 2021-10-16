<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "livro".
 *
 * @property int $id
 * @property string $nome
 * @property int $ano_obra
 * @property string $sinopse
 * @property int $classificacao
 *
 * @property Exemplar[] $exemplars
 * @property Livroautor[] $livroautors
 * @property Livrogenero[] $livrogeneros
 */
class Livro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'livro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'ano_obra', 'sinopse', 'classificacao'], 'required'],
            [['ano_obra', 'classificacao'], 'integer'],
            [['nome', 'sinopse'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'ano_obra' => 'Ano da Obra',
            'sinopse' => 'Sinopse',
            'classificacao' => 'Classificação',
        ];
    }

    /**
     * Gets query for [[Exemplars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExemplars()
    {
        return $this->hasMany(Exemplar::className(), ['livro_id' => 'id']);
    }

    /**
     * Gets query for [[Livroautors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLivroautors()
    {
        return $this->hasMany(Livroautor::className(), ['livrola_id' => 'id']);
    }

    /**
     * Gets query for [[Livrogeneros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLivrogeneros()
    {
        return $this->hasMany(Livrogenero::className(), ['livrog_id' => 'id']);
    }
}

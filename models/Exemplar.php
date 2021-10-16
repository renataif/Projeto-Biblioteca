<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exemplar".
 *
 * @property int $id
 * @property int $edicao
 * @property int $numpaginas
 * @property int $anopublicacao
 * @property int|null $livro_id
 * @property int|null $editora_id
 *
 * @property Editora $editora
 * @property Historico[] $historicos
 * @property Livro $livro
 */
class Exemplar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exemplar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['edicao', 'numpaginas', 'anopublicacao'], 'required'],
            [['edicao', 'numpaginas', 'anopublicacao', 'livro_id', 'editora_id'], 'integer'],
            [['editora_id'], 'exist', 'skipOnError' => true, 'targetClass' => Editora::className(), 'targetAttribute' => ['editora_id' => 'id']],
            [['livro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Livro::className(), 'targetAttribute' => ['livro_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'edicao' => 'Edição',
            'numpaginas' => 'Número de páginas',
            'anopublicacao' => 'Ano da Publicação',
            'livro_id' => 'Livro',
            'editora_id' => 'Editora',
        ];
    }

    /**
     * Gets query for [[Editora]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEditora()
    {
        return $this->hasOne(Editora::className(), ['id' => 'editora_id']);
    }

    /**
     * Gets query for [[Historicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHistoricos()
    {
        return $this->hasMany(Historico::className(), ['exemplar_id' => 'id']);
    }

    /**
     * Gets query for [[Livro]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLivro()
    {
        return $this->hasOne(Livro::className(), ['id' => 'livro_id']);
    }
}

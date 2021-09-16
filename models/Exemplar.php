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
 * @property Leitura[] $leituras
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
            'edicao' => 'Edicao',
            'numpaginas' => 'Numpaginas',
            'anopublicacao' => 'Anopublicacao',
            'livro_id' => 'Livro ID',
            'editora_id' => 'Editora ID',
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
     * Gets query for [[Leituras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLeituras()
    {
        return $this->hasMany(Leitura::className(), ['exemplar_id' => 'id']);
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

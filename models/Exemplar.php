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
 *
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
            [['edicao', 'numpaginas', 'anopublicacao', 'livro_id'], 'integer'],
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
        ];
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

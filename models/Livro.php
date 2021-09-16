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
 * @property int|null $genero_id
 * @property int|null $autor_id
 *
 * @property Autor $autor
 * @property Exemplar[] $exemplars
 * @property Genero $genero
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
            [['ano_obra', 'classificacao', 'genero_id', 'autor_id'], 'integer'],
            [['nome', 'sinopse'], 'string', 'max' => 255],
            [['autor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Autor::className(), 'targetAttribute' => ['autor_id' => 'id']],
            [['genero_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['genero_id' => 'id']],
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
            'ano_obra' => 'Ano Obra',
            'sinopse' => 'Sinopse',
            'classificacao' => 'Classificacao',
            'genero_id' => 'Genero ID',
            'autor_id' => 'Autor ID',
        ];
    }

    /**
     * Gets query for [[Autor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutor()
    {
        return $this->hasOne(Autor::className(), ['id' => 'autor_id']);
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
     * Gets query for [[Genero]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenero()
    {
        return $this->hasOne(Genero::className(), ['id' => 'genero_id']);
    }
}

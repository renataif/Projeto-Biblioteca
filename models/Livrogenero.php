<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "livrogenero".
 *
 * @property int|null $genero_id
 * @property int|null $livrog_id
 *
 * @property Genero $genero
 * @property Livro $livrog
 */
class Livrogenero extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'livrogenero';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genero_id', 'livrog_id'], 'integer'],
            [['genero_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['genero_id' => 'id']],
            [['livrog_id'], 'exist', 'skipOnError' => true, 'targetClass' => Livro::className(), 'targetAttribute' => ['livrog_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'genero_id' => 'Genero ID',
            'livrog_id' => 'Livrog ID',
        ];
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

    /**
     * Gets query for [[Livrog]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLivrog()
    {
        return $this->hasOne(Livro::className(), ['id' => 'livrog_id']);
    }
}

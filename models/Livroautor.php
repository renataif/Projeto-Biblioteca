<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "livroautor".
 *
 * @property int|null $autor_id
 * @property int|null $livrola_id
 *
 * @property Autor $autor
 * @property Livro $livrola
 */
class Livroautor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'livroautor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['autor_id', 'livrola_id'], 'integer'],
            [['autor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Autor::className(), 'targetAttribute' => ['autor_id' => 'id']],
            [['livrola_id'], 'exist', 'skipOnError' => true, 'targetClass' => Livro::className(), 'targetAttribute' => ['livrola_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'autor_id' => 'Autor ID',
            'livrola_id' => 'Livrola ID',
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
     * Gets query for [[Livrola]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLivrola()
    {
        return $this->hasOne(Livro::className(), ['id' => 'livrola_id']);
    }
}

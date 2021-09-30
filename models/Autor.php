<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "autor".
 *
 * @property int $id
 * @property string $nome
 *
 * @property Livroautor[] $livroautors
 */
class Autor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'autor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * Gets query for [[Livroautors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLivroautors()
    {
        return $this->hasMany(Livroautor::className(), ['autor_id' => 'id']);
    }
}

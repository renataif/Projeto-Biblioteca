<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "genero".
 *
 * @property int $id
 * @property string $nome
 *
 * @property Livrogenero[] $livrogeneros
 */
class Genero extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genero';
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
     * Gets query for [[Livrogeneros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLivrogeneros()
    {
        return $this->hasMany(Livrogenero::className(), ['genero_id' => 'id']);
    }
}

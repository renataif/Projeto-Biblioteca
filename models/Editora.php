<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "editora".
 *
 * @property int $id
 * @property string $nome
 *
 * @property Exemplar[] $exemplars
 */
class Editora extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'editora';
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
     * Gets query for [[Exemplars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExemplars()
    {
        return $this->hasMany(Exemplar::className(), ['editora_id' => 'id']);
    }
}

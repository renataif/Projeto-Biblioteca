<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $nome
 * @property string $login
 * @property string $senha
 * @property string $datanascimento
 *
 * @property Leitura[] $leituras
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'login', 'senha', 'datanascimento'], 'required'],
            [['datanascimento'], 'safe'],
            [['nome', 'login', 'senha'], 'string', 'max' => 255],
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
            'login' => 'Login',
            'senha' => 'Senha',
            'datanascimento' => 'Datanascimento',
        ];
    }

    /**
     * Gets query for [[Leituras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLeituras()
    {
        return $this->hasMany(Leitura::className(), ['usuario_id' => 'id']);
    }
}

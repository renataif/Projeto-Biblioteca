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
 * @property Historico[] $historicos
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
     * Gets query for [[Historicos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHistoricos()
    {
        return $this->hasMany(Historico::className(), ['usuario_id' => 'id']);
    }
}

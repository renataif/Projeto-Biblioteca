<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "leitura".
 *
 * @property string|null $status
 * @property int|null $pagslidas
 * @property int|null $usuario_id
 * @property int|null $exemplar_id
 *
 * @property Exemplar $exemplar
 * @property Usuario $usuario
 */
class Leitura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'leitura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pagslidas', 'usuario_id', 'exemplar_id'], 'integer'],
            [['status'], 'string', 'max' => 15],
            [['exemplar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Exemplar::className(), 'targetAttribute' => ['exemplar_id' => 'id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status' => 'Status',
            'pagslidas' => 'Pagslidas',
            'usuario_id' => 'Usuario ID',
            'exemplar_id' => 'Exemplar ID',
        ];
    }

    /**
     * Gets query for [[Exemplar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExemplar()
    {
        return $this->hasOne(Exemplar::className(), ['id' => 'exemplar_id']);
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
    }
}

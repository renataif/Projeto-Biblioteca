<?php

use yii\db\Migration;

/**
 * Class m210916_195115_usuario
 */
class m210916_195115_usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('usuario', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'login' => $this->string()->notNull(),
            'senha' => $this->string()->notNull(),
            'datanascimento' => $this->date()->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210916_195115_usuario cannot be reverted.\n";

        return false;
    }
    */
}

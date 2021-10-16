<?php

use yii\db\Migration;

/**
 * Class m210916_195519_genero
 */
class m210916_195519_genero extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('genero', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('genero');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210916_195519_genero cannot be reverted.\n";

        return false;
    }
    */
}

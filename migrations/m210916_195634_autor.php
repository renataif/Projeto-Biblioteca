<?php

use yii\db\Migration;

/**
 * Class m210916_195634_autor
 */
class m210916_195634_autor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('autor', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('autor');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210916_195634_autor cannot be reverted.\n";

        return false;
    }
    */
}

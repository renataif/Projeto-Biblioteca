<?php

use yii\db\Migration;

/**
 * Class m210916_195350_editora
 */
class m210916_195350_editora extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('editora', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('editora');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210916_195350_editora cannot be reverted.\n";

        return false;
    }
    */
}

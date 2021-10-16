<?php

use yii\db\Migration;

/**
 * Class m210927_211800_dropcolunaautor
 */
class m210927_211800_dropcolunaautor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `renata_projeto`.`livro` 
        DROP COLUMN `autor_id`,
        DROP INDEX `autor_fk` ;
        ;");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('autor_id', 'livro');
        $this->dropTable('livro');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210927_211800_dropcolunaautor cannot be reverted.\n";

        return false;
    }
    */
}

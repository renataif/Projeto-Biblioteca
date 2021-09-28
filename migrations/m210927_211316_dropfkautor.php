<?php

use yii\db\Migration;

/**
 * Class m210927_211316_dropfkautor
 */
class m210927_211316_dropfkautor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->execute("ALTER TABLE `renata_projeto`.`livro` 
                        DROP FOREIGN KEY `autor_fk`;");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('autor_fk', 'livro');
        $this->dropTable('livro');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210927_211316_dropfkautor cannot be reverted.\n";

        return false;
    }
    */
}

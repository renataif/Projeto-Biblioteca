<?php

use yii\db\Migration;

/**
 * Class m210929_175104_dropidgenerolivro
 */
class m210929_175104_dropidgenerolivro extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute(
            "ALTER TABLE `renata_projeto`.`livro` 
            DROP COLUMN `genero_id`,
            DROP INDEX `genero_fk` ;"
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('livro');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210929_175104_dropidgenerolivro cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

/**
 * Class m210927_221315_alterleituranome
 */
class m210927_221315_alterleituranome extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `renata_projeto`.`leitura` 
                        RENAME TO  `renata_projeto`.`historico` ;");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('leitura');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210927_221315_alterleituranome cannot be reverted.\n";

        return false;
    }
    */
}

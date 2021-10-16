<?php

use yii\db\Migration;

/**
 * Class m210929_171126_droppklivroautor
 */
class m210929_171126_droppklivroautor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `renata_projeto`.`livroautor` 
            CHANGE COLUMN `id` `id` INT(11) NULL ,
            DROP PRIMARY KEY;
            ;"
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('livroautor');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210929_171126_droppklivroautor cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

/**
 * Class m210929_170639_droppkhistorico
 */
class m210929_170639_droppkhistorico extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `renata_projeto`.`historico` 
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
        $this->dropTable('historico');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210929_170639_droppkhistorico cannot be reverted.\n";

        return false;
    }
    */
}

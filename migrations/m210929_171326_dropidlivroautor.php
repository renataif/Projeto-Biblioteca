<?php

use yii\db\Migration;

/**
 * Class m210929_171326_dropidlivroautor
 */
class m210929_171326_dropidlivroautor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `renata_projeto`.`livroautor` 
        DROP COLUMN `id`;"
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
        echo "m210929_171326_dropidlivroautor cannot be reverted.\n";

        return false;
    }
    */
}

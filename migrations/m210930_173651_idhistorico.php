<?php

use yii\db\Migration;

/**
 * Class m210930_173651_idhistorico
 */
class m210930_173651_idhistorico extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `renata_projeto`.`historico` 
        ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT AFTER `exemplar_id`,
        ADD PRIMARY KEY (`id`);;"
        );
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
        echo "m210930_173651_idhistorico cannot be reverted.\n";

        return false;
    }
    */
}

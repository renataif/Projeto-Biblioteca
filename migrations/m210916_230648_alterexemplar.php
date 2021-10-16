<?php

use yii\db\Migration;

/**
 * Class m210916_230648_alterexemplar
 */
class m210916_230648_alterexemplar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->execute("ALTER TABLE `renata_projeto`.`exemplar` 
        ADD COLUMN `editora_id` INT(11) NULL AFTER `livro_id`
        ;
        ALTER TABLE `renata_projeto`.`exemplar` 
        ADD CONSTRAINT `editora_fk`
          FOREIGN KEY (`editora_id`)
          REFERENCES `renata_projeto`.`editora` (`id`)
          ON DELETE RESTRICT
          ON UPDATE RESTRICT;");

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('editora_fk', 'exemplar');
        $this->dropTable('exemplar');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210916_230648_alterexemplar cannot be reverted.\n";

        return false;
    }
    */
}

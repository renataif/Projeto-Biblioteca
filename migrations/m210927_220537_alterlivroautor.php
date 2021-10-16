<?php

use yii\db\Migration;

/**
 * Class m210927_220537_alterlivroautor
 */
class m210927_220537_alterlivroautor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `renata_projeto`.`livroautor` 
        ADD CONSTRAINT `livrola_fk`
          FOREIGN KEY (`livrola_id`)
          REFERENCES `renata_projeto`.`livro` (`id`);");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('livrola_fk', 'livroautor');
        $this->dropTable('livroautor');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210927_220537_alterlivroautor cannot be reverted.\n";

        return false;
    }
    */
}

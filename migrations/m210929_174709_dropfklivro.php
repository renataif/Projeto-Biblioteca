<?php

use yii\db\Migration;

/**
 * Class m210929_174709_dropfklivro
 */
class m210929_174709_dropfklivro extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `renata_projeto`.`livro` 
            DROP FOREIGN KEY `genero_fk`;"
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('livro', 'genero_id');
        $this->dropTable('livro');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210929_174709_dropfklivro cannot be reverted.\n";

        return false;
    }
    */
}

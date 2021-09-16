<?php

use yii\db\Migration;

/**
 * Class m210916_195944_exemplar
 */
class m210916_195944_exemplar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('exemplar', [
            'id' => $this->primaryKey(),
            'edicao' => $this->integer()->notNull(),
            'numpaginas' => $this->integer()->notNull(),
            'anopublicacao' => $this->integer(4)->notNull(),
            'livro_id' => $this->integer()
        ]);
        $this->addForeignKey('livro_fk', 'exemplar', 'livro_id', 'livro', 'id', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('livro_fk', 'exemplar');
        $this->dropTable('exemplar');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210916_195944_exemplar cannot be reverted.\n";

        return false;
    }
    */
}

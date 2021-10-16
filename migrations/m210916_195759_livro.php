<?php

use yii\db\Migration;

/**
 * Class m210916_195759_livro
 */
class m210916_195759_livro extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('livro', [
            'id' => $this->primaryKey(),
            'nome' => $this->string()->notNull(),
            'ano_obra' => $this->integer(4)->notNull(),
            'sinopse' => $this->string()->notNull(),
            'classificacao' => $this->integer()->notNull(),
            'genero_id' => $this->integer(),
            'autor_id' => $this->integer()
        ]);
        $this->addForeignKey('genero_fk', 'livro', 'genero_id', 'genero', 'id', 'RESTRICT');
        $this->addForeignKey('autor_fk', 'livro', 'autor_id', 'autor', 'id', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('genero_fk', 'livro');
        $this->dropForeignKey('autor_fk', 'livro');
        $this->dropTable('livro');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210916_195759_livro cannot be reverted.\n";

        return false;
    }
    */
}

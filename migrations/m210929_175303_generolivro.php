<?php

use yii\db\Migration;

/**
 * Class m210929_175303_generolivro
 */
class m210929_175303_generolivro extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('livrogenero', [
            'genero_id' => $this->integer(),
            'livrog_id' => $this->integer()
        ]);
        $this->addForeignKey('genero_fk', 'livrogenero', 'genero_id', 'genero', 'id', 'RESTRICT');
        $this->addForeignKey('livrog_fk', 'livrogenero', 'livrog_id', 'livro', 'id', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('livrogenero');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210929_175303_generolivro cannot be reverted.\n";

        return false;
    }
    */
}

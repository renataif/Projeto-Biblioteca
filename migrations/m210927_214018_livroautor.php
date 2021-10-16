<?php

use yii\db\Migration;

/**
 * Class m210927_214018_livroautor
 */
class m210927_214018_livroautor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('livroautor', [
            'id' => $this->primaryKey(),
            'autor_id' => $this->integer(),
            'livrola_id' => $this->integer()
        ]);
        $this->addForeignKey('autor_fk', 'livroautor', 'autor_id', 'autor', 'id', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('autor_fk', 'livroautor');
        $this->dropTable('livroautor');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210927_214018_livroautor cannot be reverted.\n";

        return false;
    }
    */
}

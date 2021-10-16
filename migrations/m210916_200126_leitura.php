<?php

use yii\db\Migration;

/**
 * Class m210916_200126_leitura
 */
class m210916_200126_leitura extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->createTable('leitura', [
            'status' => $this->string(15),
            'pagslidas' => $this->integer(),
            'usuario_id' => $this->integer(),
            'exemplar_id' => $this->integer()
        ]);
        $this->addForeignKey('usuario_fk', 'leitura', 'usuario_id', 'usuario', 'id', 'RESTRICT');
        $this->addForeignKey('exemplar_fk', 'leitura', 'exemplar_id', 'exemplar', 'id', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('usuario_fk', 'leitura');
        $this->dropForeignKey('exemplar_fk', 'leitura');
        $this->dropTable('leitura');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210916_200126_leitura cannot be reverted.\n";

        return false;
    }
    */
}

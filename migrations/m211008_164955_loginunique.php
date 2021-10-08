<?php

use app\models\Usuario;
use yii\db\Migration;

/**
 * Class m211008_164955_loginunique
 */
class m211008_164955_loginunique extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE `renata_projeto`.`usuario` 
                        ADD UNIQUE INDEX `login_UNIQUE` (`login`);"
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('usuario', 'login');  
        $this->dropTable('usuario');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211008_164955_loginunique cannot be reverted.\n";

        return false;
    }
    */
}

<?php

use yii\db\Migration;

/**
 * Class m180613_161905_player
 */
class m180613_161905_player extends Migration
{



     public function up()
    {
        $this->createTable('players', [
            'id' => $this->primaryKey(),
            'p_name' => $this->string()->notNull(),
            'p_status' => $this->integer()->notNull()->defaultValue(0),
            'p_image' => $this->string(),
            'p_cat' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('players');
    }






















    // /**
    //  * {@inheritdoc}
    //  */
    // public function safeUp()
    // {

    // }

    // /**
    //  * {@inheritdoc}
    //  */
    // public function safeDown()
    // {
    //     echo "m180613_161905_player cannot be reverted.\n";

    //     return false;
    // }

    // /*
    // // Use up()/down() to run migration code without a transaction.
    // public function up()
    // {

    // }

    // public function down()
    // {
    //     echo "m180613_161905_player cannot be reverted.\n";

    //     return false;
    // }
    // */
}

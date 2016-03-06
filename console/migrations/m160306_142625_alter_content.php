<?php

use yii\db\Migration;

class m160306_142625_alter_content extends Migration
{
    public function up()
    {
        $this->execute("
        ALTER TABLE
            `base_content`
          DROP
            `target`;");
    }

    public function down()
    {
        echo "m160306_142625_alter_content cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

<?php

use yii\db\Migration;

class m160306_143141_manage_tree extends Migration
{
    public function up()
    {
        $this->execute("INSERT INTO `base_tree` (`id`, `root`, `lft`, `rgt`, `lvl`, `name`, `slug`, `link`, `description`, `icon`, `icon_type`, `active`, `selected`, `disabled`, `readonly`, `visible`, `collapsed`, `movable_u`, `movable_d`, `movable_l`, `movable_r`, `removable`, `removable_all`, `created`, `updated`) VALUES
(1, 1, 1, 2, 0, 'Menu', 'menu', '', '', '', 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, '2016-03-06 10:59:31', '2016-03-06 10:59:31'),
(2, 2, 1, 2, 0, 'City', 'city', '', '', '', 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, '2016-03-06 10:59:45', '2016-03-06 10:59:45'),
(3, 3, 1, 6, 0, 'Category', 'category', '', '', '', 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, '2016-03-06 10:59:54', '2016-03-06 10:59:54');");
    }

    public function down()
    {
        echo "m160306_143141_manage_tree cannot be reverted.\n";

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

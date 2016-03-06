<?php

use yii\db\Migration;

class m160306_152315_manage_pages extends Migration
{
    public function up()
    {
        $this->execute("INSERT INTO `base_content` (`id`, `type`, `title`, `slug`, `brief`, `description`, `body`, `date`, `end_date`, `sort`, `hits`, `status`, `created`, `updated`) VALUES (6, 1, 'History', 'history', '', '', '<p>Just add eggs and water saves in the amount of eggs used maintains the spongy.</p>\r\n\r\n<p>Consistency for long period just add eggs and water saves in the amount of eggs used maintains the consistency.Consistency for long period just add eggs and water saves in the amount of eggs used maintains the consistency.</p>\r\n\r\n<p>Just add eggs and water saves in the amount of eggs used maintains the spongy.</p>\r\n\r\n<p>Consistency for long period just add eggs and water saves in the amount of eggs used maintains the consistency.Consistency for long period just add eggs and water saves in the amount of eggs used maintains the consistency.</p>\r\n', NULL, NULL, 1, 0, NULL, '2016-03-06 15:17:22', '2016-03-06 15:17:22'),
(7, 1, 'Quality and Safety', 'quality-and-safety', '', '', '<p>Just add eggs and water saves in the amount of eggs used maintains the spongy.</p>\r\n\r\n<p>Consistency for long period just add eggs and water saves in the amount of eggs used maintains the consistency.Consistency for long period just add eggs and water saves in the amount of eggs used maintains the consistency.</p>\r\n\r\n<p>Just add eggs and water saves in the amount of eggs used maintains the spongy.</p>\r\n\r\n<p>Consistency for long period just add eggs and water saves in the amount of eggs used maintains the consistency.Consistency for long period just add eggs and water saves in the amount of eggs used maintains the consistency.</p>\r\n', NULL, NULL, 2, 0, NULL, '2016-03-06 15:19:37', '2016-03-06 15:21:39');");
    }

    public function down()
    {
        echo "m160306_152315_manage_pages cannot be reverted.\n";

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

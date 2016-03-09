<?php

use yii\db\Migration;

class m160309_103704_manage_users extends Migration
{
    public function up()
    {
        $this->execute("INSERT INTO `base_user` (`id`, `username`, `email`, `password`, `token`, `token_type`, `auth_key`, `sso_key`, `status`, `last_login`, `created`, `updated`) VALUES (2, 'consumer', 'a.sharaf+1@digitreeinc.com', '$2y$13$vYUnpLDdnkMWY0Hl7n5uN.rlG0XXgkSHVeE5d5WHWJP1agf.tWFlG', NULL, NULL, 'uXzGnxpXZhh1wGuPSio4WfGTvhr2huLS', NULL, 2, '2016-03-07 12:24:30', '2016-03-07 09:59:02', '2016-03-07 09:59:02');"
                . "INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES ('Consumer', '2', 1457353307);"
                . "INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/consumer-articles/*', 2, NULL, NULL, NULL, 1457353241, 1457353241),
('/consumer-inspirations/*', 2, NULL, NULL, NULL, 1457353241, 1457353241),
('/consumer-products/*', 2, NULL, NULL, NULL, 1457353241, 1457353241),
('Asterisk', 1, 'Full Access', NULL, NULL, 1424278062, 1424279109),
('Consumer', 1, 'Manage Consumer Pages', NULL, NULL, 1457344891, 1457344891);
INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Consumer', '/consumer-articles/*'),
('Consumer', '/consumer-inspirations/*'),
('Consumer', '/consumer-products/*');
");
    }

    public function down()
    {
        echo "m160309_103704_manage_users cannot be reverted.\n";

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

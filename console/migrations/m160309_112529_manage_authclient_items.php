<?php

use yii\db\Migration;

class m160309_112529_manage_authclient_items extends Migration
{
    public function up()
    {
        $this->execute("--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/consumer-articles/*', 2, NULL, NULL, NULL, 1457522288, 1457522288),
('/consumer-inspirations/*', 2, NULL, NULL, NULL, 1457522293, 1457522293),
('/consumer-products/*', 2, NULL, NULL, NULL, 1457522298, 1457522298),
('/service-articles/*', 2, NULL, NULL, NULL, 1457522487, 1457522487),
('/service-inspirations/*', 2, NULL, NULL, NULL, 1457522489, 1457522489),
('/service-products/*', 2, NULL, NULL, NULL, 1457522492, 1457522492),
('Consumer', 1, 'access all consumer actions', NULL, NULL, 1457522446, 1457522446),
('Service', 1, 'access all food service actions', NULL, NULL, 1457522533, 1457522533);
--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Consumer', '/consumer-articles/*'),
('Consumer', '/consumer-inspirations/*'),
('Consumer', '/consumer-products/*'),
('Service', '/service-articles/*'),
('Service', '/service-inspirations/*'),
('Service', '/service-products/*');");
    }

    public function down()
    {
        echo "m160309_112529_manage_authclient_items cannot be reverted.\n";

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

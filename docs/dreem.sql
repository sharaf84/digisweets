-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2016 at 04:55 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreem`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Asterisk', '1', 1424278268),
('Asterisk', '5', 1457537714),
('Consumer', '3', 1457531893),
('Service', '4', 1457531900);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1424278227, 1424278227),
('/consumer-articles/*', 2, NULL, NULL, NULL, 1457522288, 1457522288),
('/consumer-inspirations/*', 2, NULL, NULL, NULL, 1457522293, 1457522293),
('/consumer-products/*', 2, NULL, NULL, NULL, 1457522298, 1457522298),
('/media/*', 2, NULL, NULL, NULL, 1457522492, 1457522492),
('/service-articles/*', 2, NULL, NULL, NULL, 1457522487, 1457522487),
('/service-inspirations/*', 2, NULL, NULL, NULL, 1457522489, 1457522489),
('/service-products/*', 2, NULL, NULL, NULL, 1457522492, 1457522492),
('Asterisk', 1, 'Full Access', NULL, NULL, 1424278062, 1424279109),
('Consumer', 1, 'access all consumer actions', NULL, NULL, 1457522446, 1457522446),
('Service', 1, 'access all food service actions', NULL, NULL, 1457522533, 1457522533);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Asterisk', '/*'),
('Consumer', '/consumer-articles/*'),
('Consumer', '/consumer-inspirations/*'),
('Consumer', '/consumer-products/*'),
('Consumer', '/media/*'),
('Service', '/media/*'),
('Service', '/service-articles/*'),
('Service', '/service-inspirations/*'),
('Service', '/service-products/*');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `base_content`
--

CREATE TABLE `base_content` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `brief` tinytext NOT NULL,
  `description` text NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `sort` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `hits` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(3) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `base_content`
--

INSERT INTO `base_content` (`id`, `type`, `title`, `slug`, `brief`, `description`, `body`, `date`, `end_date`, `sort`, `hits`, `status`, `created`, `updated`) VALUES
(2, 2, 'consumer-test', 'consumer-test', '', '', '', NULL, NULL, 1, 0, NULL, '2016-03-03 12:10:48', '2016-03-03 12:10:48'),
(3, 3, 'service article test', 'service-article-test', '', '', '', NULL, NULL, 1, 0, NULL, '2016-03-03 12:12:48', '2016-03-03 12:12:48'),
(4, 5, 'service inspirations test', 'service-inspirations-test', 'Cake improver for all types of cakes acts as a whipping agent', '', '', NULL, NULL, 1, 0, NULL, '2016-03-03 12:20:55', '2016-03-30 12:19:30'),
(5, 4, 'consumer inspirations test', 'consumer-inspirations-test', '', '', '', NULL, NULL, 1, 0, NULL, '2016-03-03 12:21:49', '2016-03-03 12:21:49'),
(6, 1, 'History', 'history', '', '', '<p>Just add eggs and water saves in the amount of eggs used maintainhs the spongy.</p> \r\n				<p>Consistency for long period Just add eggs andwater saves in the amount of eggs used maintainsthe spongy consistency for long period Consistency for long period Just add eggs and water saves in the amount of eggs used maintains the spongy consistency for long period.\r\n				Just add eggs and water saves in the amount of eggs used maintainhs the spongy. </p>\r\n				<p>Consistency for long period Just add eggs andwater saves in the amount of eggs used maintainsthe spongy consistency for long period Consistency for long period Just add eggs and water saves in the amount of eggs used maintains the spongy consistency for long period . </p>', NULL, NULL, 1, 0, NULL, '2016-03-06 15:17:22', '2016-03-28 11:43:57'),
(7, 1, 'Quality and Safety', 'quality-and-safety', '', '', '<p>Just add eggs and water saves in the amount of eggs used maintains the spongy.</p>\r\n\r\n<p>Consistency for long period just add eggs and water saves in the amount of eggs used maintains the consistency.Consistency for long period just add eggs and water saves in the amount of eggs used maintains the consistency.</p>\r\n\r\n<p>Just add eggs and water saves in the amount of eggs used maintains the spongy.</p>\r\n\r\n<p>Consistency for long period just add eggs and water saves in the amount of eggs used maintains the consistency.Consistency for long period just add eggs and water saves in the amount of eggs used maintains the consistency.</p>\r\n', NULL, NULL, 2, 0, NULL, '2016-03-06 15:19:37', '2016-03-06 15:21:39'),
(9, 3, 'Home Sweet Home dessert festival set for April 12', 'home-sweet-home-dessert-festival-set-for-april-12', 'Samantha Mendoza, pastry chef at Triniti restaurant, will participate in Home Sweet Home, a dessert \r\n									festival and competition on April 12 at St. Arnold Brewing Company.  \r\n									he sweets extravaganza is a fundraiser for the Harris County Dom', '', '<p>Samantha Mendoza, pastry chef at Triniti restaurant, will participate in Home Sweet Home, a dessert \r\n										festival and competition on April 12 at St. Arnold Brewing Company.  \r\n										he sweets extravaganza is a fundraiser for the Harris County Domestic Violence Coordinating \r\n										Council. Samantha Mendoza, pastry chef at Triniti restaurant, will participate in Home Sweet Home, a dessert \r\n										festival and competition on April 12 at St. Arnold Brewing Company.  \r\n										he sweets extravaganza is a fundraiser for the Harris County Domestic Violence Coordinating \r\n										Council.</p>\r\n										<p>Samantha Mendoza, pastry chef at Triniti restaurant, will participate in Home Sweet Home, a dessert \r\n										festival and competition on April 12 at St. Arnold Brewing Company.  \r\n										he sweets extravaganza is a fundraiser for the Harris County Domestic Violence Coordinating \r\n										Council.</p>', NULL, NULL, 2, 0, NULL, '2016-03-30 09:55:57', '2016-03-30 10:22:18'),
(10, 5, 'A fantastic title', 'a-fantastic-title', 'Cake improver for all types of cakes acts as a whipping agent', '', '<p>Consistency for long period Just add eggs andwater saves in the amount of eggs used maintains the spongy consistency for long period Consistency for long period Just add eggs and water saves in the amount of eggs used maintains the spongy consistency for long period.</p>\r\n', NULL, NULL, 2, 0, NULL, '2016-03-30 12:16:51', '2016-03-30 14:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `base_media`
--

CREATE TABLE `base_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED DEFAULT NULL,
  `model` varchar(64) NOT NULL,
  `path` varchar(255) NOT NULL,
  `filename` varchar(128) NOT NULL,
  `mime` varchar(128) NOT NULL,
  `size` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `embed` text NOT NULL,
  `status` tinyint(3) UNSIGNED DEFAULT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL,
  `sort` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `base_media`
--

INSERT INTO `base_media` (`id`, `model_id`, `model`, `path`, `filename`, `mime`, `size`, `title`, `description`, `link`, `embed`, `status`, `type`, `sort`, `created`, `updated`) VALUES
(1, 6, 'Page', '/shared/uploads/2016/03/28/', '4ksy_wNghKB8cVYS.jpeg', 'image/jpeg', 27236, '', '', '', '', NULL, NULL, 1, '2016-03-28 11:56:56', '2016-03-28 11:56:56'),
(2, 6, 'Page', '/shared/uploads/2016/03/28/', '7FzP68193J0TU2TI.jpeg', 'image/jpeg', 27236, '', '', '', '', NULL, NULL, 2, '2016-03-28 11:56:57', '2016-03-28 11:56:57'),
(4, 8, 'Page', '/shared/uploads/2016/03/28/', 'JxGKww0HiFZiKOtp.jpeg', 'image/jpeg', 131257, '', '', '', '', NULL, NULL, 3, '2016-03-28 12:27:13', '2016-03-28 12:27:13'),
(5, 8, 'Page', '/shared/uploads/2016/03/28/', 'omlp7D4e1tZmbCkV.jpeg', 'image/jpeg', 131257, '', '', '', '', NULL, NULL, 4, '2016-03-28 12:27:13', '2016-03-28 12:27:13'),
(7, 5, 'ServiceProduct', '/shared/uploads/2016/03/28/', 'ZKwt--HgA68weIgM.jpeg', 'image/jpeg', 95814, '', '', '', '', NULL, NULL, 6, '2016-03-28 16:01:04', '2016-03-28 16:01:04'),
(8, 7, 'ServiceProduct', '/shared/uploads/2016/03/28/', 't4DLO1hrwGvkXHbL.jpeg', 'image/jpeg', 95814, '', '', '', '', NULL, NULL, 7, '2016-03-28 16:01:11', '2016-03-28 16:01:11'),
(9, 10, 'ServiceProduct', '/shared/uploads/2016/03/28/', 'ayNbQWtn3ETYtg5O.jpeg', 'image/jpeg', 131257, '', '', '', '', NULL, NULL, 8, '2016-03-28 16:01:18', '2016-03-28 16:01:18'),
(10, 2, 'ServiceProduct', '/shared/uploads/2016/03/28/', 'zPKsE5j_B20H6nbt.jpeg', 'image/jpeg', 131257, '', '', '', '', NULL, NULL, 9, '2016-03-28 16:15:33', '2016-03-28 16:15:33'),
(12, 11, 'ServiceProduct', '/shared/uploads/2016/03/29/', '2VBMHit-ZZdc6lDj.jpeg', 'image/jpeg', 95814, '', '', '', '', NULL, NULL, 11, '2016-03-29 10:44:20', '2016-03-29 10:44:20'),
(13, 12, 'ServiceProduct', '/shared/uploads/2016/03/29/', 'icoDeQKD2lYK5f1W.jpeg', 'image/jpeg', 131257, '', '', '', '', NULL, NULL, 12, '2016-03-29 10:44:34', '2016-03-29 10:44:34'),
(14, 13, 'ServiceProduct', '/shared/uploads/2016/03/29/', 'BvBiDVvnvZj8_5Fn.jpeg', 'image/jpeg', 131257, '', '', '', '', NULL, NULL, 13, '2016-03-29 10:45:30', '2016-03-29 10:45:30'),
(17, 9, 'ServiceArticle', '/shared/uploads/2016/03/30/', 'BPiAy8sy74YEzcuu.jpeg', 'image/jpeg', 95814, '', '', '', '', NULL, NULL, 14, '2016-03-30 09:56:12', '2016-03-30 09:56:12'),
(18, 5, 'Category', '/shared/uploads/2016/03/30/', 'oJG9ruoOyv_MKz8W.png', 'image/png', 343153, '', '', '', '', NULL, NULL, 15, '2016-03-30 11:33:10', '2016-03-30 11:33:10'),
(19, 5, 'Category', '/shared/uploads/2016/03/30/', 'OvA5lWqKFwcIF86o.png', 'image/png', 343153, '', '', '', '', NULL, NULL, 16, '2016-03-30 11:33:10', '2016-03-30 11:33:10'),
(20, 10, 'ServiceInspiration', '/shared/uploads/2016/03/30/', '4eul_4CUImGfjmqp.jpeg', 'image/jpeg', 21779, '', '', '', '', NULL, NULL, 22, '2016-03-30 12:17:27', '2016-03-30 12:17:27'),
(21, 4, 'ServiceInspiration', '/shared/uploads/2016/03/30/', 'YCw36aiOpyCMwKW5.jpeg', 'image/jpeg', 131257, '', '', '', '', NULL, NULL, 18, '2016-03-30 12:17:57', '2016-03-30 12:17:57'),
(22, 4, 'ServiceInspiration', '/shared/uploads/2016/03/30/', 'uAPAwMIYgfxllU5U.jpeg', 'image/jpeg', 95814, '', '', '', '', NULL, NULL, 17, '2016-03-30 12:18:49', '2016-03-30 12:18:49'),
(30, 14, 'ServiceProduct', '/shared/uploads/2016/03/30/', '4R-bmjZEKKGl23iG.jpeg', 'image/jpeg', 177998, '', '', '', '', NULL, NULL, 19, '2016-03-30 12:57:34', '2016-03-30 12:57:34'),
(32, 6, 'Category', '/shared/uploads/2016/03/30/', 'p6qTJrLj2dEczLVG.jpeg', 'image/jpeg', 21779, '', '', '', '', NULL, NULL, 20, '2016-03-30 13:19:00', '2016-03-30 13:19:00'),
(33, 10, 'ServiceInspiration', '/shared/uploads/2016/03/30/', 'KxErg2p3R9F7t_7K.jpeg', 'image/jpeg', 27236, '', '', '', '', NULL, NULL, 21, '2016-03-30 14:06:02', '2016-03-30 14:06:02'),
(34, 4, 'ServiceInspiration', '/shared/uploads/2016/03/30/', '6vwx83SOx3RNQdJA.jpeg', 'image/jpeg', 27236, '', '', '', '', NULL, NULL, 23, '2016-03-30 14:06:16', '2016-03-30 14:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `base_messages`
--

CREATE TABLE `base_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `sender_id` int(10) UNSIGNED DEFAULT NULL,
  `receiver_id` int(10) UNSIGNED DEFAULT NULL,
  `model_id` int(10) UNSIGNED DEFAULT NULL,
  `model` varchar(64) NOT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `base_settings`
--

CREATE TABLE `base_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(64) NOT NULL,
  `value` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `base_settings`
--

INSERT INTO `base_settings` (`id`, `key`, `value`, `description`, `created`, `updated`) VALUES
(1, 'title', 'Digitree CMS', 'Application Url Title', '2015-05-19 15:23:26', '2015-05-19 16:17:17'),
(2, 'meta_keywords', 'Tss, Store, Articles', '', '0000-00-00 00:00:00', '2015-08-25 11:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `base_tree`
--

CREATE TABLE `base_tree` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Unique tree node identifier',
  `root` int(10) UNSIGNED DEFAULT NULL COMMENT 'Tree root identifier',
  `lft` int(11) NOT NULL COMMENT 'Nested set left property',
  `rgt` int(11) NOT NULL COMMENT 'Nested set right property',
  `lvl` smallint(6) NOT NULL COMMENT 'Nested set level / depth',
  `name` varchar(255) NOT NULL COMMENT 'The tree node name / label',
  `slug` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) DEFAULT NULL COMMENT 'The icon to use for the node',
  `icon_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Icon Type: 1 = CSS Class, 2 = Raw Markup',
  `active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Whether the node is active (will be set to false on deletion)',
  `selected` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Whether the node is selected/checked by default',
  `disabled` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Whether the node is enabled',
  `readonly` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Whether the node is read only (unlike disabled - will allow toolbar actions)',
  `visible` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Whether the node is visible',
  `collapsed` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Whether the node is collapsed by default',
  `movable_u` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Whether the node is movable one position up',
  `movable_d` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Whether the node is movable one position down',
  `movable_l` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Whether the node is movable to the left (from sibling to parent)',
  `movable_r` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Whether the node is movable to the right (from sibling to child)',
  `removable` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Whether the node is removable (any children below will be moved as siblings before deletion)',
  `removable_all` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Whether the node is removable along with descendants',
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `base_tree`
--

INSERT INTO `base_tree` (`id`, `root`, `lft`, `rgt`, `lvl`, `name`, `slug`, `link`, `description`, `icon`, `icon_type`, `active`, `selected`, `disabled`, `readonly`, `visible`, `collapsed`, `movable_u`, `movable_d`, `movable_l`, `movable_r`, `removable`, `removable_all`, `created`, `updated`) VALUES
(1, 1, 1, 2, 0, 'Menu', 'menu', '', '', '', 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, '2016-03-06 10:59:31', '2016-03-06 10:59:31'),
(2, 2, 1, 2, 0, 'City', 'city', '', '', '', 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, '2016-03-06 10:59:45', '2016-03-06 10:59:45'),
(3, 3, 1, 6, 0, 'Category', 'category', '', '', '', 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, '2016-03-06 10:59:54', '2016-03-06 10:59:54'),
(5, 3, 2, 3, 1, 'Spong Cake Mix (Plain)', 'spong-cake-mix-plain', '', '', '', 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, '2016-03-06 11:00:25', '2016-03-06 11:00:25'),
(6, 3, 4, 5, 1, 'Dona Gel', 'dona-gel', '', '', '', 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, '2016-03-06 11:48:39', '2016-03-06 11:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `base_user`
--

CREATE TABLE `base_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` char(123) NOT NULL,
  `token` char(123) DEFAULT NULL,
  `token_type` tinyint(3) UNSIGNED DEFAULT NULL,
  `auth_key` char(123) DEFAULT NULL,
  `sso_key` char(123) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `base_user`
--

INSERT INTO `base_user` (`id`, `username`, `email`, `password`, `token`, `token_type`, `auth_key`, `sso_key`, `status`, `last_login`, `created`, `updated`) VALUES
(1, 'sharaf', 'a.sharaf@digitreeinc.com', '$2y$13$ga/hQeBy4AcDcNuijqMaFeDPuAh41/mbyZUuJ5QAQgVO4amkDwNJi', NULL, NULL, 'AMITSMZCAjVVktBlAx4sZDuCAVSZp3H2', NULL, 2, '2016-03-24 09:34:10', NULL, '2015-09-09 12:55:21'),
(3, 'consumer', 'dalia@adigitreeinc.com', '$2y$13$R45eFMloY8X2zPRF2MTv7uRqtxxFHmQrCQwToFPMvAazzsPUIS9pO', NULL, NULL, 'Vri48kKHWj7BAiMhLxMj7dx70FLaNrkh', NULL, 2, '2016-03-10 09:16:05', '2016-03-09 11:30:48', '2016-03-09 15:34:41'),
(4, 'service', 'test_dalia@digitreeinc.com', '$2y$13$p1Oa60r2sriH/EUBVEOKsuPNuEMS0KtGGEqQD1u7DU/ZGKP0Y0hFu', NULL, NULL, 'wCqUX_BuM2y2gCJzbowml4qpNKLTcRhU', NULL, 2, '2016-03-10 09:17:07', '2016-03-09 11:31:37', '2016-03-09 11:31:37'),
(5, 'dalia', 'dalia@digitreeinc.com', '$2y$13$QCYlOx4unRIWCBrXv.y2l.GEiatkVAqtiPcFMkY2OQcrftudd.jq2', NULL, NULL, 'mpngsX0EO8wH8ZDMTP-a2j1lzYpZLATw', NULL, 2, '2016-03-28 11:23:50', '2016-03-09 15:34:55', '2016-03-09 15:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `item_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` decimal(6,2) NOT NULL DEFAULT '0.00',
  `qty` smallint(6) NOT NULL DEFAULT '0',
  `status` tinyint(3) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hits`
--

CREATE TABLE `hits` (
  `hit_id` int(11) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `target_group` varchar(255) NOT NULL,
  `target_pk` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `meta_tags`
--

CREATE TABLE `meta_tags` (
  `id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `model_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meta_tags`
--

INSERT INTO `meta_tags` (`id`, `model`, `model_id`, `title`, `keywords`, `description`, `created`, `updated`) VALUES
(2, 'ConsumerArticle', 2, '', '', '', '2016-03-03 12:10:48', '2016-03-03 12:10:48'),
(3, 'ServiceArticle', 3, '', '', '', '2016-03-03 12:12:49', '2016-03-03 12:12:49'),
(4, 'ServiceInspiration', 4, '', '', '', '2016-03-03 12:20:55', '2016-03-30 12:19:30'),
(5, 'ConsumerInspiration', 5, '', '', '', '2016-03-03 12:21:49', '2016-03-03 12:21:49'),
(6, 'ConsumerProduct', 9, '', '', '', '2016-03-06 11:56:25', '2016-03-06 11:56:25'),
(7, 'Page', 6, '', '', '', '2016-03-06 15:17:22', '2016-03-28 11:43:57'),
(8, 'Page', 7, '', '', '', '2016-03-06 15:19:37', '2016-03-06 15:21:39'),
(9, 'Page', 8, '', '', '', '2016-03-28 12:22:01', '2016-03-28 12:22:01'),
(10, 'ServiceProduct', 10, '', '', '', '2016-03-29 10:35:03', '2016-03-29 10:35:03'),
(11, 'ServiceProduct', 11, '', '', '', '2016-03-29 10:43:50', '2016-03-29 10:43:50'),
(12, 'ServiceProduct', 12, '', '', '', '2016-03-29 10:44:08', '2016-03-29 10:44:08'),
(13, 'ServiceProduct', 13, '', '', '', '2016-03-29 10:45:14', '2016-03-29 10:45:14'),
(14, 'ServiceProduct', 14, '', '', '', '2016-03-29 16:54:30', '2016-03-29 16:54:30'),
(15, 'ServiceArticle', 9, '', '', '', '2016-03-30 09:55:57', '2016-03-30 10:22:18'),
(16, 'ServiceInspiration', 10, '', '', '', '2016-03-30 12:16:51', '2016-03-30 14:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1456935312),
('m160302_154542_init_schema', 1456935322),
('m160306_142625_alter_content', 1456935323),
('m160306_143141_manage_tree', 1456935323),
('m160306_152315_manage_pages', 1456935323),
('m160309_112529_manage_authclient_items', 1457531585);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `comment` text NOT NULL,
  `payment_method` tinyint(3) UNSIGNED DEFAULT NULL,
  `amount` decimal(8,2) UNSIGNED DEFAULT '0.00',
  `token` char(123) DEFAULT NULL,
  `new` tinyint(1) UNSIGNED DEFAULT NULL,
  `status` tinyint(3) UNSIGNED DEFAULT NULL,
  `paid` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `gateway` varchar(45) DEFAULT NULL,
  `transaction_reference` varchar(45) DEFAULT NULL,
  `response` text,
  `status` varchar(45) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `target` tinyint(3) UNSIGNED DEFAULT NULL,
  `code` varchar(32) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `advantages` text,
  `directions` text,
  `new` tinyint(4) DEFAULT NULL,
  `price` decimal(6,2) NOT NULL DEFAULT '0.00',
  `qty` smallint(6) NOT NULL DEFAULT '0',
  `sold` int(10) UNSIGNED DEFAULT '0',
  `brief` tinytext NOT NULL,
  `description` text NOT NULL,
  `body` text NOT NULL,
  `featured` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `sort` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(3) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `target`, `code`, `title`, `slug`, `advantages`, `directions`, `new`, `price`, `qty`, `sold`, `brief`, `description`, `body`, `featured`, `sort`, `status`, `created`, `updated`) VALUES
(9, 6, 1, 't44t', 'frgrfdr', 'frgrfdr', NULL, NULL, NULL, '44.00', 43, 0, '', '', '', 0, 8, NULL, '2016-03-06 11:56:25', '2016-03-06 11:56:25'),
(10, 5, 2, '5646', 'fantastic fantasy', 'fantastic-fantasy', NULL, NULL, NULL, '987.00', 98, 0, '', '', '', 0, 8, NULL, '2016-03-29 10:35:03', '2016-03-29 10:35:03'),
(11, 6, 2, '4864', 'hjkgebrjhgk', 'hjkgebrjhgk', NULL, NULL, NULL, '4545.00', 2, 0, '', '', '', 0, 9, NULL, '2016-03-29 10:43:50', '2016-03-29 10:43:50'),
(12, 5, 2, '154145', 'jkbhjd', 'jkbhjd', NULL, NULL, NULL, '56.00', 2, 0, '', '', '', 0, 10, NULL, '2016-03-29 10:44:08', '2016-03-29 10:44:08'),
(13, 5, 2, '45254', 'ndfhndjytdj', 'ndfhndjytdj', NULL, NULL, NULL, '56.00', 7, 0, '', '', '', 0, 11, NULL, '2016-03-29 10:45:14', '2016-03-29 10:45:14'),
(14, 5, 2, '48558', 'rewsgrehg', 'rewsgrehg', '<p>Just add eggs and water saves in the amountof eggs used maintainhs the spongy consistency for long period</p>\r\n', '<p>Just add eggs and water saves in the amountof eggs used maintainhs the spongy consistency for long period</p>\r\n', 1, '9999.99', 4545, 0, '', '', '', 0, 12, NULL, '2016-03-29 16:54:30', '2016-03-29 16:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `reciepe`
--

CREATE TABLE `reciepe` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `element` varchar(100) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reciepe`
--

INSERT INTO `reciepe` (`id`, `product_id`, `element`, `amount`, `created`, `updated`) VALUES
(1, 10, 'eggs', '120g', '2016-03-29 14:25:01', '2016-03-29 14:23:07'),
(2, 9, 'flour', '20g', '2016-03-29 16:38:44', '2016-03-29 16:38:44'),
(3, 14, 'Eggs', '120g', '2016-03-29 16:55:27', '2016-03-29 16:55:27'),
(4, 14, 'Flour', '50g', '2016-03-29 16:55:52', '2016-03-29 16:55:52'),
(5, 14, 'Sugar', '40g', '2016-03-29 16:56:06', '2016-03-29 16:56:06'),
(6, 14, 'Improver', '340g', '2016-03-29 16:56:29', '2016-03-29 16:56:29'),
(7, 14, 'Baking powder', '400g', '2016-03-29 16:56:53', '2016-03-29 16:56:53'),
(8, 14, 'Baking powder', '1g', '2016-03-29 16:57:07', '2016-03-29 16:57:07'),
(9, 14, 'Water', '100g', '2016-03-29 16:57:16', '2016-03-29 16:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `translations_with_string`
--

CREATE TABLE `translations_with_string` (
  `id` int(11) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `model_id` int(11) NOT NULL,
  `attribute` varchar(100) NOT NULL,
  `lang` varchar(6) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `translations_with_text`
--

CREATE TABLE `translations_with_text` (
  `id` int(11) NOT NULL,
  `table_name` varchar(100) NOT NULL,
  `model_id` int(11) NOT NULL,
  `attribute` varchar(100) NOT NULL,
  `lang` varchar(6) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `base_content`
--
ALTER TABLE `base_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `base_media`
--
ALTER TABLE `base_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `base_messages`
--
ALTER TABLE `base_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_base_messages_1` (`parent_id`),
  ADD KEY `fk_base_messages_2` (`sender_id`),
  ADD KEY `fk_base_messages_3` (`receiver_id`);

--
-- Indexes for table `base_settings`
--
ALTER TABLE `base_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key_UNIQUE` (`key`);

--
-- Indexes for table `base_tree`
--
ALTER TABLE `base_tree`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_tree_NK1` (`root`),
  ADD KEY `tbl_tree_NK2` (`lft`),
  ADD KEY `tbl_tree_NK3` (`rgt`),
  ADD KEY `tbl_tree_NK4` (`lvl`),
  ADD KEY `tbl_tree_NK5` (`active`);

--
-- Indexes for table `base_user`
--
ALTER TABLE `base_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `token_UNIQUE` (`token`),
  ADD UNIQUE KEY `signature_UNIQUE` (`auth_key`),
  ADD UNIQUE KEY `login_token_UNIQUE` (`sso_key`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_1_idx` (`order_id`),
  ADD KEY `fk_cart_2_idx` (`item_id`);

--
-- Indexes for table `hits`
--
ALTER TABLE `hits`
  ADD PRIMARY KEY (`hit_id`);

--
-- Indexes for table `meta_tags`
--
ALTER TABLE `meta_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `object` (`model`,`model_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_1_idx` (`user_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_payment_1_idx` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_2_idx` (`category_id`);

--
-- Indexes for table `reciepe`
--
ALTER TABLE `reciepe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reciepe_ibfk_1` (`product_id`);

--
-- Indexes for table `translations_with_string`
--
ALTER TABLE `translations_with_string`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute` (`attribute`),
  ADD KEY `table_name` (`table_name`);

--
-- Indexes for table `translations_with_text`
--
ALTER TABLE `translations_with_text`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute` (`attribute`),
  ADD KEY `table_name` (`table_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `base_content`
--
ALTER TABLE `base_content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `base_media`
--
ALTER TABLE `base_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `base_messages`
--
ALTER TABLE `base_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `base_settings`
--
ALTER TABLE `base_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `base_tree`
--
ALTER TABLE `base_tree`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Unique tree node identifier', AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `base_user`
--
ALTER TABLE `base_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hits`
--
ALTER TABLE `hits`
  MODIFY `hit_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `reciepe`
--
ALTER TABLE `reciepe`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `translations_with_string`
--
ALTER TABLE `translations_with_string`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `translations_with_text`
--
ALTER TABLE `translations_with_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reciepe`
--
ALTER TABLE `reciepe`
  ADD CONSTRAINT `reciepe_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

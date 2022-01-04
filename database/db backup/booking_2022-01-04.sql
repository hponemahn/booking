# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.30)
# Database: booking
# Generation Time: 2022-01-04 1:52:00 AM +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bookings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bookings`;

CREATE TABLE `bookings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(4) DEFAULT NULL,
  `is_confirm` tinyint(4) DEFAULT '0',
  `nexmo_request_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_id` tinyint(4) DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_done` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table data_rows
# ------------------------------------------------------------

DROP TABLE IF EXISTS `data_rows`;

CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`)
VALUES
	(1,1,'id','number','ID',1,0,0,0,0,0,'{}',1),
	(2,1,'name','text','Name',0,1,1,0,1,1,'{}',2),
	(3,1,'email','text','Email',0,1,1,0,1,1,'{}',3),
	(4,1,'password','password','Password',0,0,0,0,1,0,'{}',4),
	(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,'{}',5),
	(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,'{}',17),
	(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',7),
	(8,1,'avatar','image','Avatar',0,0,0,0,0,0,'{}',10),
	(11,1,'settings','hidden','Settings',0,0,0,0,0,0,'{}',14),
	(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),
	(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),
	(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),
	(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),
	(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),
	(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),
	(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),
	(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),
	(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),
	(21,1,'role_id','text','Role',0,0,0,0,0,0,'{}',11),
	(22,1,'phone_number','text','Phone Number',0,1,1,0,1,1,'{}',6),
	(23,1,'email_verified_at','timestamp','Email Verified At',0,0,0,0,0,0,'{}',8),
	(24,1,'phone_verified_at','timestamp','Phone Verified At',0,0,0,0,0,0,'{}',9),
	(25,1,'township_id','text','Township Id',0,0,0,0,0,0,'{}',12),
	(26,1,'address','text','Address',0,1,1,0,1,1,'{}',13),
	(27,4,'id','text','Id',1,0,0,0,0,0,'{}',1),
	(28,4,'user_id','text','User Id',0,0,0,0,0,0,'{}',2),
	(29,4,'is_confirm','text','Is Confirm',0,0,0,0,0,0,'{}',3),
	(30,4,'nexmo_request_id','text','Nexmo Request Id',0,0,0,0,0,0,'{}',4),
	(31,4,'services','text','Services',0,1,1,1,1,1,'{}',5),
	(32,4,'date','text','Date',0,1,1,1,1,1,'{}',6),
	(33,4,'time_id','text','Time Id',0,0,0,0,0,0,'{}',7),
	(34,4,'message','text','Message',0,1,1,1,1,1,'{}',8),
	(35,4,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',9),
	(36,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',10),
	(40,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,0,1,1,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"0\",\"taggable\":\"0\"}',16),
	(41,1,'user_hasone_township_relationship','relationship','townships',0,1,1,1,1,1,'{\"model\":\"App\\\\Township\",\"table\":\"townships\",\"type\":\"hasOne\",\"column\":\"id\",\"key\":\"id\",\"label\":\"township\",\"pivot_table\":\"bookings\",\"pivot\":\"0\",\"taggable\":\"0\"}',15);

/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table data_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `data_types`;

CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`)
VALUES
	(1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','\\App\\Http\\Controllers\\Voyager\\UserController',NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}','2020-04-22 03:50:13','2020-04-22 07:15:57'),
	(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2020-04-22 03:50:13','2020-04-22 03:50:13'),
	(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2020-04-22 03:50:13','2020-04-22 03:50:13'),
	(4,'bookings','bookings','Booking','Bookings','voyager-logbook','App\\Book',NULL,'App\\Http\\Controllers\\Voyager\\BookingController',NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}','2020-04-22 06:14:50','2020-04-22 14:09:12');

/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table disabled_count
# ------------------------------------------------------------

DROP TABLE IF EXISTS `disabled_count`;

CREATE TABLE `disabled_count` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `day` varchar(30) DEFAULT NULL,
  `time_id` tinyint(11) DEFAULT NULL,
  `count` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `disabled_count` WRITE;
/*!40000 ALTER TABLE `disabled_count` DISABLE KEYS */;

INSERT INTO `disabled_count` (`id`, `day`, `time_id`, `count`, `created_at`, `updated_at`)
VALUES
	(1,'08/05/2020',1,1,'2020-05-07 05:37:08','2020-05-07 05:37:08'),
	(2,'09/05/2020',2,1,'2020-05-07 05:49:14','2020-05-07 05:49:14');

/*!40000 ALTER TABLE `disabled_count` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table disabled_days
# ------------------------------------------------------------

DROP TABLE IF EXISTS `disabled_days`;

CREATE TABLE `disabled_days` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `day` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table menu_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menu_items`;

CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`)
VALUES
	(1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2020-04-22 03:50:14','2020-04-22 03:50:14','voyager.dashboard',NULL),
	(2,1,'Media','','_self','voyager-images',NULL,NULL,5,'2020-04-22 03:50:14','2020-04-22 03:50:14','voyager.media.index',NULL),
	(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2020-04-22 03:50:14','2020-04-23 05:00:27','voyager.users.index',NULL),
	(4,1,'Roles','','_self','voyager-lock',NULL,NULL,4,'2020-04-22 03:50:14','2020-04-23 05:00:27','voyager.roles.index',NULL),
	(5,1,'Tools','','_self','voyager-tools',NULL,NULL,6,'2020-04-22 03:50:14','2020-04-23 05:00:19',NULL,NULL),
	(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2020-04-22 03:50:14','2020-04-23 05:00:19','voyager.menus.index',NULL),
	(7,1,'Database','','_self','voyager-data',NULL,5,2,'2020-04-22 03:50:14','2020-04-23 05:00:19','voyager.database.index',NULL),
	(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2020-04-22 03:50:14','2020-04-23 05:00:19','voyager.compass.index',NULL),
	(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2020-04-22 03:50:14','2020-04-23 05:00:19','voyager.bread.index',NULL),
	(10,1,'Settings','','_self','voyager-settings',NULL,NULL,7,'2020-04-22 03:50:14','2020-04-23 05:00:19','voyager.settings.index',NULL),
	(11,1,'Hooks','','_self','voyager-hook',NULL,5,5,'2020-04-22 03:50:14','2020-04-23 05:00:19','voyager.hooks',NULL),
	(12,1,'Bookings','','_self','voyager-logbook',NULL,NULL,2,'2020-04-22 06:14:50','2020-04-23 05:00:24','voyager.bookings.index',NULL);

/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'admin','2020-04-22 03:50:14','2020-04-22 03:50:14');

/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2019_08_19_000000_create_failed_jobs_table',1),
	(3,'2020_04_20_024240_create_bookings_table',1),
	(4,'2020_04_20_150732_create_services_table',1),
	(5,'2020_04_20_151607_create_townships_table',1),
	(6,'2016_01_01_000000_add_voyager_user_fields',2),
	(7,'2016_01_01_000000_create_data_types_table',2),
	(8,'2016_05_19_173453_create_menu_table',2),
	(9,'2016_10_21_190000_create_roles_table',2),
	(10,'2016_10_21_190000_create_settings_table',2),
	(11,'2016_11_30_135954_create_permission_table',2),
	(12,'2016_11_30_141208_create_permission_role_table',2),
	(13,'2016_12_26_201236_data_types__add__server_side',2),
	(14,'2017_01_13_000000_add_route_to_menu_items_table',2),
	(15,'2017_01_14_005015_create_translations_table',2),
	(16,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',2),
	(17,'2017_03_06_000000_add_controller_to_data_types_table',2),
	(18,'2017_04_21_000000_add_order_to_data_rows_table',2),
	(19,'2017_07_05_210000_add_policyname_to_data_types_table',2),
	(20,'2017_08_05_000000_add_group_to_settings_table',2),
	(21,'2017_11_26_013050_add_user_role_relationship',2),
	(22,'2017_11_26_015000_create_user_roles_table',2),
	(23,'2018_03_11_000000_add_user_settings',2),
	(24,'2018_03_14_000000_add_details_to_data_types_table',2),
	(25,'2018_03_16_000000_make_settings_value_nullable',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permission_role
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;

INSERT INTO `permission_role` (`permission_id`, `role_id`)
VALUES
	(1,1),
	(2,1),
	(3,1),
	(4,1),
	(5,1),
	(6,1),
	(7,1),
	(8,1),
	(9,1),
	(10,1),
	(11,1),
	(12,1),
	(13,1),
	(14,1),
	(15,1),
	(16,1),
	(17,1),
	(18,1),
	(19,1),
	(20,1),
	(21,1),
	(22,1),
	(23,1),
	(24,1),
	(25,1),
	(26,1),
	(27,1),
	(28,1),
	(29,1),
	(30,1),
	(31,1);

/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`)
VALUES
	(1,'browse_admin',NULL,'2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(2,'browse_bread',NULL,'2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(3,'browse_database',NULL,'2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(4,'browse_media',NULL,'2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(5,'browse_compass',NULL,'2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(6,'browse_menus','menus','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(7,'read_menus','menus','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(8,'edit_menus','menus','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(9,'add_menus','menus','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(10,'delete_menus','menus','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(11,'browse_roles','roles','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(12,'read_roles','roles','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(13,'edit_roles','roles','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(14,'add_roles','roles','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(15,'delete_roles','roles','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(16,'browse_users','users','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(17,'read_users','users','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(18,'edit_users','users','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(19,'add_users','users','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(20,'delete_users','users','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(21,'browse_settings','settings','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(22,'read_settings','settings','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(23,'edit_settings','settings','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(24,'add_settings','settings','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(25,'delete_settings','settings','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(26,'browse_hooks',NULL,'2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(27,'browse_bookings','bookings','2020-04-22 06:14:50','2020-04-22 06:14:50'),
	(28,'read_bookings','bookings','2020-04-22 06:14:50','2020-04-22 06:14:50'),
	(29,'edit_bookings','bookings','2020-04-22 06:14:50','2020-04-22 06:14:50'),
	(30,'add_bookings','bookings','2020-04-22 06:14:50','2020-04-22 06:14:50'),
	(31,'delete_bookings','bookings','2020-04-22 06:14:50','2020-04-22 06:14:50');

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`)
VALUES
	(1,'admin','Administrator','2020-04-22 03:50:14','2020-04-22 03:50:14'),
	(2,'user','Normal User','2020-04-22 03:50:14','2020-04-22 03:50:14');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`)
VALUES
	(1,'site.title','Site Title','Site Title','','text',1,'Site'),
	(2,'site.description','Site Description','Site Description','','text',2,'Site'),
	(3,'site.logo','Site Logo','','','image',3,'Site'),
	(4,'admin.google_analytics_tracking_id','Google Analytics Tracking ID','UA-164765809-1','','text',4,'Admin'),
	(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),
	(6,'admin.title','Admin Title','BarBerX','','text',1,'Admin'),
	(7,'admin.description','Admin Description','Welcome to BarBer-x. The Missing Admin for Laravel','','text',2,'Admin'),
	(8,'admin.loader','Admin Loader','','','image',3,'Admin'),
	(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),
	(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table times
# ------------------------------------------------------------

DROP TABLE IF EXISTS `times`;

CREATE TABLE `times` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `times` WRITE;
/*!40000 ALTER TABLE `times` DISABLE KEYS */;

INSERT INTO `times` (`id`, `time`, `created_at`, `updated_at`)
VALUES
	(1,'9:00 - 10:00',NULL,NULL),
	(2,'11:00 - 12:00',NULL,NULL),
	(3,'1:00 - 2:00',NULL,NULL),
	(4,'3:00 - 4:00',NULL,NULL),
	(5,'5:00 - 6:00',NULL,NULL);

/*!40000 ALTER TABLE `times` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table townships
# ------------------------------------------------------------

DROP TABLE IF EXISTS `townships`;

CREATE TABLE `townships` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `township` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `townships` WRITE;
/*!40000 ALTER TABLE `townships` DISABLE KEYS */;

INSERT INTO `townships` (`id`, `township`, `created_at`, `updated_at`)
VALUES
	(1,'Kamayut',NULL,NULL),
	(2,'San Chaung',NULL,NULL),
	(3,'Mayangyone',NULL,NULL),
	(4,'Insein',NULL,NULL),
	(5,'Hlaing',NULL,NULL),
	(6,'Kyee Myin Daing',NULL,NULL),
	(7,'Ahlone',NULL,NULL),
	(8,'Tarmwe',NULL,NULL),
	(9,'Thingangyun',NULL,NULL),
	(10,'Thaketa',NULL,NULL),
	(11,'Lanmadaw',NULL,NULL),
	(12,'Latha',NULL,NULL),
	(13,'Pabedan',NULL,NULL),
	(14,'Pazundaung',NULL,NULL),
	(15,'Kyaukthada',NULL,NULL),
	(16,'Dagon',NULL,NULL),
	(17,'South Okkalapa',NULL,NULL),
	(18,'North Okkalapa',NULL,NULL),
	(19,'North Dagon',NULL,NULL),
	(20,'South Dagon',NULL,NULL),
	(21,'Bahan',NULL,NULL),
	(22,'Yankin',NULL,NULL),
	(23,'Mingalar Taungnyunt',NULL,NULL),
	(24,'Botahtaung',NULL,NULL);

/*!40000 ALTER TABLE `townships` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table translations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `translations`;

CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table user_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `township_id` tinyint(4) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `phone_number`, `email_verified_at`, `phone_verified_at`, `password`, `township_id`, `address`, `remember_token`, `settings`, `created_at`, `updated_at`)
VALUES
	(1,1,'myat thu','mt@mt.com','users/default.png',NULL,NULL,'2020-04-24 08:07:47','$2y$10$7FDS9Noxd91Vwyd270hdwuVeanfendZz9plMbx09HTdY2xlvyKhE6',NULL,NULL,NULL,'{\"locale\":\"en\"}','2020-04-23 05:04:47','2020-04-26 14:27:56'),
	(2,1,'nyein','ny@ny.com','users/default.png',NULL,NULL,'2020-04-24 08:07:47','$2y$10$7FDS9Noxd91Vwyd270hdwuVeanfendZz9plMbx09HTdY2xlvyKhE6',NULL,NULL,NULL,NULL,'2020-04-22 03:53:04','2020-04-24 08:07:47'),
	(3,1,'hp','hp@hp.com','users/default.png',NULL,NULL,'2020-04-24 08:07:47','$2y$10$7FDS9Noxd91Vwyd270hdwuVeanfendZz9plMbx09HTdY2xlvyKhE6',NULL,NULL,NULL,NULL,'2020-04-22 03:53:04','2020-04-24 08:07:47'),
	(4,2,'hp',NULL,'users/default.png','95987654567',NULL,NULL,NULL,1,'aaddd',NULL,NULL,'2020-05-07 05:37:08','2020-05-07 05:37:08'),
	(5,2,'hjk',NULL,'users/default.png','95876',NULL,NULL,NULL,3,'a@a.com',NULL,NULL,'2020-05-07 05:49:14','2020-05-07 05:49:14');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

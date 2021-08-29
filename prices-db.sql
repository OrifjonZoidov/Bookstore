/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.3.22-MariaDB : Database - test-bookstore
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test-bookstore` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `test-bookstore`;

/*Table structure for table `bookstores` */

DROP TABLE IF EXISTS `bookstores`;

CREATE TABLE `bookstores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_of_publication` year(4) NOT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url_s` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url_m` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url_l` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `bookstores` */

insert  into `bookstores`(`id`,`isbn`,`title`,`author`,`year_of_publication`,`publisher`,`image_url_s`,`image_url_m`,`image_url_l`,`price`,`created_at`,`updated_at`) values 
(1,'006015781X','Why Do Clocks Run Clockwise? and Other Imponderables: Mysteries of Everyday Life Explained','David Feldman',1987,'Harpercollins','http://images.amazon.com/images/P/006015781X.01.THUMBZZZ.jpg','http://images.amazon.com/images/P/006015781X.01.MZZZZZZZ.jpg','http://images.amazon.com/images/P/006015781X.01.LZZZZZZZ.jpg',17.05,NULL,NULL),
(2,'006017143X','The Night Listener','Armistead Maupin',2000,'HarperCollins Publishers','http://images.amazon.com/images/P/006017143X.01.THUMBZZZ.jpg','http://images.amazon.com/images/P/006017143X.01.MZZZZZZZ.jpg','http://images.amazon.com/images/P/006017143X.01.LZZZZZZZ.jpg',48.95,NULL,'2021-08-24 14:06:15'),
(3,'006052779X','Charlotte\'s Web Book and Charm (Charming Classics)','E. B. White',2003,'HarperFestival','http://images.amazon.com/images/P/006052779X.01.THUMBZZZ.jpg','http://images.amazon.com/images/P/006052779X.01.MZZZZZZZ.jpg','http://images.amazon.com/images/P/006052779X.01.LZZZZZZZ.jpg',92.59,NULL,NULL),
(5,'001213232323','Moving Pictures (Discworld Novels (Paperback))','Terry Pratchett',2002,'HarperTorch','http://images.amazon.com/images/P/006102063X.01.THUMBZZZ.jpg','http://images.amazon.com/images/P/006102063X.01.MZZZZZZZ.jpg','http://images.amazon.com/images/P/006102063X.01.LZZZZZZZ.jpg',24.70,NULL,'2021-08-24 13:47:36'),
(6,'014023828X','The Tortilla Curtain','T. Coraghessan Boyle',1996,'Penguin Books','http://images.amazon.com/images/P/014023828X.01.THUMBZZZ.jpg','http://images.amazon.com/images/P/014023828X.01.MZZZZZZZ.jpg','http://images.amazon.com/images/P/014023828X.01.LZZZZZZZ.jpg',49.24,NULL,NULL),
(7,'015600710X','Strange Fits of Passion: A Novel','Anita Shreve',1999,'Harvest Books','http://images.amazon.com/images/P/015600710X.01.THUMBZZZ.jpg','http://images.amazon.com/images/P/015600710X.01.MZZZZZZZ.jpg','http://images.amazon.com/images/P/015600710X.01.LZZZZZZZ.jpg',71.11,NULL,NULL),
(8,'030720152X','Comic Characters','Craig Boldman',1983,'Golden Books','http://images.amazon.com/images/P/030720152X.01.THUMBZZZ.jpg','http://images.amazon.com/images/P/030720152X.01.MZZZZZZZ.jpg','http://images.amazon.com/images/P/030720152X.01.LZZZZZZZ.jpg',10.81,NULL,NULL),
(11,'038076654X','Petals on the River','Kathleen E. Woodiwiss',1997,'Avon Trade','http://images.amazon.com/images/P/038076654X.01.THUMBZZZ.jpg','http://images.amazon.com/images/P/038076654X.01.MZZZZZZZ.jpg','http://images.amazon.com/images/P/038076654X.01.LZZZZZZZ.jpg',33.98,NULL,NULL),
(16,'54432','Serebro','Igor',1999,'ozon','http://images.amazon.com/images/P/038078243X.01.LZZZZZZZ.jpg','http://images.amazon.com/images/P/038078243X.01.LZZZZZZZ.jpg','http://images.amazon.com/images/P/038078243X.01.LZZZZZZZ.jpg',52.00,'2021-08-24 17:19:44','2021-08-24 17:19:44');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2021_08_24_043929_create_bookstores_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

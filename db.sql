/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - laravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laravel` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;

USE `laravel`;

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `companies` */

insert  into `companies`(`id`,`name`,`email`,`address`,`created_at`,`updated_at`) values 
(1,'WTT-SOLUTIONS Company','wtt-solutions@gmail.com','Ukraine','2023-07-23 06:33:35','2023-07-24 10:12:51'),
(3,'WTT-SOLUTIONS','khmilandrian@gmail.com','Ukraine','2023-07-28 05:25:35','2023-07-28 05:25:35'),
(4,'asasdfasdf','asd@sdf.sdf','sdfdsfsdf','2023-07-28 05:46:13','2023-07-28 11:51:30'),
(5,'sdf','sdff@sf.df','sdfsdf','2023-07-28 05:46:20','2023-07-28 05:46:20');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `log_activities` */

DROP TABLE IF EXISTS `log_activities`;

CREATE TABLE `log_activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `agent` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `log_activities` */

insert  into `log_activities`(`id`,`subject`,`url`,`method`,`ip`,`agent`,`user_id`,`created_at`,`updated_at`) values 
(33,'Browse userlist','http://localhost:8000/users','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:48:54','2023-08-01 15:48:54'),
(34,'Add user','http://localhost:8000/users/create','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:48:57','2023-08-01 15:48:57'),
(35,'User added ','http://localhost:8000/users','POST','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:49:09','2023-08-01 15:49:09'),
(36,'Browse userlist','http://localhost:8000/users','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:49:09','2023-08-01 15:49:09'),
(37,'Browse userlist','http://localhost:8000/users?page=2','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:49:13','2023-08-01 15:49:13'),
(38,'Edit user','http://localhost:8000/users/101/edit','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:49:17','2023-08-01 15:49:17'),
(39,'User edited','http://localhost:8000/users/101','PUT','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:49:21','2023-08-01 15:49:21'),
(40,'Browse userlist','http://localhost:8000/users','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:49:21','2023-08-01 15:49:21'),
(41,'Browse userlist','http://localhost:8000/users?page=2','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:49:23','2023-08-01 15:49:23'),
(42,'User deleted','http://localhost:8000/users/101','DELETE','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:49:25','2023-08-01 15:49:25'),
(43,'Browse userlist','http://localhost:8000/users','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:49:25','2023-08-01 15:49:25'),
(44,'Logged out','http://localhost:8000/logout','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',1,'2023-08-01 15:49:42','2023-08-01 15:49:42'),
(45,'Logged in','http://localhost:8000/login','POST','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:49:49','2023-08-01 15:49:49'),
(46,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:49:54','2023-08-01 15:49:54'),
(47,'Browse userlist','http://localhost:8000/users','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 15:49:57','2023-08-01 15:49:57'),
(48,'Browse userlist','http://localhost:8000/users','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:09:50','2023-08-01 16:09:50'),
(49,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:11:51','2023-08-01 16:11:51'),
(50,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:11:58','2023-08-01 16:11:58'),
(51,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:12:01','2023-08-01 16:12:01'),
(52,'Browse userlist','http://localhost:8000/users','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:14:12','2023-08-01 16:14:12'),
(53,'Browse userlist','http://localhost:8000/users','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:15:16','2023-08-01 16:15:16'),
(54,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:18:55','2023-08-01 16:18:55'),
(55,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:18:58','2023-08-01 16:18:58'),
(56,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:19:45','2023-08-01 16:19:45'),
(57,'Browse userlist','http://localhost:8000/users','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:22:45','2023-08-01 16:22:45'),
(58,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:23:16','2023-08-01 16:23:16'),
(59,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:24:14','2023-08-01 16:24:14'),
(60,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:24:34','2023-08-01 16:24:34'),
(61,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:24:56','2023-08-01 16:24:56'),
(62,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:25:22','2023-08-01 16:25:22'),
(63,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:25:48','2023-08-01 16:25:48'),
(64,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:26:12','2023-08-01 16:26:12'),
(65,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:27:04','2023-08-01 16:27:04'),
(66,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:27:31','2023-08-01 16:27:31'),
(67,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:27:46','2023-08-01 16:27:46'),
(68,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:28:22','2023-08-01 16:28:22'),
(69,'Browse userlist','http://localhost:8000/users','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:28:31','2023-08-01 16:28:31'),
(70,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:28:33','2023-08-01 16:28:33'),
(71,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:30:34','2023-08-01 16:30:34'),
(72,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:31:30','2023-08-01 16:31:30'),
(73,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:33:18','2023-08-01 16:33:18'),
(74,'Browse userlist','http://localhost:8000/users','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:33:26','2023-08-01 16:33:26'),
(75,'Browse activity log','http://localhost:8000/logActivity','GET','127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',3,'2023-08-01 16:33:29','2023-08-01 16:33:29');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_07_20_133753_create_companies_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sessions` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT 'company:company name, person:fullname',
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL COMMENT '1-person 2-company',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `owner_companies` varchar(20) DEFAULT NULL COMMENT 'ex: 3,4 or 2',
  `state` tinyint(4) DEFAULT 1 COMMENT '1:non-verified user 2:verified-user 3:guest',
  `alias` varchar(20) DEFAULT NULL COMMENT 'niqe id with at least 12 numbers',
  `image_person` varchar(255) DEFAULT NULL COMMENT 'imageurl for person',
  `image_business` varchar(255) DEFAULT NULL COMMENT 'imageurl for business',
  `invited_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`username`,`email_verified_at`,`password`,`remember_token`,`user_type`,`created_at`,`updated_at`,`owner_companies`,`state`,`alias`,`image_person`,`image_business`,`invited_at`) values 
(3,'ATLAS ANALYTICS','lapowell@info.com','admin',NULL,'$2y$10$GEkbvyMNH.dPsrivBh6rv.nSuT4iQfusDIRyarHxxBYmkvcuL/9aS',NULL,2,'2023-07-22 20:44:46','2023-07-22 20:44:46',NULL,2,'2147483647',NULL,'images/avatar/(1).jpeg',NULL),
(4,'Attention Tag','nathan765@info.com','admin2',NULL,'$2y$10$ZokNs/VeXXtel69e4cHD9.C4Np/UzgCdnaugKz21SFbmSY5oq67nO',NULL,2,'2023-07-22 20:46:29','2023-07-22 20:46:29',NULL,2,'2147483647',NULL,'images/avatar/(11).jpeg',NULL),
(5,'Boop','jacob567@info.com','admin3',NULL,'$2y$10$TVeqV72rbRm2aec3ThyPjeNy9OHW281q3QyxI7NcCNDUT7Dvf.8d6',NULL,2,'2023-07-23 09:00:12','2023-07-23 09:00:12',NULL,2,'2147483647',NULL,'images/avatar/(12).jpeg',NULL),
(6,'Coalition Technologies','annawhite@info.com','admin23',NULL,'$2y$10$EZUx.4U8Ez25tS7xT42iquH.VceotYsobTPzpY1TBgzQxWK03Sz06',NULL,2,'2023-07-23 09:01:34','2023-07-28 17:09:23',NULL,1,'2147483647',NULL,'images/avatar/(13).jpeg',NULL),
(7,'ResourcePlan','karen@example.com','admin2yrty',NULL,'$2y$10$7IDOndO3YG0SwMbNpzVPfeNlwltPwu.s0eYK6dtaIGKofI/qjUl9y',NULL,2,'2023-07-23 10:00:17','2023-07-28 17:10:03',NULL,1,'2147483647',NULL,'images/avatar/(14).jpeg',NULL),
(8,NULL,'andrian@gmail.com','admin2yrty11',NULL,'$2y$10$1nZYkweQZe/4yVPREAtbmeBXag3potIvrCuLnpOa04gkPUTWvPFM.',NULL,1,'2023-07-24 07:04:13','2023-07-24 07:04:13',NULL,2,'2147483647',NULL,NULL,NULL),
(9,NULL,'khmilandria22n@gmail.com','admin2222',NULL,'$2y$10$G8rPpIc0HzcSjYdvfrtUWOV9gW1M1.GqsoqYrLHTtdJU6ymfTLzXC',NULL,1,'2023-07-24 07:20:25','2023-07-24 07:20:25',NULL,2,'999999999999',NULL,NULL,NULL),
(10,NULL,'sdf@gmail.com','asdfsdf',NULL,'$2y$10$v5dJzT5z3sRKOwDRq.btm.Yhf5RRIGHWQqLswFk1PBMidEZ/Q9e.a',NULL,1,'2023-07-24 07:52:35','2023-07-24 07:52:35',NULL,3,NULL,NULL,NULL,NULL),
(11,NULL,'admin@admin.com','admin3333',NULL,'$2y$10$tbq/gQCz0qMWbWO8nAs/0eFZhTIVf..Tw.GO1wP035K2mIZE2A.Jm',NULL,1,'2023-07-25 15:21:03','2023-07-25 15:21:03',NULL,3,NULL,NULL,NULL,NULL),
(12,NULL,'khmilandria333n@gmail.com','adm7777777',NULL,'$2y$10$.aazmbTwL3i9l6pKjl1YReDKxo/uBuVQqYE5Sua2RtelQ27mRJGEe',NULL,1,'2023-07-25 15:25:40','2023-07-28 17:06:36',NULL,1,NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

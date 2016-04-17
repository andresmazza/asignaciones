SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

-- CREATE DATABASE `c9` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `c9`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
      `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
      `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
      `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
      `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `role` enum('ROLE_ADMIN','ROLE_USER') COLLATE utf8_unicode_ci DEFAULT NULL,
      `is_active` tinyint(1) NOT NULL,
      `created_at` datetime NOT NULL,
      `updated_at` datetime NOT NULL,
      PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 2016-04-16 20:30:01

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `role`, `is_active`, `created_at`, `updated_at`) VALUES
(1,	'andres',	'Andres',	'Mazza',	'andres.mazza@gmail.com',	'test',	'ROLE_ADMIN',	1,	'2016-02-27 19:44:58',	'2016-02-27 19:44:58'),
(2,	'lolo',	'lolo',	'cat',	'lolo.cat@gmail.com',	'lolo',	'ROLE_USER',	1,	'2016-02-27 19:46:37',	'2016-02-27 19:46:37'),
(3,	'lenovo',	'pc',	'lenovo',	'pc.lenovo@linux.com',	'lenovo',	'ROLE_USER',	1,	'2016-02-27 19:47:27',	'2016-02-27 19:47:27'),
(4,	'clement',	'clemente',	'mazza',	'clement.mazza@mundoperruno.com',	'perro',	'ROLE_USER',	1,	'2016-02-27 19:48:24',	'2016-02-27 19:48:24'),
(5,	'wimppy',	'wimppy',	'mazza',	'wimppy@mundoperruno.com',	'wimppy',	'ROLE_USER',	1,	'2016-02-27 19:49:04',	'2016-02-27 19:49:04');

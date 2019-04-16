-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table royal_diamond.admins
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table royal_diamond.admins: ~2 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `name`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin', '$2y$10$d52qSr9VRxMSgRwvkW7DpeaYT5p/qvLm/7qaUtw6uXWiEDDB/DSDW', 'admin', '2019-04-10 16:57:39', '2019-04-10 16:57:39'),
	(2, 'Hash', 'hash', '$2y$10$iNxiBii/BVH9Uj6kiRGMnezzcET3.kXvfnK.w.fiqlzPGAYC3Frba', 'admin', '2019-04-12 07:54:49', '2019-04-12 07:54:49');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping structure for table royal_diamond.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `url_segment` text,
  `photo` varchar(50) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table royal_diamond.blogs: ~4 rows (approximately)
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `title`, `content`, `url_segment`, `photo`, `view`, `id_admin`, `created_at`, `updated_at`) VALUES
	(1, 'Blog 1', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit,&nbsp;sed&nbsp;do&nbsp;eiusmod</p>', 'blog-1-1', 'blog1.png', NULL, 1, '2019-04-10 22:58:56', '2019-04-16 14:25:56'),
	(2, 'Blog 2', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit,&nbsp;sed&nbsp;do&nbsp;eiusmod</p>', 'blog-2-2', 'blog2.png', NULL, 1, '2019-04-10 22:59:56', '2019-04-16 14:25:51'),
	(3, 'Blog 3', '<p><strong>Lorem&nbsp;ipsum</strong>&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit,&nbsp;sed&nbsp;do&nbsp;eiusmod</p>', 'blog-3-3', 'blog3.png', NULL, 1, '2019-04-10 23:01:56', '2019-04-16 14:25:41'),
	(4, 'ikko satrio yulian dwi rahadian', '<p>asdasd</p>', 'ikko-satrio-yulian-dwi-rahadian-4', '20507151.jpg', NULL, 1, '2019-04-16 14:07:56', '2019-04-16 14:09:55');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping structure for table royal_diamond.configs
CREATE TABLE IF NOT EXISTS `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `web_name` varchar(50) DEFAULT NULL,
  `description` text,
  `meta_keyword` text,
  `meta_desc` text,
  `icon` varchar(50) DEFAULT NULL,
  `head_script` text,
  `after_body_script` text,
  `before_body_script` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table royal_diamond.configs: ~0 rows (approximately)
/*!40000 ALTER TABLE `configs` DISABLE KEYS */;
INSERT INTO `configs` (`id`, `web_name`, `description`, `meta_keyword`, `meta_desc`, `icon`, `head_script`, `after_body_script`, `before_body_script`, `created_at`, `updated_at`) VALUES
	(1, 'Royal Diamond', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'keyowrd', 'desc', 'icon.png', '', '', '', '2019-04-10 20:22:27', '2019-04-10 20:46:24');
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;

-- Dumping structure for table royal_diamond.consultations
CREATE TABLE IF NOT EXISTS `consultations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `view` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `datecall` datetime DEFAULT NULL,
  `comment` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table royal_diamond.consultations: ~0 rows (approximately)
/*!40000 ALTER TABLE `consultations` DISABLE KEYS */;
/*!40000 ALTER TABLE `consultations` ENABLE KEYS */;

-- Dumping structure for table royal_diamond.events
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `url_segment` text,
  `photo` varchar(50) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table royal_diamond.events: ~0 rows (approximately)
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

-- Dumping structure for table royal_diamond.members
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `address` text,
  `photo` text,
  `activation_code` text,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table royal_diamond.members: ~0 rows (approximately)
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`id`, `name`, `email`, `password`, `gender`, `address`, `photo`, `activation_code`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'Sabyan', 'sabyan@gmail.com', '12345', 'female', 'Jl Gresik Gadukan utara gang 10 no 18 Krembangan Surabaya', '80351372.jpg', NULL, NULL, '2019-04-12 04:06:55', '2019-04-12 10:49:26');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;

-- Dumping structure for table royal_diamond.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `desc` text,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `start_day` varchar(50) DEFAULT NULL,
  `end_day` varchar(50) DEFAULT NULL,
  `open_time` varchar(50) DEFAULT NULL,
  `close_time` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table royal_diamond.profiles: ~0 rows (approximately)
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` (`id`, `name`, `desc`, `address`, `email`, `phone`, `owner`, `logo`, `facebook`, `instagram`, `twitter`, `start_day`, `end_day`, `open_time`, `close_time`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
	(1, 'Royal Diamond', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'Surabaya', NULL, '0310310003', 'Admin', 'logo.png', NULL, NULL, NULL, 'Senin', 'Jum\'at', '08:00', '17:00', NULL, NULL, '2019-04-10 00:17:42', '2019-04-10 19:56:09');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;

-- Dumping structure for table royal_diamond.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `icon` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table royal_diamond.services: ~6 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
	(1, 'Therapiya', 'Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website', 'icon medical-icon med-icon-stethoscope', '2019-04-10 23:47:50', '2019-04-10 23:48:08'),
	(2, 'Pharmocology', 'Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website', 'icon medical-icon med-icon-drugs-3', '2019-04-10 23:48:20', '2019-04-10 23:49:07'),
	(3, 'Dentistry', 'Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website', 'icon medical-icon med-icon-premolar', '2019-04-10 23:48:29', '2019-04-10 23:49:54'),
	(4, 'Cardiology', 'Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website', 'icon medical-icon med-icon-cardiogram-2', '2019-04-10 23:49:24', '2019-04-10 23:50:01'),
	(5, 'Virusology', 'Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website', 'icon medical-icon med-icon-virus', '2019-04-10 23:49:28', '2019-04-10 23:50:10'),
	(6, 'Eye Surgery', 'Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website', 'icon medical-icon med-icon-eye', '2019-04-10 23:49:36', '2019-04-10 23:50:29');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table royal_diamond.slides
CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `url` text,
  `url_segment` text,
  `photo` varchar(255) DEFAULT NULL,
  `is_show` int(1) NOT NULL,
  `expired` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table royal_diamond.slides: ~3 rows (approximately)
/*!40000 ALTER TABLE `slides` DISABLE KEYS */;
INSERT INTO `slides` (`id`, `title`, `content`, `url`, `url_segment`, `photo`, `is_show`, `expired`, `created_at`, `updated_at`) VALUES
	(1, 'Slide 1', '<p>lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipiscing&nbsp;elit</p>', 'test url', 'slide-1-1', 'slide1.png', 0, NULL, '2019-04-10 21:26:22', '2019-04-16 14:17:09'),
	(2, 'Slide 2', '<p>lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipiscing&nbsp;elit</p>', 'test url', 'slide-2-2', 'slide2.png', 0, NULL, '2019-04-10 21:26:22', '2019-04-16 14:17:04'),
	(4, 'Slide 3', '<p>lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipiscing&nbsp;elit</p>', 'test url', 'slide-3-4', '682665322.jpg', 0, NULL, '2019-04-12 11:47:45', '2019-04-16 14:17:00');
/*!40000 ALTER TABLE `slides` ENABLE KEYS */;

-- Dumping structure for table royal_diamond.teams
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `content` text,
  `photo` varchar(255) DEFAULT NULL,
  `url_segment` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table royal_diamond.teams: ~4 rows (approximately)
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` (`id`, `name`, `position`, `content`, `photo`, `url_segment`, `created_at`, `updated_at`) VALUES
	(1, 'Team 1', 'Owner', NULL, 'team1.png', 'team-1-1', '2019-04-10 23:36:37', '2019-04-16 14:16:39'),
	(2, 'Team 2', 'Doctor', NULL, 'team2.png', 'team-2-2', '2019-04-10 23:36:37', '2019-04-16 14:16:35'),
	(3, 'Team 3', 'Customer Service', NULL, 'team3.png', 'team-3-3', '2019-04-10 23:36:37', '2019-04-16 14:16:32'),
	(4, 'Team 4', 'Doctor', NULL, 'team4.png', 'team-4-4', '2019-04-10 23:36:37', '2019-04-16 14:16:10');
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;

-- Dumping structure for table royal_diamond.treatments
CREATE TABLE IF NOT EXISTS `treatments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `desc` text,
  `photo` text,
  `url_segment` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table royal_diamond.treatments: ~3 rows (approximately)
/*!40000 ALTER TABLE `treatments` DISABLE KEYS */;
INSERT INTO `treatments` (`id`, `name`, `desc`, `photo`, `url_segment`, `created_at`, `updated_at`) VALUES
	(1, 'Treatment 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'treatment1.png', 'treatment-1-1', '2019-04-10 23:24:02', '2019-04-16 14:17:51'),
	(2, 'Treatment 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'treatment2.png', 'treatment-2-2', '2019-04-10 23:24:02', '2019-04-16 14:17:48'),
	(3, 'Treatment 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'treatment3.png', 'treatment-3-3', '2019-04-10 23:24:02', '2019-04-16 14:17:45');
/*!40000 ALTER TABLE `treatments` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

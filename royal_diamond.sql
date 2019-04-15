-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 11:05 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royal_diamond`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '$2y$10$d52qSr9VRxMSgRwvkW7DpeaYT5p/qvLm/7qaUtw6uXWiEDDB/DSDW', 'admin', '2019-04-10 09:57:39', '2019-04-10 09:57:39'),
(2, 'Hash', 'hash', '$2y$10$iNxiBii/BVH9Uj6kiRGMnezzcET3.kXvfnK.w.fiqlzPGAYC3Frba', 'admin', '2019-04-12 00:54:49', '2019-04-12 00:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `url_segment` text,
  `photo` varchar(50) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `url_segment`, `photo`, `view`, `id_admin`, `created_at`, `updated_at`) VALUES
(1, 'Blog 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', NULL, 'blog1.png', NULL, 1, '2019-04-10 15:58:56', '2019-04-10 16:00:11'),
(2, 'Blog 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', NULL, 'blog2.png', NULL, 1, '2019-04-10 15:59:56', '2019-04-10 16:05:52'),
(3, 'Blog 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', NULL, 'blog3.png', NULL, 1, '2019-04-10 16:01:56', '2019-04-10 16:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` int(11) NOT NULL,
  `web_name` varchar(50) DEFAULT NULL,
  `description` text,
  `meta_keyword` text,
  `meta_desc` text,
  `icon` varchar(50) DEFAULT NULL,
  `head_script` text,
  `after_body_script` text,
  `before_body_script` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `web_name`, `description`, `meta_keyword`, `meta_desc`, `icon`, `head_script`, `after_body_script`, `before_body_script`, `created_at`, `updated_at`) VALUES
(1, 'Royal Diamond', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'keyowrd', 'desc', 'icon.png', '', '', '', '2019-04-10 13:22:27', '2019-04-10 13:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` int(11) NOT NULL,
  `view` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `datecall` datetime DEFAULT NULL,
  `comment` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `url_segment` text,
  `photo` varchar(50) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `address` text,
  `photo` text,
  `activation_code` text,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `gender`, `address`, `photo`, `activation_code`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Sabyan', 'sabyan@gmail.com', '12345', 'female', 'Jl Gresik Gadukan utara gang 10 no 18 Krembangan Surabaya', '80351372.jpg', NULL, NULL, '2019-04-11 21:06:55', '2019-04-12 03:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `desc`, `address`, `email`, `phone`, `owner`, `logo`, `facebook`, `instagram`, `twitter`, `start_day`, `end_day`, `open_time`, `close_time`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Royal Diamond', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'Surabaya', NULL, '0310310003', 'Admin', 'logo.png', NULL, NULL, NULL, 'Senin', 'Jum\'at', '08:00', '17:00', NULL, NULL, '2019-04-09 17:17:42', '2019-04-10 12:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text,
  `icon` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Therapiya', 'Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website', 'icon medical-icon med-icon-stethoscope', '2019-04-10 16:47:50', '2019-04-10 16:48:08'),
(2, 'Pharmocology', 'Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website', 'icon medical-icon med-icon-drugs-3', '2019-04-10 16:48:20', '2019-04-10 16:49:07'),
(3, 'Dentistry', 'Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website', 'icon medical-icon med-icon-premolar', '2019-04-10 16:48:29', '2019-04-10 16:49:54'),
(4, 'Cardiology', 'Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website', 'icon medical-icon med-icon-cardiogram-2', '2019-04-10 16:49:24', '2019-04-10 16:50:01'),
(5, 'Virusology', 'Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website', 'icon medical-icon med-icon-virus', '2019-04-10 16:49:28', '2019-04-10 16:50:10'),
(6, 'Eye Surgery', 'Sirius WordPress Theme features a slick and clean design that is suitable for virtually any type of website', 'icon medical-icon med-icon-eye', '2019-04-10 16:49:36', '2019-04-10 16:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` text,
  `url` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `is_show` int(1) NOT NULL,
  `expired` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `content`, `url`, `photo`, `is_show`, `expired`, `created_at`, `updated_at`) VALUES
(1, 'Slide 1', 'lorem ipsum dolor sit amet consectetur adipiscing elit', 'test url', 'slide1.png', 0, NULL, '2019-04-10 14:26:22', '2019-04-12 04:52:17'),
(2, 'Slide 2', 'lorem ipsum dolor sit amet consectetur adipiscing elit', 'test url', 'slide2.png', 0, NULL, '2019-04-10 14:26:22', '2019-04-12 04:53:33'),
(4, 'Slide 3', 'lorem ipsum dolor sit amet consectetur adipiscing elit', 'test url', '682665322.jpg', 0, NULL, '2019-04-12 04:47:45', '2019-04-12 04:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `content` text,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `content`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Team 1', 'Owner', NULL, 'team1.png', '2019-04-10 16:36:37', '2019-04-10 16:37:23'),
(2, 'Team 2', 'Doctor', NULL, 'team2.png', '2019-04-10 16:36:37', '2019-04-10 16:38:08'),
(3, 'Team 3', 'Customer Service', NULL, 'team3.png', '2019-04-10 16:36:37', '2019-04-10 16:38:11'),
(4, 'Team 4', 'Doctor', NULL, 'team4.png', '2019-04-10 16:36:37', '2019-04-10 16:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE `treatments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `desc` text,
  `photo` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`id`, `name`, `desc`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Treatment 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'treatment1.png', '2019-04-10 16:24:02', '2019-04-10 16:24:38'),
(2, 'Treatment 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'treatment2.png', '2019-04-10 16:24:02', '2019-04-10 16:25:37'),
(3, 'Treatment 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'treatment3.png', '2019-04-10 16:24:02', '2019-04-10 16:25:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `treatments`
--
ALTER TABLE `treatments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

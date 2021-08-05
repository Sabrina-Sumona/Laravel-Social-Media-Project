-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2021 at 01:49 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_social_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'I like this movie.', 6, '2021-08-05 02:58:42', '2021-08-05 02:58:42'),
(2, 1, 'It was a great movie', 5, '2021-08-05 03:00:29', '2021-08-05 03:00:29'),
(3, 2, 'Let\'s gooooo......', 6, '2021-08-05 03:04:13', '2021-08-05 03:04:13'),
(4, 1, 'I love it!', 8, '2021-08-05 13:13:45', '2021-08-05 13:13:45'),
(5, 3, 'So beautiful xo xo', 8, '2021-08-05 13:15:46', '2021-08-05 13:15:46'),
(6, 11, 'So cute!!!! xo xo xo xo xo', 8, '2021-08-05 13:41:45', '2021-08-05 13:41:45'),
(7, 10, ':) :)', 8, '2021-08-05 13:42:00', '2021-08-05 13:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_03_082957_update_users_table', 2),
(5, '2021_08_04_055624_create_posts_table', 3),
(7, '2021_08_05_082256_create_comments_table', 4),
(8, '2021_08_05_090941_add_last_login_to_users_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` varchar(250) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `likes` json DEFAULT NULL,
  `shares` json DEFAULT NULL,
  `comments` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `status`, `photo`, `likes`, `shares`, `comments`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Jeba & Jeni are watching \'A Quiet Place II\' movie :) :)', '/images/user_5/image_1628058767.jpg', '[]', '[5]', 3, 5, '2021-08-04 12:32:47', '2021-08-05 19:44:07'),
(2, 'Let\'s have a world tour..', '/images/user_5/image_1628064909.png', '[]', '[5]', 1, 5, '2021-08-04 14:15:09', '2021-08-05 19:44:04'),
(3, 'Sabrina Naorin has updated his profile picture!', '/images/user_5/image_1628091259.jpg', '[]', '[]', 1, 5, '2021-08-04 21:34:19', '2021-08-05 19:44:01'),
(4, 'Sabrina Naorin has updated his profile picture!', '/images/user_5/image_1628097634.jpg', '[]', '[]', 0, 5, '2021-08-04 23:20:34', '2021-08-05 19:43:56'),
(5, 'Nabiha has updated his profile picture!', '/images/user_6/image_1628097715.jpg', '[6, 8, 5]', '[]', 0, 6, '2021-08-04 23:21:55', '2021-08-05 19:43:54'),
(6, 'Nabiha Nadia has updated his profile picture!', '/images/user_6/image_1628098986.png', '[]', '[]', 0, 6, '2021-08-04 23:43:06', '2021-08-05 19:43:53'),
(7, 'Jeba has updated his profile picture!', '/images/user_7/image_1628168956.png', '[7, 8, 5]', '[]', 0, 7, '2021-08-05 19:09:16', '2021-08-05 19:43:51'),
(10, 'Ahnaf has updated his profile picture!', '/images/user_9/image_1628169494.jpg', '[8, 5]', '[8]', 1, 9, '2021-08-05 19:18:14', '2021-08-05 19:43:50'),
(11, 'Alfez has updated his profile picture!', '/images/user_10/image_1628169881.png', '[5]', '[8]', 1, 10, '2021-08-05 19:24:41', '2021-08-05 19:43:48'),
(12, 'Jerin has updated his profile picture!', '/images/user_8/image_1628170618.jpg', '[8, 5]', '[]', 0, 8, '2021-08-05 19:36:58', '2021-08-05 19:43:46'),
(13, 'Sabrina Naorin has updated his profile picture!', '/images/user_5/image_1628171018.jpg', '[5]', '[]', 0, 5, '2021-08-05 19:43:38', '2021-08-05 19:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `b_day` date NOT NULL DEFAULT '2021-01-01',
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `sex`, `b_day`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `last_login`) VALUES
(5, 'Sabrina Naorin', 'Sumona', 0, '1997-03-01', '/images/user_5/image_1628171018.jpg', 'snsbauet04@gmail.com', NULL, '$2y$10$XrL0nM2SX30FWTaDKBq8vuI1220Qp1CdQCzV2mnxexDO/4YLUz7U6', 'lWylaXQZBDO0MEVC4rtCeTSqoKyiGgMypu0TBR68VSlnxq1ilVMXdeY4yIYq', '2021-08-03 09:20:57', '2021-08-05 13:47:56', '2021-08-05 13:47:56'),
(6, 'Nabiha Nadia', 'Nova', 0, '1998-09-17', '/images/user_6/image_1628098986.png', 'nabihanadia@gmail.com', NULL, '$2y$10$54IqUgrO6hqJIwgHKQO/auNWJ.Z3RsglT2ema9F7ll/uZqeV8vBIK', NULL, '2021-08-04 11:21:36', '2021-08-05 13:02:53', '2021-08-05 13:02:53'),
(7, 'Jeba', 'Fariha', 0, '2003-06-30', '/images/user_7/image_1628168956.png', 'jebafariha@gmail.com', NULL, '$2y$10$E2FW39NdIvhp.TnBrDBevuqHhm2pt5rimtxO8atP3rbaM9gQ1SErW', NULL, '2021-08-05 13:03:49', '2021-08-05 13:29:54', '2021-08-05 13:29:54'),
(8, 'Jerin', 'Tasnim', 0, '2011-03-02', '/images/user_8/image_1628170618.jpg', 'jenimuni@gmail.com', NULL, '$2y$10$Ss8OmtH3H6dueRGLHhztJOlYlFdJnMS6ufj/coGG.XBtaRYELsnwa', NULL, '2021-08-05 13:12:39', '2021-08-05 13:42:13', '2021-08-05 13:42:13'),
(9, 'Ahnaf', 'Mahin', 1, '2015-04-17', '/images/user_9/image_1628169494.jpg', 'ahnafmahin@gmail.com', NULL, '$2y$10$FnaPVeZ8DMbfl/Sa.MG43.ZCgXDfgOl45SG/pt2rYsXrckZ1f9s4G', NULL, '2021-08-05 13:17:28', '2021-08-05 13:29:39', '2021-08-05 13:29:39'),
(10, 'Alfez', 'Mayan', 1, '2020-04-01', '/images/user_10/image_1628169881.png', 'alfezmayan@gmail.com', NULL, '$2y$10$vCMBBYIZ5AdsEsk8ZeA6FeJc8zSrWed7fktVTPWAv0fCNSfJExdO.', NULL, '2021-08-05 13:23:15', '2021-08-05 13:24:41', '2021-08-05 13:24:41');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

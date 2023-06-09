-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2023 at 10:01 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joblisting`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv_upload`
--

DROP TABLE IF EXISTS `cv_upload`;
CREATE TABLE IF NOT EXISTS `cv_upload` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cv` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `education_level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cv_upload`
--

INSERT INTO `cv_upload` (`id`, `cv`, `birthdate`, `place_of_birth`, `profession`, `number`, `education_level`) VALUES
(15, 'databaseee.txt', '2023-05-10', 'test', 'test', '123-456-789', 'no_school'),
(16, 'activision.txt', '2023-05-31', 'kmkmk', 'kmkmk', '123-456-789', 'no_school'),
(13, 'databaseee.txt', '2023-05-17', 'asdasd', 'sdsdsd', '111-222-411', 'primary_school');

-- --------------------------------------------------------

--
-- Table structure for table `job_listing`
--

DROP TABLE IF EXISTS `job_listing`;
CREATE TABLE IF NOT EXISTS `job_listing` (
  `id` int NOT NULL AUTO_INCREMENT,
  `job_name` varchar(255) NOT NULL,
  `job_offerer` varchar(255) NOT NULL,
  `offerer_number` varchar(255) NOT NULL,
  `cities` varchar(255) NOT NULL,
  `age` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `job_listing`
--

INSERT INTO `job_listing` (`id`, `job_name`, `job_offerer`, `offerer_number`, `cities`, `age`, `description`, `created_at`) VALUES
(16, 'sadasdasaxsdxsad', 'sadsada', '111-222-999', 'ljubljana,celje', '25-44', 'kmkmkmkmkmkk', '2023-06-02 12:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `user_type`) VALUES
(13, '123', 'adssadas123', 'asdsa@sadasd.com', '202cb962ac59075b964b07152d234b70', 'User'),
(14, '123zxsd', 'adssadas123sadsad', 'asdsa@sadasd.com', '202cb962ac59075b964b07152d234b70', 'Job offerer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 06:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_pursell`
--

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `image`, `description`, `telephone`, `location`, `street`, `email`, `website`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'img.png', 'jhfai sdhasid djhdsakjlv', '676584632', 'pkr', 'lamachaur', 'user1@gmail.com', 'www.user1.org', '2022-09-02 06:38:20', '2022-09-02 06:38:20'),
(2, 'Org 2', 'Org.png', 'this is the org', '3277469823', 'Ktm', 'Patan', 'org2@.gmail.com', 'www.org2.org', '2022-09-02 06:40:38', '2022-09-02 13:39:45'),
(3, 'rerfd', 'adfasf', 'asdfdsa', 'dafds', 'adfas', 'adfads', 'adfdsas', 'adfadsf', '2022-09-02 06:41:49', '2022-09-02 06:41:49'),
(4, 'gzfgv', 'lorem', 'zxgvzxc', 'fgbxc', 'bfdg', 'fg', 'fgd', 'gdfg', '2022-09-02 06:43:20', '2022-09-02 06:43:20'),
(5, 'Test 5', 'das', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'dsa', 'dsa', 'dsad', 'dasd', 'dasd', '2022-09-02 06:48:08', '2022-09-02 13:36:54'),
(6, 'test', 'image.png', 'das', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', '2022-09-02 06:49:25', '2022-09-02 13:38:14'),
(7, 'das', 'das', 'das', 'das', 'dsa', 'dsa', 'dsa', 'dsa', '2022-09-02 06:50:45', '2022-09-02 06:50:45'),
(8, 'dsa', 'das', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', '2022-09-02 06:52:16', '2022-09-02 06:52:16'),
(9, 'dsa', 'dsa', 'dsad', 'dsa', 'dasdsa', 'dsad', 'dsaddasdasd', 'dsad', '2022-09-02 06:54:16', '2022-09-02 06:54:16'),
(10, 'sdsaf', 'afd', 'adf', 'adf', 'adsf', 'adf', 'adf', 'adf', '2022-09-02 06:55:18', '2022-09-02 06:55:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

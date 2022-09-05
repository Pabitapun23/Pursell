-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 06:59 AM
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
-- Database: `pursell`
--

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Kathmandu', NULL, NULL),
(2, 'Pokhara', NULL, NULL),
(3, 'Lalitpur', NULL, NULL),
(4, 'Birgunj', NULL, NULL),
(5, 'Biratnagar', NULL, NULL),
(6, 'Bharatpur', NULL, NULL),
(7, 'Janakpur', NULL, NULL),
(8, 'Hetauda', NULL, NULL),
(9, 'Nepalgunj', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

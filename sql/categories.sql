-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 07:27 AM
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
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Mobilephone', 0, NULL, NULL),
(2, 'Automobiles', 0, NULL, NULL),
(3, 'Music instrument', 0, NULL, NULL),
(4, 'Home appliances', 0, NULL, NULL),
(5, 'Electronics', 0, NULL, NULL),
(6, 'Computer&Peripheral', 0, NULL, NULL),
(7, 'Iphone', 1, NULL, NULL),
(8, 'Android', 1, NULL, NULL),
(9, 'Cars', 2, NULL, NULL),
(10, 'Motorcycles', 2, NULL, NULL),
(11, 'Guitar', 3, NULL, NULL),
(12, 'Drums', 3, NULL, NULL),
(13, 'Speakers', 5, NULL, NULL),
(14, 'Microphone', 5, NULL, NULL),
(15, 'Furniture', 4, NULL, NULL),
(16, 'Kitchen sets', 4, NULL, NULL),
(17, 'Desktop Accessories', 6, NULL, NULL),
(18, 'Desktop PCs', 6, NULL, NULL),
(19, 'Laptop', 6, NULL, NULL),
(20, 'Laptop Accessories', 6, NULL, NULL),
(21, 'Printer&Scanner', 6, NULL, NULL),
(22, 'Tablet PCs & iPads', 6, NULL, NULL),
(23, 'Storage&Optical Drives', 6, NULL, NULL),
(24, 'Digital Camera', 5, NULL, NULL),
(25, 'Earphone and headphones', 5, NULL, NULL),
(33, 'TV', 30, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

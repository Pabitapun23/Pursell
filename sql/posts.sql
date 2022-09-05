-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 08:00 AM
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
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category_id`, `user_id`, `condition`, `address`, `description`, `usedfor`, `warranty`, `delivery`, `price`, `negotiable`, `expirydate`, `created_at`, `updated_at`) VALUES
(1, 'Toyota Yaris', 2, 2, 'New Like', 'Pokhara', 'This is a car that I bought few months ago.', '3 months', 1, 1, 1375000, 0, '2022-10-31', '2022-05-24 06:57:35', '2022-07-01 17:25:07'),
(2, 'iphone 6s', 1, 3, 'Used', 'Kathmandu', 'This is the phone which is rosegold in colour and have 64GB RAM.', '2 years', 1, 0, 20000, 0, '2022-11-01', '2022-07-01 17:38:02', '2022-07-04 17:38:02'),
(3, 'Iphone 12 pro max', 1, 2, 'Brand New', 'Nepalgunj', 'Iphone 12 pro max 128GB memory and grey in colour.', '3months', 1, 0, 130000, 0, '2022-12-01', '2022-07-01 17:38:02', '2022-07-05 17:38:02'),
(4, 'Mahindra Scorpio', 2, 2, 'New like', 'Butwal', 'This is the car which I recently purchased and it\'s in good condition.', '5 months', 1, 1, 1380000, 0, '2023-01-12', NULL, NULL),
(5, 'samsung galaxy z-flip', 1, 3, 'used', 'Chitwan', 'This is the car which I recently purchased and it\'s in good condition.', '1 year', 1, 0, 50000, 0, '2023-02-10', NULL, NULL),
(6, 'asdfasf', 4, 2, 'asfdas', 'adsfasd', 'asdfas', 'adsfsda', 0, 0, 0, 0, '0000-00-00', NULL, '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

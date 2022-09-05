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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phoneno`, `email_verified_at`, `password`, `remember_token`, `profileimg`, `created_at`, `updated_at`, `block_status`, `block_amount`) VALUES
(1, 'admin', 'admin@gmail.com', 1, '1234567890', NULL, '$2y$10$zETldgILJdFfjkmzh4RX..5WAr57.ant6vH5nJFipk3hPxONr.WzC', NULL, NULL, '2022-08-30 23:40:59', '2022-08-30 23:40:59', 0, 0),
(2, 'Pabita Pun', 'pabita.pun236@gmail.com', 0, '9865441325', '2022-07-04 19:36:34', '$2y$10$9x6SKqAnUAv/XszrEnIORucQJmYz7FwdUq/akRTfqh5WLhKLzPjai', NULL, NULL, '2022-07-04 19:24:58', '2022-09-04 00:46:04', 0, 1),
(3, 'user', 'user@gmail.com', 0, '1234567899', NULL, '$2y$10$RvQbQFYT1xO2KAHPyQzI6e/r5q0kKiGJWrZ/cf6RvfCYHMe3OZuTu', NULL, NULL, '2022-08-30 23:46:26', '2022-09-04 02:08:20', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 09:37 AM
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

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phoneno`, `email_verified_at`, `password`, `remember_token`, `profileimg`, `block_status`, `block_amount`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 1, '111', '2022-09-11 06:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 0, 0, '2022-09-11 06:27:11', '2022-09-11 06:27:11'),
(2, 'Pabita', 'pabita.pun236@gmail.com', 0, '222', '2022-09-11 06:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 0, 0, '2022-09-11 06:27:11', '2022-09-11 06:27:11'),
(3, 'Rabita', 'scorpionyazuka@gmail.com', 0, '333', '2022-09-11 06:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 0, 0, '2022-09-11 06:27:11', '2022-09-11 06:27:11'),
(4, 'Bikal', 'bikal@gmail.com', 0, '21321124', NULL, 'password', NULL, NULL, 0, 0, NULL, NULL),
(5, 'Amrita', 'amrita@gmail.com', 0, '1242341', NULL, 'password', NULL, NULL, 0, 0, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

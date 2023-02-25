-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 03:50 PM
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
-- Database: `login_register_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_info`
--

CREATE TABLE `admin_login_info` (
  `id` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login_info`
--

INSERT INTO `admin_login_info` (`id`, `Username`, `Password`) VALUES
(1, 'adminphoto24@gmail.com', 'admin@123'),
(8, 'gaurav@gmail.com', '123478');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `first_name`, `last_name`, `contact`, `email`, `password`) VALUES
(1, 'Gaurav', 'Naik', ' 9579821932', 'ngaurav2003@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'gaurav', 'naik', ' 25568555', 'hjghfygig@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(18, 'gaurav', 'naik', ' 8465555565', 'ngaurav20031@gmail.com', '7bccfde7714a1ebadf06c5f4cea752c1'),
(19, 'gaurav', 'naik', ' 585555', 'ngaurav20032@gmail.com', '83cdcec08fbf90370fcf53bdd56604ff'),
(23, 'gaurav', 'naik', ' 5454544', 'ngaurav20034@gmail.com', 'eb62f6b9306db575c2d596b1279627a4'),
(24, 'gaurav', 'naik', ' 5454544', 'ngaurav20033@gmail.com', 'eb62f6b9306db575c2d596b1279627a4'),
(25, 'gaurav', 'naik', ' 8465555565', 'ngaurav20035@gmail.com', '1068c6e4c8051cfd4e9ea8072e3189e2'),
(29, 'Gaurav', 'Naik', ' 9579821932', 'naikgaurav2003@gmail.com', '733d7be2196ff70efaf6913fc8bdcabf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_info`
--
ALTER TABLE `admin_login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login_info`
--
ALTER TABLE `admin_login_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

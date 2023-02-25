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
-- Database: `photographer_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_package`
--

CREATE TABLE `basic_package` (
  `id` int(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `photographer` varchar(255) NOT NULL,
  `videographer` varchar(255) NOT NULL,
  `video_coverage` varchar(255) NOT NULL,
  `digital_files` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `dvd` varchar(255) NOT NULL,
  `benefit1` varchar(255) NOT NULL,
  `benefit2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_package`
--

INSERT INTO `basic_package` (`id`, `price`, `photographer`, `videographer`, `video_coverage`, `digital_files`, `album`, `dvd`, `benefit1`, `benefit2`) VALUES
(1, '₹ 45000', '1 Photographer', '1 Videographer', '3 hours Video Coverage', 'HD Digital Files on Disk', '12×30=30 Pages(Photobook)', '3 Video DVD (Normal HD)', '1 Family Photo = 12×18', '1 Couple Photo = 12×18');

-- --------------------------------------------------------

--
-- Table structure for table `booking_request`
--

CREATE TABLE `booking_request` (
  `no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `type_of_session` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `package_details` varchar(255) NOT NULL,
  `other_info` varchar(500) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_request`
--

INSERT INTO `booking_request` (`no`, `name`, `email`, `contact`, `type_of_session`, `date`, `address`, `package_details`, `other_info`, `status`) VALUES
(6, 'gaurav ', 'ngaurav2003@gmail.com', '9579821932', 'Wedding', '2003-02-22', 'sherle', 'Basic', 'wwwww', 'approved'),
(7, 'gaurav ', 'ngaurav2003@gmail.com', '9579821932', 'Birthday', '0088-08-08', 'sherle', 'Pro', 'nnnnnnnnnnnnnnnn', 'approved'),
(9, 'hhhh', 'naikgaurav2003@gmail.com', '1554555555', 'Birthday', '0052-02-05', 'd', 'Customizable', 'cffffffffffffffffff', 'approved'),
(10, 'gaurav ', 'naikgaurav2003@gmail.com', '9579821932', '2', '0212-06-08', 'lll', '2', '', 'pending'),
(11, 'jjjjjjj', 'ngaurav2003@gmail.com', '1554555555', '4', '0051-04-08', 'lkijn ', '1', '', 'pending'),
(12, 'asss', 'naikgaurav2003@gmail.com', '8565252555', 'Anniversary', '0051-04-08', 'rrrrrrrrr', 'Basic', 'rrrrrrv vdddv', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE `image_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`id`, `title`, `image`) VALUES
(17, 'prewedding', '1677335315.png'),
(18, 'prewedding', '1677335343.png'),
(19, 'prewedding', '1677335353.png'),
(20, 'prewedding', '1677335363.png'),
(21, 'candid', '1677335384.png'),
(22, 'candid', '1677335395.png'),
(23, 'candid', '1677335407.png'),
(24, 'candid', '1677335419.png');

-- --------------------------------------------------------

--
-- Table structure for table `pro_package`
--

CREATE TABLE `pro_package` (
  `id` int(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `photographer` varchar(255) NOT NULL,
  `videographer` varchar(255) NOT NULL,
  `video_coverage` varchar(255) NOT NULL,
  `digital_files` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `dvd` varchar(255) NOT NULL,
  `benefit1` varchar(255) NOT NULL,
  `benefit2` varchar(255) NOT NULL,
  `benefit3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pro_package`
--

INSERT INTO `pro_package` (`id`, `price`, `photographer`, `videographer`, `video_coverage`, `digital_files`, `album`, `dvd`, `benefit1`, `benefit2`, `benefit3`) VALUES
(1, '₹ 65000', '2 Photographer', '1 Videographer', '4 hours Video Coverage', 'HD Digital Files On Pendrive', '14×40= 45 Pages(Photobook)', '3 Video File on Pendrive', '16×20= Canvas Print Choice', 'Photo Frame', '1 Minibook + Calendar');

-- --------------------------------------------------------

--
-- Table structure for table `standard_package`
--

CREATE TABLE `standard_package` (
  `id` int(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `photographer` varchar(255) NOT NULL,
  `videographer` varchar(255) NOT NULL,
  `video_coverage` varchar(255) NOT NULL,
  `digital_files` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `dvd` varchar(255) NOT NULL,
  `benefit1` varchar(255) NOT NULL,
  `benefit2` varchar(255) NOT NULL,
  `benefit3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `standard_package`
--

INSERT INTO `standard_package` (`id`, `price`, `photographer`, `videographer`, `video_coverage`, `digital_files`, `album`, `dvd`, `benefit1`, `benefit2`, `benefit3`) VALUES
(1, '₹ 55000', '1 Photographer', '1 Videographer', '4 hours Video Coverage', 'HD Digital Files On Pendrive', '12×36= 40 Pages(Photobook)', '3 Video DVD (Full HD)', '16×20= 1 Family Photo', '16×20= 1 Canvas Print', '1 Minibook + Calendar');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `No` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_package`
--
ALTER TABLE `basic_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_request`
--
ALTER TABLE `booking_request`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `image_gallery`
--
ALTER TABLE `image_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_package`
--
ALTER TABLE `pro_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard_package`
--
ALTER TABLE `standard_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_package`
--
ALTER TABLE `basic_package`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking_request`
--
ALTER TABLE `booking_request`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `image_gallery`
--
ALTER TABLE `image_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pro_package`
--
ALTER TABLE `pro_package`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `standard_package`
--
ALTER TABLE `standard_package`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2020 at 01:26 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iors`
--

-- --------------------------------------------------------

--
-- Table structure for table `inout_info`
--

CREATE TABLE `inout_info` (
  `id` int(11) NOT NULL,
  `first_n` varchar(255) NOT NULL,
  `last_n` varchar(255) NOT NULL,
  `room_n` varchar(255) NOT NULL,
  `mobile_n` varchar(255) NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `date_n` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inout_info`
--

INSERT INTO `inout_info` (`id`, `first_n`, `last_n`, `room_n`, `mobile_n`, `in_time`, `out_time`, `date_n`) VALUES
(1, 'Gauri', 'Lodha', 'm11', '2147483647', '00:16:16', '00:14:52', '2019-10-07'),
(2, 'Gauri', 'Lodha', 'm11', '9096854515', '00:17:58', '00:16:38', '2019-10-07'),
(3, 'Gauri', 'Lodha', 'm11', '9096854515', '00:17:58', '00:17:44', '2019-10-07'),
(4, 'Gauri', 'Lodha', 'm11', '9096854515', '00:18:56', '00:18:47', '2019-10-07'),
(5, 'Gauri', 'Lodha', 'm11', '9096854515', '10:38:13', '00:40:12', '2019-10-07'),
(6, 'Gauri', 'Lodha', 'm11', '9096854515', '10:38:13', '10:38:11', '2019-10-07'),
(7, 'Gauri', 'Lodha', 'm11', '9096854515', '11:03:39', '10:38:14', '2019-10-07'),
(8, 'Gauri', 'Lodha', 'm11', '9096854515', '11:03:39', '11:03:34', '2019-10-07'),
(9, 'Gauri', 'Lodha', 'm11', '9096854515', '11:04:24', '11:03:40', '2019-10-07'),
(10, 'Gauri', 'Lodha', 'm11', '9096854515', '11:05:14', '11:04:25', '2019-10-07'),
(11, 'Gauri', 'Lodha', 'm11', '9096854515', '12:03:25', '12:02:36', '2019-10-07'),
(12, 'Gauri', 'Lodha', 'm11', '9096854515', '12:30:43', '12:03:26', '2019-10-07'),
(13, 'Gauri', 'Lodha', 'm11', '9096854515', '12:30:43', '12:30:42', '2019-10-07'),
(14, 'Gauri', 'Lodha', 'm11', '9096854515', '12:30:44', '12:30:44', '2019-10-07'),
(15, 'Gauri', 'Lodha', 'm11', '9096854515', '10:44:33', '12:30:47', '2019-10-07'),
(16, 'Gauri', 'Lodha', 'm11', '9096854515', '10:44:33', '10:44:19', '2019-10-15'),
(17, 'Gauri', 'Lodha', 'm11', '9096854515', '11:16:58', '10:45:19', '2019-10-15'),
(18, 'Gauri', 'Lodha', 'm11', '9096854515', '11:16:58', '11:16:51', '2019-10-25'),
(19, 'Gauri', 'Lodha', 'm11', '9096854515', '21:57:15', '11:17:06', '2019-10-25'),
(20, 'Gauri', 'Lodha', 'm11', '9096854515', '21:57:15', '21:57:10', '2019-10-25'),
(21, 'Gauri', 'Lodha', 'm11', '9096854515', '08:43:12', '21:57:17', '2019-10-25'),
(22, 'Gauri', 'Lodha', 'm11', '9096854515', '08:43:12', '08:43:11', '2019-11-06'),
(23, 'Gauri', 'Lodha', 'm11', '9096854515', '14:59:22', '11:31:09', '2019-11-06'),
(24, 'Gauri', 'Lodha', 'm11', '9096854515', '14:59:22', '14:59:12', '2019-11-06'),
(25, 'Gauri', 'Lodha', 'm11', '9096854515', '17:18:53', '14:59:35', '2019-11-06'),
(26, 'Gauri', 'Lodha', 'm11', '9096854515', '17:18:53', '17:18:52', '2019-12-12'),
(27, 'Gauri', 'Lodha', 'm11', '9096854515', '17:19:12', '17:19:02', '2019-12-12'),
(28, 'Gauri', 'Lodha', 'm11', '9096854515', '00:00:00', '17:26:13', '2019-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `email_stud` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `mobile_stud` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `email_parent` varchar(255) NOT NULL,
  `mobile_parent` varchar(255) NOT NULL,
  `password_one` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `first_name`, `last_name`, `year`, `branch`, `email_stud`, `room_no`, `mobile_stud`, `father_name`, `mother_name`, `email_parent`, `mobile_parent`, `password_one`) VALUES
(1, 'Gauri', 'Lodha', ' TE', ' COMPUTER', 'gau@gmail.com', 'm11', '9096854515', 'Lalit', 'Anita', 'anita@gmail.com', '9421523405', 'G123'),
(2, 'Sarvesh', 'Sahasrabudhe', 'TE', 'COMPUTER', 'sarvesh.sahasrabudhe@gmail.com', 'N501', '8605030087', 'Sandeep', 'Deepali', 'sandeep.sahasrabudhe@gmail.com', '9823585491', 'Sar123'),
(4, 'ajay', 'agrawal', ' TE', ' COMPUTER', 'ajayagrawal2589@gmail.com', '04', '9881475449', 'rajesh', 'archana', 'rajaesh@gmail.com', '987654321', 'ajay1234');

-- --------------------------------------------------------

--
-- Table structure for table `warden_info`
--

CREATE TABLE `warden_info` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email_warden` varchar(255) NOT NULL,
  `mobile_warden` varchar(255) NOT NULL,
  `pass_warden` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden_info`
--

INSERT INTO `warden_info` (`id`, `f_name`, `l_name`, `email_warden`, `mobile_warden`, `pass_warden`) VALUES
(1, 'Mugdha', 'Kulkarni', 'mugs@gmail.com', '7766554433', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inout_info`
--
ALTER TABLE `inout_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warden_info`
--
ALTER TABLE `warden_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inout_info`
--
ALTER TABLE `inout_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warden_info`
--
ALTER TABLE `warden_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

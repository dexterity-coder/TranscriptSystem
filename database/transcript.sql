-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 02:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transcript`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `appid` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matno` varchar(60) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `semail` varchar(60) NOT NULL,
  `level` varchar(6) NOT NULL,
  `grad_date` varchar(30) NOT NULL,
  `s_date` varchar(30) NOT NULL,
  `a_date` varchar(30) NOT NULL,
  `acomment` varchar(200) NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `fee` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`appid`, `email`, `matno`, `dept`, `semail`, `level`, `grad_date`, `s_date`, `a_date`, `acomment`, `comment`, `fee`, `status`) VALUES
('APP-1415550723', 'josiahdanj@gmail.com', 'NACEST/COM/ND20/342', 'Computer Science', 'infor@gmail.com', 'ND', '2019', '23-07-14', '21-07-2023', 'Your application has been processed and the transcript has been forwarded to the receiving institution email.', 'tis is a trial', '5000', '1'),
('APP-2206310623', 'josiahdanj@gmail.com', 'NACST/COM/HND20/512', 'Computer Science', 'info@uniabuja.edu.ng', 'HND', '2023', '23-06-22', '', '', 'THIS IS A CORRICULLUM', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `atranscript`
--

CREATE TABLE `atranscript` (
  `id` int(11) NOT NULL,
  `appid` varchar(100) NOT NULL,
  `nd11sem` int(11) NOT NULL,
  `nd12sem` int(11) NOT NULL,
  `nd21sem` int(11) NOT NULL,
  `nd22sem` int(11) NOT NULL,
  `hnd11sem` int(11) NOT NULL,
  `hnd12sem` int(11) NOT NULL,
  `hnd21sem` int(11) NOT NULL,
  `hnd22sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(60) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`, `status`) VALUES
('admin@admin.com', 'a', 'admin', '1'),
('josiahdanj@gmail.com', '1234', 'student', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(60) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `matno` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `email`, `phone`, `matno`) VALUES
('', 'Ponjul Danjuma', 'josiahdanj@gmail.com', '08089499898', 'NACST/COM/HND20/512');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`appid`);

--
-- Indexes for table `atranscript`
--
ALTER TABLE `atranscript`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atranscript`
--
ALTER TABLE `atranscript`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

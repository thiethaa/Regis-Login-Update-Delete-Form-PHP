-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2019 at 06:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixform`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phonecode` int(10) NOT NULL,
  `phone` bigint(50) DEFAULT NULL,
  `imglink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fname`, `lname`, `username`, `email`, `password`, `dob`, `gender`, `hobby`, `address`, `country`, `city`, `phonecode`, `phone`, `imglink`) VALUES
(1, 'sayangomar', 'loveomar', 'omar', 'omr@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-12-07', 'M', 'travel,sport,', 'momdadhouse', 'USA', 'Hawaii', 1, 3333322, 'uploads/baby-710357_1920.jpg'),
(2, 'my baby', 'omr', 'myson', 'omara@ew.op', '202cb962ac59075b964b07152d234b70', '2019-12-12', 'M', 'travel,', '98lakesom', 'USA', 'Rhode Island', 1, 2332234, 'uploads/IMG_20190315_133728.jpg'),
(3, 'papaa', 'omarpapaa', 'dad', 'papa@wew.po', '202cb962ac59075b964b07152d234b70', '2019-12-13', 'M', 'travel,', 'momyhome', 'USA', 'Georgia', 1, 3443456, 'uploads/3f9f3caa-34f5-4fe5-96c5-aa6870661305.jpg'),
(4, 'mommyomar', 'omarmom', 'mom', 'omarmom@io.op', '202cb962ac59075b964b07152d234b70', '2019-12-05', 'F', 'travel,', 'papahome', 'USA', 'Hawaii', 1, 2332345, 'uploads/woman.png'),
(5, 'omarpapa', 'omarbaba', 'papa', 'ali@kl.po', '202cb962ac59075b964b07152d234b70', '2019-12-04', 'M', 'sport,', 'momyhome', 'USA', 'Alaska', 1, 2332345, 'uploads/man.png'),
(6, 'zaeeew', 'wwwsss', 'zara', 'zara@we.po', '202cb962ac59075b964b07152d234b70', '2019-12-07', 'F', 'music,', 'wwww', 'USA', 'American Samoa', 1, 34534444, 'uploads/baby-1426651_1920.jpg'),
(7, 'sara', 'sarah', 'sarah', 'ddydy@er.po', '202cb962ac59075b964b07152d234b70', '2019-12-05', 'F', 'music,', 'sdd', 'INDONESIA', 'Bandung', 62, 44443333, 'uploads/volleyball.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

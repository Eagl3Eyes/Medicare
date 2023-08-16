-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 11:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `contract_info`
--

CREATE TABLE `contract_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract_info`
--

INSERT INTO `contract_info` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`) VALUES
(1, 'Shakib', 'Khan', 'supto@gmail.com', '01732218492', 'I need a doctor. please check my message. '),
(2, 'Tuhin ', 'Zobayer', 'tuhin@gmail.com', '01412313212', 'Hi, I am patient. Please check nero Dr available.');

-- --------------------------------------------------------

--
-- Table structure for table `myadmin`
--

CREATE TABLE `myadmin` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myadmin`
--

INSERT INTO `myadmin` (`id`, `name`, `email`, `pass`) VALUES
(1, 'Admin', 'medicare@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ourdoctortable`
--

CREATE TABLE `ourdoctortable` (
  `odID` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ourdoctortable`
--

INSERT INTO `ourdoctortable` (`odID`, `image`, `name`, `department`, `phone`, `email`, `facebook`, `linkedin`, `twitter`) VALUES
(2, 'images/team-image2.jpg', 'Akram Khan', 'Dental', '6076-4-45353', 'akramhoss392ain@gmail.com', '#', '#', '#'),
(3, 'images/team-image3.jpg', 'Sayma Ikra', 'Cardiology', '36235341341', 'ikra@gmail.com', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE `tblappointment` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `appDate` date NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `cdoctor` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `appMessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`id`, `name`, `email`, `appDate`, `department`, `cdoctor`, `phone`, `appMessage`) VALUES
(1, 'Shahin', 'sh@gmail.com', '2021-08-14', 'Neurology', '', '803802883', 'system testing'),
(2, 'Jahid', 'jahid24@gmail.com', '2021-08-25', 'Dental', '', '976587684', 'need dental care'),
(3, 'Ekram', 'akram@gmail.com', '2021-08-28', 'Neurology', '', '783693827', 'doctor i need help'),
(4, 'Ekram', 'akram@gmail.com', '2021-08-28', 'Neurology', '', '783693827', 'doctor i need help'),
(5, 'Akram', 'ak@gamil.com', '2021-08-31', 'Neurology', 'Dr. Amanda Rusco, Neurology', '745645365', 'new test'),
(6, 'Galib', 'galib34@gmail.com', '2021-09-16', 'Cardiology', 'Dr. Timmothy Johnson, Cardiology', '456373567536', 'test test'),
(7, 'Rahim', 'rahim3535@gmail.com', '2021-09-09', 'Neurology', 'Dr. Amanda Rusco, Neurology', '3452454524', 'test again');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contract_info`
--
ALTER TABLE `contract_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myadmin`
--
ALTER TABLE `myadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourdoctortable`
--
ALTER TABLE `ourdoctortable`
  ADD PRIMARY KEY (`odID`);

--
-- Indexes for table `tblappointment`
--
ALTER TABLE `tblappointment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contract_info`
--
ALTER TABLE `contract_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `myadmin`
--
ALTER TABLE `myadmin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ourdoctortable`
--
ALTER TABLE `ourdoctortable`
  MODIFY `odID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblappointment`
--
ALTER TABLE `tblappointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

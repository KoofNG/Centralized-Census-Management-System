-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 10:36 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registered_citizens`
--

CREATE TABLE `tbl_registered_citizens` (
  `userid` int(4) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `age` int(4) NOT NULL,
  `gender` char(1) NOT NULL,
  `ethnicgroup` varchar(50) NOT NULL,
  `stateOfOrigin` varchar(50) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `hometown` varchar(50) NOT NULL,
  `stateOfResidence` varchar(50) DEFAULT NULL,
  `lgaOfResidence` varchar(50) DEFAULT NULL,
  `religion` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `profilepicture` varchar(256) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registered_citizens`
--

INSERT INTO `tbl_registered_citizens` (`userid`, `fullname`, `dob`, `age`, `gender`, `ethnicgroup`, `stateOfOrigin`, `lga`, `hometown`, `stateOfResidence`, `lgaOfResidence`, `religion`, `occupation`, `phoneNumber`, `email`, `profilepicture`, `timeStamp`) VALUES
(1, 'Israel Akpan', '1995-05-24', 23, 'M', 'Ibibio', 'Akwa Ibom', 'Uyo', 'Uyo', 'Ondo', 'Owo', 'Christianity', 'Software Developer', '08132218543', 'israelakpan296@gmail.com', '', '2018-12-14 18:12:40'),
(2, 'Ajayi Crowther', '1905-05-24', 103, 'M', 'Yoruba', 'Ondo', 'Ondo', 'iyo', 'Abuja', 'Garaki', 'Christianity', 'Teacher', '', '', '', '2018-12-14 19:57:51'),
(4, 'Ajayi Fletcher', '1905-06-24', 50, 'F', 'Yoruba', 'Ondo', 'Ondo', 'iyo', 'London', 'Gar', 'Islam', 'Developer', '080123456789', 'emaa@gmail.com', '', '2018-12-14 21:21:52'),
(5, 'Fletcher Iyo', '1955-06-04', 76, 'F', 'Yoruba', 'Ondo', 'Ondo', 'iyo', 'Ikale', 'Gar', 'Islam', 'Developer', '080123456789', 'emaa@gmail.com', '', '2018-12-14 20:01:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_registered_citizens`
--
ALTER TABLE `tbl_registered_citizens`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_registered_citizens`
--
ALTER TABLE `tbl_registered_citizens`
  MODIFY `userid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

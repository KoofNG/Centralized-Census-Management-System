-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 08:00 PM
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
  `userId` int(4) NOT NULL,
  `fullName` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `age` int(4) NOT NULL,
  `gender` char(1) NOT NULL,
  `ethnicGroup` varchar(50) NOT NULL,
  `stateOfOrigin` varchar(50) NOT NULL,
  `lga` varchar(50) NOT NULL,
  `hometown` varchar(50) NOT NULL,
  `stateOfResidence` varchar(50) DEFAULT NULL,
  `lgaOfResidence` varchar(50) DEFAULT NULL,
  `religion` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `profilePicture` varchar(256) NOT NULL,
  `homeAddress` varchar(256) NOT NULL,
  `BVN` int(10) DEFAULT NULL,
  `NIM` int(20) DEFAULT NULL,
  `VIN` varchar(255) DEFAULT NULL,
  `passportNumber` varchar(255) DEFAULT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for table `tbl_registered_citizens`
--
ALTER TABLE `tbl_registered_citizens`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_registered_citizens`
--
ALTER TABLE `tbl_registered_citizens`
  MODIFY `userId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

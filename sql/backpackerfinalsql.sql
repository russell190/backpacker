-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2016 at 04:21 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backpacker`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `AccountId` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccountId`, `name`, `username`, `password`, `email`) VALUES
(1, 'James Sampson', 'jsampso', 'Tester1', 'jsampso@outlook.com'),
(2, 'Zach', 'zdcox', '1', 'asdfsadfa;ldskjfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `gear`
--

CREATE TABLE `gear` (
  `GearId` int(11) NOT NULL,
  `GearType` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gear`
--

INSERT INTO `gear` (`GearId`, `GearType`, `name`, `weight`, `rating`) VALUES
(1, 'pack', 'backpack', '9', 9),
(2, 'pack', 'backpack', '9', 9),
(3, 'Pickle gear', 'PIckle', '3', 3);

-- --------------------------------------------------------

--
-- Table structure for table `gearlist`
--

CREATE TABLE `gearlist` (
  `ListId` int(11) NOT NULL,
  `GearId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gearlist`
--

INSERT INTO `gearlist` (`ListId`, `GearId`) VALUES
(1, 1),
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `ListId` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `AccountId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`ListId`, `name`, `AccountId`) VALUES
(1, 'BackPack', 1),
(2, 'list', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`AccountId`);

--
-- Indexes for table `gear`
--
ALTER TABLE `gear`
  ADD PRIMARY KEY (`GearId`);

--
-- Indexes for table `gearlist`
--
ALTER TABLE `gearlist`
  ADD PRIMARY KEY (`GearId`,`ListId`),
  ADD KEY `ListGearList` (`ListId`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`ListId`),
  ADD KEY `AccountList` (`AccountId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `AccountId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gear`
--
ALTER TABLE `gear`
  MODIFY `GearId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `ListId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `gearlist`
--
ALTER TABLE `gearlist`
  ADD CONSTRAINT `GearGearList` FOREIGN KEY (`GearId`) REFERENCES `gear` (`GearId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ListGearList` FOREIGN KEY (`ListId`) REFERENCES `list` (`ListId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `AccountList` FOREIGN KEY (`AccountId`) REFERENCES `account` (`AccountId`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

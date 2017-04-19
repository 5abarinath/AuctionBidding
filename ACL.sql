-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2017 at 07:22 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ACL`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(11) NOT NULL,
  `baseBid` int(11) NOT NULL,
  `maxBid` int(11) NOT NULL,
  `currentBid` int(11) NOT NULL DEFAULT '0',
  `bidIncre` int(11) NOT NULL DEFAULT '1000',
  `premium` int(11) NOT NULL DEFAULT '2000',
  `requirement` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `baseBid`, `maxBid`, `currentBid`, `bidIncre`, `premium`, `requirement`) VALUES
(1, 100000, 125000, 133000, 1000, 2000, 0),
(2, 50000, 75000, 91000, 1000, 2000, 0),
(3, 75000, 100000, 104000, 1000, 2000, 0),
(4, 75000, 100000, 80000, 1000, 2000, 0),
(5, 100000, 125000, 105000, 1000, 2000, 0),
(6, 50000, 75000, 55000, 1000, 2000, 0),
(7, 75000, 100000, 80000, 1000, 2000, 0),
(8, 75000, 100000, 80000, 1000, 2000, 0),
(9, 50000, 75000, 55000, 1000, 2000, 0),
(10, 100000, 125000, 105000, 1000, 2000, 0),
(11, 50000, 75000, 55000, 1000, 2000, 0),
(12, 75000, 100000, 80000, 1000, 2000, 0),
(13, 100000, 120000, 105000, 1000, 2000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `playerlist`
--

CREATE TABLE `playerlist` (
  `id` int(2) DEFAULT NULL,
  `name` varchar(29) DEFAULT NULL,
  `image` varchar(1000) NOT NULL DEFAULT 'images/players/',
  `role` varchar(27) DEFAULT NULL,
  `slot` varchar(2500) DEFAULT NULL,
  `team` varchar(50) NOT NULL DEFAULT '--',
  `amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teamlist`
--

CREATE TABLE `teamlist` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pswd` varchar(20) DEFAULT NULL,
  `logo` varchar(1000) DEFAULT NULL,
  `total` int(11) NOT NULL DEFAULT '1000000',
  `rem` int(11) NOT NULL DEFAULT '1000000',
  `spent` int(11) NOT NULL DEFAULT '0',
  `premium` int(11) NOT NULL DEFAULT '150000',
  `curr` int(11) NOT NULL DEFAULT '0',
  `btnFlag` int(11) NOT NULL DEFAULT '0',
  `preFlag` int(11) NOT NULL DEFAULT '0',
  `slot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamlist`
--

INSERT INTO `teamlist` (`id`, `name`, `pswd`, `logo`, `total`, `rem`, `spent`, `premium`, `curr`, `btnFlag`, `preFlag`, `slot`) VALUES
(1, 'Aman Honda Ryders', NULL, 'images/AmanHonda.png', 1350000, 1160000, 157000, 150000, 103000, 0, 0, NULL),
(2, 'Ceratec Masters', NULL, 'images/CeratecMasters.png', 1350000, 1345000, 158000, 150000, 102000, 0, 0, NULL),
(3, 'Fitness Mantra', NULL, 'images/FitnessMantras.png', 1350000, 1275000, 222000, 113000, 105000, 0, 0, NULL),
(4, 'Maha Fast Champs', NULL, 'images/MahaFastChamps1.png', 1350000, 1346000, 159000, 150000, 101000, 0, 0, NULL),
(5, 'Premier Titans', NULL, 'images/PremierTitans.jpg', 1350000, 1173000, 222000, 126000, 104000, 0, 0, NULL),
(6, 'Sun Shiners', NULL, 'images/SunShiners.png', 1350000, 1350000, 160000, 150000, 100000, 0, 0, NULL),
(7, 'adminFlag', NULL, NULL, 1000000, 1350000, 0, 150000, 0, 1, 0, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playerlist`
--
ALTER TABLE `playerlist`
  ADD UNIQUE KEY `COL 1` (`id`);

--
-- Indexes for table `teamlist`
--
ALTER TABLE `teamlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `teamlist`
--
ALTER TABLE `teamlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2019 at 05:15 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wheresert`
--

-- --------------------------------------------------------

--
-- Table structure for table `rights_master_level_1`
--

CREATE TABLE `rights_master_level_1` (
  `ID` int(11) NOT NULL,
  `MainSection` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rights_master_level_1`
--

INSERT INTO `rights_master_level_1` (`ID`, `MainSection`) VALUES
(1, 'Freelancers'),
(2, 'Freelancer Profiles'),
(3, 'Recruiters'),
(4, 'Service Requests'),
(5, 'User Reviews'),
(6, 'Banner Management'),
(7, 'Categories'),
(8, 'Blog'),
(9, 'System Settings'),
(10, 'Website Controls');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rights_master_level_1`
--
ALTER TABLE `rights_master_level_1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rights_master_level_1`
--
ALTER TABLE `rights_master_level_1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

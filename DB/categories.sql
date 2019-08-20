-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 10:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `MyID` int(11) NOT NULL,
  `MainCatID` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Publish` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `MyID`, `MainCatID`, `Category`, `Publish`) VALUES
(1, 0, 2, 'Accounting', 'Yes'),
(2, 0, 2, 'Legal', 'Yes'),
(3, 0, 2, 'Programming ', 'Yes'),
(4, 0, 2, 'Architecture', 'Yes'),
(5, 0, 2, 'Engineering', 'Yes'),
(6, 0, 2, 'Digital Designers', 'Yes'),
(7, 0, 2, 'Beauty & Skincare', 'Yes'),
(8, 0, 2, 'Child Care', 'Yes'),
(9, 0, 2, 'Pet Care', 'Yes'),
(10, 0, 2, 'Health & Well Being', 'Yes'),
(11, 0, 2, 'Cleaning', 'Yes'),
(12, 0, 2, 'Maintenance', 'Yes'),
(13, 0, 2, 'Moving', 'Yes'),
(14, 0, 2, 'Fashion Designers', 'Yes'),
(15, 0, 2, 'Arts & Crafts', 'Yes'),
(16, 0, 2, 'Writers & Translators', 'Yes'),
(17, 0, 2, 'Photography', 'Yes'),
(18, 0, 2, 'Video', 'Yes'),
(19, 0, 2, 'Academic Classes', 'Yes'),
(20, 0, 2, 'Hobby Classes', 'Yes'),
(21, 0, 2, 'Language Classes', 'Yes'),
(22, 0, 2, 'Sports Coaching', 'Yes'),
(23, 0, 2, 'Consultants', 'Yes'),
(24, 0, 2, 'Marketing', 'Yes'),
(25, 0, 2, 'Entertainment', 'Yes'),
(26, 0, 2, 'Events', 'Yes'),
(27, 0, 2, 'Music & Audio', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

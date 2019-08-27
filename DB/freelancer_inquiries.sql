-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 12:04 PM
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
-- Table structure for table `freelancer_inquiries`
--

CREATE TABLE `freelancer_inquiries` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Number` varchar(15) NOT NULL,
  `ContactPrefrence` varchar(50) NOT NULL,
  `Comment` varchar(1000) NOT NULL,
  `PostDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer_inquiries`
--

INSERT INTO `freelancer_inquiries` (`ID`, `UserID`, `Name`, `Email`, `City`, `Number`, `ContactPrefrence`, `Comment`, `PostDate`) VALUES
(1, 1, 'SURAJ YADAV', 'iamsurajyadav57@gmail.com', 'MUMBAI', '07506070225', 'PhoneCall,SMS/Whatsapp,Email', 'Looking+for+you', '2019-08-27'),
(2, 4, 'Deepak Nishad', 'deepak@gmail.com', 'Dubai', '8898659865', 'PhoneCall,Email', 'looking+for+desgine+my+Building', '2019-08-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `freelancer_inquiries`
--
ALTER TABLE `freelancer_inquiries`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `freelancer_inquiries`
--
ALTER TABLE `freelancer_inquiries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

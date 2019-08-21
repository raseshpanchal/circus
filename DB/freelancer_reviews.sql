-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 10:10 AM
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
-- Table structure for table `freelancer_reviews`
--

CREATE TABLE `freelancer_reviews` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Review` varchar(1000) NOT NULL,
  `Rating` int(11) NOT NULL,
  `ReviewDate` date NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer_reviews`
--

INSERT INTO `freelancer_reviews` (`ID`, `UserID`, `Name`, `Email`, `Review`, `Rating`, `ReviewDate`, `Status`) VALUES
(1, 1, 'Ashish Sahgal', 'ashish@gmail.com', 'Very professional services.... Highly recommended...!!!', 5, '2019-08-21', 'Approved'),
(2, 1, 'Deepak Nishad', 'deepn@gmail.com', 'Hello+world...%21%21%21%21', 1, '2019-08-21', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `freelancer_reviews`
--
ALTER TABLE `freelancer_reviews`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `freelancer_reviews`
--
ALTER TABLE `freelancer_reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

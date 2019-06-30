-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2019 at 06:21 PM
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
-- Table structure for table `recruiter_registration`
--

CREATE TABLE `recruiter_registration` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `EmailID` varchar(100) NOT NULL,
  `BusinessTitle` varchar(100) NOT NULL,
  `Professional` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Description` text NOT NULL,
  `CityID` int(11) NOT NULL,
  `StateID` int(11) NOT NULL,
  `CountryID` int(11) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `CreateDate` date NOT NULL,
  `CreateTime` time NOT NULL,
  `PaidPhoto` varchar(10) NOT NULL,
  `PaidBanners` varchar(10) NOT NULL,
  `PaidListing` varchar(3) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruiter_registration`
--

INSERT INTO `recruiter_registration` (`ID`, `FirstName`, `LastName`, `Mobile`, `EmailID`, `BusinessTitle`, `Professional`, `Address`, `DOB`, `Gender`, `Description`, `CityID`, `StateID`, `CountryID`, `ZipCode`, `Password`, `CreateDate`, `CreateTime`, `PaidPhoto`, `PaidBanners`, `PaidListing`, `Status`) VALUES
(1, 'Rajesh', 'Panchal', '9820937938', 'rajeshp22@gmail.com', '', '', '', '22/08/1980', 'Male', '', 0, 0, 0, '', 'id$x#MxDQJ', '2019-06-29', '16:29:22', 'No', 'No', 'No', 'New');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recruiter_registration`
--
ALTER TABLE `recruiter_registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recruiter_registration`
--
ALTER TABLE `recruiter_registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

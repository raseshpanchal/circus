-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2019 at 08:43 PM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wheresert-hassan`
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
  `PostDate` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer_inquiries`
--

INSERT INTO `freelancer_inquiries` (`ID`, `UserID`, `Name`, `Email`, `City`, `Number`, `ContactPrefrence`, `Comment`, `PostDate`, `Status`) VALUES
(1, 1, 'Rasesh Panchal', 'raseshpanchal@gmail.com', 'Mumbai', '9820937938', 'PhoneCall,SMS/Whatsapp,Email', 'Hello%2C%0D%0AHope+you+are+doing+well.+Need+to+get+your+services+to+expand+my+business+operations+in+India+and+abroad.+Kindly+get+back+to+me+for+more+details.', '2019-08-27', 'New');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

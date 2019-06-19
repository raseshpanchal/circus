-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 05:26 PM
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
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `UserType` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `Name`, `Email`, `Password`, `UserType`, `Status`) VALUES
(1, 'wheresert', 'admin', 'admin', 'SA', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE `category_master` (
  `ID` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Publish` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `ID` int(11) NOT NULL,
  `CountryID` int(11) NOT NULL,
  `StateID` int(11) NOT NULL,
  `CityName` varchar(50) NOT NULL,
  `Publish` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE `country_master` (
  `ID` int(11) NOT NULL,
  `CountryName` varchar(50) NOT NULL,
  `CountryCode` varchar(10) NOT NULL,
  `Publish` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paid_banners`
--

CREATE TABLE `paid_banners` (
  `ID` int(11) NOT NULL,
  `VendorID` int(11) NOT NULL,
  `BannerTitle` varchar(50) NOT NULL,
  `BannerImg` varchar(100) NOT NULL,
  `VideoURL` varchar(50) NOT NULL,
  `StartDate` date NOT NULL,
  `CountryID` int(11) NOT NULL,
  `ProfessionID` int(11) NOT NULL,
  `EndDate` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paid_listing`
--

CREATE TABLE `paid_listing` (
  `ID` int(11) NOT NULL,
  `VendorID` int(11) NOT NULL,
  `BannerTitle` varchar(50) NOT NULL,
  `BannerImg` varchar(100) NOT NULL,
  `VideoURL` varchar(50) NOT NULL,
  `StartDate` date NOT NULL,
  `CountryID` int(11) NOT NULL,
  `ProfessionID` int(11) NOT NULL,
  `EndDate` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

CREATE TABLE `profession` (
  `ID` int(11) NOT NULL,
  `ProfessionName` varchar(50) NOT NULL,
  `Publish` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Vendor'),
(2, 'Banners'),
(3, 'Profession'),
(4, 'Wheresert Users'),
(5, 'Categories'),
(6, 'Sub-Categories'),
(7, 'Geo-Locations'),
(8, 'User-Reviews'),
(9, 'System Users'),
(10, 'Reports');

-- --------------------------------------------------------

--
-- Table structure for table `rights_master_level_2`
--

CREATE TABLE `rights_master_level_2` (
  `ID` int(11) NOT NULL,
  `MainSID` int(11) NOT NULL,
  `SectionTitle` varchar(100) NOT NULL,
  `URL` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rights_master_level_2`
--

INSERT INTO `rights_master_level_2` (`ID`, `MainSID`, `SectionTitle`, `URL`) VALUES
(1, 1, 'All Vendors', 'VendorsAll'),
(2, 1, 'Active Vendors', 'vendorsActive'),
(3, 1, 'Blocked Vendors', 'vendorsBlocked '),
(4, 2, 'All Banners', 'bannersAll'),
(5, 2, 'Active Banners', 'bannersActive'),
(6, 2, 'Blocked Banners', 'bannersBlocked'),
(7, 3, 'All Profession', 'professionAll'),
(8, 3, 'Active Profession', 'professionActive'),
(9, 3, 'Blocked Profession', 'professionBlocked'),
(10, 4, 'All Users', 'usersAll'),
(11, 4, 'Approved Users', 'usersApproved'),
(12, 4, 'Rejected / Pending', 'usersRejected'),
(13, 4, 'Blocked Users', 'usersBlocked'),
(14, 5, 'All Categories', 'categoriesAll'),
(15, 5, 'Active Categories', 'categoriesActive'),
(16, 5, 'Blocked Categories', 'categoriesBlocked'),
(17, 6, 'All Sub-Categories', 'subCategoriesAll'),
(18, 6, 'Active Sub-Categories', 'subCategoriesActive'),
(19, 6, 'Blocked Sub-Categories', 'subCategoriesBlocked'),
(20, 7, 'Countries', 'countries'),
(21, 7, 'States', 'states'),
(22, 7, 'Cities', 'cities'),
(23, 7, 'Zip Codes', 'zipCodes');

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `ID` int(11) NOT NULL,
  `CountryID` int(11) NOT NULL,
  `StateName` varchar(50) NOT NULL,
  `Publish` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory_master`
--

CREATE TABLE `subcategory_master` (
  `ID` int(11) NOT NULL,
  `CatID` int(11) NOT NULL,
  `SubCategory` varchar(50) NOT NULL,
  `Publish` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_registraion`
--

CREATE TABLE `user_registraion` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Email` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `CityID` int(11) NOT NULL,
  `StateID` int(11) NOT NULL,
  `CountryID` int(11) NOT NULL,
  `ZipCode` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `VendorID` int(11) NOT NULL,
  `Review` tinytext NOT NULL,
  `PostDate` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_free_gallery`
--

CREATE TABLE `vendor_free_gallery` (
  `ID` int(11) NOT NULL,
  `VendorID` int(11) NOT NULL,
  `PhotoTitle` varchar(50) NOT NULL,
  `PhotoDesc` varchar(150) NOT NULL,
  `PhotoURL` varchar(100) NOT NULL,
  `Publish` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_paid_gallery`
--

CREATE TABLE `vendor_paid_gallery` (
  `ID` int(11) NOT NULL,
  `VendorID` int(11) NOT NULL,
  `PhotoTitle` varchar(50) NOT NULL,
  `PhotoDesc` varchar(150) NOT NULL,
  `PhotoURL` varchar(100) NOT NULL,
  `Publish` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_rating`
--

CREATE TABLE `vendor_rating` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `VendorID` int(11) NOT NULL,
  `Rating` varchar(5) NOT NULL,
  `PostDate` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_registration`
--

CREATE TABLE `vendor_registration` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `EmailID` varchar(100) NOT NULL,
  `BusinessTitle` varchar(100) NOT NULL,
  `Professional` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `vendor_verification`
--

CREATE TABLE `vendor_verification` (
  `ID` int(11) NOT NULL,
  `VendorID` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `PaymentStatus` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `country_master`
--
ALTER TABLE `country_master`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paid_banners`
--
ALTER TABLE `paid_banners`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paid_listing`
--
ALTER TABLE `paid_listing`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rights_master_level_1`
--
ALTER TABLE `rights_master_level_1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rights_master_level_2`
--
ALTER TABLE `rights_master_level_2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subcategory_master`
--
ALTER TABLE `subcategory_master`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_registraion`
--
ALTER TABLE `user_registraion`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vendor_free_gallery`
--
ALTER TABLE `vendor_free_gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vendor_paid_gallery`
--
ALTER TABLE `vendor_paid_gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vendor_rating`
--
ALTER TABLE `vendor_rating`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vendor_registration`
--
ALTER TABLE `vendor_registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vendor_verification`
--
ALTER TABLE `vendor_verification`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country_master`
--
ALTER TABLE `country_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paid_banners`
--
ALTER TABLE `paid_banners`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paid_listing`
--
ALTER TABLE `paid_listing`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profession`
--
ALTER TABLE `profession`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rights_master_level_1`
--
ALTER TABLE `rights_master_level_1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rights_master_level_2`
--
ALTER TABLE `rights_master_level_2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategory_master`
--
ALTER TABLE `subcategory_master`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_registraion`
--
ALTER TABLE `user_registraion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_free_gallery`
--
ALTER TABLE `vendor_free_gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_paid_gallery`
--
ALTER TABLE `vendor_paid_gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_rating`
--
ALTER TABLE `vendor_rating`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_registration`
--
ALTER TABLE `vendor_registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_verification`
--
ALTER TABLE `vendor_verification`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

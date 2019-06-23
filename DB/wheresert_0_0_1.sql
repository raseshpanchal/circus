-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 11:34 AM
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
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `UserType` varchar(10) NOT NULL,
  `Publish` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `Name`, `UserName`, `Password`, `UserType`, `Publish`) VALUES
(1, 'wheresert', 'admin', 'admin', 'Super', 'Yes');

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
(1, 'Freelancers'),
(2, 'Freelancer Profiles'),
(3, 'Recruiters'),
(4, 'Service Requests'),
(5, 'User Reviews'),
(6, 'Banner Management'),
(7, 'Categories'),
(8, 'System Settings'),
(9, 'Website Controls');

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
(1, 1, 'New Registration', 'freelancerNewRegistration'),
(2, 1, 'Active Freelancer', 'freelancerActive'),
(3, 1, 'Blocked Freelancer', 'freelanceBlocked'),
(4, 2, 'New Profiles', 'freelancerProfiles'),
(5, 2, 'Active Profile', 'freelancerActiveProfile'),
(6, 2, 'Blocked Profile', 'freelancerBlockedProfile'),
(7, 3, 'New Registration', 'recruiterNewRegistration'),
(8, 3, 'Active Recruiters', 'recruiterActive'),
(9, 3, 'Blocked Recruiters', 'recruiterBlocked'),
(10, 4, 'New Request', 'servicesNewRequest'),
(11, 4, 'Past Request', 'servicesPastRequest'),
(12, 5, 'New Reviews', 'reviewsNew'),
(13, 5, 'Active Reviews', 'reviewsActive'),
(14, 5, 'Blocked Reviews', 'reviewsBlocked'),
(15, 6, 'Home Page', 'bannerHomePage'),
(16, 6, 'Listing Page', 'bannerListingPage'),
(17, 6, 'Profile Page', 'bannerProfilePage'),
(18, 6, 'Registration Page', 'bannerRegistrationPage'),
(19, 7, 'Main Categories', 'categoriesMain'),
(20, 7, 'Sub Categories', 'categoriesSub'),
(21, 8, 'System Users', 'systemUsers'),
(22, 8, 'User Rights', 'userRights'),
(23, 9, 'Themes', 'themes'),
(24, 9, 'Customize Theme', 'themeCustomization'),
(25, 9, 'Home Page SEO', 'seoHomePage'),
(26, 9, 'Listing Page SEO', 'seoListingPage'),
(27, 9, 'Profile Page SEO', 'seoProfilePage'),
(28, 9, 'Manage About Us', 'manageAboutUs'),
(29, 9, 'Manage FAQs', 'manageFaqs'),
(30, 9, 'Manage Terms of Services', 'manageTermsOfServices'),
(31, 9, 'Manage Privacy Policy', 'managePrivacyPolicy'),
(32, 9, 'Bottom Links', 'manageBottomLinks'),
(33, 9, 'Social Network', 'manageSocialNetwork');

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
-- Table structure for table `user_rights_level_1`
--

CREATE TABLE `user_rights_level_1` (
  `ID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `Access` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_rights_level_1`
--

INSERT INTO `user_rights_level_1` (`ID`, `UID`, `SID`, `Access`) VALUES
(1, 3, 1, 'Yes'),
(2, 3, 2, 'Yes'),
(3, 3, 3, 'No'),
(4, 3, 4, 'No'),
(5, 3, 5, 'No'),
(6, 3, 6, 'No'),
(7, 3, 7, 'No'),
(8, 3, 8, 'No'),
(9, 3, 9, 'No'),
(10, 3, 10, 'No'),
(11, 3, 11, 'No'),
(12, 3, 12, 'No'),
(13, 3, 13, 'Yes'),
(14, 3, 14, 'Yes'),
(15, 3, 15, 'No'),
(16, 3, 16, 'No'),
(17, 3, 17, 'No'),
(18, 3, 18, 'No'),
(37, 5, 1, 'Yes'),
(38, 5, 2, 'Yes'),
(39, 5, 3, 'No'),
(40, 5, 4, 'No'),
(41, 5, 5, 'No'),
(42, 5, 6, 'No'),
(43, 5, 7, 'No'),
(44, 5, 8, 'No'),
(45, 5, 9, 'No'),
(46, 5, 10, 'No'),
(47, 5, 11, 'No'),
(48, 5, 12, 'No'),
(49, 5, 13, 'No'),
(50, 5, 14, 'No'),
(51, 5, 15, 'No'),
(52, 5, 16, 'No'),
(53, 5, 17, 'No'),
(54, 5, 18, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `user_rights_level_2`
--

CREATE TABLE `user_rights_level_2` (
  `ID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `SID` int(11) NOT NULL,
  `SSID` int(11) NOT NULL,
  `Access` varchar(3) NOT NULL,
  `UserAdd` varchar(3) NOT NULL,
  `UserEdit` varchar(3) NOT NULL,
  `UserDel` varchar(3) NOT NULL,
  `UserView` varchar(3) NOT NULL,
  `UserExp` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_rights_level_2`
--

INSERT INTO `user_rights_level_2` (`ID`, `UID`, `SID`, `SSID`, `Access`, `UserAdd`, `UserEdit`, `UserDel`, `UserView`, `UserExp`) VALUES
(78, 5, 1, 1, 'No', 'No', 'No', 'No', 'No', 'No'),
(79, 5, 1, 2, 'No', 'No', 'No', 'No', 'No', 'No'),
(80, 5, 1, 3, 'No', 'No', 'No', 'No', 'No', 'No'),
(81, 5, 1, 4, 'No', 'No', 'No', 'No', 'No', 'No'),
(82, 5, 1, 5, 'No', 'No', 'No', 'No', 'No', 'No'),
(83, 5, 1, 6, 'Yes', 'No', 'No', 'No', 'No', 'No'),
(84, 5, 1, 7, 'Yes', 'No', 'No', 'No', 'No', 'No'),
(85, 5, 1, 8, 'Yes', 'No', 'No', 'No', 'No', 'No'),
(86, 5, 1, 9, 'No', 'No', 'No', 'No', 'No', 'No'),
(87, 5, 1, 10, 'No', 'No', 'No', 'No', 'No', 'No'),
(88, 5, 1, 11, 'No', 'No', 'No', 'No', 'No', 'No'),
(89, 5, 2, 12, 'No', 'No', 'No', 'No', 'No', 'No'),
(90, 5, 2, 13, 'No', 'No', 'No', 'No', 'No', 'No'),
(91, 5, 2, 14, 'No', 'No', 'No', 'No', 'No', 'No'),
(92, 5, 2, 15, 'No', 'No', 'No', 'No', 'No', 'No'),
(93, 5, 3, 16, 'No', 'No', 'No', 'No', 'No', 'No'),
(94, 5, 3, 17, 'No', 'No', 'No', 'No', 'No', 'No'),
(95, 5, 3, 18, 'No', 'No', 'No', 'No', 'No', 'No'),
(96, 5, 4, 19, 'No', 'No', 'No', 'No', 'No', 'No'),
(97, 5, 4, 20, 'No', 'No', 'No', 'No', 'No', 'No'),
(98, 5, 4, 21, 'No', 'No', 'No', 'No', 'No', 'No'),
(99, 5, 4, 22, 'No', 'No', 'No', 'No', 'No', 'No'),
(100, 5, 5, 23, 'No', 'No', 'No', 'No', 'No', 'No'),
(101, 5, 5, 24, 'No', 'No', 'No', 'No', 'No', 'No'),
(102, 5, 5, 25, 'No', 'No', 'No', 'No', 'No', 'No'),
(103, 5, 6, 26, 'No', 'No', 'No', 'No', 'No', 'No'),
(104, 5, 6, 27, 'No', 'No', 'No', 'No', 'No', 'No'),
(105, 5, 6, 28, 'No', 'No', 'No', 'No', 'No', 'No'),
(106, 5, 7, 29, 'No', 'No', 'No', 'No', 'No', 'No'),
(107, 5, 7, 30, 'No', 'No', 'No', 'No', 'No', 'No'),
(108, 5, 7, 31, 'No', 'No', 'No', 'No', 'No', 'No'),
(109, 5, 8, 32, 'No', 'No', 'No', 'No', 'No', 'No'),
(110, 5, 8, 33, 'No', 'No', 'No', 'No', 'No', 'No'),
(111, 5, 8, 34, 'No', 'No', 'No', 'No', 'No', 'No'),
(112, 5, 9, 35, 'No', 'No', 'No', 'No', 'No', 'No'),
(113, 5, 9, 36, 'No', 'No', 'No', 'No', 'No', 'No'),
(114, 5, 9, 37, 'No', 'No', 'No', 'No', 'No', 'No'),
(115, 5, 10, 38, 'No', 'No', 'No', 'No', 'No', 'No'),
(116, 5, 10, 39, 'No', 'No', 'No', 'No', 'No', 'No'),
(117, 5, 10, 40, 'No', 'No', 'No', 'No', 'No', 'No'),
(118, 5, 10, 41, 'No', 'No', 'No', 'No', 'No', 'No'),
(119, 5, 10, 42, 'No', 'No', 'No', 'No', 'No', 'No'),
(120, 5, 11, 43, 'No', 'No', 'No', 'No', 'No', 'No'),
(121, 5, 11, 44, 'No', 'No', 'No', 'No', 'No', 'No'),
(122, 5, 11, 45, 'No', 'No', 'No', 'No', 'No', 'No'),
(123, 5, 11, 46, 'No', 'No', 'No', 'No', 'No', 'No'),
(124, 5, 11, 47, 'No', 'No', 'No', 'No', 'No', 'No'),
(125, 5, 11, 48, 'No', 'No', 'No', 'No', 'No', 'No'),
(126, 5, 12, 49, 'No', 'No', 'No', 'No', 'No', 'No'),
(127, 5, 12, 50, 'No', 'No', 'No', 'No', 'No', 'No'),
(128, 5, 12, 51, 'No', 'No', 'No', 'No', 'No', 'No'),
(129, 5, 12, 52, 'No', 'No', 'No', 'No', 'No', 'No'),
(130, 5, 12, 53, 'No', 'No', 'No', 'No', 'No', 'No'),
(131, 5, 13, 54, 'No', 'No', 'No', 'No', 'No', 'No'),
(132, 5, 13, 55, 'No', 'No', 'No', 'No', 'No', 'No'),
(133, 5, 13, 56, 'No', 'No', 'No', 'No', 'No', 'No'),
(134, 5, 14, 57, 'No', 'No', 'No', 'No', 'No', 'No'),
(135, 5, 15, 58, 'No', 'No', 'No', 'No', 'No', 'No'),
(136, 5, 16, 59, 'No', 'No', 'No', 'No', 'No', 'No'),
(137, 5, 16, 60, 'No', 'No', 'No', 'No', 'No', 'No'),
(138, 5, 16, 61, 'No', 'No', 'No', 'No', 'No', 'No'),
(139, 5, 16, 62, 'No', 'No', 'No', 'No', 'No', 'No'),
(140, 5, 16, 63, 'No', 'No', 'No', 'No', 'No', 'No'),
(141, 5, 16, 64, 'No', 'No', 'No', 'No', 'No', 'No'),
(142, 5, 17, 65, 'No', 'No', 'No', 'No', 'No', 'No'),
(143, 5, 17, 66, 'No', 'No', 'No', 'No', 'No', 'No'),
(144, 5, 17, 67, 'No', 'No', 'No', 'No', 'No', 'No'),
(145, 5, 17, 68, 'No', 'No', 'No', 'No', 'No', 'No'),
(146, 5, 17, 69, 'No', 'No', 'No', 'No', 'No', 'No'),
(147, 5, 17, 70, 'No', 'No', 'No', 'No', 'No', 'No'),
(148, 5, 18, 71, 'No', 'No', 'No', 'No', 'No', 'No'),
(149, 5, 18, 72, 'No', 'No', 'No', 'No', 'No', 'No'),
(150, 5, 18, 73, 'No', 'No', 'No', 'No', 'No', 'No'),
(151, 5, 18, 74, 'No', 'No', 'No', 'No', 'No', 'No'),
(152, 5, 18, 75, 'No', 'No', 'No', 'No', 'No', 'No'),
(153, 5, 18, 76, 'No', 'No', 'No', 'No', 'No', 'No'),
(154, 5, 18, 77, 'Yes', 'No', 'No', 'No', 'No', 'No');

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
-- Indexes for table `user_rights_level_1`
--
ALTER TABLE `user_rights_level_1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_rights_level_2`
--
ALTER TABLE `user_rights_level_2`
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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rights_master_level_2`
--
ALTER TABLE `rights_master_level_2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
-- AUTO_INCREMENT for table `user_rights_level_1`
--
ALTER TABLE `user_rights_level_1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user_rights_level_2`
--
ALTER TABLE `user_rights_level_2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

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

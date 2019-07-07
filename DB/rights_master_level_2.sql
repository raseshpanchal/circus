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
(21, 8, 'All Blogs', 'blogAll'),
(22, 8, 'Blog Comments', 'blogComments'),
(23, 8, 'Blog Authour', 'blogAuthour'),
(24, 9, 'System Users', 'systemUsers'),
(25, 9, 'User Rights', 'userRights'),
(26, 10, 'Themes', 'themes'),
(27, 10, 'Customize Theme', 'themeCustomization'),
(28, 10, 'Home Page SEO', 'seoHomePage'),
(29, 10, 'Listing Page SEO', 'seoListingPage'),
(30, 10, 'Profile Page SEO', 'seoProfilePage'),
(31, 10, 'Manage About Us', 'manageAboutUs'),
(32, 10, 'Manage FAQs', 'manageFaqs'),
(33, 10, 'Manage Terms of Services', 'manageTermsOfServices'),
(34, 10, 'Manage Privacy Policy', 'managePrivacyPolicy'),
(35, 10, 'Bottom Links', 'manageBottomLinks'),
(36, 10, 'Social Network', 'manageSocialNetwork');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rights_master_level_2`
--
ALTER TABLE `rights_master_level_2`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rights_master_level_2`
--
ALTER TABLE `rights_master_level_2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

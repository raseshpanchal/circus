-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 07:48 AM
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
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `ID` int(11) NOT NULL,
  `MyID` int(11) NOT NULL,
  `CatID` int(11) NOT NULL,
  `SubCategory` varchar(50) NOT NULL,
  `Publish` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`ID`, `MyID`, `CatID`, `SubCategory`, `Publish`) VALUES
(1, 0, 1, 'Accountant', 'Yes'),
(2, 0, 1, 'Auditor', 'Yes'),
(3, 0, 1, 'Budget Analyst', 'Yes'),
(4, 0, 1, 'Tax Specialist', 'Yes'),
(5, 0, 2, 'Company Formation', 'Yes'),
(6, 0, 2, 'Contract Lawyer', 'Yes'),
(7, 0, 2, 'Debt Collector', 'Yes'),
(8, 0, 2, 'Legal Translator', 'Yes'),
(9, 0, 3, 'A/B Testing Analyst', 'Yes'),
(10, 0, 3, 'Android Developer', 'Yes'),
(11, 0, 3, 'Block chain Engineering', 'Yes'),
(12, 0, 3, 'Data Entry', 'Yes'),
(13, 0, 3, 'Data Management', 'Yes'),
(14, 0, 3, 'Data Mining', 'Yes'),
(15, 0, 3, 'Data Scientist', 'Yes'),
(16, 0, 3, 'Data Visualization', 'Yes'),
(17, 0, 3, 'Database Design', 'Yes'),
(18, 0, 3, 'Decision Scientist', 'Yes'),
(19, 0, 3, 'ERP', 'Yes'),
(20, 0, 3, 'Full Stack Developer', 'Yes'),
(21, 0, 3, 'Game Development', 'Yes'),
(22, 0, 3, 'IOS Developer', 'Yes'),
(23, 0, 3, 'Machine Learning', 'Yes'),
(24, 0, 3, 'Mobile App Testing', 'Yes'),
(25, 0, 3, 'Natural Language Processing', 'Yes'),
(26, 0, 3, 'Socket Programming', 'Yes'),
(27, 0, 3, 'Test Automation', 'Yes'),
(28, 0, 3, 'Testing/ QA', 'Yes'),
(29, 0, 3, 'Web Developer', 'Yes'),
(30, 0, 4, 'Architect', 'Yes'),
(31, 0, 4, 'Building Designer', 'Yes'),
(32, 0, 4, 'Draftsman', 'Yes'),
(33, 0, 4, 'Interior Designer', 'Yes'),
(34, 0, 4, 'Landscape Designer', 'Yes'),
(35, 0, 4, 'MEP Designer', 'Yes'),
(36, 0, 4, 'Surveyor', 'Yes'),
(37, 0, 5, 'Civil Engineer', 'Yes'),
(38, 0, 5, 'Electrical Engineer', 'Yes'),
(39, 0, 5, 'Engineering Drawing', 'Yes'),
(40, 0, 5, 'Industrial Engineer', 'Yes'),
(41, 0, 5, 'Mechanical Engineer', 'Yes'),
(42, 0, 5, 'Product Designer', 'Yes'),
(43, 0, 5, 'Robotics', 'Yes'),
(44, 0, 5, 'Structural Engineer', 'Yes'),
(45, 0, 5, 'System Engineer', 'Yes'),
(46, 0, 6, '3D Design & Modeling', 'Yes'),
(47, 0, 6, 'Banner Designer', 'Yes'),
(48, 0, 6, 'Digital Artist', 'Yes'),
(49, 0, 6, 'Exhibition Designer', 'Yes'),
(50, 0, 6, 'Flyers & Posters', 'Yes'),
(51, 0, 6, 'Graphic Designer', 'Yes'),
(52, 0, 6, 'Icon Designer', 'Yes'),
(53, 0, 6, 'Illustrator', 'Yes'),
(54, 0, 6, 'Infographics ', 'Yes'),
(55, 0, 6, 'Invitation Designer', 'Yes'),
(56, 0, 6, 'Logo Designer', 'Yes'),
(57, 0, 6, 'Magazine Designer', 'Yes'),
(58, 0, 6, 'Motion Graphics', 'Yes'),
(59, 0, 6, 'Packaging Designer', 'Yes'),
(60, 0, 6, 'Photo Editing', 'Yes'),
(61, 0, 6, 'Photographer', 'Yes'),
(62, 0, 6, 'Presentation Designer', 'Yes'),
(63, 0, 6, 'Typography', 'Yes'),
(64, 0, 6, 'User Experience Designer', 'Yes'),
(65, 0, 6, 'User Interface Designer', 'Yes'),
(66, 0, 6, 'Vehicle Signage', 'Yes'),
(67, 0, 6, 'Video Post Editing', 'Yes'),
(68, 0, 6, 'Videographer ', 'Yes'),
(69, 0, 6, 'Whiteboard & Explainers', 'Yes'),
(70, 0, 7, 'Face and Body Artist', 'Yes'),
(71, 0, 7, 'Hair Color Specialist', 'Yes'),
(72, 0, 7, 'Hairstylist for Men', 'Yes'),
(73, 0, 7, 'Hairstylist for Women', 'Yes'),
(74, 0, 7, 'Henna Artist', 'Yes'),
(75, 0, 7, 'Makeup Artist ', 'Yes'),
(76, 0, 7, 'Makeup Classes', 'Yes'),
(77, 0, 7, 'Nail Care', 'Yes'),
(78, 0, 7, 'Tattooist', 'Yes'),
(79, 0, 8, 'Babysitter', 'Yes'),
(80, 0, 8, 'Child Day Care', 'Yes'),
(81, 0, 8, 'Nanny', 'Yes'),
(82, 0, 9, 'Animal Behaviorist', 'Yes'),
(83, 0, 9, 'Aquarist/ Aquascaping', 'Yes'),
(84, 0, 9, 'Pet Groomer', 'Yes'),
(85, 0, 9, 'Pet Sitter', 'Yes'),
(86, 0, 9, 'Veterinarian', 'Yes'),
(87, 0, 10, 'Acupressurist', 'Yes'),
(88, 0, 10, 'Acupuncturist', 'Yes'),
(89, 0, 10, 'Aerobics', 'Yes'),
(90, 0, 10, 'Chiropractor', 'Yes'),
(91, 0, 10, 'Counsellor', 'Yes'),
(92, 0, 10, 'Life Coach', 'Yes'),
(93, 0, 10, 'Massage Therapist', 'Yes'),
(94, 0, 10, 'Nutrition Consultant', 'Yes'),
(95, 0, 10, 'Personal Trainer', 'Yes'),
(96, 0, 10, 'Physiotherapist', 'Yes'),
(97, 0, 10, 'Pilates', 'Yes'),
(98, 0, 10, 'Yoga and Meditation', 'Yes'),
(99, 0, 10, 'Zumba', 'Yes'),
(100, 0, 11, 'Car Washing ', 'Yes'),
(101, 0, 11, 'Carpet Cleaning', 'Yes'),
(102, 0, 11, 'House Cleaning', 'Yes'),
(103, 0, 11, 'Laundry and Ironing', 'Yes'),
(104, 0, 11, 'Office Cleaning', 'Yes'),
(105, 0, 11, 'Sewage Cleaning', 'Yes'),
(106, 0, 11, 'Upholstery Cleaning', 'Yes'),
(107, 0, 12, 'Air Condition Maintenance ', 'Yes'),
(108, 0, 12, 'Appliance Installation', 'Yes'),
(109, 0, 12, 'Appliance Repair', 'Yes'),
(110, 0, 12, 'Auto Mechanic', 'Yes'),
(111, 0, 12, 'Carpenter', 'Yes'),
(112, 0, 12, 'Carpet Repair & Laying', 'Yes'),
(113, 0, 12, 'Electrician', 'Yes'),
(114, 0, 12, 'Flooring', 'Yes'),
(115, 0, 12, 'Furniture Installation', 'Yes'),
(116, 0, 12, 'Landscaping & Gardening', 'Yes'),
(117, 0, 12, 'Pest Control', 'Yes'),
(118, 0, 12, 'Plumber', 'Yes'),
(119, 0, 12, 'Technician', 'Yes'),
(120, 0, 12, 'Wall Painting', 'Yes'),
(121, 0, 13, 'Custom Clearance', 'Yes'),
(122, 0, 13, 'Movers and Packers', 'Yes'),
(123, 0, 14, 'Fashion Designer', 'Yes'),
(124, 0, 14, 'Jewelry Designer', 'Yes'),
(125, 0, 14, 'Tailoring', 'Yes'),
(126, 0, 15, 'Acrylic Painting', 'Yes'),
(127, 0, 15, 'Art and Craft Classes', 'Yes'),
(128, 0, 15, 'Calligraphy', 'Yes'),
(129, 0, 15, 'Canvas Painting', 'Yes'),
(130, 0, 15, 'Caricature & Cartoonist', 'Yes'),
(131, 0, 15, 'Glass Painting', 'Yes'),
(132, 0, 15, 'Mural Painting', 'Yes'),
(133, 0, 15, 'Oil Painting', 'Yes'),
(134, 0, 15, 'Sketching', 'Yes'),
(135, 0, 15, 'Watercolor Painting', 'Yes'),
(136, 0, 16, 'Academic Writer', 'Yes'),
(137, 0, 16, 'Article Writer', 'Yes'),
(138, 0, 16, 'Blogger', 'Yes'),
(139, 0, 16, 'Content Writer', 'Yes'),
(140, 0, 16, 'Copywriter', 'Yes'),
(141, 0, 16, 'Editor', 'Yes'),
(142, 0, 16, 'Journalist', 'Yes'),
(143, 0, 16, 'Legal Writing', 'Yes'),
(144, 0, 16, 'Medical Translation', 'Yes'),
(145, 0, 16, 'Press Releases', 'Yes'),
(146, 0, 16, 'Proposal Writer', 'Yes'),
(147, 0, 16, 'Report Writer', 'Yes'),
(148, 0, 16, 'Resume Writer', 'Yes'),
(149, 0, 16, 'Screen', 'Yes'),
(150, 0, 16, 'Speech Writer', 'Yes'),
(151, 0, 16, 'Translator', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

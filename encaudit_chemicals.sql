-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2016 at 07:58 AM
-- Server version: 5.6.28-76.1-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `encaudit_chemicals`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `AccountId` int(11) NOT NULL AUTO_INCREMENT,
  `AdminId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `MiddleName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  PRIMARY KEY (`AccountId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AccountId`, `AdminId`, `UserId`, `UserName`, `Password`, `FirstName`, `MiddleName`, `LastName`, `Type`) VALUES
(1, 1, 0, 'sam', 'sameureka123', 'Sami', 'Mohammed', 'Ahmed', 'Administrator'),
(2, 2, 0, 'ayalew', 'ayaleweureka123', 'Ayalew', 'Addis', 'Eureka', 'Administrator'),
(3, 3, 0, 'seife', 'seifeeureka123', 'Seyfe', 'Shiferaw', 'Demissie', 'Manager'),
(14, 0, 5, 'biruk', 'biruk1', 'Biruk', 'Abdissa', 'Biruk', 'User'),
(33, 0, 21, 'uu', 'uuu', 'uu', 'uu', 'uu', 'User'),
(49, 52, 0, 'behailu', 'kinfe123', 'Behailu', 'Kinfe', 'Asrat', 'Manager'),
(50, 0, 23, 'ahmed', 'mensur', 'Ahmed', 'Mensur', 'Jibril', 'User'),
(51, 0, 24, 'ff', 'gg', 'aa', 'ss', 'dd', 'User'),
(52, 0, 25, 'ff', 'gg', 'aa', 'ss', 'dd', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `AdminId` int(11) NOT NULL AUTO_INCREMENT,
  `AdministratorId` varchar(15) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `Admin_Tel` bigint(20) NOT NULL,
  `Question` varchar(100) NOT NULL DEFAULT 'Administrator ID',
  PRIMARY KEY (`AdminId`),
  UNIQUE KEY `SupervisorId` (`AdministratorId`),
  UNIQUE KEY `SupId` (`AdminId`),
  UNIQUE KEY `SupId_2` (`AdminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`AdminId`, `AdministratorId`, `e_mail`, `Admin_Tel`, `Question`) VALUES
(1, '1', 'sam@flybridgeaddis.com', 251911371609, 'Administrator ID'),
(2, '2', 'ayalew@eurekaindustrialsupplie', 251911219840, 'Administrator ID'),
(3, '3', 'seyfe@yekicomputers.com', 251911526278, 'Administrator ID'),
(52, '10', 'behailu@eurekaindustrialsuppli', 911223344, 'Administrator ID');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbackDate` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `UserId`, `Feedback`, `FeedbackDate`) VALUES
(7, 11, 'Thanks For Your Support.', '2013-09-18'),
(14, 17, 'I have cancelled my reservation, but i want to re-reserve my booking and the system is not allowing me. Please make my reservation activated.\r\nThank you in advance', '2014-05-05'),
(16, 20, 'I am Nejat and i lost my ticket ... please help', '2014-05-18'),
(17, 1, 'Hi guys all the services rendered were ok ... proceed with your effort to meet passenger expectations. Thankyou.', '2014-06-10'),
(18, 0, 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', '2014-06-12'),
(19, 21, 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', '2014-06-12'),
(23, 26, 'We need fertilizers...so please send us the list of products in your sale\r\n', '2015-11-20'),
(24, 22, 'I would like to order potash fertilizers for family plantation I own around 800 km away from Addis Ababa ... so please kind send me the details of the products in relation accordingly', '2015-12-14'),
(25, 23, 'I would like to have some cleaning chemicals for my beverage factory at sebeta agroindustry. So please let me get in touch with your esteemed company.', '2016-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE IF NOT EXISTS `news_master` (
  `NewsId` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(400) NOT NULL,
  `NewsDate` date NOT NULL,
  PRIMARY KEY (`NewsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(7, 'Chemicals Imported from India are subjected to DACA investigation with new procedures', '2016-05-03'),
(12, 'We have imported organic posts and manure for plant fertilizers with good quality', '2015-12-10'),
(15, 'New cleaning chemicals have arrived to our company. Please check details on our company products list.', '2016-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serviceuploads`
--

CREATE TABLE IF NOT EXISTS `tbl_serviceuploads` (
  `file` varchar(128) NOT NULL,
  `Description` varchar(400) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` mediumblob NOT NULL,
  PRIMARY KEY (`file`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE IF NOT EXISTS `tbl_uploads` (
  `file` varchar(128) NOT NULL,
  `Description` varchar(400) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`file`, `Description`, `type`, `size`) VALUES
('40435-16115-wps-20.jpg', 'WPS-20: Anti scale formation in the hot water zones of bottle washers or any other equipment where hot water is used, e.g. Pasteurizers', 'image/jpeg', 0x3133312e323332343231383735),
('27575-72471-clarcel.jpg', 'Beer Filter Aid / Kieselghur chemical - CLARCEL - DICB (Hyflo Supercel) / CBR / CBL ', 'image/jpeg', 0x35312e37353438383238313235),
('1518-5093-pastosept-k.jpg', 'PASTOSEPT K: Anti Algae and Slime Formation Chemicals', 'image/jpeg', 0x34382e38313135323334333735),
('73837-10299-lubranol-sn.jpg', 'LUBRANOL SN: Synthetic (soap free) lubricant for use on chain conveyor systems suitable for automatic jetting at high speed packaging lines ', 'image/jpeg', 0x35362e37343531313731383735),
('71002-27898-atr-acid-b.jpg', 'ATR ACID B: Acid cleaner for beer storage tanks and pipe lines ', 'image/jpeg', 0x35312e333330303738313235),
('6590-26487-alcafoam-cl-m.png', 'ALCAFOAM CL-M: Open Plant Cleaning and Sanitizing Chemical', 'image/png', 0x3237362e30363933333539333735),
('75380-82909-caustic-soda.jpg', 'Caustic Soda Pearls / Flakes', 'image/jpeg', 0x3239382e38353634343533313235);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `BirthDate` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `IDorPassportNo` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL DEFAULT 'User ID or Passport No.',
  PRIMARY KEY (`UserId`),
  KEY `JobSeekId` (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Address`, `City`, `Email`, `Mobile`, `BirthDate`, `Gender`, `Nationality`, `IDorPassportNo`, `Question`) VALUES
(5, 'Saris', 'Addis Ababa', 'biruk@gmail.com', 251911902002, '0000-00-00', 'Male', 'Ethiopian', 'user 1', 'User ID or Passport No.'),
(21, 'uu', 'uu', 'uuu@uuu.com', 22, '0000-00-00', 'Female', 'uu', 'User 7', 'User ID or Passport No.'),
(23, 'arada s.c.', 'Addis Ababa', 'ahmed@yahoo.com', 911334455, '1976-07-12', 'Male', 'Ethiopian', 'EP 00132455', 'User ID or Passport No.'),
(24, 'gg', 'hh', 'aa@yahoo.com', 251929439087, '1940-01-01', 'Male', 'et', '524', 'User ID or Passport No.'),
(25, 'hh', 'jj', 'aa@bankofabyssinia.com', 251929439087, '1940-01-01', 'Male', 'et', '54580', 'User ID or Passport No.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

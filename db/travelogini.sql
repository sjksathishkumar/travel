-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2015 at 09:39 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travelogini-1-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_access_log`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_access_log` (
  `pkAdminAccessID` int(11) NOT NULL AUTO_INCREMENT,
  `fkAdminID` int(11) NOT NULL,
  `adminAccessLoginIP` varchar(255) NOT NULL,
  `adminAccessLoginTime` datetime NOT NULL,
  `adminAccessLogoutTime` datetime NOT NULL,
  PRIMARY KEY (`pkAdminAccessID`),
  KEY `fkAdminID` (`fkAdminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=280 ;

--
-- Dumping data for table `tbl_admin_access_log`
--

INSERT INTO `tbl_admin_access_log` (`pkAdminAccessID`, `fkAdminID`, `adminAccessLoginIP`, `adminAccessLoginTime`, `adminAccessLogoutTime`) VALUES
(240, 4, '127.0.0.1', '2015-02-23 16:12:34', '0000-00-00 00:00:00'),
(241, 4, '127.0.0.1', '2015-02-23 17:01:01', '0000-00-00 00:00:00'),
(242, 4, '127.0.0.1', '2015-02-24 10:36:54', '2015-02-24 10:37:25'),
(243, 4, '127.0.0.1', '2015-02-24 10:37:33', '0000-00-00 00:00:00'),
(244, 4, '127.0.0.1', '2015-02-24 11:17:08', '0000-00-00 00:00:00'),
(245, 4, '127.0.0.1', '2015-02-24 12:10:45', '0000-00-00 00:00:00'),
(246, 4, '127.0.0.1', '2015-02-24 14:19:45', '0000-00-00 00:00:00'),
(247, 4, '127.0.0.1', '2015-02-24 18:01:36', '0000-00-00 00:00:00'),
(248, 4, '127.0.0.1', '2015-02-25 10:31:17', '0000-00-00 00:00:00'),
(249, 4, '127.0.0.1', '2015-02-25 11:02:15', '0000-00-00 00:00:00'),
(250, 4, '127.0.0.1', '2015-02-25 13:43:25', '0000-00-00 00:00:00'),
(251, 4, '127.0.0.1', '2015-02-25 18:26:39', '0000-00-00 00:00:00'),
(252, 4, '127.0.0.1', '2015-02-25 18:55:18', '0000-00-00 00:00:00'),
(253, 4, '127.0.0.1', '2015-02-26 10:10:17', '0000-00-00 00:00:00'),
(254, 4, '127.0.0.1', '2015-02-27 12:58:35', '0000-00-00 00:00:00'),
(255, 4, '127.0.0.1', '2015-03-02 14:36:51', '0000-00-00 00:00:00'),
(256, 4, '127.0.0.1', '2015-03-02 16:16:32', '0000-00-00 00:00:00'),
(257, 4, '127.0.0.1', '2015-03-02 17:33:23', '0000-00-00 00:00:00'),
(258, 4, '127.0.0.1', '2015-03-03 11:47:04', '0000-00-00 00:00:00'),
(259, 4, '127.0.0.1', '2015-03-03 14:37:27', '0000-00-00 00:00:00'),
(260, 4, '127.0.0.1', '2015-03-04 11:41:59', '0000-00-00 00:00:00'),
(261, 4, '127.0.0.1', '2015-03-04 14:20:51', '0000-00-00 00:00:00'),
(262, 4, '127.0.0.1', '2015-03-04 14:28:11', '0000-00-00 00:00:00'),
(263, 4, '127.0.0.1', '2015-03-05 11:12:03', '2015-03-05 11:24:41'),
(264, 4, '127.0.0.1', '2015-03-11 20:12:52', '0000-00-00 00:00:00'),
(265, 4, '127.0.0.1', '2015-03-12 12:23:21', '0000-00-00 00:00:00'),
(266, 4, '127.0.0.1', '2015-03-13 14:32:42', '0000-00-00 00:00:00'),
(267, 4, '127.0.0.1', '2015-03-14 10:37:42', '0000-00-00 00:00:00'),
(268, 4, '127.0.0.1', '2015-03-14 12:40:40', '0000-00-00 00:00:00'),
(269, 4, '127.0.0.1', '2015-03-14 14:27:20', '0000-00-00 00:00:00'),
(270, 4, '127.0.0.1', '2015-03-14 17:01:54', '0000-00-00 00:00:00'),
(271, 4, '127.0.0.1', '2015-03-16 10:38:23', '0000-00-00 00:00:00'),
(272, 4, '127.0.0.1', '2015-03-16 14:35:08', '0000-00-00 00:00:00'),
(273, 4, '127.0.0.1', '2015-03-17 09:54:07', '0000-00-00 00:00:00'),
(274, 4, '127.0.0.1', '2015-03-18 14:46:48', '0000-00-00 00:00:00'),
(275, 4, '127.0.0.1', '2015-03-20 11:41:41', '0000-00-00 00:00:00'),
(276, 4, '127.0.0.1', '2015-03-20 20:23:24', '0000-00-00 00:00:00'),
(277, 4, '127.0.0.1', '2015-03-21 11:02:04', '0000-00-00 00:00:00'),
(278, 4, '127.0.0.1', '2015-03-21 16:05:55', '0000-00-00 00:00:00'),
(279, 4, '127.0.0.1', '2015-03-23 11:43:54', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_banner_slider` (
  `pkBannerID` int(11) NOT NULL AUTO_INCREMENT,
  `bannerTitle` varchar(255) NOT NULL,
  `bannerTagLine` varchar(255) NOT NULL,
  `bannerImage` varchar(255) NOT NULL,
  `bannerAltTag` varchar(100) NOT NULL,
  `bannerOrder` int(10) NOT NULL,
  `bannerStatus` enum('0','1') NOT NULL,
  `bannerDateAdded` datetime NOT NULL,
  `bannerDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkBannerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tbl_banner_slider`
--

INSERT INTO `tbl_banner_slider` (`pkBannerID`, `bannerTitle`, `bannerTagLine`, `bannerImage`, `bannerAltTag`, `bannerOrder`, `bannerStatus`, `bannerDateAdded`, `bannerDateModified`) VALUES
(32, 'Home Banner', 'Plan Your Travel to India', 'slider1-1423748183.jpg', 'Home Banner', 1, '1', '2015-02-12 19:06:23', '2015-02-13 06:32:37'),
(35, 'About Dubai', 'Happy Journey and Happy Ending ', 'slider2-1423749024.jpg', 'About Dubai', 2, '1', '2015-02-12 19:20:24', '2015-02-13 05:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `pkCategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `fkParentCategoryID` int(11) NOT NULL,
  `categoryLevel` int(11) NOT NULL,
  `categoryHierarchy` varchar(255) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `categorySlug` varchar(255) NOT NULL,
  `categoryImage` varchar(255) NOT NULL,
  `categoryDescription` text NOT NULL,
  `categoryStatus` enum('0','1','2') NOT NULL COMMENT '0=InActive 1=Active 2=Delete',
  `categoryDateAdded` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `categoryDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkCategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`pkCategoryID`, `fkParentCategoryID`, `categoryLevel`, `categoryHierarchy`, `categoryName`, `categorySlug`, `categoryImage`, `categoryDescription`, `categoryStatus`, `categoryDateAdded`, `categoryDateModified`) VALUES
(13, 0, 0, '13', 'Travel', 'travel', 'plane-ico.png', 'eeee', '1', '2014-08-27 05:42:54', '2014-09-08 14:06:02'),
(14, 0, 0, '14', 'Food', 'food', 'plane-ico.png', 'dsdsd1', '1', '2014-08-27 05:44:27', '2014-09-08 14:05:40'),
(15, 0, 0, '15', 'Fashion', 'fashion', 'fation-ico.png', 'ddddddd1', '1', '2014-08-27 05:48:53', '2014-09-08 13:01:18'),
(16, 0, 0, '16', 'Gadgets', 'gadgets', '', 'rrrrr', '1', '2014-08-27 05:50:27', '2014-09-08 13:01:18'),
(17, 0, 0, '17', 'Home', 'home', 'plane-ico.png', 'fdfdf', '1', '2014-08-27 06:00:42', '2014-09-08 13:01:18'),
(19, 13, 1, '13,19', 'Sub Category1', 'sub-category1', 'plane-ico.png', 'Test Description', '2', '2014-08-27 12:43:14', '2014-09-08 06:49:45'),
(20, 13, 1, '13,20', 'Sub Category2', 'sub-category2', 'plane-ico.png', 'dsdsd', '2', '2014-08-27 13:22:34', '2014-09-08 06:49:57'),
(21, 14, 1, '14,21', 'Sub Category3', 'sub-category3', 'plane-ico.png', 'Test Description', '2', '2014-08-27 14:09:24', '2014-09-08 06:51:18'),
(22, 13, 1, '13,22', 'Cat-1234', 'cat-1234', 'plane-ico.png', 'dasdsdasdasd', '1', '2014-09-09 05:10:04', '2014-12-16 12:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE IF NOT EXISTS `tbl_cities` (
  `pkCityID` int(11) NOT NULL AUTO_INCREMENT,
  `cityName` varchar(255) NOT NULL,
  `fkStateID` int(11) NOT NULL,
  `cityStatus` tinyint(1) NOT NULL,
  `cityDateAdded` datetime NOT NULL,
  `cityDateModified` datetime NOT NULL,
  PRIMARY KEY (`pkCityID`),
  KEY `fkStateID` (`fkStateID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`pkCityID`, `cityName`, `fkStateID`, `cityStatus`, `cityDateAdded`, `cityDateModified`) VALUES
(1, 'Dehradun', 2, 1, '0000-00-00 00:00:00', '2014-10-08 18:37:16'),
(2, 'Kotdwara', 2, 1, '0000-00-00 00:00:00', '2014-10-08 17:47:39'),
(3, 'Meerut', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Saharanpur', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Chapra', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Texta', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Teadh', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city_partners`
--

CREATE TABLE IF NOT EXISTS `tbl_city_partners` (
  `pkCityPartnerID` bigint(20) NOT NULL AUTO_INCREMENT,
  `fkUserLoginID` int(11) NOT NULL,
  `cityPartnerUniqueID` varchar(255) NOT NULL,
  `cityPartnerFirstName` varchar(255) NOT NULL,
  `cityPartnerLastName` varchar(255) NOT NULL,
  `cityPartnerUserName` varchar(255) NOT NULL,
  `cityPartnerEmail` varchar(255) NOT NULL,
  `cityPartnerMobile` varchar(255) NOT NULL,
  `cityPartnerDateOfBirth` datetime NOT NULL,
  `cityPartnerBusinessName` varchar(255) NOT NULL,
  `cityPartnerWebsite` varchar(255) NOT NULL,
  `cityPartnerContactMethod` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '1 => Mobile, 2 => Email, 3 => Both',
  `cityPartnerSubscriptionPlan` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '1 => Free, 2 => Basic, 3 => Pro',
  `cityPartnerStatus` enum('0','1') NOT NULL,
  `cityPartnerFeePaid` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 => Not Paid, 1 => Paid',
  `cityPartnerAddress` varchar(255) NOT NULL,
  `cityPartnerCity` int(11) NOT NULL,
  `cityPartnerState` int(11) NOT NULL,
  `cityPartnerCountry` int(11) NOT NULL,
  `cityPartnerOperationCity` int(11) NOT NULL,
  `cityPartnerOperationState` int(11) NOT NULL,
  `cityPartnerOperationCountry` int(11) NOT NULL,
  `cityPartnerOperationArea` varchar(255) NOT NULL,
  `cityPartnerZip` int(8) NOT NULL,
  `eWalletBalance` int(50) NOT NULL DEFAULT '0',
  `wishginiBalance` int(50) NOT NULL DEFAULT '0',
  `cityPartnerAccountActivationToken` varchar(255) NOT NULL,
  `cityPartnerDateAdded` datetime NOT NULL,
  `cityPartnerDateModified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkCityPartnerID`),
  UNIQUE KEY `cityPartnerUserName` (`cityPartnerUserName`),
  UNIQUE KEY `cityPartnerUniqueID` (`cityPartnerUniqueID`),
  KEY `fkUserLoginID` (`fkUserLoginID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_city_partners`
--

INSERT INTO `tbl_city_partners` (`pkCityPartnerID`, `fkUserLoginID`, `cityPartnerUniqueID`, `cityPartnerFirstName`, `cityPartnerLastName`, `cityPartnerUserName`, `cityPartnerEmail`, `cityPartnerMobile`, `cityPartnerDateOfBirth`, `cityPartnerBusinessName`, `cityPartnerWebsite`, `cityPartnerContactMethod`, `cityPartnerSubscriptionPlan`, `cityPartnerStatus`, `cityPartnerFeePaid`, `cityPartnerAddress`, `cityPartnerCity`, `cityPartnerState`, `cityPartnerCountry`, `cityPartnerOperationCity`, `cityPartnerOperationState`, `cityPartnerOperationCountry`, `cityPartnerOperationArea`, `cityPartnerZip`, `eWalletBalance`, `wishginiBalance`, `cityPartnerAccountActivationToken`, `cityPartnerDateAdded`, `cityPartnerDateModified`) VALUES
(2, 99, 'P150317024900', 'city', 'city', 'city', 'city@mail.com', '9947586958', '2005-01-19 00:00:00', 'city', 'city.com', '1', '1', '1', '0', 'address', 5, 4, 1, 3, 3, 1, 'delhi', 45621, 0, 0, '', '2015-03-17 14:49:00', '2015-03-18 14:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city_partner_plans`
--

CREATE TABLE IF NOT EXISTS `tbl_city_partner_plans` (
  `pkPlanID` int(250) NOT NULL AUTO_INCREMENT,
  `planName` varchar(255) NOT NULL,
  `membershipFee` int(250) NOT NULL,
  `daysValidity` int(250) NOT NULL,
  `numberOfListing` int(250) NOT NULL,
  `accessBooking` enum('0','1') NOT NULL COMMENT '0 => Inactive  1=>Active',
  `addToWishgini` enum('0','1') NOT NULL COMMENT '0=>Inactive 1=>Active',
  `receiveCoupons` enum('0','1') NOT NULL COMMENT '0 => Inactive  1=>Active',
  `planAddedDate` datetime NOT NULL,
  `planModifiedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkPlanID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_city_partner_plans`
--

INSERT INTO `tbl_city_partner_plans` (`pkPlanID`, `planName`, `membershipFee`, `daysValidity`, `numberOfListing`, `accessBooking`, `addToWishgini`, `receiveCoupons`, `planAddedDate`, `planModifiedDate`) VALUES
(1, 'Free', 0, 30, 5, '1', '0', '1', '0000-00-00 00:00:00', '2015-02-25 10:41:34'),
(2, 'Basic', 12386, 60, 20, '0', '1', '1', '0000-00-00 00:00:00', '2015-02-25 10:41:37'),
(3, 'Pro', 1231256, 90, 100, '0', '1', '1', '0000-00-00 00:00:00', '2015-02-25 10:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms`
--

CREATE TABLE IF NOT EXISTS `tbl_cms` (
  `pkCmsID` int(11) NOT NULL AUTO_INCREMENT,
  `cmsDisplayTitle` varchar(255) NOT NULL,
  `cmsPageTitle` varchar(255) NOT NULL,
  `cmsSlug` varchar(255) NOT NULL,
  `cmsContent` text NOT NULL,
  `cmsMetaTitle` varchar(255) NOT NULL,
  `cmsMetaKeywords` text NOT NULL,
  `cmsMetaDescription` text NOT NULL,
  `cmsStatus` enum('0','1') NOT NULL COMMENT '0=Inactive | 1=Active',
  `cmsDateAdded` datetime NOT NULL,
  `cmsDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkCmsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_cms`
--

INSERT INTO `tbl_cms` (`pkCmsID`, `cmsDisplayTitle`, `cmsPageTitle`, `cmsSlug`, `cmsContent`, `cmsMetaTitle`, `cmsMetaKeywords`, `cmsMetaDescription`, `cmsStatus`, `cmsDateAdded`, `cmsDateModified`) VALUES
(1, 'Home', 'About Travelogini', 'home', '<p style="text-align:center">Delhi (/?d?li/, Hindustani pronunciation: [d??lli?] Dilli ), officially known<br />\r\nas the National Capital Territory of Delhi, is the capital territory of India.[3]<br />\r\nIt has a population of about 11 million and a metropolitan population of about 16.3 million, making it the second most populous city and second most populous urban agglomeration in India.[2][4] Such is the nature of urban expansion in Delhi that its<br />\r\ngrowth has expanded beyond the NCT to incorporate towns in neighbouring states and at its<br />\r\nlargest extent can count a population of about 25 million residents as of 2014.[5]<br />\r\n<br />\r\nThe NCT and its urban region have been given the special status of National Capital Region (NCR) under the Constitution of India&#39;s 69th amendment act of 1991. The NCR includes the neighbouring cities of Gurgaon, Noida, Ghaziabad, Faridabad, Neharpar (Greater Faridabad), Greater Noida, Sonepat, Panipat, Karnal, Rohtak, Bhiwani, Rewari, Baghpat, Meerut, Alwar, Bharatpur and other nearby towns. A union territory, the political administration of the NCT of Delhi today more closely resembles that of a state of India, with its own legislature, high court and an executive council of ministers headed by a Chief Minister. New Delhi is jointly administered by the federal government of India and the local government of Delhi, and is the capital of the NCT of Delhi.</p>\r\n', 'Home meta title', 'Home meta keyword', 'Home meta description', '1', '2014-08-28 00:00:00', '2015-02-25 13:11:00'),
(2, 'About Us', 'About Travelogini', 'about-us', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et mauris eu tellus venenatis dapibus vel a turpis. Nulla facilisi. Donec ac purus sit amet est commodo vulputate. Maecenas sodales, felis a feugiat blandit, leo nulla maximus sapien, fringilla consequat nisl ligula eu metus. Nunc lobortis tincidunt tellus ac tempus. Duis sit amet accumsan tellus. Donec maximus lacus et egestas condimentum. Praesent tincidunt, neque nec tincidunt mollis,<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et mauris eu tellus venenatis dapibus vel a turpis. Nulla facilisi. Donec ac purus sit amet est commodo vulputate. Maecenas sodales, felis a feugiat blandit, leo nulla maximus sapien, fringilla consequat nisl<br />\r\n<br />\r\nWhat we do?<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et mauris eu tellus venenatis dapibus vel a turpis. Nulla facilisi. Donec ac purus sit amet est commodo vulputate. Maecenas sodales, felis a feugiat blandit, leo nulla maximus sapien, fringilla consequat nisl ligula eu metus. Nunc lobortis tincidunt tellus ac tempus. Duis sit amet accumsan tellus. Donec maximus lacus et egestas condimentum. Praesent tincidunt, neque nec tincidunt mollis, mi sapien hendrerit diam, ac egestas odio sapien vel turpis. Ut ac sapien nulla.<br />\r\n<br />\r\nOur History<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et mauris eu tellus venenatis dapibus vel a turpis. Nulla facilisi. Donec ac purus sit amet est commodo vulputate. Maecenas sodales, felis a feugiat blandit, leo nulla maximus sapien, fringilla consequat nisl ligula eu metus. Nunc lobortis tincidunt tellus ac tempus. Duis sit amet accumsan tellus. Donec maximus lacus et egestas condimentum. Praesent tincidunt, neque nec tincidunt mollis, mi sapien hendrerit diam, ac egestas odio sapien vel turpis. Ut ac sapien nulla.<br />\r\n<br />\r\nOur Investors<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et mauris eu tellus venenatis dapibus vel a turpis. Nulla facilisi. Donec ac purus sit amet est commodo vulputate. Maecenas sodales, felis a feugiat blandit, leo nulla maximus sapien, fringilla consequat nisl ligula eu metus. Nunc lobortis tincidunt tellus ac tempus. Duis sit amet accumsan tellus. Donec maximus lacus et egestas condimentum. Praesent tincidunt, neque nec tincidunt mollis, mi sapien hendrerit diam, ac egestas odio sapien vel turpis. Ut ac sapien nulla.<br />\r\n<br />\r\nYou can also follow Yatra.com on:<br />\r\n<br />\r\nhttp://www.facebook.com/travelogini<br />\r\nhttp://twitter.com/#!/travelogini</p>\r\n', 'About Us meta title', 'About Us meta keywords', 'About Us descritption', '1', '2014-06-11 15:33:46', '2015-02-25 12:57:26'),
(3, 'Terms & Conditions', 'Terms & Conditions', 'terms-conditions', '<p>\r\n    Terms &amp; Conditions</p>\r\n', 'Terms & Conditions', 'Terms & Conditions', 'Terms & Conditions', '1', '2014-06-11 17:59:58', '2015-02-16 08:15:11'),
(4, 'Privacy Policy', 'Privacy Policy', 'privacy-policy', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris. Maecenas placerat, nisl at consequat rhoncus, sem nunc gravida justo, quis eleifend arcu velit quis lacus. Morbi magna magna, tincidunt a, mattis non, imperdiet vitae, tellus. Sed odio est, auctor ac, sollicitudin in, consequat vitae, orci. Fusce id felis. Vivamus sollicitudin metus eget eros.</p>\r\n\r\n<h4>Information we collect</h4>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris. Maecenas placerat, nisl at consequat rhoncus, sem nunc gravida justo, quis eleifend arcu velit quis lacus. Morbi magna magna, tincidunt a, mattis non, imperdiet vitae, tellus. Sed odio est, auctor ac, sollicitudin in, consequat vitae, orci. Fusce id felis. Vivamus sollicitudin metus eget eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris.</p>\r\n\r\n<h4>Personally Identifiable Information</h4>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris.</p>\r\n', 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', '1', '2014-08-28 00:00:00', '2015-02-16 11:10:16'),
(5, 'Sitemap', 'Sitemap', 'sitemap', '<p>\r\n Sitemap</p>\r\n', 'Sitemap', 'Sitemap', 'Sitemap', '1', '2014-08-28 00:00:00', '2015-02-16 08:15:11'),
(6, 'Contact Us', 'Contact Us', 'contact-us', '<ul class="contact_inner">\r\n	<li>\r\n		<figure><img alt="" src="http://dev.iworklab.com/promosol/images/contact_img1.jpg" /> </figure>\r\n		<div class="contact_detail">\r\n			<h3>\r\n				Customer Service &amp; Support:</h3>\r\n			<p>\r\n				Email us at <a class="mailto" href="mailto:support@xxxxxxx.com">support@xxxxxxx.com</a> or Call us at 07877321321 (Monday - Friday), 10am to 6pm</p>\r\n		</div>\r\n	</li>\r\n	<li>\r\n		<figure><img alt="" src="http://dev.iworklab.com/promosol/images/contact_img2.jpg" /> </figure>\r\n		<div class="contact_detail">\r\n			<h3>\r\n				Business Opportunities &amp; Sales Enquiries:</h3>\r\n			<p>\r\n				Do get in touch with us at <a class="mailto" href="mailto:support@xxxxxxx.com">sales@xxxxxxx.com</a> Our representatives will contact you shortly to help you through.</p>\r\n		</div>\r\n	</li>\r\n	<li class="last">\r\n		<figure><img alt="" src="http://dev.iworklab.com/promosol/images/contact_img3.jpg" /> </figure>\r\n		<div class="contact_detail">\r\n			<h3>\r\n				Our Official Coordinates:</h3>\r\n			<p>\r\n				Plot No. 426, Brokslow - Phase 3, Lagos, Nigeria</p>\r\n			<p>\r\n				Tel: XXXXXXXXXX</p>\r\n			<p>\r\n				E-mail : <a class="mailto" href="mailto:support@xxxxxxx.com">support@xxxxxxx.com</a></p>\r\n		</div>\r\n	</li>\r\n</ul>\r\n', 'Contact Us', 'Contact Us', 'Contact Us', '0', '2014-08-28 00:00:00', '2015-02-16 08:17:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_configurations`
--

CREATE TABLE IF NOT EXISTS `tbl_configurations` (
  `pkConfigurationID` int(11) NOT NULL AUTO_INCREMENT,
  `configurationContact` varchar(30) NOT NULL,
  `configurationEmail` varchar(255) NOT NULL,
  `configurationSocialLink1` varchar(255) NOT NULL COMMENT 'Facebook Link',
  `configurationSocialLink2` varchar(255) NOT NULL COMMENT 'Twitter Link',
  `configurationSocialLink3` varchar(255) NOT NULL COMMENT 'Google Plus',
  `configurationSocialLink4` varchar(255) NOT NULL COMMENT 'Youtube',
  `logoImage` varchar(250) NOT NULL,
  `logoAltTag` varchar(250) NOT NULL,
  `configurationPageLimit` int(11) NOT NULL COMMENT 'Admin Paging Limit',
  `configurationDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkConfigurationID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_configurations`
--

INSERT INTO `tbl_configurations` (`pkConfigurationID`, `configurationContact`, `configurationEmail`, `configurationSocialLink1`, `configurationSocialLink2`, `configurationSocialLink3`, `configurationSocialLink4`, `logoImage`, `logoAltTag`, `configurationPageLimit`, `configurationDateModified`) VALUES
(1, '+01 888 (000) 1234', 'sathish.kumar1@mail.vinove.com', 'http://www.facebook.com/test', 'http://www.twitter.com/test', 'http://www.plus.google.com/test', 'http://www.youtube.com/test', 'logo1.png', 'travelogini', 10, '2015-01-28 05:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `pkCountryID` int(11) NOT NULL AUTO_INCREMENT,
  `countryName` varchar(255) NOT NULL,
  `countryStatus` enum('0','1','2') NOT NULL COMMENT '0=>Inactive,1=>active,2=>deleted',
  `countryDateAdded` datetime NOT NULL,
  `countryDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkCountryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`pkCountryID`, `countryName`, `countryStatus`, `countryDateAdded`, `countryDateModified`) VALUES
(1, 'India', '1', '0000-00-00 00:00:00', '2014-10-08 09:23:05'),
(2, 'America', '1', '0000-00-00 00:00:00', '2014-10-08 09:23:05'),
(3, 'Nepal', '1', '0000-00-00 00:00:00', '2014-10-08 09:23:05'),
(4, 'Japan', '1', '0000-00-00 00:00:00', '2014-10-08 09:23:05'),
(5, 'trrwere', '1', '0000-00-00 00:00:00', '2014-10-08 09:34:14'),
(6, 'ggggg', '1', '0000-00-00 00:00:00', '2014-10-08 09:36:29'),
(7, 'India2', '1', '0000-00-00 00:00:00', '2014-10-08 10:47:02'),
(8, 'India1', '1', '0000-00-00 00:00:00', '2014-10-08 10:48:43'),
(9, 'America1', '1', '0000-00-00 00:00:00', '2014-10-08 10:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coupons`
--

CREATE TABLE IF NOT EXISTS `tbl_coupons` (
  `pkCouponID` bigint(20) NOT NULL AUTO_INCREMENT,
  `couponName` varchar(255) NOT NULL,
  `couponCode` varchar(255) NOT NULL,
  `couponType` enum('Flat','Percentage') NOT NULL,
  `couponDiscountVariable` decimal(10,2) NOT NULL,
  `couponMinimumPurchaseAmount` decimal(10,2) NOT NULL,
  `couponStartDate` date NOT NULL,
  `couponEndDate` date NOT NULL,
  `couponStatus` enum('0','1') NOT NULL,
  `couponAddDate` int(20) NOT NULL,
  `couponModifyDate` int(20) NOT NULL,
  PRIMARY KEY (`pkCouponID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_coupons`
--

INSERT INTO `tbl_coupons` (`pkCouponID`, `couponName`, `couponCode`, `couponType`, `couponDiscountVariable`, `couponMinimumPurchaseAmount`, `couponStartDate`, `couponEndDate`, `couponStatus`, `couponAddDate`, `couponModifyDate`) VALUES
(2, 'discount of 50', '121', 'Percentage', 10.00, 60.00, '2014-10-01', '2014-11-06', '1', 1414752271, 1415176451);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `pkCustomerID` bigint(20) NOT NULL AUTO_INCREMENT,
  `fkUserLoginID` int(11) NOT NULL,
  `customerUniqueID` varchar(255) NOT NULL,
  `customerFirstName` varchar(255) NOT NULL,
  `customerLastName` varchar(255) NOT NULL,
  `customerUserName` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `customerMobile` varchar(255) NOT NULL,
  `customerGender` enum('Male','Female') NOT NULL,
  `customerDateOfBirth` datetime NOT NULL,
  `customerStatus` enum('0','1') NOT NULL,
  `customerSubscriptionPlan` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 => Free   1 => Paid',
  `customerFeePaid` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 => Not Paid, 1 => Paid',
  `customerSpecialOfferSubscription` enum('0','1') NOT NULL,
  `customerAddress` varchar(255) NOT NULL,
  `customerCity` int(11) NOT NULL,
  `customerState` int(11) NOT NULL,
  `customerCountry` int(11) NOT NULL,
  `customerZip` int(8) NOT NULL,
  `eWalletBalance` int(50) NOT NULL DEFAULT '0',
  `wishginiBalance` int(50) NOT NULL DEFAULT '0',
  `customerAccountActivationToken` varchar(255) NOT NULL,
  `customerDateAdded` datetime NOT NULL,
  `customerDateModified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkCustomerID`),
  UNIQUE KEY `customerUserName` (`customerUserName`),
  UNIQUE KEY `customerUniqueID` (`customerUniqueID`),
  KEY `fkUserLoginID` (`fkUserLoginID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`pkCustomerID`, `fkUserLoginID`, `customerUniqueID`, `customerFirstName`, `customerLastName`, `customerUserName`, `customerEmail`, `customerMobile`, `customerGender`, `customerDateOfBirth`, `customerStatus`, `customerSubscriptionPlan`, `customerFeePaid`, `customerSpecialOfferSubscription`, `customerAddress`, `customerCity`, `customerState`, `customerCountry`, `customerZip`, `eWalletBalance`, `wishginiBalance`, `customerAccountActivationToken`, `customerDateAdded`, `customerDateModified`) VALUES
(124, 93, 'CUS150314035842', 'test', 'test', 'test', 'test@mail.com', '9856232536', 'Male', '0000-00-00 00:00:00', '1', '0', '0', '0', '', 0, 0, 0, 0, 0, 0, '', '2015-03-14 15:58:42', '0000-00-00 00:00:00'),
(125, 94, 'CUS150314035925', 'sathish', 'kumar', 'sathish', 'sathish@mail.com', '9856232536', 'Male', '0000-00-00 00:00:00', '1', '0', '0', '0', '', 0, 0, 0, 0, 0, 0, '', '2015-03-14 15:59:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deals`
--

CREATE TABLE IF NOT EXISTS `tbl_deals` (
  `pkDealID` bigint(20) NOT NULL AUTO_INCREMENT,
  `dealName` varchar(255) NOT NULL,
  `dealID` varchar(255) NOT NULL,
  `fkUserID` int(11) NOT NULL,
  `fkCategoryID` int(11) NOT NULL,
  `dealAddress` varchar(255) NOT NULL,
  `dealCity` int(11) NOT NULL,
  `dealState` int(11) NOT NULL,
  `dealCountry` int(11) NOT NULL,
  `dealZip` int(8) NOT NULL,
  `dealUsageTimings` varchar(255) NOT NULL,
  `dealDescription` text NOT NULL,
  `dealHighlights` text NOT NULL,
  `dealFineprints` text NOT NULL,
  `dealAvailability` tinyint(1) NOT NULL,
  `dealQuantity` int(11) NOT NULL,
  `dealOriginalPrice` decimal(10,2) NOT NULL,
  `dealDiscount` int(3) NOT NULL,
  `dealPrice` decimal(10,2) NOT NULL,
  `dealSubject` varchar(255) NOT NULL,
  `dealStartDate` int(11) NOT NULL,
  `dealEndDate` int(11) NOT NULL,
  `dealStatus` enum('0','1') NOT NULL COMMENT '''0''=>Deactive, ''1''=> Active',
  `dealFeatured` enum('0','1') NOT NULL,
  `dealPopularity` int(11) NOT NULL,
  `dealOnMegaMenu` enum('0','1') NOT NULL,
  `dealAddDate` datetime NOT NULL,
  `dealModifiedDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkDealID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbl_deals`
--

INSERT INTO `tbl_deals` (`pkDealID`, `dealName`, `dealID`, `fkUserID`, `fkCategoryID`, `dealAddress`, `dealCity`, `dealState`, `dealCountry`, `dealZip`, `dealUsageTimings`, `dealDescription`, `dealHighlights`, `dealFineprints`, `dealAvailability`, `dealQuantity`, `dealOriginalPrice`, `dealDiscount`, `dealPrice`, `dealSubject`, `dealStartDate`, `dealEndDate`, `dealStatus`, `dealFeatured`, `dealPopularity`, `dealOnMegaMenu`, `dealAddDate`, `dealModifiedDate`) VALUES
(19, 'vcvc', 'deal_cnUOfLYhq1', 1, 13, 'F-2, Udhyog Nagar, New Delhi, Near Peeragarhi Metro Station', 6, 0, 0, 0, 'sdsd', 'sdsd', 'sdsd', 'sdsd', 1, 10, 22.00, 20, 17.60, '2', 1411324200, 1412101799, '1', '1', 0, '1', '2014-09-09 16:41:20', '2014-09-22 04:59:59'),
(21, 'asas', 'deal_rV599Z69UJ', 1, 14, 'gdfgf', 2, 0, 0, 0, 'dfgdfg', 'dfgdfg', 'gdfg', 'dfgfdg', 1, 5, 50.00, 25, 37.50, '3', 1411324200, 1417804199, '1', '1', 0, '0', '2014-09-09 16:59:15', '2014-10-08 12:21:34'),
(22, 'latest deal', 'deal_7zBTh1v3rv', 1, 14, 'gdfgdfg', 1, 0, 0, 0, 'dfgdfg', 'dfgdfg', 'dfgdfg', 'dfgdfg', 1, 3, 100.00, 35, 65.00, '3', 1413311400, 1417112999, '1', '1', 0, '0', '2014-09-10 16:38:29', '2014-10-20 05:51:14'),
(23, 'gfgfdg', 'deal_rqQ6XdD948', 1, 13, 'gfhgfh', 1, 0, 0, 0, 'gh', 'gh', 'hg', 'ghgh', 1, 5, 55.00, 15, 46.75, '2', 1411324200, 1416335399, '1', '0', 0, '0', '2014-09-10 16:39:22', '2014-10-20 05:51:27'),
(25, 'sdsd123', 'deal_66pP4Wc5lY', 1, 14, 'dsds', 6, 0, 0, 0, 'sdsd', 'sds', 'sdsd', 'sds', 1, 4, 444.00, 25, 333.00, '6', 1417631400, 1421951399, '1', '1', 0, '0', '2014-09-11 12:06:55', '2014-12-18 06:05:26'),
(26, 'sdsd123', 'deal_Qy775TjLs4', 1, 14, 'dsds', 6, 0, 0, 0, 'sdsd', 'sds', 'sdsd', 'sds', 1, 4, 444.00, 15, 377.40, '6', 1411324200, 1412015399, '1', '1', 0, '0', '2014-09-11 12:07:12', '2014-09-22 05:00:46'),
(27, 'test1234', 'deal_3TI70vWp9z', 1, 22, 'fdfdfdf', 9, 0, 0, 0, '6-10', 'fdfdf', 'dfdfd', 'fdf', 1, 44, 100.00, 20, 80.00, '3', 1411324200, 1411842599, '1', '1', 0, '0', '2014-09-11 12:09:19', '2014-09-22 05:00:34'),
(28, 'sdsdsd', 'deal_e85xG2srDA', 1, 15, 'dsdsd', 6, 0, 0, 0, 'sdsd', 'sdsd', 'sds', 'sdsd', 1, 23, 33.00, 30, 23.10, '6', 1411324200, 1412101799, '1', '1', 0, '1', '2014-09-11 12:17:23', '2014-09-22 05:00:22'),
(29, 'fdfdf', 'deal_u7CC7wGq2H', 1, 22, 'dfdf', 9, 0, 0, 0, 'dfdf', 'dfd', 'dfdf', 'dfdf', 1, 343, 44.00, 30, 30.80, '7', 1411324200, 1412101799, '1', '1', 0, '1', '2014-09-11 12:18:24', '2014-09-22 05:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deals_images`
--

CREATE TABLE IF NOT EXISTS `tbl_deals_images` (
  `pkImageID` bigint(20) NOT NULL AUTO_INCREMENT,
  `fkDealID` bigint(20) NOT NULL,
  `dealImagePath` varchar(255) NOT NULL,
  `dealImageAlt` varchar(255) NOT NULL,
  `dealImageAddDate` datetime NOT NULL,
  `dealImageModifyDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkImageID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tbl_deals_images`
--

INSERT INTO `tbl_deals_images` (`pkImageID`, `fkDealID`, `dealImagePath`, `dealImageAlt`, `dealImageAddDate`, `dealImageModifyDate`) VALUES
(1, 1, 'feature-img-1.png', 'sdsd', '2014-08-27 11:59:51', '0000-00-00 00:00:00'),
(2, 2, 'feature-img-3.png', 'test', '2014-08-27 12:09:20', '0000-00-00 00:00:00'),
(3, 3, 'banner.jpg', 'Testing', '2014-08-27 19:41:11', '0000-00-00 00:00:00'),
(4, 4, 'banner-1.jpg', 'dfdsf', '2014-08-28 18:59:01', '0000-00-00 00:00:00'),
(6, 4, 'banner.jpg', 'dfdf', '2014-08-28 19:00:31', '0000-00-00 00:00:00'),
(8, 3, 'feature-img-5.png', 'testing2', '2014-09-02 15:38:09', '0000-00-00 00:00:00'),
(9, 3, 'feature-img-3.png', 'testing3', '2014-09-02 15:38:09', '0000-00-00 00:00:00'),
(10, 5, 'rays.png', 'asas', '2014-09-04 12:18:41', '0000-00-00 00:00:00'),
(11, 6, 'feature-img-2.png', 'xcxcfgf', '2014-09-04 12:19:49', '0000-00-00 00:00:00'),
(12, 7, 'feature-img-4.png', 'fgfg', '2014-09-04 12:20:36', '0000-00-00 00:00:00'),
(13, 8, 'feature-img-4.png', 'vcbvbv', '2014-09-09 15:49:55', '0000-00-00 00:00:00'),
(14, 19, 'BET-HIP-HOP-2012-HypeGirls-285x280.jpg', 'fgfg', '2014-09-09 16:41:20', '0000-00-00 00:00:00'),
(21, 21, 'BET-HIP-HOP-2012-HypeGirls-285x280.jpg', 'vxcvcv', '2014-09-10 14:15:21', '0000-00-00 00:00:00'),
(26, 21, 'Key-arrow-hotel001f-285x280.jpeg', 'fdfd', '2014-09-10 16:30:44', '0000-00-00 00:00:00'),
(17, 20, '46.png', 'fdsfds', '2014-09-09 17:31:36', '0000-00-00 00:00:00'),
(28, 23, 'Key-arrow-hotel001f-285x280.jpeg', 'hgfhgf', '2014-09-10 16:39:22', '0000-00-00 00:00:00'),
(27, 22, 'Key-arrow-hotel001f-285x280.jpeg', 'gfdgdfg', '2014-09-10 16:38:29', '0000-00-00 00:00:00'),
(29, 24, '1-a-walking-t10049-285x280.jpg', 'fdfdfdf', '2014-09-10 17:46:28', '0000-00-00 00:00:00'),
(30, 24, 'Key-arrow-hotel001f-285x280.jpeg', 'dfdf', '2014-09-10 17:46:28', '0000-00-00 00:00:00'),
(31, 24, '1-a-walking-t10049-285x280.jpg', 'cvcvc', '2014-09-10 17:47:02', '0000-00-00 00:00:00'),
(32, 26, 'BET-HIP-HOP-2012-HypeGirls-285x280.jpg', 'sdsds', '2014-09-11 12:07:12', '0000-00-00 00:00:00'),
(33, 27, 'Key-arrow-hotel001f-285x280.jpeg', 'fdfd', '2014-09-11 12:09:19', '0000-00-00 00:00:00'),
(34, 28, 'Key-arrow-hotel001f-285x280.jpeg', 'dsd', '2014-09-11 12:17:23', '0000-00-00 00:00:00'),
(35, 29, 'BET-HIP-HOP-2012-HypeGirls-285x280.jpg', 'dfdf', '2014-09-11 12:18:24', '0000-00-00 00:00:00'),
(36, 25, 'Key-arrow-hotel001f-285x280.jpeg', 'test', '2014-09-22 10:32:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_templates`
--

CREATE TABLE IF NOT EXISTS `tbl_email_templates` (
  `pkEmailID` int(11) NOT NULL AUTO_INCREMENT,
  `emailTitle` varchar(225) NOT NULL,
  `emailFromName` varchar(225) NOT NULL,
  `emailFromEmail` varchar(100) NOT NULL,
  `emailSubject` varchar(225) NOT NULL,
  `emailContent` text NOT NULL,
  `emailDateAdded` datetime NOT NULL,
  `emailDateUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkEmailID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_email_templates`
--

INSERT INTO `tbl_email_templates` (`pkEmailID`, `emailTitle`, `emailFromName`, `emailFromEmail`, `emailSubject`, `emailContent`, `emailDateAdded`, `emailDateUpdated`) VALUES
(1, 'Forget password', 'Admin', 'admin@travelogini.com', 'Password retrival mail', '<p>\r\n	Dear {to_name},<br />\r\n	Please click on below link to reset your password:<br />\r\n	<a href="{password_reset_link}" target="_blank">{password_reset_link}</a><br />\r\n	<br />\r\n	Regards</p>\r\n<p>\r\n	Travelogini</p>\r\n', '2015-01-22 15:17:43', '2014-07-11 04:50:39'),
(2, 'Reset forget password', 'Admin', 'admin@travelogini.com', 'updated password mail', '<p>\r\n	Dear {to_name},<br />\r\n	Your Password has been changed successfully.<br />\r\n	Your new password is: {new_password}<br />\r\n	<br />\r\n	Regards</p>\r\n<p>\r\n	Travelogini</p>\r\n', '2015-01-22 15:17:17', '2014-07-11 04:50:50'),
(3, 'Account Activation', 'Admin', 'admin@travelogini.com', 'Account Activation from Travelogini', '<p>\n	Dear {to_name},<br />\n	To activating your account please click on the below link.<br />\n	<a href="{account_activation_link}" target="_blank">{account_activation_link}</a><br />\n	<br />\n	Regards</p>\n<p>\n	Travelogini</p>\n', '2015-01-22 15:16:48', '2015-01-22 09:50:14'),
(4, 'Welcome to Travelogini', 'Travelogini', 'admin@travelogini.com', 'Welcome to Trevelogini', '<p>\n	Dear {to_name},<br />\n	Your account has been activated successfully.<br />\n	Website Link: <a href="{site_url}">{site_url}</a><br />\n	<br />\n	Regards<br />\n	Travelogini</p>\n', '2015-01-22 15:16:06', '2015-01-22 09:48:04'),
(5, 'Customer Account Created By Admin', 'Admin', 'admin@admin.com', 'Your account created successfully.', '<p>\r\n	Dear {to_name},<br />\r\n	Your account has been created successfully.<br />\r\n	Website Link:&nbsp;<a href="{site_url}">{site_url}</a><br />\r\n	Your login email address: {login_email}<br />\r\n	Your login password: {login_password}<br />\r\n	<br />\r\n	Regards<br />\r\n	Travelogini</p>\r\n', '2015-01-22 15:15:19', '2014-10-07 11:05:50'),
(6, 'Payment Confirmation', 'Travelogini-Payments', 'info@travelogini.com', 'Payment Confirmation', '<p>\r\n	Dear {to_name},<br />\r\n	Your account has been created successfully.<br />\r\n	Website Link: <a href="{site_url}">{site_url}</a><br />\r\n	Your login email address: {login_email}<br />\r\n	Your login password: {login_password}<br />\r\n	<br />\r\n	Regards<br />\r\n	Travelogini</p>\r\n', '2015-01-22 15:15:01', '2015-01-22 09:44:08'),
(7, 'Booking Confirmation', 'Admin', 'info@travelogini.com', 'Booking Confirmation', '<p>\n	Dear {to_name},<br />\n	Your account has been activated successfully.<br />\n	Website Link: <a href="{site_url}">{site_url}</a><br />\n	<br />\n	Regards<br />\n	Travelogini</p>\n', '2015-01-22 15:18:44', '2015-01-22 09:49:17'),
(8, 'Special Offers', 'Special Offers', 'info@travelogini.com', 'Special Offers', '<p>\r\n	Dear {to_name},<br />\r\n	Your account has been activated successfully.<br />\r\n	Website Link: <a href="{site_url}">{site_url}</a><br />\r\n	<br />\r\n	Regards<br />\r\n	Travelogini</p>\r\n', '2015-01-22 15:19:48', '2015-01-22 09:49:48'),
(9, 'Gift Card', 'Gift Card', 'info@travelogini.com', 'Gift Card', '<p>\r\n	Dear {to_name},<br />\r\n	To activating your account please click on the below link.<br />\r\n	<a href="{account_activation_link}" target="_blank">{account_activation_link}</a><br />\r\n	<br />\r\n	Regards</p>\r\n<p>\r\n	Travelogini</p>\r\n', '2015-01-28 17:02:31', '2015-01-28 11:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE IF NOT EXISTS `tbl_faqs` (
  `pkFaqID` int(11) NOT NULL AUTO_INCREMENT,
  `faqQuestion` text NOT NULL,
  `faqAnswer` text NOT NULL,
  `faqDisplayOrder` int(5) NOT NULL,
  `fkCategoryID` int(25) NOT NULL,
  `faqAttachment` varchar(255) NOT NULL,
  `faqHelpTopics` varchar(255) NOT NULL,
  `faqStatus` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0=Inactive 1=Active',
  `faqDateAdded` datetime NOT NULL,
  `faqDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkFaqID`),
  UNIQUE KEY `faqDisplayOrder` (`faqDisplayOrder`),
  KEY `fkTopicID` (`fkCategoryID`),
  KEY `fkTopicID_2` (`fkCategoryID`),
  KEY `fkCategoryID` (`fkCategoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_faqs`
--

INSERT INTO `tbl_faqs` (`pkFaqID`, `faqQuestion`, `faqAnswer`, `faqDisplayOrder`, `fkCategoryID`, `faqAttachment`, `faqHelpTopics`, `faqStatus`, `faqDateAdded`, `faqDateModified`) VALUES
(29, ' What is Full Payment option? 29', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et mauris eu tellus venenatis dapibus vel a turpis. Nulla facilisi. Donec ac purus sit amet est commodo vulputate. Maecenas sodales, felis a feugiat blandit, leo nulla maximus sapien, fringilla consequat nisl ligula eu metus.</p>\r\n', 22, 14, '', '', '1', '2015-03-21 11:06:02', '2015-03-21 07:54:00'),
(28, 'What is Advance Payment option and what all products can be booked using this product? 28', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et mauris eu tellus venenatis dapibus vel a turpis. Nulla facilisi. Donec ac purus sit amet est commodo vulputate. Maecenas sodales, felis a feugiat blandit, leo nulla maximus sapien, fringilla consequat nisl ligula eu metus.</p>\r\n', 9, 14, '', '', '1', '2015-03-21 11:05:07', '2015-03-21 07:54:08'),
(30, 'What is Full Payment option? 30', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et mauris eu tellus venenatis dapibus vel a turpis. Nulla facilisi. Donec ac purus sit amet est commodo vulputate. Maecenas sodales, felis a feugiat blandit, leo nulla maximus sapien, fringilla consequat nisl ligula eu metus.</p>\r\n', 3, 15, 'Workspace 1_001-1427112645.png', '', '1', '2015-03-21 11:07:27', '2015-03-23 12:10:59'),
(31, 'What is Advance Payment option and what all products can be booked using this product? 31', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et mauris eu tellus venenatis dapibus vel a turpis. Nulla facilisi. Donec ac purus sit amet est commodo vulputate. Maecenas sodales, felis a feugiat blandit, leo nulla maximus sapien, fringilla consequat nisl ligula eu metus.</p>\r\n', 4, 16, '', '', '1', '2015-03-21 11:08:16', '2015-03-21 07:53:26'),
(32, 'What is Full Payment option with file? 32', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et mauris eu tellus venenatis dapibus vel a turpis. Nulla facilisi. Donec ac purus sit amet est commodo vulputate. Maecenas sodales, felis a feugiat blandit, leo nulla maximus sapien, fringilla consequat nisl ligula eu metus.</p>\r\n', 6, 14, 'Steve-Jobs-Apple-CEO-HD-Wallpaper-inspiration-inspirational-motivation-motivational-HD-wallpapers-backgrounds-image-wide-new-2013-2014-2015-201676-1426916366.jpg', '29,28,30', '1', '2015-03-21 11:09:26', '2015-03-21 13:49:30'),
(33, 'Sathish test question?', '<p>test questions ansowers.</p>\r\n', 12, 15, '', '', '1', '2015-03-23 16:09:07', '2015-03-23 10:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_faqs_categories` (
  `pkCategoryID` int(25) NOT NULL AUTO_INCREMENT,
  `faqCategoryName` varchar(255) NOT NULL,
  `faqCategoryStatus` enum('1','0') NOT NULL DEFAULT '1',
  `faqCategoryIsMount` enum('0','1') NOT NULL DEFAULT '0',
  `faqCategoryDateAdded` datetime NOT NULL,
  `faqCategoryDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkCategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_faqs_categories`
--

INSERT INTO `tbl_faqs_categories` (`pkCategoryID`, `faqCategoryName`, `faqCategoryStatus`, `faqCategoryIsMount`, `faqCategoryDateAdded`, `faqCategoryDateModified`) VALUES
(14, 'Customer', '1', '1', '2015-03-21 11:03:48', '2015-03-21 05:33:48'),
(15, 'City Partner', '1', '1', '2015-03-21 11:04:04', '2015-03-21 05:34:04'),
(16, 'Property Partner', '1', '1', '2015-03-21 11:04:19', '2015-03-21 05:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locations`
--

CREATE TABLE IF NOT EXISTS `tbl_locations` (
  `pklocationID` bigint(20) NOT NULL AUTO_INCREMENT,
  `fkParentLocationID` bigint(20) NOT NULL,
  `locationName` varchar(255) NOT NULL,
  `locationType` enum('Country','State','City') NOT NULL,
  `locationAddDate` datetime NOT NULL,
  PRIMARY KEY (`pklocationID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mascots`
--

CREATE TABLE IF NOT EXISTS `tbl_mascots` (
  `mascotID` int(25) NOT NULL AUTO_INCREMENT,
  `mascotName` varchar(250) NOT NULL,
  `mascotImage` varchar(250) NOT NULL,
  `mascotAltTag` varchar(250) NOT NULL,
  `mascotStatus` enum('0','1') NOT NULL,
  `mascotDateAdded` datetime NOT NULL,
  `mascotDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`mascotID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_mascots`
--

INSERT INTO `tbl_mascots` (`mascotID`, `mascotName`, `mascotImage`, `mascotAltTag`, `mascotStatus`, `mascotDateAdded`, `mascotDateModified`) VALUES
(1, 'Flights', 'flights-1423821020.png', 'Flights', '1', '2015-01-23 10:26:35', '2015-02-13 12:28:21'),
(2, 'Hotels', 'hotels-1423819713.png', 'Hotels', '1', '2015-01-23 07:40:38', '2015-02-13 09:28:33'),
(3, 'Rooms', 'rooms-1423819731.png', 'Rooms', '1', '2015-02-13 11:33:44', '2015-02-13 09:28:51'),
(4, 'In Your City', 'inyour-city-1423819749.png', 'In Your City', '1', '2015-02-13 15:33:25', '2015-02-13 09:29:09'),
(5, 'Wish Gini', 'wishgini-1423820273.png', 'Wish Gini', '1', '2015-02-13 15:23:42', '2015-02-13 09:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_membership_plans`
--

CREATE TABLE IF NOT EXISTS `tbl_membership_plans` (
  `pkPlanID` int(250) NOT NULL AUTO_INCREMENT,
  `planName` varchar(255) NOT NULL,
  `membershipFee` int(250) NOT NULL,
  `accessBooking` enum('0','1') NOT NULL COMMENT '0 => Inactive  1=>Active',
  `addToWishgini` enum('0','1') NOT NULL COMMENT '0=>Inactive 1=>Active',
  `receiveCoupons` enum('0','1') NOT NULL COMMENT '0 => Inactive  1=>Active',
  `planAddedDate` datetime NOT NULL,
  `planModifiedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkPlanID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_membership_plans`
--

INSERT INTO `tbl_membership_plans` (`pkPlanID`, `planName`, `membershipFee`, `accessBooking`, `addToWishgini`, `receiveCoupons`, `planAddedDate`, `planModifiedDate`) VALUES
(1, 'Free', 0, '1', '0', '1', '0000-00-00 00:00:00', '2015-02-25 10:41:34'),
(2, 'Paid', 12386, '0', '1', '1', '0000-00-00 00:00:00', '2015-02-25 10:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `pkOrderID` int(11) NOT NULL AUTO_INCREMENT,
  `orderTransactionID` varchar(255) NOT NULL COMMENT 'payment transaction id',
  `orderTransactionAmount` decimal(15,4) NOT NULL,
  `fkCustomerID` int(11) NOT NULL,
  `orderCustomerFirstName` varchar(255) NOT NULL,
  `orderCustomerLastName` varchar(255) NOT NULL,
  `orderCustomerEmail` varchar(255) NOT NULL,
  `orderCustomerPhone` varchar(50) NOT NULL,
  `orderBillingAddress1` varchar(256) NOT NULL,
  `orderBillingAddress2` varchar(256) NOT NULL,
  `orderBillingCountry` int(11) NOT NULL,
  `orderBillingState` int(11) NOT NULL,
  `orderBillingCity` int(11) NOT NULL,
  `orderBillingZipcode` varchar(8) NOT NULL,
  `orderBillingPhone` varchar(256) NOT NULL,
  `orderShippingAddress1` varchar(256) NOT NULL,
  `orderShippingAddress2` varchar(256) NOT NULL,
  `orderShippingCountry` int(11) NOT NULL,
  `orderShippingState` int(11) NOT NULL,
  `orderShippingCity` int(11) NOT NULL,
  `orderShippingZipcode` varchar(8) NOT NULL,
  `orderShippingPhone` varchar(256) NOT NULL,
  `orderCustomerComment` text NOT NULL,
  `orderCouponDiscount` decimal(10,2) NOT NULL,
  `orderStatus` enum('Canceled','Completed','Disputed','Pending','Posted') NOT NULL DEFAULT 'Pending',
  `orderDateAdded` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `orderDateUpdated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`pkOrderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='order details' AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`pkOrderID`, `orderTransactionID`, `orderTransactionAmount`, `fkCustomerID`, `orderCustomerFirstName`, `orderCustomerLastName`, `orderCustomerEmail`, `orderCustomerPhone`, `orderBillingAddress1`, `orderBillingAddress2`, `orderBillingCountry`, `orderBillingState`, `orderBillingCity`, `orderBillingZipcode`, `orderBillingPhone`, `orderShippingAddress1`, `orderShippingAddress2`, `orderShippingCountry`, `orderShippingState`, `orderShippingCity`, `orderShippingZipcode`, `orderShippingPhone`, `orderCustomerComment`, `orderCouponDiscount`, `orderStatus`, `orderDateAdded`, `orderDateUpdated`) VALUES
(7, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 1, 2, 1, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 3, '6576887', '9876543456', '', 0.00, 'Completed', '2014-10-27 16:28:48', '2014-10-27 16:28:48'),
(4, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 2, 5, 6, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 3, '6576887', '9876543456', '', 0.00, 'Pending', '2014-10-20 12:51:34', '2014-10-20 12:51:34'),
(5, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 2, 5, 6, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 3, '6576887', '9876543456', '', 0.00, 'Pending', '2014-10-20 14:29:52', '2014-10-20 14:29:52'),
(6, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 2, 5, 6, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 3, '6576887', '9876543456', '', 0.00, 'Pending', '2014-10-20 16:03:38', '2014-10-20 16:03:38'),
(8, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 2, 5, 6, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 3, '6576887', '9876543456', '', 0.00, 'Posted', '2014-11-03 16:28:20', '2014-11-03 16:28:20'),
(9, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 2, 5, 6, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 4, '6576887', '9876543456', '', 0.00, 'Pending', '2014-11-05 11:57:11', '2014-11-05 11:57:11'),
(10, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 2, 5, 6, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 3, '6576887', '9876543456', '', 0.00, 'Pending', '2014-11-05 12:24:01', '2014-11-05 12:24:01'),
(11, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 2, 5, 6, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 3, '6576887', '9876543456', 'Hello', 0.00, 'Pending', '2014-11-05 14:04:42', '2014-11-05 14:04:42'),
(12, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 2, 5, 6, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 3, '6576887', '9876543456', '', 0.00, 'Pending', '2014-11-05 14:50:32', '2014-11-05 14:50:32'),
(13, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 2, 5, 6, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 3, '6576887', '9876543456', '', 0.00, 'Pending', '2014-11-05 14:51:27', '2014-11-05 14:51:27'),
(14, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 2, 5, 6, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 3, '6576887', '9876543456', 'Hello, this is my first order..!!', 70.42, 'Pending', '2014-11-05 14:55:53', '2014-11-05 14:55:53'),
(15, '', 0.0000, 33, 'Yogesh', 'Chauhan', 'yogesh@mail.vinove.com', '', 'A-364(A)', 'New Ashoknagar', 1, 2, 2, '618726', '9876543210', 'A-374', 'Delhi', 2, 5, 7, '232323', '343545435435', 'This is wonderful offer.', 19.50, 'Pending', '2014-11-05 17:27:50', '2014-11-05 17:27:50'),
(16, '', 0.0000, 33, 'Yogesh', 'Chauhan', 'yogesh@mail.vinove.com', '', 'A-364(A)', 'New Ashoknagar', 1, 2, 1, '45435435', '9876543210', 'A-3741', 'Delhi', 1, 2, 1, 'Enter yo', '343545435435', '', 0.00, 'Pending', '2014-11-05 18:27:56', '2014-11-05 18:27:56'),
(17, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 2, 5, 6, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 3, '6576887', '9876543456', '', 0.00, 'Pending', '2014-11-05 18:48:54', '2014-11-05 18:48:54'),
(18, '', 0.0000, 33, 'Yogesh', 'Chauhan', 'yogesh@mail.vinove.com', '', '', '', 0, 0, 0, '0', '', '', '', 0, 0, 0, '0', '', 'gfggg', 0.00, 'Pending', '2014-11-05 18:49:28', '2014-11-05 18:49:28'),
(19, '', 0.0000, 28, 'Vipin', 'Tomar', 'vipin.tomar@mail.vinove.com', '987654321', 'A-364(B)', 'New Ashokanagar', 2, 5, 6, '325465', '9876543221', 'A-162', 'New Delhi', 1, 3, 3, '6576887', '9876543456', '', 0.00, 'Pending', '2014-11-06 10:16:08', '2014-11-06 10:16:08'),
(20, '', 0.0000, 33, 'Yogesh', 'Chauhan', 'yogesh@mail.vinove.com', '', 'A-364(A)', 'New Ashoknagar', 1, 2, 1, '5435355', '5435353545', 'A-374', 'Delhi', 1, 3, 4, '35354', '9875556565', 'Hello this is my first offer.', 46.17, 'Pending', '2014-11-06 10:16:54', '2014-11-06 10:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE IF NOT EXISTS `tbl_order_item` (
  `pkOrderItemID` int(11) NOT NULL AUTO_INCREMENT,
  `fkOrderID` int(11) NOT NULL,
  `fkDealID` int(11) NOT NULL,
  `orderItemName` varchar(255) NOT NULL,
  `orderItemPrice` decimal(15,4) NOT NULL,
  `orderItemQuantity` int(11) NOT NULL,
  `orderItemTotalPrice` decimal(15,4) NOT NULL,
  `orderItemStatus` enum('Canceled','Completed','Pending','Posted') NOT NULL,
  `orderItemDateAdded` datetime NOT NULL,
  PRIMARY KEY (`pkOrderItemID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`pkOrderItemID`, `fkOrderID`, `fkDealID`, `orderItemName`, `orderItemPrice`, `orderItemQuantity`, `orderItemTotalPrice`, `orderItemStatus`, `orderItemDateAdded`) VALUES
(1, 1, 21, 'asas', 37.5000, 1, 37.5000, 'Pending', '2014-10-20 12:12:15'),
(2, 1, 25, 'sdsd123', 377.4000, 1, 377.4000, 'Pending', '2014-10-20 12:12:15'),
(3, 2, 21, 'asas', 37.5000, 2, 75.0000, 'Pending', '2014-10-20 12:13:34'),
(4, 2, 25, 'sdsd123', 377.4000, 3, 1132.2000, 'Pending', '2014-10-20 12:13:34'),
(5, 3, 23, 'gfgfdg', 46.7500, 1, 46.7500, 'Pending', '2014-10-20 12:44:11'),
(6, 4, 21, 'asas', 37.5000, 1, 37.5000, 'Pending', '2014-10-20 12:51:34'),
(7, 4, 22, 'latest deal', 65.0000, 1, 65.0000, 'Pending', '2014-10-20 12:51:34'),
(8, 5, 21, 'asas', 37.5000, 4, 150.0000, 'Pending', '2014-10-20 14:29:52'),
(9, 5, 22, 'latest deal', 65.0000, 2, 130.0000, 'Pending', '2014-10-20 14:29:52'),
(10, 6, 21, 'asas', 37.5000, 1, 37.5000, 'Pending', '2014-10-20 16:03:38'),
(13, 7, 21, 'asas', 37.5000, 1, 37.5000, 'Pending', '2014-10-27 16:28:48'),
(12, 6, 25, 'sdsd123', 377.4000, 3, 1132.2000, 'Pending', '2014-10-20 16:03:57'),
(14, 8, 23, 'gfgfdg', 46.7500, 2, 93.5000, 'Pending', '2014-11-03 16:28:20'),
(15, 8, 22, 'latest deal', 65.0000, 1, 65.0000, 'Pending', '2014-11-03 17:09:44'),
(16, 8, 25, 'sdsd123', 377.4000, 1, 377.4000, 'Pending', '2014-11-03 17:09:53'),
(17, 9, 21, 'asas', 37.5000, 2, 75.0000, 'Pending', '2014-11-05 11:57:11'),
(18, 9, 23, 'gfgfdg', 46.7500, 2, 93.5000, 'Pending', '2014-11-05 12:07:47'),
(19, 9, 22, 'latest deal', 65.0000, 2, 130.0000, 'Pending', '2014-11-05 12:10:32'),
(20, 9, 25, 'sdsd123', 377.4000, 1, 377.4000, 'Pending', '2014-11-05 12:17:24'),
(21, 10, 23, 'gfgfdg', 46.7500, 5, 233.7500, 'Pending', '2014-11-05 12:24:01'),
(22, 10, 22, 'latest deal', 65.0000, 1, 65.0000, 'Pending', '2014-11-05 12:24:51'),
(23, 10, 25, 'sdsd123', 377.4000, 1, 377.4000, 'Pending', '2014-11-05 14:03:48'),
(24, 11, 21, 'asas', 37.5000, 2, 75.0000, 'Pending', '2014-11-05 14:04:42'),
(25, 12, 21, 'asas', 37.5000, 2, 75.0000, 'Pending', '2014-11-05 14:50:32'),
(26, 13, 23, 'gfgfdg', 46.7500, 2, 93.5000, 'Pending', '2014-11-05 14:51:27'),
(27, 14, 21, 'asas', 37.5000, 4, 150.0000, 'Pending', '2014-11-05 14:55:53'),
(30, 14, 22, 'latest deal', 65.0000, 2, 130.0000, 'Pending', '2014-11-05 15:33:29'),
(31, 14, 23, 'gfgfdg', 46.7500, 1, 46.7500, 'Pending', '2014-11-05 15:55:44'),
(32, 14, 25, 'sdsd123', 377.4000, 1, 377.4000, 'Pending', '2014-11-05 15:56:13'),
(33, 15, 22, 'latest deal', 65.0000, 3, 195.0000, 'Pending', '2014-11-05 17:27:50'),
(34, 16, 21, 'asas', 37.5000, 2, 75.0000, 'Pending', '2014-11-05 18:27:56'),
(35, 17, 22, 'latest deal', 65.0000, 1, 65.0000, 'Pending', '2014-11-05 18:48:54'),
(36, 18, 23, 'gfgfdg', 46.7500, 1, 46.7500, 'Pending', '2014-11-05 18:49:28'),
(37, 19, 22, 'latest deal', 65.0000, 1, 65.0000, 'Pending', '2014-11-06 10:16:08'),
(38, 20, 23, 'gfgfdg', 46.7500, 1, 46.7500, 'Pending', '2014-11-06 10:16:54'),
(39, 20, 21, 'asas', 37.5000, 1, 37.5000, 'Pending', '2014-11-06 10:17:18'),
(40, 20, 25, 'sdsd123', 377.4000, 1, 377.4000, 'Pending', '2014-11-06 11:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_password_reset`
--

CREATE TABLE IF NOT EXISTS `tbl_password_reset` (
  `pkPassResetID` int(11) NOT NULL AUTO_INCREMENT,
  `fkUserID` int(11) NOT NULL,
  `passResetToken` varchar(100) NOT NULL,
  `passResetCreated` int(20) NOT NULL,
  `passResetExpires` int(20) NOT NULL,
  `passResetStatus` enum('0','1') NOT NULL,
  `passResetDateAdded` datetime NOT NULL,
  PRIMARY KEY (`pkPassResetID`),
  KEY `fkUserID` (`fkUserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_password_reset`
--

INSERT INTO `tbl_password_reset` (`pkPassResetID`, `fkUserID`, `passResetToken`, `passResetCreated`, `passResetExpires`, `passResetStatus`, `passResetDateAdded`) VALUES
(1, 4, 'TVVSNG8GQR1426309619', 1426309619, 1426309650, '0', '2015-03-14 10:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_partners`
--

CREATE TABLE IF NOT EXISTS `tbl_property_partners` (
  `pkPropertyPartnerID` bigint(20) NOT NULL AUTO_INCREMENT,
  `fkUserLoginID` int(11) NOT NULL,
  `propertyPartnerUniqueID` varchar(255) NOT NULL,
  `propertyPartnerFirstName` varchar(255) NOT NULL,
  `propertyPartnerLastName` varchar(255) NOT NULL,
  `propertyPartnerUserName` varchar(255) NOT NULL,
  `propertyPartnerEmail` varchar(255) NOT NULL,
  `propertyPartnerMobile` varchar(255) NOT NULL,
  `propertyPartnerDateOfBirth` datetime NOT NULL,
  `propertyPartnerBusinessName` varchar(255) NOT NULL,
  `propertyPartnerWebsite` varchar(255) NOT NULL,
  `propertyPartnerContactMethod` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '1 => Mobile, 2 => Email, 3 => Both',
  `propertyPartnerSubscriptionPlan` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '1 => Free, 2 => Basic, 3 => Pro',
  `propertyPartnerStatus` enum('0','1') NOT NULL,
  `propertyPartnerFeePaid` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0 => Not Paid, 1 => Paid',
  `propertyPartnerAddress` varchar(255) NOT NULL,
  `propertyPartnerCity` int(11) NOT NULL,
  `propertyPartnerState` int(11) NOT NULL,
  `propertyPartnerCountry` int(11) NOT NULL,
  `propertyPartnerZip` int(8) NOT NULL,
  `eWalletBalance` int(50) NOT NULL DEFAULT '0',
  `wishginiBalance` int(50) NOT NULL DEFAULT '0',
  `propertyPartnerAccountActivationToken` varchar(255) NOT NULL,
  `propertyPartnerDateAdded` datetime NOT NULL,
  `propertyPartnerDateModified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkPropertyPartnerID`),
  UNIQUE KEY `propertyPartnerUserName` (`propertyPartnerUserName`),
  UNIQUE KEY `propertyPartnerUniqueID` (`propertyPartnerUniqueID`),
  UNIQUE KEY `propertyPartnerEmail` (`propertyPartnerEmail`),
  KEY `fkUserLoginID` (`fkUserLoginID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_property_partners`
--

INSERT INTO `tbl_property_partners` (`pkPropertyPartnerID`, `fkUserLoginID`, `propertyPartnerUniqueID`, `propertyPartnerFirstName`, `propertyPartnerLastName`, `propertyPartnerUserName`, `propertyPartnerEmail`, `propertyPartnerMobile`, `propertyPartnerDateOfBirth`, `propertyPartnerBusinessName`, `propertyPartnerWebsite`, `propertyPartnerContactMethod`, `propertyPartnerSubscriptionPlan`, `propertyPartnerStatus`, `propertyPartnerFeePaid`, `propertyPartnerAddress`, `propertyPartnerCity`, `propertyPartnerState`, `propertyPartnerCountry`, `propertyPartnerZip`, `eWalletBalance`, `wishginiBalance`, `propertyPartnerAccountActivationToken`, `propertyPartnerDateAdded`, `propertyPartnerDateModified`) VALUES
(1, 95, 'PART00123', 'propertysathish', 'propertykumar', 'propertysathishkumar', 'propertysathishkumar@mail.com', '14257458963', '2009-12-10 00:00:00', 'propertyBusiness', 'www.property.com', '1', '2', '1', '0', 'propertysathish', 1, 2, 1, 12345, 0, 0, '', '2015-03-16 06:24:39', '2015-03-18 14:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_propery_partner_plans`
--

CREATE TABLE IF NOT EXISTS `tbl_propery_partner_plans` (
  `pkPlanID` int(250) NOT NULL AUTO_INCREMENT,
  `planName` varchar(255) NOT NULL,
  `membershipFee` int(250) NOT NULL,
  `daysValidity` int(250) NOT NULL,
  `numberOfListing` int(250) NOT NULL,
  `accessBooking` enum('0','1') NOT NULL COMMENT '0 => Inactive  1=>Active',
  `addToWishgini` enum('0','1') NOT NULL COMMENT '0=>Inactive 1=>Active',
  `receiveCoupons` enum('0','1') NOT NULL COMMENT '0 => Inactive  1=>Active',
  `planAddedDate` datetime NOT NULL,
  `planModifiedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkPlanID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_propery_partner_plans`
--

INSERT INTO `tbl_propery_partner_plans` (`pkPlanID`, `planName`, `membershipFee`, `daysValidity`, `numberOfListing`, `accessBooking`, `addToWishgini`, `receiveCoupons`, `planAddedDate`, `planModifiedDate`) VALUES
(1, 'Free', 0, 30, 5, '1', '0', '1', '0000-00-00 00:00:00', '2015-02-25 05:11:34'),
(2, 'Basic', 12386, 60, 20, '0', '1', '1', '0000-00-00 00:00:00', '2015-03-14 12:15:47'),
(3, 'Pro', 125000, 50, 100, '1', '1', '1', '0000-00-00 00:00:00', '2015-03-14 12:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE IF NOT EXISTS `tbl_settings` (
  `settingID` int(11) NOT NULL,
  `settingParameter` varchar(255) NOT NULL,
  `settingValue` varchar(255) NOT NULL,
  `settingModifyDate` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`settingID`, `settingParameter`, `settingValue`, `settingModifyDate`) VALUES
(1, 'Number of Pages', '10', 0),
(2, 'Notification Email', 'swati.dubey@mail.vinove.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE IF NOT EXISTS `tbl_state` (
  `pkStateID` int(11) NOT NULL AUTO_INCREMENT,
  `stateName` varchar(255) NOT NULL,
  `fkCountryID` int(11) NOT NULL,
  `stateStatus` enum('0','1','2') NOT NULL COMMENT '0=>Inactive, 1=>Active,2=>Deleted',
  `stateDateAdded` datetime NOT NULL,
  `stateDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkStateID`),
  KEY `fkCountryID` (`fkCountryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`pkStateID`, `stateName`, `fkCountryID`, `stateStatus`, `stateDateAdded`, `stateDateModified`) VALUES
(2, 'Uttarakhand', 1, '1', '0000-00-00 00:00:00', '2014-10-08 11:46:02'),
(3, 'Uttar Pradesh', 1, '1', '0000-00-00 00:00:00', '2014-10-08 11:59:37'),
(4, 'Bihar', 1, '0', '0000-00-00 00:00:00', '2014-10-08 12:01:07'),
(5, 'Washington', 2, '1', '0000-00-00 00:00:00', '2014-10-08 12:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_login`
--

CREATE TABLE IF NOT EXISTS `tbl_users_login` (
  `pkUserLoginID` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(255) NOT NULL,
  `userName` varchar(250) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userType` enum('A','C','PP','CP') NOT NULL COMMENT 'A=Admin C=Customer M=Merchant',
  `userDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkUserLoginID`),
  UNIQUE KEY `userName` (`userName`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `tbl_users_login`
--

INSERT INTO `tbl_users_login` (`pkUserLoginID`, `userEmail`, `userName`, `userPassword`, `userType`, `userDateModified`) VALUES
(4, 'admin@mail.vinove.com', 'admin', '87817c5310da5cfff85df962e906fff5', 'A', '2015-03-14 09:07:34'),
(93, 'test@mail.com', 'test', '098f6bcd4621d373cade4e832627b4f6', 'C', '2015-03-14 10:28:42'),
(94, 'sathish@mail.com', 'sathish', '87817c5310da5cfff85df962e906fff5', 'C', '2015-03-17 15:33:26'),
(95, 'propertysathishkumar@mail.com', 'property', '87817c5310da5cfff85df962e906fff5', 'PP', '2015-03-18 13:36:50'),
(99, 'city@mail.com', 'city', '08b64106d977b1e32174bebba9113d55', 'CP', '2015-03-17 15:33:41');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admin_access_log`
--
ALTER TABLE `tbl_admin_access_log`
  ADD CONSTRAINT `tbl_admin_access_log_ibfk_1` FOREIGN KEY (`fkAdminID`) REFERENCES `tbl_users_login` (`pkUserLoginID`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD CONSTRAINT `tbl_cities_ibfk_1` FOREIGN KEY (`fkStateID`) REFERENCES `tbl_state` (`pkStateID`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_city_partners`
--
ALTER TABLE `tbl_city_partners`
  ADD CONSTRAINT `tbl_city_partners_ibfk_1` FOREIGN KEY (`fkUserLoginID`) REFERENCES `tbl_users_login` (`pkUserLoginID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD CONSTRAINT `tbl_customers_ibfk_1` FOREIGN KEY (`fkUserLoginID`) REFERENCES `tbl_users_login` (`pkUserLoginID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_password_reset`
--
ALTER TABLE `tbl_password_reset`
  ADD CONSTRAINT `tbl_password_reset_ibfk_1` FOREIGN KEY (`fkUserID`) REFERENCES `tbl_users_login` (`pkUserLoginID`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_property_partners`
--
ALTER TABLE `tbl_property_partners`
  ADD CONSTRAINT `tbl_property_partners_ibfk_1` FOREIGN KEY (`fkUserLoginID`) REFERENCES `tbl_users_login` (`pkUserLoginID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD CONSTRAINT `tbl_state_ibfk_1` FOREIGN KEY (`fkCountryID`) REFERENCES `tbl_country` (`pkCountryID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

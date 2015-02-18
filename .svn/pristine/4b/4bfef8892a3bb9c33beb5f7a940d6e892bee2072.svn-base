-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2015 at 06:00 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=155 ;

--
-- Dumping data for table `tbl_admin_access_log`
--

INSERT INTO `tbl_admin_access_log` (`pkAdminAccessID`, `fkAdminID`, `adminAccessLoginIP`, `adminAccessLoginTime`, `adminAccessLogoutTime`) VALUES
(125, 3, '127.0.0.1', '2014-12-19 17:50:23', '0000-00-00 00:00:00'),
(126, 3, '127.0.0.1', '2014-12-22 11:06:48', '0000-00-00 00:00:00'),
(127, 3, '127.0.0.1', '2014-12-24 11:53:23', '0000-00-00 00:00:00'),
(128, 3, '127.0.0.1', '2015-01-05 16:02:50', '0000-00-00 00:00:00'),
(129, 3, '127.0.0.1', '2015-01-06 11:28:43', '0000-00-00 00:00:00'),
(130, 3, '127.0.0.1', '2015-01-06 17:26:29', '0000-00-00 00:00:00'),
(131, 3, '127.0.0.1', '2015-01-07 12:20:56', '0000-00-00 00:00:00'),
(132, 3, '127.0.0.1', '2015-01-07 14:42:00', '0000-00-00 00:00:00'),
(133, 3, '127.0.0.1', '2015-01-09 12:54:35', '0000-00-00 00:00:00'),
(134, 3, '127.0.0.1', '2015-01-09 13:13:20', '0000-00-00 00:00:00'),
(135, 3, '127.0.0.1', '2015-01-09 14:13:12', '0000-00-00 00:00:00'),
(136, 3, '127.0.0.1', '2015-01-09 15:14:17', '0000-00-00 00:00:00'),
(137, 3, '127.0.0.1', '2015-01-09 15:40:45', '0000-00-00 00:00:00'),
(138, 3, '127.0.0.1', '2015-01-10 10:24:53', '0000-00-00 00:00:00'),
(139, 3, '127.0.0.1', '2015-01-10 12:07:47', '0000-00-00 00:00:00'),
(140, 3, '127.0.0.1', '2015-01-12 10:31:37', '0000-00-00 00:00:00'),
(141, 3, '127.0.0.1', '2015-01-12 17:25:07', '0000-00-00 00:00:00'),
(142, 3, '127.0.0.1', '2015-01-13 10:05:35', '0000-00-00 00:00:00'),
(143, 3, '127.0.0.1', '2015-01-13 10:40:05', '0000-00-00 00:00:00'),
(144, 3, '127.0.0.1', '2015-01-13 12:32:19', '0000-00-00 00:00:00'),
(145, 3, '127.0.0.1', '2015-01-14 10:42:07', '0000-00-00 00:00:00'),
(146, 3, '127.0.0.1', '2015-01-14 17:29:37', '0000-00-00 00:00:00'),
(147, 3, '127.0.0.1', '2015-01-15 12:40:46', '0000-00-00 00:00:00'),
(148, 3, '127.0.0.1', '2015-01-15 15:29:23', '0000-00-00 00:00:00'),
(149, 3, '127.0.0.1', '2015-01-21 16:35:19', '0000-00-00 00:00:00'),
(150, 3, '127.0.0.1', '2015-01-21 16:41:16', '0000-00-00 00:00:00'),
(151, 3, '127.0.0.1', '2015-01-21 17:20:52', '2015-01-21 18:51:10'),
(152, 3, '127.0.0.1', '2015-01-22 10:31:31', '0000-00-00 00:00:00'),
(153, 3, '127.0.0.1', '2015-01-22 14:30:38', '2015-01-22 17:45:33'),
(154, 3, '127.0.0.1', '2015-01-22 17:53:09', '0000-00-00 00:00:00');

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
  `fkCmsID` int(11) NOT NULL,
  `bannerStatus` enum('0','1') NOT NULL,
  `bannerDateAdded` datetime NOT NULL,
  `bannerDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkBannerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_banner_slider`
--

INSERT INTO `tbl_banner_slider` (`pkBannerID`, `bannerTitle`, `bannerTagLine`, `bannerImage`, `bannerAltTag`, `bannerOrder`, `fkCmsID`, `bannerStatus`, `bannerDateAdded`, `bannerDateModified`) VALUES
(4, 'Deal Banner2', '', 'banner.jpg', 'Deal Banner2', 1, 1, '1', '2014-08-26 11:20:16', '2014-09-09 08:47:48'),
(5, 'Deal Banner Title 3', '', 'banner.jpg', 'Deal Banner Alt3', 2, 1, '1', '2014-08-26 11:20:42', '2014-09-09 08:47:48'),
(6, 'Banner3', '', 'banner.jpg', 'Banner3', 4, 1, '1', '2014-08-27 20:22:18', '2014-09-09 08:47:48'),
(7, 'Search Page Banner', '', 'search-page-banner.png', 'Search Page Banner', 3, 8, '1', '2014-08-28 14:59:50', '2014-09-09 08:47:48');

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
  `cmsContentAvailable` enum('0','1') NOT NULL COMMENT '''0''=>No, ''1''=>Yes',
  `cmsBannerAvailable` enum('0','1') NOT NULL COMMENT '''0''=>No, ''1''=>Yes',
  `cmsIsPage` enum('0','1') NOT NULL,
  `cmsStatus` enum('0','1') NOT NULL COMMENT '0=Inactive | 1=Active',
  `cmsDateAdded` datetime NOT NULL,
  `cmsDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkCmsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_cms`
--

INSERT INTO `tbl_cms` (`pkCmsID`, `cmsDisplayTitle`, `cmsPageTitle`, `cmsSlug`, `cmsContent`, `cmsMetaTitle`, `cmsMetaKeywords`, `cmsMetaDescription`, `cmsContentAvailable`, `cmsBannerAvailable`, `cmsIsPage`, `cmsStatus`, `cmsDateAdded`, `cmsDateModified`) VALUES
(1, 'Home', 'Home', 'home', 'Home', 'Home', 'Home', 'Home', '0', '1', '0', '1', '2014-08-28 00:00:00', '2014-09-08 13:02:52'),
(2, 'About Us', 'About Us', 'about-us', '<p>\r\n	About Us</p>\r\n', 'About Us', 'About Us', 'About Us', '1', '0', '1', '1', '2014-06-11 15:33:46', '2015-01-22 09:10:52'),
(3, 'Terms & Conditions', 'Terms & Conditions', 'terms-conditions', '<p>\r\n    Terms &amp; Conditions</p>\r\n', 'Terms & Conditions', 'Terms & Conditions', 'Terms & Conditions', '1', '0', '1', '1', '2014-06-11 17:59:58', '2014-09-08 13:02:52'),
(4, 'Home', 'Home', 'home', '<p>\r\n	Home page information</p>\r\n', 'home', 'home', 'home description', '1', '0', '1', '1', '2014-06-11 18:02:50', '2015-01-22 07:00:22'),
(5, 'Privacy Policy', 'Privacy Policy', 'privacy-policy', '<p>\r\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris. Maecenas placerat, nisl at consequat rhoncus, sem nunc gravida justo, quis eleifend arcu velit quis lacus. Morbi magna magna, tincidunt a, mattis non, imperdiet vitae, tellus. Sed odio est, auctor ac, sollicitudin in, consequat vitae, orci. Fusce id felis. Vivamus sollicitudin metus eget eros.</p>\r\n<h4 class="cms_heading">\r\n	Information we collect</h4>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris. Maecenas placerat, nisl at consequat rhoncus, sem nunc gravida justo, quis eleifend arcu velit quis lacus. Morbi magna magna, tincidunt a, mattis non, imperdiet vitae, tellus. Sed odio est, auctor ac, sollicitudin in, consequat vitae, orci. Fusce id felis. Vivamus sollicitudin metus eget eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris.</p>\r\n<h4 class="cms_heading">\r\n	Personally Identifiable Information</h4>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum. Suspendisse vulputate aliquam dui. Nulla elementum dui ut augue. Aliquam vehicula mi at mauris.</p>\r\n', 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', '1', '0', '1', '1', '2014-08-28 00:00:00', '2015-01-22 06:54:17'),
(6, 'Sitemap', 'Sitemap', 'sitemap', '<p>\r\n Sitemap</p>\r\n', 'Sitemap', 'Sitemap', 'Sitemap', '1', '0', '1', '1', '2014-08-28 00:00:00', '2015-01-22 06:54:17'),
(7, 'Contact Us', 'Contact Us', 'contact-us', '<ul class="contact_inner">\r\n	<li>\r\n		<figure><img alt="" src="http://dev.iworklab.com/promosol/images/contact_img1.jpg" /> </figure>\r\n		<div class="contact_detail">\r\n			<h3>\r\n				Customer Service &amp; Support:</h3>\r\n			<p>\r\n				Email us at <a class="mailto" href="mailto:support@xxxxxxx.com">support@xxxxxxx.com</a> or Call us at 07877321321 (Monday - Friday), 10am to 6pm</p>\r\n		</div>\r\n	</li>\r\n	<li>\r\n		<figure><img alt="" src="http://dev.iworklab.com/promosol/images/contact_img2.jpg" /> </figure>\r\n		<div class="contact_detail">\r\n			<h3>\r\n				Business Opportunities &amp; Sales Enquiries:</h3>\r\n			<p>\r\n				Do get in touch with us at <a class="mailto" href="mailto:support@xxxxxxx.com">sales@xxxxxxx.com</a> Our representatives will contact you shortly to help you through.</p>\r\n		</div>\r\n	</li>\r\n	<li class="last">\r\n		<figure><img alt="" src="http://dev.iworklab.com/promosol/images/contact_img3.jpg" /> </figure>\r\n		<div class="contact_detail">\r\n			<h3>\r\n				Our Official Coordinates:</h3>\r\n			<p>\r\n				Plot No. 426, Brokslow - Phase 3, Lagos, Nigeria</p>\r\n			<p>\r\n				Tel: XXXXXXXXXX</p>\r\n			<p>\r\n				E-mail : <a class="mailto" href="mailto:support@xxxxxxx.com">support@xxxxxxx.com</a></p>\r\n		</div>\r\n	</li>\r\n</ul>\r\n', 'Contact Us', 'Contact Us', 'Contact Us', '1', '0', '1', '0', '2014-08-28 00:00:00', '2015-01-22 06:42:56'),
(8, 'Search Page', 'Search Page', 'search', 'Fashion industry is always looking for the latest trend to absorb it and then spread it to the rest of the world. This behaviour is also common in web design. So, when the worlds of fashion and Internet collide, we can expect to see websites that blend together the latest visual and technological trends. ', 'Search Page', 'Search Page', 'Search Page', '1', '1', '0', '1', '2014-08-29 00:00:00', '2014-09-08 13:02:52'),
(9, 'Home', 'Home', 'home', '', 'home', 'home\r\n\r\n', 'home', '0', '0', '0', '1', '2015-01-22 12:28:58', '2015-01-22 06:58:58');

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
  `configurationSocialLink3` varchar(255) NOT NULL COMMENT 'Linkedin Link',
  `configurationSocialLink4` varchar(255) NOT NULL COMMENT 'Google+ Link',
  `configurationSocialLink5` varchar(255) NOT NULL COMMENT 'Pinterest Link',
  `configurationSocialLink6` varchar(255) NOT NULL COMMENT 'Skype Link',
  `configurationPageLimit` int(11) NOT NULL COMMENT 'Admin Paging Limit',
  `configurationDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkConfigurationID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_configurations`
--

INSERT INTO `tbl_configurations` (`pkConfigurationID`, `configurationContact`, `configurationEmail`, `configurationSocialLink1`, `configurationSocialLink2`, `configurationSocialLink3`, `configurationSocialLink4`, `configurationSocialLink5`, `configurationSocialLink6`, `configurationPageLimit`, `configurationDateModified`) VALUES
(1, '+01 888 (000) 1234', 'awoofde@gmail.com', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', 'http://plus.google.com', 'http://www.pinterest.com', 'http://skype.com', 5, '2014-09-09 07:30:39');

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
(9, 'Gift Card', 'Gift Card', 'info@travelogini.com', 'Gift Card', '<p>\r\n	Dear {to_name},<br />\r\n	To activating your account please click on the below link.<br />\r\n	<a href="{account_activation_link}" target="_blank">{account_activation_link}</a><br />\r\n	<br />\r\n	Regards</p>\r\n<p>\r\n	Travelogini</p>\r\n', '2015-01-22 15:20:39', '2015-01-22 09:50:39');

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
(1, 3, '0U1UM7E35L1421928949', 1421928949, 0, '1', '2015-01-22 17:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reviews`
--

CREATE TABLE IF NOT EXISTS `tbl_reviews` (
  `pkReviewID` bigint(20) NOT NULL AUTO_INCREMENT,
  `fkDealID` bigint(20) NOT NULL,
  `fkUserID` bigint(20) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `reviewSubject` varchar(255) NOT NULL,
  `reviewContent` text NOT NULL,
  `reviewStatus` enum('0','1') NOT NULL COMMENT '0=>Approved, 1=>Unapproved',
  `reviewAddDate` int(20) NOT NULL,
  `reviewActionDate` int(20) NOT NULL,
  PRIMARY KEY (`pkReviewID`),
  KEY `fkDealID` (`fkDealID`),
  KEY `fkUserID` (`fkUserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `pkUserID` bigint(20) NOT NULL AUTO_INCREMENT,
  `fkUserLoginID` int(11) NOT NULL,
  `userFirstName` varchar(255) NOT NULL,
  `userLastName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPhone` varchar(255) NOT NULL,
  `userGender` enum('Male','Female') NOT NULL,
  `userDateOfBirth` datetime NOT NULL,
  `userStatus` enum('0','1') NOT NULL,
  `userBillingAddress1` varchar(255) NOT NULL,
  `userBillingAddress2` varchar(255) NOT NULL,
  `userBillingCity` int(11) NOT NULL,
  `userBillingState` int(11) NOT NULL,
  `userBillingCountry` int(11) NOT NULL,
  `userBillingZip` int(8) NOT NULL,
  `userShippingAddress1` varchar(255) NOT NULL,
  `userShippingAddress2` varchar(255) NOT NULL,
  `userShippingCity` int(11) NOT NULL,
  `userShippingState` int(11) NOT NULL,
  `userShippingCountry` int(11) NOT NULL,
  `userShippingZip` int(8) NOT NULL,
  `userBillingPhone` varchar(255) NOT NULL,
  `userShippingPhone` varchar(255) NOT NULL,
  `userAccountActivationToken` varchar(255) NOT NULL,
  `userDateAdded` datetime NOT NULL,
  `userDateModified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkUserID`),
  KEY `fkUserLoginID` (`fkUserLoginID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`pkUserID`, `fkUserLoginID`, `userFirstName`, `userLastName`, `userEmail`, `userPhone`, `userGender`, `userDateOfBirth`, `userStatus`, `userBillingAddress1`, `userBillingAddress2`, `userBillingCity`, `userBillingState`, `userBillingCountry`, `userBillingZip`, `userShippingAddress1`, `userShippingAddress2`, `userShippingCity`, `userShippingState`, `userShippingCountry`, `userShippingZip`, `userBillingPhone`, `userShippingPhone`, `userAccountActivationToken`, `userDateAdded`, `userDateModified`) VALUES
(29, 4, 'SathishKumar', 'S', 'test@test.com', '9994788682', 'Male', '1990-11-14 00:00:00', '1', 'No.31256', 'Old Rangpuri', 6, 5, 2, 34324324, 'No.312', 'Old Rangpuri road', 3, 3, 1, 34324324, '987655623222', '9876554321', '', '2014-10-09 10:55:53', '2015-01-15 06:39:05'),
(33, 5, 'Sathish', 'Kumar', 'sathish.kumar1@mail.vinove.com', '9997845652', 'Male', '2014-11-12 00:00:00', '1', 'Mahipalpur', 'Delhi', 1, 2, 1, 110037, 'Mahipalpur', 'Delhi', 1, 2, 1, 110037, '9994788682', '9994788682', 'MC4zNDI4MzMwMCAxNDIwNDM2NzQxNTRhYTI1MDU1M2I4Mw==', '0000-00-00 00:00:00', '2015-01-15 13:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_login`
--

CREATE TABLE IF NOT EXISTS `tbl_users_login` (
  `pkUserLoginID` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userType` enum('A','C','M') NOT NULL COMMENT 'A=Admin C=Customer M=Merchant',
  `userDateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pkUserLoginID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_users_login`
--

INSERT INTO `tbl_users_login` (`pkUserLoginID`, `userEmail`, `userPassword`, `userType`, `userDateModified`) VALUES
(3, 'sathish.kumar1@mail.vinove.com', 'f654fb63f75721ac69cd01f7bd14aaa6', 'A', '2014-12-24 06:23:15'),
(4, 'test@test.com', 'f654fb63f75721ac69cd01f7bd14aaa6', 'C', '2014-12-16 11:33:00'),
(5, 'sathish.kumar1@mail.vinove.com', 'f654fb63f75721ac69cd01f7bd14aaa6', 'C', '2015-01-05 05:45:41');

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
-- Constraints for table `tbl_password_reset`
--
ALTER TABLE `tbl_password_reset`
  ADD CONSTRAINT `tbl_password_reset_ibfk_1` FOREIGN KEY (`fkUserID`) REFERENCES `tbl_users_login` (`pkUserLoginID`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_reviews`
--
ALTER TABLE `tbl_reviews`
  ADD CONSTRAINT `tbl_reviews_ibfk_1` FOREIGN KEY (`fkUserID`) REFERENCES `tbl_users` (`pkUserID`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_reviews_ibfk_2` FOREIGN KEY (`fkDealID`) REFERENCES `tbl_deals` (`pkDealID`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD CONSTRAINT `tbl_state_ibfk_1` FOREIGN KEY (`fkCountryID`) REFERENCES `tbl_country` (`pkCountryID`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`fkUserLoginID`) REFERENCES `tbl_users_login` (`pkUserLoginID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

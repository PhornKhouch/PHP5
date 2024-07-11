-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 11, 2024 at 02:33 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php5_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

DROP TABLE IF EXISTS `tbl_brand`;
CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `brandid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secdes` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cateid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`brandid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cateid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secdes` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cateid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

DROP TABLE IF EXISTS `tbl_menu`;
CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `menu` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menukh` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inorder` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`ID`, `menu`, `menukh`, `status`, `inorder`) VALUES
(12, 'Computer', '', 'A', 3),
(11, 'Phone', '', 'A', 2),
(10, 'Home', '', 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prddetail`
--

DROP TABLE IF EXISTS `tbl_prddetail`;
CREATE TABLE IF NOT EXISTS `tbl_prddetail` (
  `id` int NOT NULL,
  `des` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prdmasterid` int NOT NULL,
  `inorder` int NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdes` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prdfeature`
--

DROP TABLE IF EXISTS `tbl_prdfeature`;
CREATE TABLE IF NOT EXISTS `tbl_prdfeature` (
  `id` int NOT NULL AUTO_INCREMENT,
  `des` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate` int NOT NULL,
  `brand` int NOT NULL,
  `postdate` date NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inorder` int NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_prdfeature`
--

INSERT INTO `tbl_prdfeature` (`id`, `des`, `cate`, `brand`, `postdate`, `price`, `discount`, `status`, `inorder`, `image`) VALUES
(1, 'test1', 2, 1, '2024-07-04', '15', '10', 'I', 4, '2.jpg'),
(7, 'test', 10, 6, '2024-07-12', '555', '12', 'A', 1, 'shirt2.png'),
(8, 'test', 11, 7, '2024-07-05', '123', '11', 'A', 1, 'shirt4.png'),
(6, 'testing', 12, 7, '2024-07-19', '123', '10', 'A', 1, 'shirt4.png'),
(10, 'testing', 11, 8, '2024-07-12', '555', '12', 'A', 1, 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prdmaster`
--

DROP TABLE IF EXISTS `tbl_prdmaster`;
CREATE TABLE IF NOT EXISTS `tbl_prdmaster` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cateid` int NOT NULL,
  `brandid` int NOT NULL,
  `prdname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitcost` decimal(10,0) NOT NULL,
  `qty` int NOT NULL,
  `isstock` tinyint(1) NOT NULL,
  `stockdate` date NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitprice` decimal(10,0) NOT NULL,
  `discountprice` decimal(10,0) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_prdmaster`
--

INSERT INTO `tbl_prdmaster` (`id`, `cateid`, `brandid`, `prdname`, `des`, `unitcost`, `qty`, `isstock`, `stockdate`, `status`, `remark`, `unitprice`, `discountprice`, `image`) VALUES
(6, 11, 8, 'iphone 14 pro max', 'test', '123', 123, 0, '2024-07-06', 'A', '', '123', '123', 'shirt.png'),
(7, 12, 9, 'fvfgfdg', 'fstetsf', '123', 123, 1, '2024-07-13', 'A', '', '123', '123', 'Phnom-Penh.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slideprd`
--

DROP TABLE IF EXISTS `tbl_slideprd`;
CREATE TABLE IF NOT EXISTS `tbl_slideprd` (
  `id` int NOT NULL AUTO_INCREMENT,
  `des` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate` int NOT NULL,
  `brand` int NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createon` datetime NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_submenu`
--

DROP TABLE IF EXISTS `tbl_submenu`;
CREATE TABLE IF NOT EXISTS `tbl_submenu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `submenu` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submenukh` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inorder` int NOT NULL,
  `menuid` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_submenu`
--

INSERT INTO `tbl_submenu` (`id`, `submenu`, `submenukh`, `status`, `inorder`, `menuid`) VALUES
(8, 'Vivo123', 'KH123', 'A', 1, 12),
(7, 'DELL', 'KH123', 'A', 1, 12),
(6, 'testing12312345', 'KH123', 'A', 1, 12),
(9, 'Apple', '', 'A', 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `inorder` int NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

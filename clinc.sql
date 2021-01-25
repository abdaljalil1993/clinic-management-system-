-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2019 at 11:25 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinc`
--

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

DROP TABLE IF EXISTS `dates`;
CREATE TABLE IF NOT EXISTS `dates` (
  `datesid` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0',
  `did` int(11) NOT NULL,
  PRIMARY KEY (`datesid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`datesid`, `day`, `time`, `state`, `did`) VALUES
(4, 'friday', '1-2', 0, 1),
(5, 'friday', '1-2', 0, 1),
(6, 'friday', '1-2', 0, 1),
(7, 'friday', '1-2', 0, 1),
(8, 'friday', '1-2', 0, 1),
(9, 'saturday', '2-3', 0, 7),
(10, 'sunday', '1-2', 0, 9),
(11, 'monday', '2-3', 0, 9),
(12, 'thursday', '1-3', 0, 9),
(13, 'wednesday', '10:30 - 11', 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `docid` int(11) NOT NULL AUTO_INCREMENT,
  `docname` varchar(255) NOT NULL,
  `docsection` varchar(255) NOT NULL,
  `room` int(11) NOT NULL,
  `docpass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `duid` int(11) NOT NULL,
  PRIMARY KEY (`docid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`docid`, `docname`, `docsection`, `room`, `docpass`, `img`, `duid`) VALUES
(9, 'fadi', 'eyee', 3, 'fadi', 'DSC_8398.jpg', 0),
(10, 'f', 'f', 5, 'f', 'IMAG0142_1_1.jpg', 0),
(12, 'GG', 'GG', 5, 'GG', 'IMAG0142_1_1.jpg', 8),
(13, 'shadi', '1', 5, '1', 'IMG-20171105-WA0028.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `dt`
--

DROP TABLE IF EXISTS `dt`;
CREATE TABLE IF NOT EXISTS `dt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docid` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pat`
--

DROP TABLE IF EXISTS `pat`;
CREATE TABLE IF NOT EXISTS `pat` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `ppass` varchar(255) NOT NULL,
  `pstatus` text NOT NULL,
  `docid` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `docreport` text NOT NULL,
  `rid` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pat`
--

INSERT INTO `pat` (`pid`, `pname`, `ppass`, `pstatus`, `docid`, `time`, `day`, `docreport`, `rid`) VALUES
(1, 'ali', '111', 'xcvxcvxcvx', 4, '1-2', 'saturday', 'ww', 3),
(2, 'ali', '111', 'klsncljsnbxcjklsn', 7, '1-2', 'wednesday', 'finish and go', 6),
(3, 'ali', '111', '', 7, '', 'saturday', 'bad state', 5),
(4, 'ali', '111', '', 7, '', 'saturday', 'head attack', 5),
(5, 'ali', '111', 'dangerous', 9, '2-3', 'monday', 'no issu evry thing is good', 5),
(6, 'ali', '111', 'normal issu', 9, '', 'wednesday', 'oooo', 5),
(7, 'ff', '123', 'sadxasasd', 7, '2-3', 'saturday', 'imergency', 5);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `ppass` varchar(255) NOT NULL,
  `pstatus` text NOT NULL,
  `docid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `docreport` text NOT NULL,
  `day` varchar(255) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pname`, `ppass`, `pstatus`, `docid`, `rid`, `time`, `docreport`, `day`) VALUES
(1, 'ali', '111', 'e', 7, 6, '12-1', '', 'saturday');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(255) NOT NULL,
  `des` text NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rid`, `rname`, `des`) VALUES
(5, 'heart', 'care of heart break'),
(3, 'eyes', ''),
(7, 'bones', 'we take care of broken bones'),
(6, 'sssssssssss', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `type`) VALUES
(1, 'fadi', '123', 1),
(2, 'ali', '111', 3),
(3, 'sad', '55', 3),
(4, 'f', 'f', 2),
(5, 'a', 'a', 2),
(6, 'r', 'r', 2),
(7, 'bb', 'bb', 2),
(8, 'GG', 'GG', 2),
(9, 'shadi', '1', 2),
(10, 'ali', '111', 3),
(11, 'ff', '123', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

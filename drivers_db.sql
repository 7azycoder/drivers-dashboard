-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2016 at 11:34 PM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `drivers_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `contact1` varchar(15) NOT NULL,
  `contact2` varchar(15) DEFAULT NULL,
  `email1` varchar(50) NOT NULL,
  `email2` varchar(50) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `joined` datetime NOT NULL,
  `group` int(11) NOT NULL,
  `docs` varchar(50) DEFAULT NULL,
  `profileImage` varchar(50) DEFAULT NULL,
  `blank1` int(11) DEFAULT NULL,
  `blank2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `username`, `address`, `contact1`, `contact2`, `email1`, `email2`, `password`, `salt`, `joined`, `group`, `docs`, `profileImage`, `blank1`, `blank2`) VALUES
(16, 'Youvraaj Singh', 'Youvraaj', 'Ford Street', '82282828282', '', 'youvraaj@gmail.com', '', 'cd0f6be6cd4e4da63dde87732137d98ceb1577c51893b1e0675279833e939dc2', 'yú''úBŒ²´œ”hd!pè?è±G,ÂÝ?€™^"', '2016-01-09 05:37:28', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drivers_session`
--

CREATE TABLE IF NOT EXISTS `drivers_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hash` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `drivers_session`
--

INSERT INTO `drivers_session` (`id`, `user_id`, `hash`) VALUES
(3, 15, '183f0a226feb56c4a609ff2e81f3f07025ecec878933f8261c6354c5aac93ca4');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard user', ''),
(2, 'Administrator', '{\r\n"admin": 1,\r\n"moderator": 1\r\n}');

-- --------------------------------------------------------

--
-- Table structure for table `reg_code`
--

CREATE TABLE IF NOT EXISTS `reg_code` (
  `id` int(11) NOT NULL,
  `code` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_code`
--

INSERT INTO `reg_code` (`id`, `code`) VALUES
(1, '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

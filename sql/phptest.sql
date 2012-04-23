-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2012 at 10:15 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phptest`
--

-- --------------------------------------------------------

--
-- Table structure for table `logged_api_calls`
--

CREATE TABLE IF NOT EXISTS `logged_api_calls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `result` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `logged_api_calls`
--


-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `content`, `created_at`) VALUES
(1, '<img src="/images/dog.jpg" align="left" alt="nice doggie" />\r\n                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>\r\n                    Sed eget velit a mauris tincidunt vestibulum adipiscing sit amet leo. Cras et risus eget augue venenatis facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla mattis malesuada vestibulum. \r\n                    <h3>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </h3>\r\n                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quam metus, commodo id sollicitudin eu, ullamcorper et erat', '2012-04-11 12:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `subscribers`
--


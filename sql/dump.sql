SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = 'SYSTEM';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `phptest` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `phptest`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `posts` (`id`, `content`, `created_at`) VALUES
(1,	'<img src=\"images/dog.jpg\" align=\"left\" alt=\"nice doggie\" />\n                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>\n                    Sed eget velit a mauris tincidunt vestibulum adipiscing sit amet leo. Cras et risus eget augue venenatis facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla mattis malesuada vestibulum. \n                    <h3>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </h3>\n                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quam metus, commodo id sollicitudin eu, ullamcorper et erat',	'2012-04-11 12:13:27');

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

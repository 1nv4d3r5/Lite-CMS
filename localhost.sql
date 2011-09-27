-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2011 at 12:23 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--
DROP DATABASE `cms`;
CREATE DATABASE `cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `summary` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `context` text CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `summary`, `context`, `date`) VALUES
(1, 'Deneme Başlığı', 'Deneme Özeti', 'Deneme İçeriğin devamı', '2011-09-27 10:39:39'),
(2, 'Deneme Başlığı 2', 'Denene Özeti 2', 'Deneme içerik', '2011-09-27 11:05:27'),
(3, 'Deneme Başlığı 3', 'Deneme Özeti 3', 'Deneme Metni 3', '2011-09-27 11:20:20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

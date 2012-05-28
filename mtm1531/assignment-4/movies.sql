-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2012 at 07:03 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sidh0050`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `director_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `actor_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `actress_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  PRIMARY KEY (`movie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `director_name`, `actor_name`, `actress_name`, `release_date`) VALUES
(1, 'three idiots', 'joy atul', 'aamir khan', 'kareena kapoor', '2000-03-17'),
(2, 'kyunki', 'imtiaz ali', 'karan', 'aishwarya', '2003-05-14'),
(3, 'jab we met', 'imtiaz ali', 'amisha', 'amir', '2012-04-23'),
(4, 'kabhi alvida na kehna', 'manmohan', 'shahrukh', 'lara dutta', '2009-03-26'),
(5, 'kabhi alvida na kehna', 'yash', 'shahid', 'jennifer', '2010-04-27'),
(6, 'tere naal love ho gya', 'yash chopra', 'ritesh', 'hrithik', '2008-08-18'),
(7, 'chupke chupke', 'yashi', 'kapoor', 'sania', '2005-04-14');

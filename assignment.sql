-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2013 at 10:52 PM
-- Server version: 5.5.32-0ubuntu0.12.04.1
-- PHP Version: 5.3.10-1ubuntu3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `user_id`, `filename`) VALUES
(6, 2, '523c5fa217af1-523c5fa217b31-523c5fa217b6e.pdf'),
(7, 2, '523c5fa217af1-523c5fa217b31-523c5fa217b6e.jpg'),
(8, 2, '523c5fa38e688-523c5fa38e6cc-523c5fa38e70d.pdf'),
(9, 2, '523c5fa38e688-523c5fa38e6cc-523c5fa38e70d.jpg'),
(10, 2, '523c5fa41a8d2-523c5fa41a914-523c5fa41a956.zip'),
(11, 3, '523c682a8c6ac-523c682a8c6f3-523c682a8c731.pdf'),
(12, 3, '523c682a8c6ac-523c682a8c6f3-523c682a8c731.jpg'),
(13, 3, '523c682af3005-523c682af3050-523c682af3092.pdf'),
(14, 3, '523c682af3005-523c682af3050-523c682af3092.jpg'),
(15, 3, '523c682b80743-523c682b80785-523c682b807c7.pdf'),
(16, 3, '523c682b80743-523c682b80785-523c682b807c7.jpg'),
(17, 3, '523c682d043d5-523c682d04418-523c682d0445a.zip');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `add` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `dob`, `add`, `email`, `mobile`) VALUES
(2, 'adsf', '09/10/2013', 'adsfasd ', 'sdfads@ldkfasd.com', '8434875439'),
(3, 'Mandeep Singh Nain', '05/16/2013', 'adsfdsa gfd sdfg ', 'mandeepsinghn@gmail.com', '4398502394');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

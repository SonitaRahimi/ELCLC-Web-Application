-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2018 at 08:02 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elclc`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `pnumber` int(25) NOT NULL,
  `email` varchar(45) COLLATE utf8_persian_ci NOT NULL,
  `password1` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `password2` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `pnumber`, `email`, `password1`, `password2`) VALUES
(2, 'parisa jan', 'Amiry', 798434242, 'parisa@gmail.com', '123abc', '123abc'),
(3, 'Hadisa', 'amiri', 795435345, 'amiri@gmail.com', '123abc', '123abc'),
(4, 'Sonita', 'rahimi', 79443643, 'rahimi@gmail.com', '2468', '2468'),
(5, 'Sabria', 'Hosaini', 745935345, 'hosaini234@gmail.com', '13579', '13579'),
(6, 'ahmad', 'ahmadi', 799435345, 'ahmadi@gmail.com', '123456', '123456'),
(7, 'karim', 'karimi', 788945345, 'karimi@gmail.com', 'abc123', 'abc123'),
(8, 'fatima', 'rasuli', 788934345, 'rasuli@gmail.com', '123', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

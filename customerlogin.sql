-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2016 at 08:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hod-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin`
--

CREATE TABLE IF NOT EXISTS `customerlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `pro_pic` varchar(250) NOT NULL,
  `temp_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`id`, `username`, `email`, `password`, `image_url`, `pro_pic`, `temp_pass`) VALUES
(1, 'mythree', 'mythree@gmail.com', 'mythree', 'http://placehold.it/50x50', '', ''),
(2, 'arunadj', 'arunadilshanjayathilake@yahoo.', '123', 'http://placehold.it/50x50', '', ''),
(3, 'thila', 'thila@yahoo.com', 'thila', 'http://placehold.it/50x50', '', ''),
(6, 'dad', 'dad@yahoo.com', 'df3939f119', 'http://placehold.it/50x50', '', ''),
(7, 'jaya', 'jaya@gmail.com', 'ce9689abde', 'http://placehold.it/50x50', '', ''),
(8, 'Tharindu', 'tharindu.ishanka1994@gmail.com', 'tishanka', '', 'uploads/user.png', ''),
(9, 'ishanka', 'tharaindu.ishanka@gmail.com', 'royal', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

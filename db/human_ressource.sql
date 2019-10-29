-- phpMyAdmin SQL Dump
-- version 2.11.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2019 at 09:24 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `human_ressource`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `fname`, `lname`) VALUES
(1, 'admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL default 'employee',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `email`, `fname`, `lname`, `phone`, `gender`, `position`, `username`, `password`, `usertype`) VALUES
(1, 'rachidmusa2020@gmail.com', 'musa', 'rachid', '0781405651', 'm', 'm', 'm', 'm', 'employee'),
(2, 'rachidmusa2020@gmail.comh', 'musa', 'rachid', '781405651', 'musa rachid', 'h', 'musa', 'musa', 'human_resource'),
(4, 'kim@kim.com', 'kim', 'kim', '0789170894', 'male', 'security analyst', 'kim', 'kim', 'employee'),
(8, 'byagutangaza@gmail.com', 'hllo', 'warld', '078838883', 'Female', 'cyber-security', 'Hello', 'Hello', 'employee'),
(9, 'yves@gmail.com', 'f', 'y', '555', 'm', 'r', 'yves', 'yves', 'employee'),
(10, 'himbaza@gmail.com', 'h', 'h', '888', 'male', 'hhh', 'himbaza', 'himbaza', 'admin'),
(11, '', '', '', '', '', '', '', '', ''),
(12, 'noela', 'noela', 'n', '567', 'f', 't', 'noela', 'noela', 'employee'),
(13, 'hr@hr.com', 'byiringiro', 'yves', '0789170894', 'male', 'cyber', 'cyber', 'cyber', 'human_resource');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `vacancy_id` int(255) NOT NULL auto_increment,
  `id` int(9) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `aproved` varchar(255) NOT NULL default '0',
  PRIMARY KEY  (`vacancy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`vacancy_id`, `id`, `reason`, `start`, `end`, `aproved`) VALUES
(1, 4, 'i am sick', '2019-09-18', '2019-09-19', '1'),
(2, 4, 'I am sick', '2019-09-19', '2019-09-28', '1'),
(4, 4, 'hhhh', '2019-09-13', '2019-09-20', '1'),
(5, 9, 'rr', '0045-12-05', '0033-03-03', '1'),
(6, 9, 'fgfyfu', '2019-09-10', '2019-09-10', '1'),
(7, 9, 'ffgg', '2019-09-17', '2021-11-18', '1'),
(9, 0, 'i want to sleep', '2019-09-11', '2019-09-21', '0'),
(10, 0, 'xxx', '2019-09-20', '2019-09-27', '0'),
(11, 9, 'I dont want to work', '2019-09-26', '2019-09-28', '0');

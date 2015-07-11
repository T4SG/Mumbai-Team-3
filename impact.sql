-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2015 at 03:39 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `impact`
--

-- --------------------------------------------------------

--
-- Table structure for table `economic`
--

CREATE TABLE IF NOT EXISTS `economic` (
  `avg_household_income` int(100) NOT NULL,
  `employment_rise` int(100) NOT NULL,
  `villagers_sheltering` int(100) NOT NULL,
  `cost_per_child` int(100) NOT NULL,
  `volunteer_hours` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hhf`
--

CREATE TABLE IF NOT EXISTS `hhf` (
  `no_of_schools` int(100) NOT NULL,
  `region` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `name` varchar(200) NOT NULL,
  `institute` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `region` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `date_of_foundation` date NOT NULL,
  `no_of_girls` int(100) NOT NULL,
  `no_of_boys` int(100) NOT NULL,
  `no_of_teachers` int(100) NOT NULL,
  `literacy_rate` int(100) NOT NULL,
  `computer_literacy` int(100) NOT NULL,
  `attendance` int(100) NOT NULL,
  `no_of_books` int(100) NOT NULL,
  `no_of_computers` int(100) NOT NULL,
  `no_of_smartphones` int(100) NOT NULL,
  `past_no_of_students` int(100) NOT NULL,
  `past_literacy_rate` int(100) NOT NULL,
  `primary_total` int(100) NOT NULL,
  `secondary_total` int(100) NOT NULL,
  `dropouts` int(100) NOT NULL,
  `area` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school`
--
ALTER TABLE `school`
 ADD PRIMARY KEY (`school_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

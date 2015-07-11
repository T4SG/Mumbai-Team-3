-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2015 at 08:32 PM
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
  `school_id` int(11) NOT NULL,
  `report_date` date NOT NULL,
  `avg_household_income` int(100) NOT NULL,
  `employment_rise` int(100) NOT NULL,
  `villagers_sheltering` int(100) NOT NULL,
  `volunteer_hours` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `economic`
--

INSERT INTO `economic` (`school_id`, `report_date`, `avg_household_income`, `employment_rise`, `villagers_sheltering`, `volunteer_hours`) VALUES
(211, '2012-08-07', 8, 5, 100, 35),
(212, '2013-01-05', 11, 8, 120, 55),
(213, '2013-01-05', 6, 4, 160, 40),
(214, '2014-03-11', 11, 4, 50, 20);

-- --------------------------------------------------------

--
-- Table structure for table `hhf`
--

CREATE TABLE IF NOT EXISTS `hhf` (
  `no_of_schools` int(100) NOT NULL,
  `region` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hhf`
--

INSERT INTO `hhf` (`no_of_schools`, `region`) VALUES
(1, 'USA'),
(7, 'Mexico'),
(7, 'Haiti'),
(1, 'Columbia'),
(9, 'Peru'),
(1, 'Chile'),
(2, 'Thailand'),
(2, 'Philippines'),
(82, 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `name` varchar(200) NOT NULL,
  `institute` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `salt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `institute`, `email`, `user_id`, `password`, `salt`) VALUES
('user1', '211', 'user1@user1.com', 'user1', 'user1', ''),
('user2', '212', 'user2@user2.com', 'user2', 'user2', ''),
('user3', '213', 'user3@user3.com', 'user3', 'user3', ''),
('user4', '214', 'user4@user4.com', 'user4', 'user4', '');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `school_id` int(11) NOT NULL,
  `date_of_entry` date NOT NULL,
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
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `date_of_entry`, `school_name`, `address`, `region`, `country`, `date_of_foundation`, `no_of_girls`, `no_of_boys`, `no_of_teachers`, `literacy_rate`, `computer_literacy`, `attendance`, `no_of_books`, `no_of_computers`, `no_of_smartphones`, `past_no_of_students`, `past_literacy_rate`, `primary_total`, `secondary_total`, `dropouts`, `area`) VALUES
(211, '2011-12-05', 'Cempaka Putih ', 'Indonesia', 'Indonesia', 'Indonesia', '2011-04-10', 34, 65, 12, 48, 23, 55, 65, 6, 2, 170, 55, 99, 0, 0, 1350),
(211, '2012-06-05', 'Cempaka Putih ', 'Indonesia', 'Indonesia', 'Indonesia', '2011-04-10', 45, 72, 17, 53, 32, 70, 65, 6, 2, 170, 55, 117, 0, 0, 1350),
(211, '2012-12-05', 'Cempaka Putih ', 'Indonesia', 'Indonesia', 'Indonesia', '2011-04-10', 55, 81, 23, 57, 38, 74, 65, 8, 2, 170, 55, 136, 0, 0, 1350),
(211, '2013-12-05', 'Cempaka Putih ', 'Indonesia', 'Indonesia', 'Indonesia', '2011-04-10', 62, 87, 26, 62, 43, 76, 72, 9, 2, 170, 55, 149, 0, 0, 1350),
(211, '2014-12-05', 'Cempaka Putih ', 'Indonesia', 'Indonesia', 'Indonesia', '2011-04-10', 69, 92, 35, 70, 48, 81, 72, 14, 2, 170, 55, 161, 0, 0, 1350),
(212, '2012-06-08', 'Institution Scholaire MUSPAN', '50,Rue des palmiers prolongee', 'Delmas', 'Haiti', '2012-01-10', 107, 145, 29, 43, 19, 57, 72, 17, 4, 310, 55, 99, 54, 17, 3000),
(212, '2012-12-08', 'Institution Scholaire MUSPAN', '50,Rue des palmiers prolongee', 'Delmas', 'Haiti', '2012-01-10', 142, 167, 33, 46, 23, 59, 77, 19, 4, 310, 55, 215, 94, 12, 3000),
(212, '2013-12-08', 'Institution Scholaire MUSPAN', '50,Rue des palmiers prolongee', 'Delmas', 'Haiti', '2012-01-10', 165, 180, 39, 49, 27, 68, 77, 26, 4, 310, 55, 240, 105, 9, 3000),
(212, '2014-12-08', 'Institution Scholaire MUSPAN', '50,Rue des palmiers prolongee', 'Delmas', 'Haiti', '2012-01-10', 182, 191, 46, 56, 29, 72, 80, 29, 5, 310, 55, 260, 113, 6, 3000),
(213, '2013-09-08', 'Tegal Maja', '49, Lombok,Utaara district', 'Indonesia', 'Indonesia', '2013-02-10', 47, 68, 34, 54, 34, 77, 80, 31, 6, 297, 55, 115, 0, 13, 3000),
(213, '2014-02-09', 'Tegal Maja', '49, Lombok,Utaara district', 'Indonesia', 'Indonesia', '2013-02-10', 52, 76, 36, 58, 39, 82, 80, 34, 8, 297, 55, 128, 0, 8, 3000),
(213, '2014-07-09', 'Tegal Maja', '49, Lombok,Utaara district', 'Indonesia', 'Indonesia', '2013-02-10', 52, 76, 36, 58, 39, 82, 80, 34, 8, 297, 55, 128, 0, 8, 3000),
(214, '2007-07-09', 'Chao Thai Mai', 'Phang Nga', 'Thailand', 'Thailand', '2006-02-10', 31, 42, 3, 54, 35, 70, 20, 0, 0, 90, 78, 73, 0, 4, 1250),
(214, '2009-08-09', 'Chao Thai Mai', 'Phang Nga', 'Thailand', 'Thailand', '2006-02-10', 41, 56, 5, 71, 42, 79, 35, 0, 0, 90, 78, 97, 0, 4, 1250),
(214, '2011-05-12', 'Chao Thai Mai', 'Phang Nga', 'Thailand', 'Thailand', '2006-02-10', 49, 61, 6, 76, 45, 80, 35, 0, 0, 90, 78, 110, 0, 2, 1250),
(214, '2013-05-12', 'Chao Thai Mai', 'Phang Nga', 'Thailand', 'Thailand', '2006-02-10', 55, 68, 6, 81, 48, 82, 45, 2, 0, 90, 78, 123, 0, 3, 1250),
(214, '2015-03-08', 'Chao Thai Mai', 'Phang Nga', 'Thailand', 'Thailand', '2006-02-10', 61, 73, 7, 85, 51, 85, 45, 3, 0, 90, 78, 134, 0, 2, 1250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `economic`
--
ALTER TABLE `economic`
 ADD PRIMARY KEY (`school_id`,`report_date`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
 ADD PRIMARY KEY (`school_id`,`date_of_entry`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 01:37 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internships`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_opportunities`
--

CREATE TABLE `assigned_opportunities` (
  `opportunityID` smallint(6) DEFAULT NULL,
  `internID` smallint(6) DEFAULT NULL,
  `date_selected` date DEFAULT NULL,
  `date_approved` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interns`
--

CREATE TABLE `interns` (
  `internID` smallint(6) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password_md5` varchar(32) DEFAULT NULL,
  `first` varchar(40) DEFAULT NULL,
  `last` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interns`
--

INSERT INTO `interns` (`internID`, `email`, `password_md5`, `first`, `last`) VALUES
(2, 'mbuckler01@aol.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Mark', 'Buckler'),
(3, 'haikuteigh@aol.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Julie', 'Buckler');

-- --------------------------------------------------------

--
-- Table structure for table `opportunities`
--

CREATE TABLE `opportunities` (
  `opportunityID` smallint(6) NOT NULL,
  `company` varchar(40) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `position` varchar(30) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opportunities`
--

INSERT INTO `opportunities` (`opportunityID`, `company`, `city`, `start_date`, `end_date`, `position`, `description`) VALUES
(1, 'Ace Technologies', 'Boston', '2018-06-20', '2020-08-31', 'Programmer', 'Assist in a project to convert an online application from CGI to PHP.'),
(2, 'Hometown Bakery', 'Cambridge', '2018-09-15', '2020-12-01', 'Web Developer', 'Implement a Web site for purchasing pastries over the Internet.'),
(3, '123 Accountants, Inc.', 'Boston', '2018-07-01', '2020-09-01', 'Application Developer', 'Develop a Web-based In/Out board for our intranet.'),
(4, 'United Charities', 'Newton', '2018-06-25', '2020-09-02', 'Web Programmer', 'Assist in the development of a PHP sponsorship form for a 5K road race.'),
(5, 'Technology Manufacturing, Inc.', 'Avon', '2020-08-25', '2012-12-20', 'Web Developer', 'Assist in implementing an online documentation library for product manuals.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `interns`
--
ALTER TABLE `interns`
  ADD PRIMARY KEY (`internID`);

--
-- Indexes for table `opportunities`
--
ALTER TABLE `opportunities`
  ADD PRIMARY KEY (`opportunityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `interns`
--
ALTER TABLE `interns`
  MODIFY `internID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `opportunities`
--
ALTER TABLE `opportunities`
  MODIFY `opportunityID` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

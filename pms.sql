-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2015 at 02:27 PM
-- Server version: 5.5.40
-- PHP Version: 5.3.10-1ubuntu3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE IF NOT EXISTS `applied` (
  `USN` varchar(20) NOT NULL DEFAULT '',
  `CNAME` varchar(20) NOT NULL DEFAULT '',
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`USN`,`CNAME`),
  KEY `CNAME` (`CNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`USN`, `CNAME`, `DATE`) VALUES
('1RV13IS403', 'Asus', '2015-04-05'),
('1RV13IS409', 'Asus', '2015-04-05'),
('1RV13IS409', 'Betsol', '2015-11-17'),
('1RV13IS409', 'Intel', '2015-04-06'),
('1RV13IS410', 'Asus', '2015-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `beligible`
--

CREATE TABLE IF NOT EXISTS `beligible` (
  `CNAME` varchar(20) DEFAULT NULL,
  `BRANCH` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beligible`
--

INSERT INTO `beligible` (`CNAME`, `BRANCH`) VALUES
('Infosys', 'ise'),
('Infosys', 'cse'),
('Infosys', 'ece'),
('Infosys', 'eee'),
('Infosys', 'me'),
('Infosys', 'civ'),
('Infosys', 'ise'),
('Infosys', 'cse'),
('Infosys', 'tc'),
('Infosys', 'ise'),
('Infosys', 'cse'),
('Infosys', 'ece'),
('Accenture', 'ise'),
('Accenture', 'cse'),
('Accenture', 'ise'),
('Accenture', 'cse'),
('TCS', 'ise'),
('TCS', 'cse'),
('McAffe', 'ise'),
('McAffe', 'cse'),
('McAffe', 'ece'),
('Asus', 'ise'),
('Asus', 'cse'),
('Asus', 'ece'),
('Asus', 'tc'),
('Asus', 'it'),
('Asus', 'eee'),
('Intel', 'ise'),
('Intel', 'cse'),
('Intel', 'ece'),
('CISCO', 'ise'),
('CISCO', 'cse'),
('CISCO', 'ece'),
('CISCO', 'tc'),
('CISCO', 'it'),
('McAffe', 'ise'),
('McAffe', 'cse'),
('McAffe', 'ece'),
('TCS', 'ise'),
('TCS', 'cse'),
('TCS', 'ece'),
('IBM', 'ise'),
('IBM', 'cse'),
('IBM', 'ece'),
('IBM', 'tc'),
('IBM', 'ise'),
('IBM', 'cse'),
('IBM', 'ece'),
('IBM', 'tc'),
('Persistent', 'ise'),
('Persistent', 'cse'),
('Betsol', 'ise'),
('Betsol', 'cse'),
('Betsol', 'ece'),
('Zynga', 'ise'),
('Zynga', 'cse'),
('Zynga', 'ise'),
('Zynga', 'cse'),
('Zynga', 'ise'),
('Zynga', 'cse'),
('Informatica', 'ise'),
('Informatica', 'cse'),
('Informatica', 'ece'),
('Informatica', 'tc'),
('Informatica', 'it'),
('Intel', 'ise'),
('Intel', 'cse'),
('Intel', 'ece'),
('Intel', 'tc'),
('Intel', 'it'),
('Inmobi', 'ise'),
('Inmobi', 'cse'),
('VMware', 'ise'),
('VMware', 'cse'),
('VMware', 'ece'),
('Oracle', 'ise'),
('Oracle', 'cse'),
('Oracle', 'ece'),
('I&V compact', 'ise'),
('I&V compact', 'cse'),
('I&V compact', 'ece');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `BRANCH` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`BRANCH`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `CNAME` varchar(20) NOT NULL DEFAULT '',
  `PACKAGE` double DEFAULT NULL,
  `GPACUTOFF` decimal(10,2) DEFAULT NULL,
  `TENTHCUTOFF` decimal(10,2) DEFAULT NULL,
  `TWELTHCUTOFF` decimal(10,2) DEFAULT NULL,
  `DIPCUTOFF` decimal(10,2) DEFAULT NULL,
  `LASTDATEREG` varchar(50) DEFAULT NULL,
  `SPL` varchar(30) NOT NULL,
  PRIMARY KEY (`CNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CNAME`, `PACKAGE`, `GPACUTOFF`, `TENTHCUTOFF`, `TWELTHCUTOFF`, `DIPCUTOFF`, `LASTDATEREG`, `SPL`) VALUES
('Asus', 5, 7.00, 70.00, 70.00, 70.00, '2015-04-07', ''),
('Betsol', 4, 7.00, 65.00, 65.00, 70.00, '2015-11-18', ''),
('CISCO', 10, 7.75, 60.00, 60.00, 70.00, '2015-05-03', ''),
('I&V compact', 13, 7.50, 60.00, 60.00, 70.00, '2015-11-30', ''),
('IBM', 5, 7.50, 60.00, 60.00, 70.00, '2015-05-08', ''),
('Informatica', 6.5, 8.00, 60.00, 60.00, 70.00, '2015-11-30', ''),
('Infosys', 3.5, 7.00, 70.00, 70.00, 70.00, '2015-04-04', ''),
('Inmobi', 16.5, 8.50, 60.00, 60.00, 70.00, '2015-12-10', ''),
('Intel', 10, 7.00, 70.00, 70.00, 7.00, '2015-04-06', ''),
('McAffe', 10, 7.70, 60.00, 60.00, 70.00, '2015-04-03', ''),
('Oracle', 4.75, 7.50, 60.00, 60.00, 70.00, '2015-11-30', ''),
('Persistent', 3.5, 7.00, 70.00, 70.00, 70.00, '2015-11-15', ''),
('TCS', 3.5, 7.50, 60.00, 60.00, 70.00, '2015-05-01', ''),
('VMware', 12, 7.00, 60.00, 60.00, 70.00, '2015-12-7', ''),
('Zynga', 10, 7.50, 75.00, 75.00, 75.00, '2015-12-04', 'Java');

-- --------------------------------------------------------

--
-- Table structure for table `dateofvisit`
--

CREATE TABLE IF NOT EXISTS `dateofvisit` (
  `CNAME` varchar(20) NOT NULL DEFAULT '',
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`CNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dateofvisit`
--

INSERT INTO `dateofvisit` (`CNAME`, `DATE`) VALUES
('Asus', '2015-04-08'),
('Betsol', '2015-11-19'),
('CISCO', '2015-05-05'),
('I&V compact', '2015-12-01'),
('IBM', '2015-05-10'),
('Informatica', '2015-12-01'),
('Infosys', '2015-04-05'),
('Inmobi', '2015-12-15'),
('Intel', '2015-04-07'),
('McAffe', '2015-04-04'),
('Oracle', '2015-12-01'),
('Persistent', '2015-11-15'),
('TCS', '2015-05-02'),
('VMware', '2015-12-11'),
('Zynga', '2015-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `internapplied`
--

CREATE TABLE IF NOT EXISTS `internapplied` (
  `USN` varchar(20) NOT NULL DEFAULT '',
  `CNAME` varchar(20) NOT NULL DEFAULT '',
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`USN`,`CNAME`),
  KEY `CNAME` (`CNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `interndov`
--

CREATE TABLE IF NOT EXISTS `interndov` (
  `CNAME` varchar(20) NOT NULL DEFAULT '',
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`CNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interndov`
--

INSERT INTO `interndov` (`CNAME`, `DATE`) VALUES
('Asus', '2015-05-04'),
('CISCO', '2015-05-08'),
('Infosys', '2015-01-19'),
('Oracle', '2015-12-01'),
('VMware', '2015-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `internjp`
--

CREATE TABLE IF NOT EXISTS `internjp` (
  `CNAME` varchar(20) NOT NULL DEFAULT '',
  `JPROFILE` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`CNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internjp`
--

INSERT INTO `internjp` (`CNAME`, `JPROFILE`) VALUES
('Asus', 'developer'),
('CISCO', 'network adminstrator'),
('Infosys', 'tester'),
('Oracle', 'Testing'),
('VMware', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE IF NOT EXISTS `internship` (
  `CNAME` varchar(20) NOT NULL DEFAULT '',
  `GPACUTOFF` decimal(10,2) DEFAULT NULL,
  `TENTHCUTOFF` decimal(10,2) DEFAULT NULL,
  `TWELTHCUTOFF` decimal(10,2) DEFAULT NULL,
  `DIPCUTOFF` decimal(10,2) DEFAULT NULL,
  `LASTDATEREG` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`CNAME`, `GPACUTOFF`, `TENTHCUTOFF`, `TWELTHCUTOFF`, `DIPCUTOFF`, `LASTDATEREG`) VALUES
('Asus', 7.00, 65.00, 65.00, 65.00, '2015-05-03'),
('CISCO', 7.00, 60.00, 60.00, 65.00, '2015-05-07'),
('Infosys', 6.00, 60.00, 60.00, 60.00, '2015-04-18'),
('Oracle', 7.00, 60.00, 60.00, 70.00, '2015-11-30'),
('VMware', 7.50, 60.00, 60.00, 70.00, '2015-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `jobprofile`
--

CREATE TABLE IF NOT EXISTS `jobprofile` (
  `CNAME` varchar(20) NOT NULL DEFAULT '',
  `JPROFILE` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`CNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobprofile`
--

INSERT INTO `jobprofile` (`CNAME`, `JPROFILE`) VALUES
('Asus', 'developer'),
('Betsol', 'developer'),
('CISCO', 'Developer'),
('I&V compact', 'Developer'),
('IBM', 'Tester'),
('Informatica', 'Developer'),
('Infosys', 'developer'),
('Inmobi', 'Developer'),
('Intel', 'system engineer'),
('McAffe', 'developer'),
('Oracle', 'Management'),
('Persistent', 'developer'),
('TCS', 'Developer'),
('VMware', 'Developer'),
('Zynga', 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `USN` varchar(20) NOT NULL DEFAULT '',
  `PASWORD` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USN`, `PASWORD`) VALUES
('1RV13IS406', '4df1deae37798f560e8b424575af4f97');

-- --------------------------------------------------------

--
-- Table structure for table `spc`
--

CREATE TABLE IF NOT EXISTS `spc` (
  `USN` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spc`
--

INSERT INTO `spc` (`USN`) VALUES
('1RV13IS406');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `NAME` varchar(20) DEFAULT NULL,
  `USN` varchar(20) NOT NULL DEFAULT '',
  `BRANCH` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `PASWORD` varchar(100) DEFAULT NULL,
  `PHONE` decimal(11,0) DEFAULT NULL,
  `CGPA` decimal(10,2) DEFAULT NULL,
  `TENTH` decimal(10,2) DEFAULT NULL,
  `TWELTH` decimal(10,2) DEFAULT NULL,
  `DIP` decimal(10,2) DEFAULT NULL,
  `SPL` varchar(30) NOT NULL,
  PRIMARY KEY (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`NAME`, `USN`, `BRANCH`, `EMAIL`, `PASWORD`, `PHONE`, `CGPA`, `TENTH`, `TWELTH`, `DIP`, `SPL`) VALUES
('', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0.00, 0.00, 0.00, NULL, ''),
('Ullas Jain', '1RV12IS058', 'ise', 'ullas@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 8892253150, 8.50, 96.00, 94.00, NULL, 'Java'),
('gireesh', '1RV13IS401', 'ise', 'giri@gmail.com', 'a95bc72cf82d4eaa0874de0175dc2091', 1234567892, 7.50, 76.00, NULL, 82.00, ''),
('Amaan', '1RV13IS403', 'ise', 'amaan@gmail.com', 'ac6f3d4d696ba928a03f70cbbef83356', 1234567890, 7.00, 70.00, 0.00, 72.00, ''),
('Keerthana', '1RV13IS405', 'ise', 'keerthana@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 8523697410, 6.99, 80.00, NULL, 75.00, ''),
('prahallada k n', '1RV13IS409', 'ise', 'prahalladakn@gmail.c', 'ecd7da5cbb58fa26df78fc9f438b5d4b', 9535280230, 7.70, 80.00, 0.00, 78.00, ''),
('pruthvi', '1RV13IS410', 'ise', 'pruthvi@gmail.com', '14d6273036cd421133b7115e3ca57a96', 1234567890, 5.00, 50.00, NULL, 50.00, ''),
('suraj', '1RV13IS411', 'ise', 'abc@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1234567891, 7.50, 70.00, 75.00, NULL, ''),
('abc', '1RV13IS415', 'ise', 'abc@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 1234567891, 7.00, 70.00, 75.00, NULL, '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applied`
--
ALTER TABLE `applied`
  ADD CONSTRAINT `applied_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE CASCADE,
  ADD CONSTRAINT `applied_ibfk_2` FOREIGN KEY (`CNAME`) REFERENCES `company` (`CNAME`) ON DELETE CASCADE;

--
-- Constraints for table `dateofvisit`
--
ALTER TABLE `dateofvisit`
  ADD CONSTRAINT `dateofvisit_ibfk_1` FOREIGN KEY (`CNAME`) REFERENCES `company` (`CNAME`) ON DELETE CASCADE;

--
-- Constraints for table `internapplied`
--
ALTER TABLE `internapplied`
  ADD CONSTRAINT `internapplied_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `student` (`USN`) ON DELETE CASCADE,
  ADD CONSTRAINT `internapplied_ibfk_2` FOREIGN KEY (`CNAME`) REFERENCES `internship` (`CNAME`) ON DELETE CASCADE;

--
-- Constraints for table `interndov`
--
ALTER TABLE `interndov`
  ADD CONSTRAINT `interndov_ibfk_1` FOREIGN KEY (`CNAME`) REFERENCES `internship` (`CNAME`) ON DELETE CASCADE;

--
-- Constraints for table `internjp`
--
ALTER TABLE `internjp`
  ADD CONSTRAINT `internjp_ibfk_1` FOREIGN KEY (`CNAME`) REFERENCES `internship` (`CNAME`) ON DELETE CASCADE;

--
-- Constraints for table `internship`
--
ALTER TABLE `internship`
  ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`CNAME`) REFERENCES `company` (`CNAME`) ON DELETE CASCADE;

--
-- Constraints for table `jobprofile`
--
ALTER TABLE `jobprofile`
  ADD CONSTRAINT `jobprofile_ibfk_1` FOREIGN KEY (`CNAME`) REFERENCES `company` (`CNAME`) ON DELETE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `spc` (`USN`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

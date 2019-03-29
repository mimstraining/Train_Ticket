-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2016 at 06:03 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `password`, `email`) VALUES
(1, 'mim', '102030', 'tasnimislamuap35@gmail.com'),
(2, 'shamim', '405060', 'shamim123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE IF NOT EXISTS `passenger` (
  `name` varchar(100) NOT NULL,
  `route` varchar(100) NOT NULL,
  `date_journey` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `seat_num` int(100) NOT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`name`, `route`, `date_journey`, `class`, `seat_num`, `amount`) VALUES
('Tasnim', 'Dhaka - Chittagong', '09-08-2016', 'chair', 2, '670'),
('Tasnim', 'Dhaka - Sylhet', '10-08-2016', 'set_ac', 2, '1300'),
('Mim Islam', 'Dinajpur - Dhaka', '09-08-2016', 'set_ac', 1, '640'),
('Mim Islam', 'Dhaka - Chittagong', '08-08-2016', 'set_shuvon', 1, '685'),
('Tasnim', 'Dhaka - Sylhet', '09-08-2016', 'Chair', 1, '650');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `t_num` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`name`, `date`, `amount`, `t_num`) VALUES
('Tasnim', '10-08-2016', '1300', 'dfv45tre'),
('Mim Islam', '09-08-2016', '640', 'rtg23oi'),
('Mim Islam', '08-08-2016', '685', 'dfg5678ip'),
('Tasnim', '09-08-2016', '650', 'fgh566ut'),
('Tasnim', '09-08-2016', '650', 'fgh566ut');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `query` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`ID`, `email`, `query`) VALUES
(1, 'tasnimislamuap35@gmail.com', 'I wanna buy ticket....'),
(2, 'shamim123@gmail.com', 'hi............'),
(3, 'shamim123@gmail.com', 'hi............'),
(4, 'shamim123@gmail.com', 'hi............');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `mID` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `number` varchar(50) NOT NULL,
  PRIMARY KEY (`mID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`mID`, `name`, `email`, `password`, `address`, `number`) VALUES
(1, 'Tasnim', 'tasnimislamuap35@gmail.com', '14101001', 'ring road,dhaka.', '01868666023'),
(2, 'Mim Islam', 'jenymjoa@gmail.com', '14101001', 'mirpur,dhaka.', '01933446677'),
(3, 'Nisha Zim', 'nisha012@gmail.com', '14101015', 'Malibag,Dhaka.', '10919804209'),
(4, 'zim Zahan', 'abc123@gmail.com', '12345678', 'Mohakali,Dhaka', '01790087612'),
(5, 'zim Zahan', 'abc123@gmail.com', '12345678', 'Mohakali,Dhaka', '01790087612'),
(6, 'zim Zahan', 'abc123@gmail.com', '12345678', 'Mohakali,Dhaka', '01790087612'),
(7, 'Faizun', 'faizun56@gmail.com', '6789012', 'Mirpur10,Dhaka', '10897656432');

-- --------------------------------------------------------

--
-- Table structure for table `reservetion`
--

CREATE TABLE IF NOT EXISTS `reservetion` (
  `rID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `route` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `seat_num` int(100) NOT NULL,
  PRIMARY KEY (`rID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `reservetion`
--

INSERT INTO `reservetion` (`rID`, `name`, `train_name`, `route`, `date`, `seat_num`) VALUES
(8, 'Tasnim', 'Subarna Express', 'Dhaka - Chittagong', '08-08-2016', 3),
(35, 'Tasnim', 'Ekota Express', 'Dhaka - Dinajpur', '08-08-2016', 1),
(69, 'Tasnim', 'Parabat Express', 'Dhaka - Sylhet', '10-08-2016', 2),
(70, 'Mim Islam', 'Ekota Express', 'Dinajpur - Dhaka', '09-08-2016', 1),
(71, 'Mim Islam', 'Subarna Express', 'Dhaka - Chittagong', '08-08-2016', 1),
(72, 'Tasnim', 'Parabat Express', 'Dhaka - Sylhet', '09-08-2016', 1);

-- --------------------------------------------------------

--
-- Table structure for table `train_info`
--

CREATE TABLE IF NOT EXISTS `train_info` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `train_no` int(100) NOT NULL,
  `train_name` varchar(200) NOT NULL,
  `s_station` varchar(200) NOT NULL,
  `s_time` time NOT NULL,
  `a_station` varchar(200) NOT NULL,
  `a_time` time NOT NULL,
  `p_shulov` varchar(100) NOT NULL,
  `set_shulov` int(50) NOT NULL,
  `p_shuvon` varchar(100) NOT NULL,
  `set_shuvon` int(50) NOT NULL,
  `p_chair` varchar(100) NOT NULL,
  `set_chair` int(50) NOT NULL,
  `p_ac` varchar(100) NOT NULL,
  `set_ac` int(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `train_info`
--

INSERT INTO `train_info` (`ID`, `train_no`, `train_name`, `s_station`, `s_time`, `a_station`, `a_time`, `p_shulov`, `set_shulov`, `p_shuvon`, `set_shuvon`, `p_chair`, `set_chair`, `p_ac`, `set_ac`) VALUES
(1, 701, 'Subarna Express', 'Dhaka', '07:45:00', 'Chittagong', '14:55:00', '175', 10, '285', 10, '385', 10, '685', 0),
(3, 702, 'Subarna Express', 'Chittagong', '15:00:00', 'Dhaka', '22:15:00', '175', 10, '285', 10, '385', 10, '685', 10),
(4, 703, 'Ekota Express', 'Dhaka', '10:00:00', 'Dinajpur', '19:45:00', '160', 10, '265', 10, '320', 8, '640', 10),
(7, 704, 'Ekota Express', 'Dinajpur', '21:20:00', 'Dhaka', '07:10:00', '160', 10, '265', 10, '320', 10, '640', 10),
(8, 705, 'Parabat Express', 'Dhaka', '06:35:00', 'Sylhet', '13:40:00', '160', 10, '266', 10, '350', 10, '650', 10),
(9, 706, 'Parabat Express', 'Sylhet', '15:00:00', 'Dhaka', '22:25:00', '160', 10, '266', 10, '350', 8, '650', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

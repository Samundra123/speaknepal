-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2016 at 11:46 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nrna_app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `roll` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `username`, `password`, `email`, `roll`, `image`) VALUES
(1, 'sam', '12345', 'sspandit21@gmail.com', 1, NULL),
(2, 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 'sspandit21@gmail.com', 0, 'WIN_20160306_22_21_45_Pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `app_user`
--

CREATE TABLE IF NOT EXISTS `app_user` (
  `app_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `address1` varchar(200) DEFAULT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `moblieno` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`app_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `app_user`
--

INSERT INTO `app_user` (`app_user_id`, `email`, `password`, `fullname`, `address1`, `address2`, `phone`, `moblieno`) VALUES
(1, 'sspandit21@gmail.com', 'W!29M5RE', NULL, NULL, NULL, NULL, NULL),
(2, 'rozan@gmail.com', 'THXingGA', NULL, NULL, NULL, NULL, NULL),
(3, 'rozan@gmail.com', '1F$khtEx', NULL, NULL, NULL, NULL, NULL),
(4, 'hehe', 'ebpxg1Cn', NULL, NULL, NULL, NULL, NULL),
(5, 'haha', '82ldvXf%', NULL, NULL, NULL, NULL, NULL),
(6, 'hunfldjfslkf', 'UlfIda$F', NULL, NULL, NULL, NULL, NULL),
(7, 'dkjfdslfdsmflksdjafldkfjdslkafkjdlkfsdkj', 'IlWhv2S1', NULL, NULL, NULL, NULL, NULL),
(8, 'fdkfjslfjsdlkfs', 'KUPSbhJZ', NULL, NULL, NULL, NULL, NULL),
(9, 'dklfjdslkfjsd', 'oG8er1u7', NULL, NULL, NULL, NULL, NULL),
(10, 'thimi', '0Sg$U3X&', NULL, NULL, NULL, NULL, NULL),
(11, 'dkjfsl', 'mGH!IdZv', NULL, NULL, NULL, NULL, NULL),
(12, 'kdfjsld', 'cJ18DiE4', NULL, NULL, NULL, NULL, NULL),
(13, 'fkdsjfls', 'gbGE5m@t', NULL, NULL, NULL, NULL, NULL),
(14, 'fkdsjflks', '$ZKDqfe3', NULL, NULL, NULL, NULL, NULL),
(15, 'hehelalala', 'KsPtBvGc', NULL, NULL, NULL, NULL, NULL),
(16, 'rabindraji', '2KHZIMnN', NULL, NULL, NULL, NULL, NULL),
(17, 'sspandit@gmail.com', '0#RApHXJ', NULL, NULL, NULL, NULL, NULL),
(18, 'sspandit@gmail.com', 'TsoSRnvM', NULL, NULL, NULL, NULL, NULL),
(19, 'sspandit@gmail.com', 'KpOZV7zQ', NULL, NULL, NULL, NULL, NULL),
(20, 'sspandit@gmail.com', 's4JIGMh!', NULL, NULL, NULL, NULL, NULL),
(21, 'sspandit@gmail.com', 'J3^g8esH', NULL, NULL, NULL, NULL, NULL),
(22, 'sspandit@gmail.com', 'puEfr#me', NULL, NULL, NULL, NULL, NULL),
(23, 'sspandit@gmail.com', 'COc@%Bms', NULL, NULL, NULL, NULL, NULL),
(24, 'sspandit@gmail.com', 'Z0@fr1E5', NULL, NULL, NULL, NULL, NULL),
(25, 'sspandit@gmail.com', 'aQlMrN29', NULL, NULL, NULL, NULL, NULL),
(26, 'sspandit@gmail.com', 'oMi^uYmz', NULL, NULL, NULL, NULL, NULL),
(27, 'sspandit@gmail.com', '6stzua@p', NULL, NULL, NULL, NULL, NULL),
(28, 'sspandit@gmail.com', 'p4!CkTSq', NULL, NULL, NULL, NULL, NULL),
(29, 'heheheheheheeheheheeheehe', '8kV5XigO', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE IF NOT EXISTS `catagories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_description` varchar(100) NOT NULL,
  `no_item` int(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`category_id`, `category_name`, `category_description`, `no_item`) VALUES
(1, 'Stationary', 'Pen, pencile, dairy, punching machine, pen stand, files, folders, etc', 1),
(2, 'Network Devices', 'Switches, Routers, Media Converters etc', 0),
(3, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `damaged`
--

CREATE TABLE IF NOT EXISTS `damaged` (
  `damage_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_staff` varchar(100) NOT NULL,
  `under_whom` varchar(100) DEFAULT NULL,
  `damage_quantity` int(11) NOT NULL DEFAULT '0',
  `used_damaged` int(11) DEFAULT NULL,
  `not_used_damaged` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `serial_mac` varchar(100) DEFAULT NULL,
  `damage_cause` varchar(200) DEFAULT NULL,
  `possible_solution` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`damage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `damaged`
--

INSERT INTO `damaged` (`damage_id`, `item_id`, `entry_date`, `entry_staff`, `under_whom`, `damage_quantity`, `used_damaged`, `not_used_damaged`, `date`, `serial_mac`, `damage_cause`, `possible_solution`) VALUES
(1, 3, '0000-00-00', '2015-11-10', 'sam', 1, 1, 0, '0000-00-00', '', 'noting', 'i relly dont know'),
(2, 3, '0000-00-00', '2015-11-10', 'sam', 1, 1, 0, '0000-00-00', '', 'noting', 'i relly dont know'),
(3, 3, '0000-00-00', '2015-11-10', 'susu', 2, 1, 1, '0000-00-00', 'no', 'no', 'no'),
(4, 1, '2015-11-10', 'samundra', 'dipen', 2, 0, 2, '0000-00-00', 'no', 'no', 'no'),
(5, 1, '2015-11-10', 'samundra', 'jayesh', 1, 1, 0, '0000-00-00', 'no', 'n0', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `employee_login`
--

CREATE TABLE IF NOT EXISTS `employee_login` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee_login`
--

INSERT INTO `employee_login` (`employee_id`, `full_name`, `username`, `password`, `email`, `image`, `role`) VALUES
(1, 'samundra', 'samundra', '123', 'sam@sam.com', 'WIN_20140317_0850109.JPG', 0),
(2, 'what', 'do', '123', 'email@email.com', 'WIN_20140317_08501010.JPG', 2),
(3, 'samundra', 'sum', '123', 'email@email.com', 'WIN_20140313_192745.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inflow`
--

CREATE TABLE IF NOT EXISTS `inflow` (
  `infolw_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `inflow_from` varchar(100) NOT NULL,
  `inflow_condition` varchar(100) NOT NULL,
  `quantity_received` int(11) NOT NULL,
  `received_from` varchar(100) NOT NULL,
  `detail_contact_source` varchar(100) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `received_date` date NOT NULL,
  `serial_mac` varchar(100) NOT NULL,
  `inflow_detail` varchar(200) DEFAULT NULL,
  `entry_staff` varchar(100) DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  PRIMARY KEY (`infolw_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `inflow`
--

INSERT INTO `inflow` (`infolw_id`, `item_id`, `inflow_from`, `inflow_condition`, `quantity_received`, `received_from`, `detail_contact_source`, `staff_name`, `client_name`, `received_date`, `serial_mac`, `inflow_detail`, `entry_staff`, `entry_date`) VALUES
(1, 0, 'Purchase', 'new', 2, 'radhe', '9841857695,ktm', 'kanjilal', 'nautanki', '2013-12-12', 'dont know', 'I dont know', NULL, NULL),
(2, 3, 'purchase', 'new', 1, 'jajaa', 'jajaja', 'jajaja', 'jajaja', '2015-12-12', 'fkds', 'fdfkjd', NULL, NULL),
(3, 3, 'purchase', 'new', 1, 'fjd', 'fksd', 'fsf', 'djf', '2015-12-12', 'fkldfj', 'why when how', NULL, NULL),
(4, 3, 'purchase', 'new', 1, 'fjd', 'fksd', 'fsf', 'djf', '2015-12-12', 'fkldfj', 'why when how', NULL, NULL),
(5, 3, 'purchase', 'new', 1, 'fjd', 'fksd', 'fsf', 'djf', '2015-12-12', 'fkldfj', 'why when how', NULL, NULL),
(6, 3, 'purchase', 'new', 0, '', '', '', '', '0000-00-00', '', '', NULL, NULL),
(7, 3, 'purchase', 'new', 0, '', '', '', '', '0000-00-00', '', '', NULL, NULL),
(8, 3, 'purchase', 'new', 3, '', '', '', '', '0000-00-00', '', '', NULL, NULL),
(9, 1, 'purchase', 'new', 20, 'shopkeeper', 'no', 'samudra', 'no', '2015-12-12', 'no', 'we fucking need it na', NULL, NULL),
(10, 2, 'purchase', 'new', 50, 'subash', 'kathmandu', 'rajiv', 'subash', '2015-11-10', 'no', 'office use', NULL, NULL),
(11, 2, 'purchase', 'new', 1, 'same', 'fdf', 'fsdf`', 'dfsf', '2015-11-20', 'man', 'nothing', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `Item_id` int(11) NOT NULL AUTO_INCREMENT,
  `Item_Name` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `measure_id` int(11) NOT NULL,
  `good_quantity` int(11) NOT NULL DEFAULT '0',
  `damaged` int(11) NOT NULL DEFAULT '0',
  `reorder_level` int(11) NOT NULL,
  `item_description` varchar(300) DEFAULT NULL,
  `purposes` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`Item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_id`, `Item_Name`, `category_id`, `measure_id`, `good_quantity`, `damaged`, `reorder_level`, `item_description`, `purposes`) VALUES
(1, 'pen', 1, 2, 28, 4, 3, 'pen', 'nothing'),
(2, 'pencil', 1, 2, 62, 0, 4, 'pencil', 'office use'),
(3, 'Diary', 1, 2, 0, 4, 4, 'Diary', 'office use');

-- --------------------------------------------------------

--
-- Table structure for table `measures`
--

CREATE TABLE IF NOT EXISTS `measures` (
  `measure_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`measure_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `measures`
--

INSERT INTO `measures` (`measure_id`, `title`, `value`, `Description`) VALUES
(1, 'litre', 'ltr', 'liquid material are counted on behaves of the'),
(2, 'piece', 'pcs', 'one item of a solid use object');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `notice_title` varchar(100) NOT NULL,
  `notice_description` text NOT NULL,
  `ndate` date NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `notice_title`, `notice_description`, `ndate`) VALUES
(1, '', '', '2016-06-21'),
(2, '', '', '2016-06-21'),
(3, 'Rabin', 'he thinks he is robin hood', '2016-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `n_no` int(11) NOT NULL AUTO_INCREMENT,
  `n_type` varchar(20) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`n_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`n_no`, `n_type`, `count`) VALUES
(1, 'inflow', 2),
(2, 'outflow', 1),
(3, 'usermanagement', 0);

-- --------------------------------------------------------

--
-- Table structure for table `outflow`
--

CREATE TABLE IF NOT EXISTS `outflow` (
  `outflow_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `outflow_to` varchar(100) NOT NULL,
  `quantity_dispatched` int(11) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `receiver_contact` varchar(100) DEFAULT NULL,
  `staff_name` varchar(100) NOT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `client_name` varchar(100) NOT NULL,
  `ipaddress` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `pop` varchar(100) NOT NULL,
  `outflow_condition` varchar(0) NOT NULL,
  `dispatched_date` date NOT NULL,
  `serial_mac` varchar(100) DEFAULT NULL,
  `outflow_reason` varchar(200) DEFAULT NULL,
  `entry_staff` varchar(100) DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  PRIMARY KEY (`outflow_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `outflow`
--

INSERT INTO `outflow` (`outflow_id`, `item_id`, `outflow_to`, `quantity_dispatched`, `receiver_name`, `receiver_contact`, `staff_name`, `branch_name`, `client_name`, `ipaddress`, `location`, `pop`, `outflow_condition`, `dispatched_date`, `serial_mac`, `outflow_reason`, `entry_staff`, `entry_date`) VALUES
(1, 3, 'clients', 1, 'no', 'no', 'no', 'no', 'no', '23', 'no', 'no', '', '2015-12-12', 'no', 'no', NULL, NULL),
(2, 3, 'clients', 1, 'no', 'no', 'no', 'no', 'no', '23', 'no', 'no', '', '2015-12-12', 'no', 'no', NULL, NULL),
(3, 3, 'clients', 10, 'somw', 'fldj', 'dlfkj', 'dkfjd', 'djfd', 'no', 'bhak', '', '', '2015-11-02', 'no', 'nothig', 'samundra', '2015-11-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

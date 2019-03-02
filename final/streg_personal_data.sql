-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 01:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `streg_personal_data`
--

CREATE TABLE `streg_personal_data` (
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `fathers_fname` text NOT NULL,
  `fathers_mname` text NOT NULL,
  `fathers_lname` text NOT NULL,
  `nationality` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob_num` bigint(10) NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `hobbies` text NOT NULL,
  `boardX` text NOT NULL,
  `schoolX` text NOT NULL,
  `placeX` text NOT NULL,
  `percentX` float NOT NULL,
  `yearX` int(4) NOT NULL,
  `boardXII` text NOT NULL,
  `schoolXII` text NOT NULL,
  `placeXII` text NOT NULL,
  `percentXII` float NOT NULL,
  `yearXII` int(4) NOT NULL,
  `degree` text NOT NULL,
  `dept` text NOT NULL,
  `sem` varchar(20) NOT NULL,
  `reg_no` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `cgpa` float NOT NULL,
  `flatno` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `pincode` int(11) NOT NULL,
  `country` text NOT NULL,
  `flatno_perm` varchar(100) NOT NULL,
  `street_perm` varchar(100) NOT NULL,
  `city_perm` text NOT NULL,
  `state_perm` text NOT NULL,
  `pincode_perm` int(11) NOT NULL,
  `country_perm` text NOT NULL,
  `user_name` text NOT NULL,
  `pass_word` varchar(8) NOT NULL,
  `sec_q` int(11) NOT NULL,
  `sec_a` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `streg_personal_data`
--

INSERT INTO `streg_personal_data` (`firstname`, `middlename`, `lastname`, `fathers_fname`, `fathers_mname`, `fathers_lname`, `nationality`, `email`, `mob_num`, `gender`, `dob`, `hobbies`, `boardX`, `schoolX`, `placeX`, `percentX`, `yearX`, `boardXII`, `schoolXII`, `placeXII`, `percentXII`, `yearXII`, `degree`, `dept`, `sem`, `reg_no`, `roll`, `cgpa`, `flatno`, `street`, `city`, `state`, `pincode`, `country`, `flatno_perm`, `street_perm`, `city_perm`, `state_perm`, `pincode_perm`, `country_perm`, `user_name`, `pass_word`, `sec_q`, `sec_a`, `role`) VALUES
('Meghana', '', 'Bandaru', 'Ravi', 'Kumar', 'Bandaru', 'Indian', 'meghana@gmail.com', 7063697224, 'female', '1996-07-19', 'painting', 'cbse', 'kennedy', 'vijayawada', 90, 2012, 'state', 'chaitanya', 'vijayawada', 90, 2014, 'Btech', 'IT', '6', 20140387, 29, 9, '310', 'hall-10', 'dgp', 'wb', 713209, 'india', '310', 'nit', 'dgp', 'west bengal', 713209, 'India', 'meghanab', 'meghanab', 1, 'nm', 'admin'),
('sreeja', '', '', 's', '', '', 'a', 's@g.lo', 9877654345, 'female', '2011-02-10', 'painting', 'a', 'a', 'a', 90, 9090, 'a', 'a', 'a', 90, 9090, 'Btech', 'IT', '3', 20190987, 90, 9, 'a', '', 'a', '', 0, 'a', '', '', '', '', 0, '', 'sreeja', 's', 0, '', 'admin'),
('ravi', '', '', 'a', '', '', 'a', 'meghanabandaru31@gmail.com', 7777777777, 'male', '2009-03-13', 'painting', 'a', 'a', 'a', 90, 9090, 'a', 'a', 'a', 90, 9090, 'Btech', 'CS', '2', 20190987, 90, 9, '401', 'arvind', 'jagitial', 'tn', 999999, 'india', '', '', '', '', 0, '', 'ravi', 'ravi', 0, '', 'pending'),
('nani', '', '', 'a', '', '', 'a', 'meghana@gmail.com', 9877654345, 'female', '2008-03-06', 'painting', 'a', 'a', 'a', 90, 9090, 'a', 'a', 'a', 90, 9090, 'Btech', 'CH', '2', 20170987, 90, 9, '1', '', 'q', '', 0, 'q', '', '', '', '', 0, '', 'joy', 'j', 0, '', 'student'),
('sreeja', '', '', 's', '', '', 's', 's@h.lo', 9877654345, 'female', '2007-03-01', 'painting', 'a', 'a', 'a', 90, 9090, 'a', 'a', 'a', 90, 9090, 'Btech', 'CS', '5', 20170987, 90, 9, 'a', '', 'durgapur', '', 0, 'india', 'a', '', 'durgapur', '', 0, 'india', 'singireddy', 's', 0, '', 'admin'),
('ranga', '', '', 'simha', '', '', 'Indian', 'r@g.li', 9877654345, 'female', '2001-03-02', 'painting', 'a', 'a', 'a', 90, 9090, 'h', 'a', 'a', 90, 9090, 'MCA', 'S', 'S', 20180987, 90, 9, 'a', '', 'a', '', 0, 'a', '', '', '', '', 0, '', 'ranga', 'ranga', 0, '', 'admin'),
('marshel', '', '', 'a', '', '', 'aa', 'a@er.lo', 9877654345, 'female', '1111-02-22', 'painting', 'a', 'a', 'a', 90, 9090, 'a', 'a', 'a', 90, 9090, 'Btech', 'CH', '4', 20160987, 90, 9, 'a', '', 'a', '', 0, 'a', '', '', '', '', 0, '', 'marshel', 'marshel', 0, '', 'pending'),
('a', '', '', 'a', '', '', 'a', 'a@g.ko', 4444444444, 'female', '1111-11-11', 'painting', 'a', 'aa', 'a', 90, 9090, 'a', 'a', 'a', 90, 9090, 'MCA', 'S', 'S', 20190987, 90, 9, '1', '', 'a', '', 0, 'a', '', '', '', '', 0, '', 'ross', 'ross', 0, '', 'pending');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

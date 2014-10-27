-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2014 at 06:16 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ringdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
`userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `ringsize` text NOT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24926 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`userid`, `username`, `ringsize`, `age`) VALUES
(24910, 'catty', '2.1', 0),
(4567, 'choco', '0', 0),
(24911, 'curry chicken', '0', 0),
(24924, 'fsdjfoifj@dsoghroi.com', '8', NULL),
(24925, 'gorejgore@oirghreo.com', '9 5/8', NULL),
(1234, 'hello', '0', 0),
(24923, 'iuguog@bbi.com', '8', NULL),
(9000, 'meow meow', '6.1', 50),
(3423, 'milo', '9.1', 0),
(24921, 'new@test.com', '3', NULL),
(24922, 'sdfs@sff.com', '3 5/8', NULL),
(24918, 'ssa@ada.com', '9 1/8', NULL),
(24919, 'test@test.com', '7 1/2', NULL),
(24920, 'test@test2.com', '7 1/2', NULL),
(9800, 'wensher', '3', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
 ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `userid` (`userid`), ADD UNIQUE KEY `userid_2` (`userid`), ADD UNIQUE KEY `userid_3` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24926;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

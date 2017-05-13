-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2017 at 08:19 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ultraline_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `web11_db_ultraline`
--

CREATE TABLE `web11_db_ultraline` (
  `im11_member_id` int(11) NOT NULL,
  `im11_fullname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `im11_position` text CHARACTER SET utf8 NOT NULL,
  `im11_oranization` text CHARACTER SET utf8 NOT NULL,
  `im11_tel` varchar(10) CHARACTER SET utf8 NOT NULL,
  `im11_email` text CHARACTER SET utf8 NOT NULL,
  `im11_status` int(11) NOT NULL,
  `im11_date_register` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web11_db_ultraline`
--
ALTER TABLE `web11_db_ultraline`
  ADD PRIMARY KEY (`im11_member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web11_db_ultraline`
--
ALTER TABLE `web11_db_ultraline`
  MODIFY `im11_member_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

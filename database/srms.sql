-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2020 at 10:07 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `userid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`userid`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `name` varchar(30) NOT NULL,
  `id` int(3) NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`name`, `id`) VALUES
('An toÃ n thÃ´ng tin', 3),
('ThÆ°Æ¡ng máº¡i Ä‘iá»‡n tá»­', 101),
('Há»‡ thá»‘ng thÃ´ng tin', 102),
('k24a04', 104),
('Kiáº¿n trÃºc', 123);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `name` varchar(30) NOT NULL,
  `rno` int(3) NOT NULL,
  `class` varchar(30) NOT NULL,
  `p1` int(3) NOT NULL,
  `p2` int(3) NOT NULL,
  `p3` int(3) NOT NULL,
  `p4` int(3) NOT NULL,
  `p5` int(3) NOT NULL,
  `marks` int(3) NOT NULL,
  `percentage` float NOT NULL,
  KEY `class` (`class`),
  KEY `name` (`name`,`rno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`name`, `rno`, `class`, `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage`) VALUES
('Bao Hung', 1, 'ThÆ°Æ¡ng máº¡i Ä‘iá»‡n tá»­', 12, 1, 1, 1, 1, 16, 3.2),
('Khang', 3, 'Kiáº¿n trÃºc', 7, 7, 7, 7, 7, 35, 7),
('Duong Bao Hung', 5, 'k24a04', 6, 7, 8, 9, 10, 40, 8);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `name` varchar(30) NOT NULL,
  `rno` int(3) NOT NULL,
  `class_name` varchar(30) NOT NULL,
  PRIMARY KEY (`name`,`rno`),
  KEY `class_name` (`class_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `rno`, `class_name`) VALUES
('Duong Bao Hung', 5, 'k24a04'),
('Duc Anh', 2, 'Kiáº¿n trÃºc'),
('Duong Bao Hung', 1, 'Kiáº¿n trÃºc'),
('Khang', 1, 'Kiáº¿n trÃºc'),
('Khang', 3, 'Kiáº¿n trÃºc'),
('Bao Hung', 1, 'ThÆ°Æ¡ng máº¡i Ä‘iá»‡n tá»­'),
('Duong Bao Hung', 2, 'ThÆ°Æ¡ng máº¡i Ä‘iá»‡n tá»­');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`class`) REFERENCES `class` (`name`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`name`,`rno`) REFERENCES `students` (`name`, `rno`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`class_name`) REFERENCES `class` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

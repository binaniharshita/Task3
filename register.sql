-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 04:58 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sysadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `TeamName` varchar(30) NOT NULL,
  `THName` varchar(30) NOT NULL,
  `RegistrationNo` int(9) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Semester` tinyint(5) NOT NULL,
  `Institution` varchar(40) NOT NULL,
  `Phno` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `FilePath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`TeamName`, `THName`, `RegistrationNo`, `Branch`, `Semester`, `Institution`, `Phno`, `Email`, `FilePath`) VALUES
('hello', 'HARSHITA BINANI', 170905494, 'cse', 3, 'mit', 2147483647, 'binaniharshita@gmail.com', 'uploads/01 Properties of steam.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 10:25 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(5, 'Solacrest', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblhotel`
--

CREATE TABLE `tblhotel` (
  `fldcustomer` varchar(200) NOT NULL,
  `fldrate` int(200) NOT NULL,
  `fldreservation` varchar(200) NOT NULL,
  `fldtype` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `fstart` date NOT NULL,
  `fend` date NOT NULL,
  `fpersons` varchar(200) NOT NULL,
  `fbill` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhotel`
--

INSERT INTO `tblhotel` (`fldcustomer`, `fldrate`, `fldreservation`, `fldtype`, `fname`, `lname`, `fstart`, `fend`, `fpersons`, `fbill`) VALUES
('301', 6200, 'Available', 'Tower Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('201', 4000, 'Reserved', 'Deluxe', 'Kenneth', 'Virtucio', '2017-06-22', '2017-06-24', '2', 8000),
('209', 4800, 'Available', 'Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('203', 4800, 'Reserved', 'Deluxe', 'Mj', 'Orellana', '2017-06-15', '2017-06-16', '3', 4800),
('302', 6200, 'Available', 'Tower Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('303', 6200, 'Available', 'Tower Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('401', 7500, 'Available', 'Signature Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('501', 8000, 'Available', 'Junior Suite', '', '', '0000-00-00', '0000-00-00', '', 0),
('502', 8500, 'Available', 'Junior Suite', '', '', '0000-00-00', '0000-00-00', '', 0),
('402', 7500, 'Available', 'Signature Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('304', 6500, 'Available', 'Tower Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('503', 8500, 'Available', 'Junior Suite', '', '', '0000-00-00', '0000-00-00', '', 0),
('504', 8000, 'Available', 'Junior Suite', '', '', '0000-00-00', '0000-00-00', '', 0),
('505', 8300, 'Available', 'Junior Suite', '', '', '0000-00-00', '0000-00-00', '', 0),
('204', 4500, 'Available', 'Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('205', 4800, 'Available', 'Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('305', 6500, 'Available', 'Tower Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('403', 7000, 'Available', 'Signature Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('404', 7000, 'Available', 'Signature Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('405', 7000, 'Available', 'Signature Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0),
('206', 5000, 'Available', 'Deluxe', '', '', '0000-00-00', '0000-00-00', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

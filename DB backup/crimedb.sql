-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 03:58 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crimedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `criminalinfo`
--

CREATE TABLE `criminalinfo` (
  `cID` int(11) NOT NULL,
  `cName` varchar(30) NOT NULL,
  `arrestDate` date NOT NULL,
  `birthdate` date NOT NULL,
  `nID` int(18) NOT NULL,
  `caseID` int(11) NOT NULL,
  `lawyerName` varchar(30) NOT NULL,
  `Gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminalinfo`
--

INSERT INTO `criminalinfo` (`cID`, `cName`, `arrestDate`, `birthdate`, `nID`, `caseID`, `lawyerName`, `Gender`) VALUES
(435, '', '2019-07-04', '2019-06-19', 3434, 344444, 'sdfa', 'F'),
(2342, '', '2019-07-06', '2019-07-02', 3423, 23423, 'asdf', 'F'),
(3423, '', '2019-07-05', '2019-07-01', 43243, 34324, 'asdf', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `policeID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mNumber` int(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`policeID`, `email`, `mNumber`, `password`, `date`) VALUES
(1, '0', 16, 'yy', '2019-07-04'),
(13, '0', 162, ';;', '2019-07-04'),
(123, '0', 1612, 'ff', '2019-07-04'),
(1234, '0', 1632732, 'oo', '2019-07-04'),
(12345, '0', 132732, 'gg', '2019-07-02'),
(12378, '0', 16312, 'dd', '2019-07-04'),
(34233, 'ss@gmail.com', 3433333, 'aa', '2019-07-10'),
(123456, '0', 163112732, 'dd', '2019-07-04'),
(123474, '0', 1632, 'pp', '2019-07-04'),
(1234578, '0', 1732, 'ii', '2019-07-03'),
(12345670, 'ss@gmail.com', 1631132732, '4', '2019-07-04'),
(12345671, 'ss@gmail.com', 2147483647, 'dd', '2019-07-04'),
(12345672, 'ss@gmail.com', 2147483647, '44', '2019-07-04'),
(12345673, 'ss@gmail.com', 1631132732, '12', '2019-07-04'),
(12345674, 'ss@gmail.com', 2147483647, 'dd', '2019-07-04'),
(12345675, 'ss@gmail.com', 1631132732, 'eeee', '2019-07-04'),
(12345677, 'ss@gmail.com', 1631132732, 'gg', '2019-07-04'),
(12345678, '0', 1631132732, 'dd', '2019-07-04'),
(17301194, '0', 1631132731, 'asdf', '2019-07-04'),
(17301195, '0', 323, 'aa', '2019-07-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `criminalinfo`
--
ALTER TABLE `criminalinfo`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`policeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `criminalinfo`
--
ALTER TABLE `criminalinfo`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3424;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `policeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17301196;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

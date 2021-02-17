-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 10:07 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transfer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers1`
--

CREATE TABLE `customers1` (
  `Account_Number` int(100) NOT NULL,
  `Name` char(100) NOT NULL,
  `Phone` bigint(12) DEFAULT NULL,
  `EmailId` varchar(50) NOT NULL,
  `Balance` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers1`
--

INSERT INTO `customers1` (`Account_Number`, `Name`, `Phone`, `EmailId`, `Balance`) VALUES
(1110, 'Shubh', 9092939597, 'shubh@yahoo.com', 4999996400),
(1111, 'Ritu', 9876542345, 'ritu@gmail.com', 207797),
(1212, 'Annu', 9012345678, 'annu@yahoo.com', 3000000002),
(1234, 'Shruti', 9987654370, 'shruti@gmail.com', 1991385),
(1515, 'Nootan', 9090901111, 'nootan@gmail.com', 2000000000),
(3232, 'Tripda', 8956743210, 'tripda@gmail.com', 3000000000),
(4545, 'Pooja', 9567843212, 'pooja@gmail.com', 2999998000),
(6767, 'Riya', 9192976541, 'riya@gmail.com', 3000000000),
(9898, 'Archana', 9911223344, 'archana@gmail.com', 2999998000),
(9999, 'Lovely', 9593949698, 'lovely@gmail.com', 3000002000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers1`
--
ALTER TABLE `customers1`
  ADD PRIMARY KEY (`Account_Number`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

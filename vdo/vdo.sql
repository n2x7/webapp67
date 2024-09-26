-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 12:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `aid` int(3) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `alastname` varchar(30) NOT NULL,
  `acount` int(50) NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='actor information';

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`aid`, `aname`, `alastname`, `acount`, `gender`) VALUES
(1, 'yoye', 'ayutthaya', 2, 'F'),
(2, 'ying', 'pathumthani', 1, 'F'),
(3, 'mint', 'klong3', 1, 'F'),
(4, 'coco', 'dreamworld', 2, 'M'),
(5, 'few', 'alwayslate', 1, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` int(3) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `mlastname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='member information';

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mid`, `mname`, `mlastname`, `address`, `telephone`) VALUES
(0, '', '', '', 0),
(110, 'tippimon', 'rmutt', 'ayutthaya', 898944631),
(111, 'nicharrat', 'comscience', 'pathumthani', 928192297),
(112, 'phetcharrat', 'sciencetech', 'klong3', 802376045),
(113, 'tipaporn', 'nonthamat', 'bangkok', 970690931),
(114, 'jit', 'meow', 'yoyehome', 800688004),
(116, 'nam', 'tip', 'minbburi', 495189);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `mvid` int(3) NOT NULL,
  `mvname` varchar(50) NOT NULL,
  `mvyear` int(4) NOT NULL,
  `mvactor` varchar(50) NOT NULL,
  `mvtime` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='movie information';

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mvid`, `mvname`, `mvyear`, `mvactor`, `mvtime`) VALUES
(200, 'mermaid', 2020, 'yoye', 90),
(201, 'hot hell', 2002, 'yoye', 100),
(202, 'humble', 2019, 'ying', 80),
(203, 'back pain', 2012, 'mint', 110),
(204, 'back pain', 2012, 'coco', 110),
(205, 'break up', 2015, 'coco', 60),
(206, 'loser', 2015, 'few', 60),
(207, 'nam', 2003, 'tipaporn', 75);

-- --------------------------------------------------------

--
-- Table structure for table `purchased`
--

CREATE TABLE `purchased` (
  `mid` int(3) NOT NULL,
  `mvid` int(3) NOT NULL,
  `count` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='member purchased information';

--
-- Dumping data for table `purchased`
--

INSERT INTO `purchased` (`mid`, `mvid`, `count`) VALUES
(110, 201, 1),
(111, 201, 2),
(111, 202, 2),
(112, 205, 1),
(113, 203, 1),
(114, 202, 1),
(116, 205, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mvid`);

--
-- Indexes for table `purchased`
--
ALTER TABLE `purchased`
  ADD KEY `MemberID` (`mid`),
  ADD KEY `MovieID` (`mvid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

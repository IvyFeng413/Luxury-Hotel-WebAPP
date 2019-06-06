-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2019 at 01:04 AM
-- Server version: 5.7.26-0ubuntu0.16.04.1-log
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2201613130334`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `sch_id` int(11) NOT NULL,
  `sta_id` int(11) NOT NULL,
  `dep_id` int(11) NOT NULL,
  `sta_worktime` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_monday` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_tuesday` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_wednesday` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_thursday` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_friday` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_saturday` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch_sunday` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workdate` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`sch_id`, `sta_id`, `dep_id`, `sta_worktime`, `sch_monday`, `sch_tuesday`, `sch_wednesday`, `sch_thursday`, `sch_friday`, `sch_saturday`, `sch_sunday`, `workdate`) VALUES
(1026, 101, 10, '09:00-18:00', '√', '√', '', '√', '√', '', '√', '2019/5/6-2019/5/20'),
(1001, 102, 10, '09:00-18:00', '√', '√', '√', '', '', '', '', '2019/5/6-2019/5/20'),
(1002, 103, 10, '18:00-09:00', '', '', '', '√', '√', '√', '', '2019/5/6-2019/5/20'),
(1003, 112, 11, '08:00-13:00', '', '', '√', '', '', '', '√', '2019/5/6-2019/5/20'),
(1004, 113, 11, '08:00-18:00', '√', '', '', '√', '√', '', '', '2019/5/6-2019/5/20'),
(1005, 114, 11, '08:00-18:00', '', '√', '', '√', '', '', '√', '2019/5/6-2019/5/20'),
(1027, 201, 20, '08：00-18：00', '√', '', '√', '√', '√', '√', '√', '2019/5/6-2019/5/20'),
(1006, 202, 20, '08:30-12:30', '', '', '√', '', '√', '√', '', '2019/5/6-2019/5/20'),
(1007, 203, 20, '12:30-18:00', '√', '√', '', '√', '', '√', '', '2019/5/6-2019/5/20'),
(1008, 204, 20, '18:00-24:00', '√', '√', '', '√', '', '√', '', '2019/5/6-2019/5/20'),
(1009, 205, 20, '24:00_08:00', '', '', '', '√', '√', '√', '', '2019/5/6-2019/5/20'),
(1028, 301, 30, '9：00-18：00', '', '√', '', '√', '√', '√', '√', '2019/5/6-2019/5/20'),
(1010, 302, 30, '08:00-18:00', '√', '√', '√', '', '', '', '', '2019/5/6-2019/5/20'),
(1011, 303, 30, '08:00-18:00', '√', '', '√', '', '√', '', '√', '2019/5/6-2019/5/20'),
(1012, 304, 30, '08;00-18：00', '√', '', '', '√', '', '√', '', '2019/5/6-2019/5/20'),
(1029, 401, 40, '9：30-17：30', '√', '', '√', '√', '', '√', '', '2019/5/6-2019/5/20'),
(1013, 402, 40, '08：00-18：00', '', '√', '√', '', '√', '', '√', '2019/5/6-2019/5/20'),
(1014, 403, 40, '18：00-08：00', '√', '', '√', '√', '', '√', '', '2019/5/6-2019/5/20'),
(1015, 404, 40, '08:00-17:30', '', '√', '√', '', '√', '', '√', '2019/5/6-2019/5/20'),
(1030, 501, 50, '9：00-18：00', '', '√', '', '√', '√', '', '√', '2019/5/6-2019/5/20'),
(1016, 502, 50, '10:00-21:00', '', '√', '', '√', '', '√', '', '2019/5/6-2019/5/20'),
(1017, 503, 50, '10:00-21:00', '√', '', '√', '√', '', '', '√', '2019/5/6-2019/5/20'),
(1018, 504, 50, '10:00-21:00', '', '', '√', '', '√', '', '', '2019/5/6-2019/5/20'),
(1031, 601, 60, '9：00-18：00', '√', '√', '√', '', '√', '√', '', '2019/5/6-2019/5/20'),
(1019, 702, 70, '08:00-18:00', '√', '', '√', '√', '', '', '√', '2019/5/6-2019/5/20'),
(1020, 802, 80, '14:00-24:00', '√', '', '', '', '', '', '', '2019/5/6-2019/5/20'),
(1021, 803, 80, '14:00-24:00', '', '√', '√', '', '√', '', '', '2019/5/6-2019/5/20'),
(1022, 804, 80, '14:00-24:00', '√', '√', '', '√', '', '', '√', '2019/5/6-2019/5/20'),
(1023, 902, 90, '08:00-17:30', '', '√', '', '√', '', '', '', '2019/5/6-2019/5/20'),
(1024, 903, 90, '08:00-17:30', '√', '', '√', '', '√', '', '√', '2019/5/6-2019/5/20'),
(1025, 904, 90, '08:00-17:30', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`sta_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

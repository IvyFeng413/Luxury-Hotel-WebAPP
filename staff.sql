-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2019 at 01:03 AM
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
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sta_id` int(11) NOT NULL,
  `time_id` int(11) NOT NULL,
  `sta_name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dep_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobtitle` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `off_code` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sta_worktime` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sta_phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sta_id`, `time_id`, `sta_name`, `dep_name`, `jobtitle`, `off_code`, `sta_worktime`, `sta_phone`) VALUES
(102, 1, 'Shamus', 'Engineering dept', 'Lead', 'A1', '09:00-18:00', 1564564435),
(103, 5, 'Li Bai', 'Engineering dept', 'Assistant', 'A1', '18:00-09:00', 1254353521),
(112, 4, 'Matthew Kane', 'Aquatic dept', 'service', 'A11', '08:00-13:00', 123154534),
(113, 3, 'Micah Thompson', 'Aquatic dept', 'Safety-lifeguard', 'A11', '08:00-18:00', 153468906),
(114, 2, 'Sarah Long', 'Aquatic dept', 'Safety-lifeguard', 'A11', '08:00-18:00', 144657235),
(122, 5, 'James Traun', 'in house kitchen dept', 'chef', 'A12', '8:00-18:00', 1532421412),
(202, 1, 'Lisa Smith', 'Concierge dept', 'service', 'A2', '08:30-12:30', 1654646462),
(203, 4, 'Allan Shepard', 'Concierge dept', 'service', 'A2', '12:30-18:00', 1543534531),
(204, 5, 'Ian Takishi', 'Concierge dept', 'Bellhop', 'A2', '18:00-24:00', 1231342341),
(205, 1, 'Shane Johnson', 'Concierge dept', 'Bellhop', 'A2', '24:00_08:00', 1543532356),
(302, 4, 'Mary Banderas', 'Housekeeping dept', 'service', 'A3', '08:00-18:00', 1543216432),
(303, 3, 'Tron Micheals', 'Housekeeping dept', 'service', 'A3', '08:00-18:00', 1543524632),
(304, 2, 'Carry Wood', 'Housekeeping dept', 'service', 'A3', '08;00-18：00', 1545323421),
(402, 3, 'Antonio Carmicheal', 'Bistro dept', 'waiter', 'A4', '08：00-18：00', 1543232122),
(403, 6, 'Mia Nguyen', 'Bistro dept', 'waiter', 'A4', '18：00-08：00', 1655423421),
(404, 7, 'Ray Liotta', 'Bistro dept', 'Dish waiter', 'A4', '08:00-17:30', 1546683212),
(502, 4, 'Michelle Huang', 'Tao’s Hotpot dept', 'waitress', 'A5', '10:00-21:00', 1545278123),
(503, 3, 'Jason Lee', 'Tao’s Hotpot dept', 'food prep', 'A5', '10:00-21:00', 1680323892),
(504, 4, 'James Traun', 'Tao’s Hotpot dept', ' Chef', 'A5/A6', '10:00-21:00', 1532421412),
(702, 1, 'Chu Fei', 'Landscaping dept', 'landscaper', 'A7', '08:00-18:00', 1542423412),
(802, 4, 'Michelle Rodriguez', 'Spa dept', 'services', 'A8', '14:00-24:00', 1546352341),
(803, 6, 'Rayne Ortega', 'Spa dept', 'massage therapy', 'A8', '14:00-24:00', 1543534523),
(804, 5, ' Hanna Hang', 'Spa dept', 'massage therapy', 'A8', '14:00-24:00', 1235438976),
(902, 1, 'Kiki Watson', 'Gym dept', 'service', 'A9', '08:00-17:30', 1643534234),
(903, 4, 'Josh Hutchinson', 'Gym dept', 'trainer', 'A9', '08:00-17:30', 1265645683),
(904, 5, 'Ashlee Huang', 'Gym dept', 'trainer', 'A9', '08:00-17:30', 154342362);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sta_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

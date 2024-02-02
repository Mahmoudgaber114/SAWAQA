-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 07:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swaqa`
--

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `firstName`, `lastName`, `email`, `password`, `phone`, `img`, `latitude`, `longitude`) VALUES
(1, 'eslam', 'test', 'testtt@testt.com', '1234', '121213331', '60eafbfe8ebbd.', 0, 0),
(2, 'eslam', 'eid', 'eslam@test.com', '1234', '1234', '60eafd9ee437a.', 0, 0),
(3, 'test', 'eid', 'testtt3@testt.com', '1234', '1234567', '60eafe0e371de.', 0, 0),
(4, 'hkdhkla', 'test', 'testtt32@testt.com', '1234', '12324', '60eafe7fa4151.', 0, 0),
(5, 'ali', 'ali', 'ali@ali', 'ail', '12345', '60eafeabae774.', 0, 0),
(6, 'test', 'ali', 'test@test.co22', '12345', '12345', '60eb122c7df2b.', 29.056878599999994, 31.022888700000003);

-- --------------------------------------------------------

--
-- Table structure for table `learners`
--

CREATE TABLE `learners` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` decimal(10,0) DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learners`
--

INSERT INTO `learners` (`id`, `firstName`, `lastName`, `email`, `password`, `phone`, `img`, `latitude`, `longitude`) VALUES
(2, 'eewe', 'eid', 'test@test.co', '1234', '01123456787', '60eacf72e4a8f.', 0, 0),
(3, 'login', 'test', 'test@testtt', '1234', '1234', '60eaff309806e.', 0, 0),
(4, 'ahmed', 'ahmed', 'ahmed@test', '1234', '1234', '60eb0056524f1.', 0, 0),
(5, 'final', 'learner', 'learn@test', '1234', '12354', '60eb01afa7274.', 0, 0),
(6, 'hello', 'helo', 'hello@test', '1234', '1234', '60eb01fceaf3e.', 29.056933, 31.022923),
(7, 'test', 'ali', 'testtt22@testt.com', '1234', '1234', '60eb048a57367.', 0, 0),
(8, 'aliiii', 'alliiiii', 'ali@ali33', '1234', '123456897343434', '60eb06fd1755b.', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `learners`
--
ALTER TABLE `learners`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `learners`
--
ALTER TABLE `learners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

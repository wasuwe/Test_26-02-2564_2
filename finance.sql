-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 03:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finance`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `money` float(10,2) NOT NULL,
  `payday` date NOT NULL,
  `recordday` date NOT NULL,
  `editday` date NOT NULL,
  `typeid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `name`, `money`, `payday`, `recordday`, `editday`, `typeid`) VALUES
(7, 'xxxxx', 50.00, '2021-02-26', '2021-02-26', '2021-02-26', 1),
(8, 'xxxxx', 60.50, '2021-02-26', '2021-02-26', '2021-02-26', 1),
(9, 'xxxxx', 20.75, '2021-02-27', '2021-02-26', '2021-02-26', 2),
(10, 'xxxxx', 40.00, '2021-02-27', '2021-02-26', '2021-02-26', 2),
(11, 'xxx', 10.00, '2021-02-27', '2021-02-26', '2021-02-26', 2),
(12, 'xxxxx', 50.00, '2021-02-27', '2021-02-26', '2021-02-26', 1),
(13, 'xxxxx', 10.00, '2021-02-28', '2021-02-26', '2021-02-26', 1),
(14, 'xxxxxx', 130.00, '2021-02-28', '2021-02-26', '2021-02-26', 1),
(15, 'xxx', 40.00, '2021-02-28', '2021-02-26', '2021-02-26', 1),
(16, 'xxx', 80.00, '2021-02-28', '2021-02-26', '2021-02-26', 2),
(17, 'xxx', 50.00, '2021-02-28', '2021-02-26', '2021-02-26', 2),
(18, 'xxx', 17.00, '2021-02-28', '2021-02-26', '2021-02-26', 2),
(19, 'xxxxx', 36.00, '2021-02-28', '2021-02-26', '2021-02-26', 1),
(20, 'xxx', 26.00, '2021-02-28', '2021-02-26', '2021-02-26', 1),
(21, 'xxx', 29.00, '2021-02-28', '2021-02-26', '2021-02-26', 2),
(22, 'xxx', 20.00, '2021-02-28', '2021-02-26', '2021-02-26', 1),
(23, 'xxx', 28.00, '2021-02-28', '2021-02-26', '2021-02-26', 1),
(24, 'xxx', 29.00, '2021-02-28', '2021-02-26', '2021-02-26', 1),
(25, 'xxx', 40.00, '2021-02-28', '2021-02-26', '2021-02-26', 1),
(26, 'xxx', 58.00, '2021-02-28', '2021-02-26', '2021-02-26', 2),
(27, 'aaaa', 80.00, '2021-03-01', '2021-02-26', '2021-02-26', 1),
(28, 'aaaa', 60.00, '2021-03-01', '2021-02-26', '2021-02-26', 1),
(29, 'aaaa', 10.00, '2021-03-02', '2021-02-26', '2021-02-26', 2),
(30, 'aaaa', 90.00, '2021-03-02', '2021-02-26', '2021-02-26', 2),
(31, 'aaaa', 40.00, '2021-03-03', '2021-02-26', '2021-02-26', 2),
(32, 'aaaa', 90.00, '2021-03-03', '2021-02-26', '2021-02-26', 2),
(33, 'aaaa', 85.00, '2021-03-04', '2021-02-26', '2021-02-26', 1),
(34, 'aaaa', 46.00, '2021-03-05', '2021-02-26', '2021-02-26', 1),
(35, 'aaaa', 15.00, '2021-03-06', '2021-02-26', '2021-02-26', 2),
(36, 'aaaa', 25.00, '2021-03-07', '2021-02-26', '2021-02-26', 1),
(37, 'aaaa', 28.00, '2021-03-08', '2021-02-26', '2021-02-26', 2),
(38, 'aaaa', 69.00, '2021-03-09', '2021-02-26', '2021-02-26', 2),
(39, 'aaaa', 47.00, '2021-03-10', '2021-02-26', '2021-02-26', 2),
(40, 'aaaa', 100.00, '2021-03-10', '2021-02-26', '2021-02-26', 1),
(41, 'aaaa', 85.00, '2021-03-11', '2021-02-26', '2021-02-26', 1),
(42, 'aaaa', 100.00, '2021-03-12', '2021-02-26', '2021-02-26', 1),
(43, 'aaaa', 150.00, '2021-03-12', '2021-02-26', '2021-02-26', 2),
(44, 'aaaa', 145.00, '2021-03-15', '2021-02-26', '2021-02-26', 1),
(45, 'aaaa', 60.00, '2021-03-18', '2021-02-26', '2021-02-26', 2),
(46, 'aaaa', 20.00, '2021-03-19', '2021-02-26', '2021-02-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `typeid` int(1) NOT NULL,
  `typename` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`typeid`, `typename`) VALUES
(1, 'รายรับ'),
(2, 'รายจ่าย');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`typeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `typeid` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

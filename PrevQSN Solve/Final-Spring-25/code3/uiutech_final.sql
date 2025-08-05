-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2025 at 06:55 AM
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
-- Database: `uiutech_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_final`
--

CREATE TABLE `employee_final` (
  `employeeid` int(11) NOT NULL,
  `employeename` varchar(200) NOT NULL,
  `deptid` int(11) NOT NULL,
  `deptname` varchar(200) NOT NULL,
  `salary` int(11) NOT NULL,
  `performance` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_final`
--

INSERT INTO `employee_final` (`employeeid`, `employeename`, `deptid`, `deptname`, `salary`, `performance`) VALUES
(1, 'Arif Rahman', 201, 'Software Development', 45000, 'B'),
(2, 'Marium', 201, 'Software Development', 57000, 'A'),
(3, 'Sabbir', 202, 'Quality Assurance', 38000, 'C'),
(4, 'Samira', 203, 'UI/UX Design', 42000, 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_final`
--
ALTER TABLE `employee_final`
  ADD PRIMARY KEY (`employeeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_final`
--
ALTER TABLE `employee_final`
  MODIFY `employeeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

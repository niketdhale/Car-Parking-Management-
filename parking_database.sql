-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 02:32 PM
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
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `recent_place`
--

CREATE TABLE `recent_place` (
  `id` int(2) NOT NULL,
  `recent_place` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recent_place`
--

INSERT INTO `recent_place` (`id`, `recent_place`) VALUES
(17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sinsert`
--

CREATE TABLE `sinsert` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sinsert`
--

INSERT INTO `sinsert` (`id`, `username`, `email`, `mobile_no`, `password`) VALUES
(1, 'abc', 'ABC@example.com', 0, 'abc'),
(4, 'xyz', 'xyz@example.com', 0, 'xyz'),
(5, 'pqr', 'pqr@example.com', 0, 'pqr'),
(6, 'abc', 'ABC@example.com', 0, 'abc'),
(7, 'abc', 'ABC@example.com', 16316481, 'abc'),
(8, 'abc', 'ABC@example.com', 1686116, 'abc'),
(9, 'abc', 'ABC@example.com', 4681, 'abc'),
(10, 'abc', 'ABC@example.com', 4681, 'abc'),
(11, 'abc', 'ABC@example.com', 4681, '45'),
(12, 'Madam', 'mam@gmail.com', 2147483647, 'mam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `start_time` time(6) NOT NULL,
  `end_time` time(6) NOT NULL,
  `email` varchar(20) NOT NULL,
  `vehical_no` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `allocation` int(11) NOT NULL,
  `place` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recent_place`
--
ALTER TABLE `recent_place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinsert`
--
ALTER TABLE `sinsert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recent_place`
--
ALTER TABLE `recent_place`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sinsert`
--
ALTER TABLE `sinsert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

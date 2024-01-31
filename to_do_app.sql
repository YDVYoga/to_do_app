-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2024 at 09:25 AM
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
-- Database: `to_do_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `to_do_tbl`
--

CREATE TABLE `to_do_tbl` (
  `id` int(5) NOT NULL,
  `title` varchar(10) NOT NULL,
  `details` varchar(100) NOT NULL,
  `dates` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `to_do_tbl`
--

INSERT INTO `to_do_tbl` (`id`, `title`, `details`, `dates`) VALUES
(1, 'post 1', 'i have no idea about it', 'Feb, 20, 2019, 8 a.m.'),
(4, 'post2', 'hi this is yoga ydv', 'feb 4th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `to_do_tbl`
--
ALTER TABLE `to_do_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `to_do_tbl`
--
ALTER TABLE `to_do_tbl`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

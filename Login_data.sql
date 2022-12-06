-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2022 at 05:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Login_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(15) NOT NULL DEFAULT 'Gujarat',
  `Date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstName`, `lastName`, `username`, `email`, `password`, `city`, `state`, `Date_time`) VALUES
(1, 'DARSHAN', 'PANELIYA', 'Darshan Paneliya', 'darshanpaneliya@gmail.com', '000', '', 'Gujarat', '2022-09-03 12:42:45'),
(2, 'Meet ', 'PANELIYA', 'Meet Paneliya', 'meet@gmail.com', '123', '', 'Gujarat', '2022-09-05 09:10:45'),
(3, 'Tarun', 'Korat', 'Tarun Korat', 'tarun@gmail.com', '000', '', 'Maharastra', '2022-09-05 09:11:31'),
(4, 'kartik', 'bhuva', 'Kartik Bhuva', 'kartik@gmail.com', '000', '', 'Gujarat', '2022-09-05 09:11:47'),
(6, 'Hardik', 'Navadiya', 'Hardik Navdiya', 'hardik@yahoo.com', '101', '', 'Goa', '2022-09-05 09:13:13'),
(7, 'Rajesh', 'Kakadiya', 'RK', 'RK@gmail.com', '000', '', 'Delhi', '2022-09-05 09:13:39'),
(8, 'Bhumika', 'Amipapra', 'Bhumika Amipapra', 'bhumi@gmail.com', '000', '', 'Gujarat', '2022-09-05 09:14:04'),
(9, 'vishal', 'Patel', 'Vishal Patel', 'vishal@gmail.com', '111', '', 'Gujarat', '2022-09-05 09:14:38'),
(10, 'prinshi', 'patel', 'prinshi patel', 'prinshi@gmail.com', '000', '', 'Tamil', '2022-09-10 17:35:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

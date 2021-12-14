-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 10:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insertdeleteedit`
--
CREATE DATABASE IF NOT EXISTS `insertdeleteedit` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `insertdeleteedit`;

-- --------------------------------------------------------

--
-- Table structure for table `insertdeleteedittable`
--

CREATE TABLE `insertdeleteedittable` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertdeleteedittable`
--

INSERT INTO `insertdeleteedittable` (`id`, `firstname`, `lastname`, `email`, `phoneNumber`, `state`) VALUES(3, 'Emma', 'Angy', 'ann@gmail.net', '999999999999', 'Carlos');
INSERT INTO `insertdeleteedittable` (`id`, `firstname`, `lastname`, `email`, `phoneNumber`, `state`) VALUES(4, 'John', 'Mathew', 'James@gmail.com', '10000000000', 'Carlifornia');
INSERT INTO `insertdeleteedittable` (`id`, `firstname`, `lastname`, `email`, `phoneNumber`, `state`) VALUES(5, 'Selena', 'Hellen', 'Sel@gmain.up', '473904879075', 'Arizona');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insertdeleteedittable`
--
ALTER TABLE `insertdeleteedittable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insertdeleteedittable`
--
ALTER TABLE `insertdeleteedittable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

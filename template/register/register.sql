-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2021 at 10:31 PM
-- Server version: 10.2.37-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfinalp_aith`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `age` int(11) NOT NULL,
  `role` text CHARACTER SET utf8 NOT NULL,
  `phone` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `ecname` text CHARACTER SET utf8 NOT NULL,
  `ecphone` text CHARACTER SET utf8 NOT NULL,
  `gender` text CHARACTER SET utf8 NOT NULL,
  `size` text CHARACTER SET utf8 NOT NULL,
  `sat` date NOT NULL,
  `sun` date NOT NULL,
  `needs` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `register` (`id`, `name`, `age`, `role`, `phone`, `email`, `ecname`, `ecphone`, `gender`, `size`, `sat`, `sun`, `needs`) VALUES



-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

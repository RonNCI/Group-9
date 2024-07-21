-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 08:32 PM
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
-- Database: `book_db`
--
CREATE DATABASE IF NOT EXISTS `book_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `book_db`;

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

DROP TABLE IF EXISTS `book_form`;
CREATE TABLE `book_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(7, '', '', '', '', '', 0, '0000-00-00', '0000-00-00'),
(8, '', '', '', '', '', 0, '0000-00-00', '0000-00-00'),
(5, '', '', '', '', '', 0, '0000-00-00', '0000-00-00'),
(6, 'ron', 'ron@mail.com', '123456789', '123 dublin', 'italy', 1, '2024-07-07', '2024-06-29'),
(4, 'dd', 'test@testmail.com', '324234213', '123 dublin', 'italy', 2, '2024-07-01', '2024-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `jetbirduser`
--

DROP TABLE IF EXISTS `jetbirduser`;
CREATE TABLE `jetbirduser` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jetbirduser`
--

INSERT INTO `jetbirduser` (`userID`, `fullName`, `email`, `password`) VALUES
(1, 'bradpit', 'brad@example.com', '$2y$10$J76xQmoXkxzA0dSGVdnuNOL6ZUW7hB/PpQPDDtfI0hpiWNk0K7aJa'),
(2, 'Ronnel Ynot', 'atronnelynot@gmail.com', '$2y$10$vkk6V6RkGrOmeL0Zxz0lW.1gTwJXcpBLLTwjg4o4Du7wSb/FMxMtK'),
(3, 'Dev', 'x21365301@student.ncirl.ie', '$2y$10$cw2Qf59eiCpQ0.xTjm5y6OnDBZKPm8EyqAJUEJRAFFnEwm3pPaOoa'),
(4, 'Ron', 'ron@mail.com', '$2y$10$FOZgBWg8ECfARNEanmb/geHA9GhwnHs0ZYKFy.F/cNekfWKB1qJyW'),
(5, 'Marie Brun', 'kylian.muller36@bdcimail.com', '$2y$10$/iw7HVIf.g6z5AQq9d3ZGeWtv0QC6dZA0syFs2qbfWMcUsp/0rZsK'),
(6, 'Marie Brun', 'gordonb95@yahoo.com', '$2y$10$a1xzUoFuXrINTDM539Hy1OHu4AxBZ4dlx59QHSnDdh2wT.B5elguu'),
(7, 'Marie Brun', 'brandonfarmer75@outlook.com', '$2y$10$Uq59oR1sU8oNpkDEi6r7uOTByidYTI7BeECUMZ39Qh83vJbetlK8O'),
(8, 'Lizzie Donnelly', 'foster.skiles@bdcimail.com', '$2y$10$Q0OR/c05yFmOgd/9rEnXAOwBftc9CaQCFSq/Pbuc7XA4yHnXHqcCe'),
(9, 'Student', 'student@example.com', '$2y$10$I6Icp3dKJeEsqk2KWR4Vfel8lbzOv5mwey2jKQAXmXfm7NMQqupMC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jetbirduser`
--
ALTER TABLE `jetbirduser`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jetbirduser`
--
ALTER TABLE `jetbirduser`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 10:25 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inote`
--

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `sno` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`sno`, `title`, `description`, `dt`) VALUES
(2, 'React js', 'Market value highhh', '2022-06-14 22:18:59'),
(42, 'JavaScript', 'API in JavaScript is vey imp', '2022-06-16 05:01:51'),
(44, 'php', 'php crud oparation done!', '2022-06-16 05:04:52');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(50) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `email`, `phone`, `gender`, `city`, `time`) VALUES
(1, 'hgtn', 123456, 'nabdkjabd@hmail.com', 1236547895, 'male', 'dgj', '2022-06-19 05:10:33'),
(3, 'fd', 22, 'sd', 12, '', '', '2022-06-19 15:09:50'),
(4, 'zerinsumaya', 4297, 'sumayazerin@gmail.com', 1832696133, '', '', '2022-06-19 15:15:46'),
(5, 'tabid', 0, 'ahhsantabid10@gmail.com', 1791638436, '', '', '2022-06-19 15:17:05'),
(6, 'panna', 25, 'ishammi2020@gmail.com', 125698725, '', '', '2022-06-19 15:18:06'),
(7, 'Taraf', 9, 'syful.dhk@gmail.com', 2147483647, '', '', '2022-06-19 15:19:03'),
(8, 'kabali', 0, 'kabali@gmail.com', 1257896321, '', '', '2022-06-20 00:51:37'),
(9, 'zerinsumaya', 4297, 'ahhsantabid10@gmail.com', 125698725, '', '', '2022-06-20 01:11:27'),
(10, 'zerinsumaya', 4297, 'ahhsantabid10@gmail.com', 2147483647, '', '', '2022-06-20 01:14:04'),
(11, 'panna', 4297, 'ahhsantabid10@gmail.com', 2147483647, '', '', '2022-06-20 01:15:06'),
(12, 'panna', 4297, 'ahhsantabid10@gmail.com', 2147483647, '', '', '2022-06-20 01:15:37'),
(13, 'tabid', 4297, 'ahhsantabid10@gmail.com', 1791638436, '', '', '2022-06-20 01:16:28'),
(14, 'Lalbabu', 71, 'makklkjd', 1715158173, '', '', '2022-06-20 01:23:04'),
(15, 'tanvir', 733, 'tanvir@gmail.com', 1727702289, '', '', '2022-06-20 01:25:22'),
(16, 'bati', 4297, 'bati@gmail.com', 1526398742, '', '', '2022-06-20 03:31:25'),
(17, 'shammi', 123456, 'ishammi200@gmail.com', 1523456789, '', '', '2022-06-20 03:34:25'),
(18, 'ldm', 121, 'kn', 121, 'qjd', 'dw', '2022-06-21 01:15:44'),
(19, 'zerinsumaya', 123123, 'sumayazerin@gmail.com', 0, '', '', '2022-06-21 01:18:46'),
(20, '', 0, '', 0, '', '', '2022-06-21 01:19:50'),
(21, '', 0, 'lla@gmail.com', 0, '', '', '2022-06-21 01:23:11'),
(22, 'lal miya', 123654, 'lal@gmail.com', 0, '', '', '2022-06-21 01:33:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

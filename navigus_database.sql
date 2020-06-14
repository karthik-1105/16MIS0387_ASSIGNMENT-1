-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 12:07 PM
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
-- Database: `id14078738_navigus`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `user_email`) VALUES
(27, 1, '2020-06-14 06:45:13', 'karthikeyan.g663@gmail.com'),
(28, 1, '2020-06-14 06:45:59', 'karthikeyan.g663@gmail.com'),
(29, 6, '2020-06-14 06:54:08', 'geni@gmail.com'),
(41, 10, '2020-06-14 10:09:08', 'k@hotmail.com'),
(42, 2, '2020-06-14 10:10:41', 'admin@gmail.com'),
(44, 10, '2020-06-14 10:41:34', 'k@hotmail.com'),
(49, 10, '2020-06-14 12:47:11', 'k@hotmail.com'),
(50, 10, '2020-06-14 15:12:10', 'k@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_type` enum('master','user') NOT NULL,
  `user_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `user_email`, `user_password`, `user_type`, `user_image`) VALUES
(1, 'karthik', 'karthikeyan.g663@gmail.com', '$2y$10$v0XVu/kKo/ZPAQJCDf0qAu0BtRYzW0RnNg6I/s7JviIRKQP6ljd8y', 'user', '2.png'),
(2, 'ADMIN', 'admin@gmail.com', '$2y$10$mOrytX5t8YQ6Ox7QtenA/upr2JdM7G8sXqgX99D38A72qH6IWTb6i', 'master', '3.png'),
(3, 'k', 'k@hotmail.com', '$2y$10$yHdh6xNFy7Cm41T/LP46O.LZ086MEcJXmubBu2UbtOEor6RcP31ui', 'user', '1.png'),
(5, 'ADMIN', 'admin2@gmail.com', '$2y$10$am09RuFXWWyvywla81JVI.TYFUeRo364BdweiYlJE4HL0nIL57XIO', 'master', '5.png'),
(10, 'karthkeyan', 'k@hotmail.com', '$2y$10$l/GNGizpXVlB1GaFgZf9JOjU.470ThzA8MAwIknItdWafzlSmi1yK', 'user', '1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

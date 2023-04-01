-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 05:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ak`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `host_name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `host_name`, `description`, `date`, `time`, `event_type`, `image`) VALUES
(1, 'Full Stack Web Devlopment', 'B. S. Kulkarni', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut eligendi aspernatur natus amet hic, nisi doloremque excepturi sed libero sunt omnis vel suscipit, tenetur aperiam error veritatis laudantium? Neque, reiciendis?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut eligendi aspernatur natus amet hic, nisi doloremque excepturi sed libero sunt omnis vel suscipit, tenetur aperiam error veritatis laudantium? Neque, reiciendis?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut eligendi aspernatur natus amet hic, nisi doloremque excepturi sed libero sunt omnis vel suscipit, tenetur aperiam error veritatis laudantium? Neque, reiciendis?', '2023-02-28', '12:30:00', 'seminar', 'seminar1.jpg'),
(2, 'Big Data Workshop', 'Dr. Arun K. Trangirala', 'Big data primarily refers to data sets that are too large or complex to be dealt with by traditional data-processing application software. Data with many entries (rows) offer greater statistical power, while data with higher complexity (more attributes or columns) may lead to a higher false discovery rate.[2] Though used sometimes loosely partly because of a lack of formal definition, the interpretation that seems to best describe big data is the one associated with large body of information that we could not comprehend when used only in smaller amounts.', '2023-03-03', '11:00:00', 'seminar', 'seminar2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `reg_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` varchar(100) NOT NULL,
  `prn` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `attendance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`reg_id`, `id`, `user_id`, `name`, `email`, `number`, `prn`, `class`, `year`, `attendance`) VALUES
(1, 0, 1, 'user', 'user@gmail.com', '1234567890', '1234567890', 'bscit', 'first year', 'Present'),
(2, 0, 1, 'user1', 'user1@gmail.com', '1234567890', '1234567890', 'bca', 'first year', 'Present'),
(3, 0, 1, 'user2', 'user2@gmail.com', '1234567890', '1234567890', 'bcs', 'first year', 'Absent'),
(4, 0, 1, 'user3', 'user3@gmail.com', '1234567890', '1234567890', 'ba', 'first year', 'Present'),
(5, 0, 1, 'user4', 'user4@gmail.com', '1234567890', '1234567890', 'bba', 'first year', 'Present'),
(6, 0, 1, 'user5', 'user5@gmail.com', '1234567890', '1234567890', 'bsc', 'first year', 'Absent'),
(7, 0, 1, 'ak', 'ak@gmail.com', '1234567890', '1234567890', 'bscit', 'third year', 'Absent'),
(11, 2, 1, 'user', 'user@gmail.com', '1234567890', '1234567890', 'bscit', 'first year', 'Present'),
(12, 2, 1, 'user1', 'user1@gmail.com', '1234567890', '1234567890', 'bscit', 'second year', 'Absent'),
(13, 2, 1, 'user2', 'user2@gmail.com', '1234567890', '1234567890', 'bscit', 'third year', 'Present'),
(14, 2, 1, 'user3', 'user3@gmail.com', '1234567890', '1234567890', 'bca', 'first year', 'Present'),
(15, 2, 1, 'user4', 'user4@gmail.com', '1234567890', '1234567890', 'bca', 'second year', 'Absent'),
(16, 2, 1, 'user5', 'user5@gmail.com', '1234567890', '1234567890', 'bca', 'third year', 'Present'),
(17, 2, 1, 'user6', 'user6@gmail.com', '1234567890', '1234567890', 'bcs', 'first year', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'user', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(2, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

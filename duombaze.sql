-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2018 at 11:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duombaze`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_german2_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_german2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `surname`, `email`) VALUES
(10, 'vardenis', 'pavardenis', 'vard.pavard@yahoo.com'),
(11, 'auksinis', 'kardas', 'goldensword@gmail.com'),
(12, 'john', 'doe', 'jon.snow@got.com');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `student_no` varchar(10) DEFAULT NULL,
  `module_code` varchar(8) DEFAULT NULL,
  `mark` int(11) DEFAULT NULL,
  `parent_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `student_no`, `module_code`, `mark`, `parent_id`) VALUES
(1, '20060101', 'CM0001', 80, 0),
(2, '20060101', 'CM0002', 65, 0),
(3, '20060101', 'CM0003', 50, 0),
(4, '20060102', 'CM0001', 75, 0),
(5, '20060102', 'CM0003', 45, 0),
(6, '20060102', 'CM0004', 70, 0),
(7, '20060103', 'CM0001', 60, 0),
(8, '20060103', 'CM0002', 75, 0),
(9, '20060103', 'CM0004', 60, 0),
(10, '20060104', 'CM0001', 55, 0),
(11, '20060104', 'CM0002', 40, 0),
(12, '20060104', 'CM0003', 45, 0),
(13, '20060105', 'CM0001', 55, 0),
(14, '20060105', 'CM0002', 50, 0),
(15, '20060105', 'CM0004', 65, 0);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `module_code` varchar(8) DEFAULT NULL,
  `module_name` varchar(20) DEFAULT NULL,
  `parent_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `module_code`, `module_name`, `parent_id`) VALUES
(1, 'CM0001', 'Databases', 0),
(2, 'CM0002', 'Programming Language', 0),
(3, 'CM0003', 'Operating Systems', 0),
(4, 'CM0004', 'Graphics', 0);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_german2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_german2_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_german2_ci NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `parent_id`) VALUES
(1, 'biblija', 'smegenu plovimas', 10);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_no` varchar(10) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `forename` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_no`, `surname`, `forename`) VALUES
(1, '20060101', 'Dickens', 'Charles'),
(2, '20060102', 'ApGwilym', 'Dafydd'),
(3, '20060103', 'Zola', 'Emile'),
(4, '20060104', 'Mann', 'Thomas'),
(5, '20060105', 'Stevenson', 'Robert');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_german2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_german2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_german2_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_german2_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_foreign` (`parent_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `author_foreign` FOREIGN KEY (`parent_id`) REFERENCES `author` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

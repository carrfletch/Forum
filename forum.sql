-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 07:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `post_description` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `id`, `post_description`, `created`) VALUES
(1, 1, '0', '2020-02-25 06:21:09'),
(2, 1, '0', '2020-02-25 06:21:36'),
(3, 1, '0', '2020-02-25 06:22:05'),
(4, 1, '0', '2020-02-25 06:22:26'),
(5, 1, '0', '2020-02-25 06:22:28'),
(6, 1, '0', '2020-02-25 06:22:37'),
(7, 1, '0', '2020-02-25 06:22:55'),
(8, 1, '0', '2020-02-25 06:22:57'),
(9, 1, '0', '2020-02-25 06:23:02'),
(10, 1, '0', '2020-02-25 06:23:25'),
(11, 1, '0', '2020-02-25 06:23:30'),
(12, 1, 'asdsad', '2020-02-25 06:24:04'),
(13, 1, 'asdsad', '2020-02-25 06:28:14'),
(14, 1, 'asdsad', '2020-02-25 06:28:15'),
(15, 1, 'asdsad', '2020-02-25 06:28:41'),
(16, 1, 'asdsad', '2020-02-25 06:28:58'),
(17, 1, 'asdsad', '2020-02-25 06:29:11'),
(18, 1, 'asdsad', '2020-02-25 06:31:11'),
(19, 1, 'asdsad', '2020-02-25 06:31:33'),
(20, 1, 'asdsad', '2020-02-25 06:33:00'),
(21, 1, 'asdsad', '2020-02-25 06:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'carr', 'carr', 'carr@yahoo.com', 'carrfletch', '09192608123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

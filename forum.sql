-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 12:06 PM
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
  `id` varchar(255) NOT NULL,
  `post_description` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `id`, `post_description`, `created`) VALUES
(1, '0', 'sadsadasd', '2020-02-19 10:34:09'),
(2, '0', 'carr', '2020-02-19 10:34:14'),
(3, '0', 'carr', '2020-02-19 10:35:28'),
(4, '0', 'asdsadsadasdsa', '2020-02-19 10:35:33'),
(5, '0', 'asdsadsadasdsa', '2020-02-19 10:36:19'),
(6, '0', 'sadasd', '2020-02-19 10:36:23'),
(7, '0', 'sadsadasd', '2020-02-19 10:36:28'),
(8, '0', 'sadsadasd', '2020-02-19 10:38:59'),
(9, '0', 'sadsadasd', '2020-02-19 10:39:23'),
(10, '0', 'sadsadasd', '2020-02-19 10:39:36'),
(11, '0', 'sdsd', '2020-02-19 10:39:39'),
(12, '0', 'sdsd', '2020-02-19 10:40:03'),
(13, '0', 'sdsd', '2020-02-19 10:47:35'),
(14, '0', 'sdsd', '2020-02-19 10:51:36'),
(15, '0', 'sdsd', '2020-02-19 10:52:13'),
(16, '0', 'sdsd', '2020-02-19 10:52:17'),
(17, '0', 'dasdsa', '2020-02-19 10:52:19'),
(18, '0', 'asdsadas', '2020-02-19 10:52:23'),
(19, '1', 'asdsadas', '2020-02-19 11:00:19'),
(20, '', 'asdsad', '2020-02-19 10:58:07'),
(21, '', 'asdsad', '2020-02-19 10:58:24'),
(22, '', 'adasdsad', '2020-02-19 10:58:26'),
(23, '', 'asdasdas', '2020-02-19 10:59:39'),
(24, '', 'asdsadas', '2020-02-19 10:59:42'),
(25, '', 'asdsadas', '2020-02-19 11:00:30'),
(26, '', 'asdsadas', '2020-02-19 11:01:35'),
(27, '', 'sadsadasd', '2020-02-19 11:01:38'),
(28, '', 'carr', '2020-02-19 11:01:42'),
(29, '', 'carr', '2020-02-19 11:05:09'),
(30, '', 'adasdad', '2020-02-19 11:05:12'),
(31, '', 'asdsadasd', '2020-02-19 11:05:16');

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
(1, 'carr', 'carr', 'carr@yahoo.com', 'carrfletch', '09192608123'),
(2, 'carr', 'carr', 'carr@yahoo.com', 'carr', 'carr');

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
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

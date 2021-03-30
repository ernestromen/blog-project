-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 02:37 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icar`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `article`, `date`) VALUES
(1, 1, 'Avi First Demo Post', 'Bla bla bla bla text bla bla.', '2019-10-03 16:03:45'),
(2, 3, 'Vered love popeye', 'Bitun is the best ever!', '2019-10-03 16:04:48'),
(3, 1, 'Avi second post', 'My text demo bla bla', '2019-10-03 16:13:48'),
(4, 1, 'demo', 'My article demo.\r\nSecond line bla bla', '2019-10-03 16:14:48'),
(6, 1, 'פוסט לדוגמה בעברית', 'טקסט בעברית', '2019-10-06 09:40:54'),
(7, 1, 'Good Buy 2', '123 v2', '2019-10-06 11:08:39'),
(9, 1, '456', 'Hello', '2019-10-06 11:59:59'),
(10, 6, 'Hello this is shimi', 'Bla bla text bla.', '2019-10-10 12:25:41'),
(11, 1, 'dgfbcdf', 'gdfgdfg', '2019-10-10 14:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Avi Cohen', 'avi@gmail.com', '$2y$10$SslzFAXCEgVINpXJzVlQ9uMRw28.uld.5WX.ryncd9RaypJOQO4gW'),
(2, 'Moshe Levi', 'moshe@gmail.com', '$2y$10$SslzFAXCEgVINpXJzVlQ9uMRw28.uld.5WX.ryncd9RaypJOQO4gW'),
(3, 'Vered Bitun', 'vered@gmail.com', '$2y$10$SslzFAXCEgVINpXJzVlQ9uMRw28.uld.5WX.ryncd9RaypJOQO4gW'),
(4, 'Popeye', 'popeye@gmail.com', '$2y$10$h4.TiYgOTNY5ZQ9H.lUkAOtVdVxIXDbzBqP5dhHQN5TSXt1G2EEG6'),
(5, 'foo', 'foo@gmail.com', '$2y$10$r7sqtqbA1GPWpeKlsby6ouyex5oAt6aXI4OeijKfnQ0qDRmNMaRbi'),
(6, 'Shimi Shim', 'shimi@gmail.com', '$2y$10$5nLBq.c9nfmw5NUqZ7v.5ONytuEXf1n5hWh4MWzig3sTsYBe6iJy6'),
(7, 'Rami Levi', 'rami@gmail.com', '$2y$10$x644TseHHYJAZqWFLsi45euzToc46dysQPDTzfYyWt/mp4sPwElMu'),
(8, 'Dana Frank', 'dana@yahoo.com', '$2y$10$UG2ZlKCMylIUlqz09C8lEOvfjAGQtfYlR/6sbP2BP40ADm/OY2Nsy');

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE `users_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `profile_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`id`, `user_id`, `profile_image`) VALUES
(1, 1, 'default_profile.png'),
(2, 2, 'default_profile.png'),
(3, 3, 'default_profile.png'),
(4, 4, 'default_profile.png'),
(5, 5, 'default_profile.png'),
(6, 6, '2019.10.10.11.24.10-shimi.png'),
(7, 7, 'default_profile.png'),
(8, 8, '2019.10.10.13.33.56-dana.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users_profile`
--
ALTER TABLE `users_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_profile`
--
ALTER TABLE `users_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 07:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `friend_req`
--

CREATE TABLE `friend_req` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `status` varchar(225) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friend_req`
--

INSERT INTO `friend_req` (`id`, `from_id`, `to_id`, `status`) VALUES
(3, 13, 11, 'accepted'),
(4, 13, 16, 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`, `user_time`) VALUES
(8, 10, 16, '2020-11-17 05:14:21'),
(9, 11, 16, '2020-11-17 05:14:48'),
(10, 13, 13, '2020-11-18 05:13:37'),
(11, 13, 13, '2020-11-18 05:13:37'),
(12, 13, 13, '2020-11-18 05:13:37'),
(13, 13, 13, '2020-11-18 05:13:37'),
(14, 13, 13, '2020-11-18 05:13:37'),
(15, 13, 13, '2020-11-18 05:13:37'),
(16, 13, 13, '2020-11-18 05:13:37'),
(18, 3, 13, '2020-11-18 05:26:52'),
(19, 5, 13, '2020-11-18 06:21:39'),
(20, 8, 13, '2020-11-19 04:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_pfp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_email`, `user_name`, `user_password`, `user_pfp`) VALUES
(11, 'solankeanushka123@gmail.com', 'Anushka Solanke', 'anuvirat', 'IMG_20190222_153847.jpg'),
(12, 'kirdesh2006@gmail.com', 'Kiran Deshmukh', 'kiran', 'IMG_20181009_162958.jpg'),
(13, 'smandlegend786@gmail.com', 'Soham Deshmukh', 'soham', '117823340_315169253091815_1267961117137640549_n.jpg'),
(15, 'kaildesh2001@gmail.com', 'Kailash Deshmukh', 'kailash', 'IMG_20181009_163611.jpg'),
(16, 'anujbidkar@gmail.com', 'Anuj Bidkar', 'anuj', '34202323.jpg'),
(17, 'kanu@gmail.com', 'Kanishk Solanke', 'kanu', 'IMG_20181224_120631.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(225) NOT NULL,
  `post_img` varchar(225) NOT NULL,
  `post_des` varchar(225) NOT NULL,
  `post_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post_title`, `post_img`, `post_des`, `post_date`) VALUES
(3, 13, 'test 2', 'IMG_20190130_174714.jpg', 'this is test 2', '2020-11-10'),
(4, 12, 'Food', 'IMG_20181118_134353.jpg', 'Always Have A Healthy Diet', '2020-11-10'),
(5, 13, 'Test 2', 'IMG_20190201_080035.jpg', 'This is a Test 2 in Facebook', '2020-11-10'),
(6, 15, 'MY NEW POST', 'IMG_20190420_152910.jpg', 'This is my first post in this website', '2020-11-10'),
(8, 17, 'kanyaa', 'IMG_20190123_080520.jpg', 'he is kannyaa', '2020-11-13'),
(9, 15, 'post 2', 'IMG_20181224_121325.jpg', 'this is my 2nd post', '2020-11-16'),
(10, 16, 'Posty 1', 'IMG_20190123_081708.jpg', 'This is the first post', '2020-11-17'),
(11, 16, 'post 2', 'IMG_20181224_120631.jpg', 'post 2', '2020-11-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friend_req`
--
ALTER TABLE `friend_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friend_req`
--
ALTER TABLE `friend_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2017 at 02:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajaximageuplaod`
--

-- --------------------------------------------------------

--
-- Table structure for table `imgupload`
--

CREATE TABLE `imgupload` (
  `img_id` int(11) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `uploadtm` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgupload`
--

INSERT INTO `imgupload` (`img_id`, `image_path`, `uploadtm`) VALUES
(10, 'pic/Chrysanthemum.jpg', '2017-01-17 14:13:30'),
(11, 'pic/Jellyfish.jpg', '2017-01-17 14:13:38'),
(12, 'pic/Penguins.jpg', '2017-01-17 14:13:48'),
(13, 'pic/Koala.jpg', '2017-01-17 14:17:34'),
(14, 'pic/Penguins.jpg', '2017-01-17 14:17:37'),
(15, 'pic/Tulips.jpg', '2017-01-17 14:17:39'),
(16, 'pic/Lighthouse.jpg', '2017-01-17 14:18:18'),
(17, 'pic/Koala.jpg', '2017-01-17 14:21:00'),
(18, 'pic/Penguins.jpg', '2017-01-17 14:21:03'),
(19, 'pic/Lighthouse.jpg', '2017-01-17 14:21:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imgupload`
--
ALTER TABLE `imgupload`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imgupload`
--
ALTER TABLE `imgupload`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

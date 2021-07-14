-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2021 at 05:35 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_updated_on` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `added_on`, `last_updated_on`) VALUES
(1, 'admin@gmail.com', 'admin123', '2021-07-13 20:37:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `property_deal` varchar(255) NOT NULL,
  `property_condition` varchar(255) NOT NULL,
  `property_availability` varchar(255) NOT NULL,
  `property_availability_type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_updated_on` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `property_type`, `property_deal`, `property_condition`, `property_availability`, `property_availability_type`, `location`, `added_on`, `last_updated_on`) VALUES
(8, 'residential', 'Rent', 'naket', '2 BHK', 'High Rise Apartment', 'makarba', '2021-06-26 13:26:16', '2021-06-26 13:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `property_detailes`
--

CREATE TABLE `property_detailes` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_detailes`
--

INSERT INTO `property_detailes` (`id`, `property_id`, `keyword`, `data`) VALUES
(23, 8, 'floor', '2nd / 7'),
(24, 8, 'rent', '17000');

-- --------------------------------------------------------

--
-- Table structure for table `property_stream_img`
--

CREATE TABLE `property_stream_img` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_stream_img`
--

INSERT INTO `property_stream_img` (`id`, `property_id`, `filename`) VALUES
(44, 8, '2021-06-26-20-39-040.jpg'),
(45, 8, '2021-06-26-20-39-041.jpg'),
(46, 8, '2021-06-26-20-39-042.jpg'),
(47, 8, '2021-06-26-20-39-043.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property_stream_videos`
--

CREATE TABLE `property_stream_videos` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_detailes`
--
ALTER TABLE `property_detailes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_stream_img`
--
ALTER TABLE `property_stream_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_stream_videos`
--
ALTER TABLE `property_stream_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property_detailes`
--
ALTER TABLE `property_detailes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `property_stream_img`
--
ALTER TABLE `property_stream_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `property_stream_videos`
--
ALTER TABLE `property_stream_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

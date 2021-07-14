-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2021 at 09:49 PM
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
-- Database: `rentalways`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `property_type` int(11) NOT NULL,
  `availability` int(11) NOT NULL,
  `availability_type` int(11) NOT NULL,
  `owner_name` int(11) NOT NULL,
  `owner_mobileno` int(11) NOT NULL,
  `added_on` int(11) NOT NULL,
  `last_updated_on` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prop_detailes`
--

CREATE TABLE `prop_detailes` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_key` varchar(255) NOT NULL,
  `p_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prop_img_vid`
--

CREATE TABLE `prop_img_vid` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_stream` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prop_location`
--

CREATE TABLE `prop_location` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `full_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prop_detailes`
--
ALTER TABLE `prop_detailes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prop_img_vid`
--
ALTER TABLE `prop_img_vid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prop_location`
--
ALTER TABLE `prop_location`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prop_detailes`
--
ALTER TABLE `prop_detailes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prop_img_vid`
--
ALTER TABLE `prop_img_vid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prop_location`
--
ALTER TABLE `prop_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

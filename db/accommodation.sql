-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 01:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujaccommodations`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `accommodation` (
  `id` int(11) NOT NULL,
  `PropertyName` varchar(200) NOT NULL,
  `ContactEmail` varchar(200) NOT NULL,
  `ContactName` varchar(200) NOT NULL,
  `ContactNumber` varchar(200) NOT NULL,
  `Campus` varchar(200) NOT NULL,
  `CapacityApproved` int(11) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `accommodation` (`id`, `PropertyName`, `ContactEmail`, `ContactName`, `ContactNumber`, `Campus`, `CapacityApproved`, `Address`) VALUES
(1, '17 ON PUTNEY', 'fatimamoosa91@gmail.com', 'Fatima Moosa', '0845848333', 'APK', 10, '17 Putney Road, Rossmore,ERF 213 Johannesburg, 2021'),
(2, '17 ON PUTNEY', 'fatimamoosa91@gmail.com', 'Fatima Moosa', '0845848333', 'APK', 8, '107 St Swithins Avenue, Auckland Park, ERF 688 Johannesburg, 2092');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

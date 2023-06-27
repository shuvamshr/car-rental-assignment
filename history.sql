-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 07:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment2`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `renter_id` int(11) NOT NULL,
  `renter_name` text NOT NULL,
  `renter_address` text NOT NULL,
  `renter_payment` text NOT NULL,
  `renter_vehicle` text NOT NULL,
  `renter_days` int(11) NOT NULL,
  `renter_bond` int(11) NOT NULL,
  `renter_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`renter_id`, `renter_name`, `renter_address`, `renter_payment`, `renter_vehicle`, `renter_days`, `renter_bond`, `renter_date`) VALUES
(10, 'Shuvam Shrestha', 'Nancarrow Ave, Rhodes, NSW', 'Credit Card', 'Toyota Rav4 2020', 1, 300, '2023-06-01'),
(11, 'Shuvam Shrestha', 'Nancarrow Ave, Rhodes, NSW', 'Credit Card', 'Honda Civic 2019', 1, 300, '2023-06-01'),
(12, 'Shuvam Shrestha', 'Nancarrow Ave, Rhodes, NSW', 'Credit Card', 'Jeep Cherokee 2019', 1, 300, '2023-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`renter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `renter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

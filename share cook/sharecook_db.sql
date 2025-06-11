-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2025 at 07:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharecook_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`) VALUES
(1, 'kunal', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

CREATE TABLE `product1` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product1`
--

INSERT INTO `product1` (`id`, `name`, `image`) VALUES
(1, '0', 'uploads/chocolatecake.jpeg'),
(2, '0', 'uploads/chocolatecake.jpeg'),
(3, '0', 'uploads/chocolatecake.jpeg'),
(4, 'darshan', 'uploads/chocolatecake.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE `product2` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`id`, `name`, `image`) VALUES
(1, 'kunal', 'uploads/chocolatecake.jpeg'),
(2, 'kunal', 'uploads/chocolatecake.jpeg'),
(3, 'chocolate magic', 'uploads/chocolatecake.jpeg'),
(4, 'chocolate', 'uploads/chocolatecake.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product3`
--

CREATE TABLE `product3` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product3`
--

INSERT INTO `product3` (`id`, `name`, `image`) VALUES
(1, 'kunal', 'uploads/chocolatecake.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`) VALUES
(13, 'kunal', 'uploads/chocolatecake.jpeg'),
(14, 'kunal', 'uploads/chocolatecake.jpeg'),
(15, 'kunal', 'uploads/chocolatecake.jpeg'),
(16, 'kunal', 'uploads/chocolatecake.jpeg'),
(17, 'kunal', 'uploads/chocolatecake.jpeg'),
(18, 'kunal', 'uploads/chocolatecake.jpeg'),
(19, 'kunal', 'uploads/chocolatecake.jpeg'),
(20, 'kunal', 'uploads/chocolatecake.jpeg'),
(21, 'kunal', 'uploads/chocolatecake.jpeg'),
(22, 'kunal', 'uploads/chocolatecake.jpeg'),
(23, 'kunal', 'uploads/chocolatecake.jpeg'),
(24, 'kunal', 'uploads/chocolatecake.jpeg'),
(25, 'kunal', 'uploads/chocolatecake.jpeg'),
(26, 'kunal', 'uploads/chocolatecake.jpeg'),
(27, 'kunal', 'uploads/chocolatecake.jpeg'),
(28, 'kunal', 'uploads/chocolatecake.jpeg'),
(29, 'kunal', 'uploads/chocolatecake.jpeg'),
(30, 'kunal', 'uploads/chocolatecake.jpeg'),
(31, 'kunal', 'uploads/chocolatecake.jpeg'),
(32, 'kunal', 'uploads/chocolatecake.jpeg'),
(33, 'kunal', 'uploads/chocolatecake.jpeg'),
(34, 'kunal', 'uploads/chocolatecake.jpeg'),
(35, 'kunal', 'uploads/chocolatecake.jpeg'),
(36, 'kunal', 'uploads/chocolatecake.jpeg'),
(37, 'kunal', 'uploads/chocolatecake.jpeg'),
(38, 'kunal', 'uploads/chocolatecake.jpeg'),
(39, 'kunal', 'uploads/chocolatecake.jpeg'),
(40, 'kunal', 'uploads/chocolatecake.jpeg'),
(41, 'mango', 'uploads/chocolatecake.jpeg'),
(42, 'chocolate', 'uploads/chocolatecake.jpeg'),
(43, 'chocolate', 'uploads/chocolatecake.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `re`
--

CREATE TABLE `re` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `confirm` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `re`
--

INSERT INTO `re` (`id`, `name`, `phone`, `email`, `password`, `confirm`) VALUES
(11, 'kunal', 1234567890, 'Bagadekunal4@gmail.com', '12345678', '12345678'),
(12, 'kunal bagade', 1234567890, 'kunal@gmail.com', 'poiuytre', 'poiuytre'),
(13, 'kunal ', 2147483647, 'Bagadekunal4@gmail.com', '12345678', '12345678'),
(14, 'poonam', 2147483647, 'Bagadekunal4@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `title`, `summary`, `img`) VALUES
(1, 'kunal bagade', 'mango ', 'sjd nvkvfjhhbskvbsib sidvbihs isbdvksbv ksdib vlijajd   kunal ali nala  dajca', 'uploads/chocolatecake.jpeg'),
(2, 'kunal bagade', 'mango ', 'sjd nvkvfjhhbskvbsib sidvbihs isbdvksbv ksdib vlijajd   kunal ali nala  dajca', 'uploads/chocolatecake.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product1`
--
ALTER TABLE `product1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product3`
--
ALTER TABLE `product3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `re`
--
ALTER TABLE `re`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product1`
--
ALTER TABLE `product1`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product2`
--
ALTER TABLE `product2`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product3`
--
ALTER TABLE `product3`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `re`
--
ALTER TABLE `re`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

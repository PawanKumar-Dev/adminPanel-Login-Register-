-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 08:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`id`, `username`, `email`, `mobile`, `password`, `token`, `status`, `created_at`) VALUES
(24, 'pk56', 'pk687376@gmail.com', '4564644455', '$2y$10$tQyPAUqpVMIuSA9.PlHmZeZq7rpcqI0etQk0l7rxu9HjpQzfN4V5.', 'd47545869722348a0284ba3a7ba1ed', 'active', '2022-03-12 15:59:21'),
(23, 'pawan', 'pk687376@gmail.com', '1258416464', '$2y$10$ErcuI8tTIZ0DfcHhvC9MRuo..17xW6wc5WD7kp5aHnc.jLAJ8yp7G', 'bcc1b9c42ca6ef92f1a83f1733dd56', 'active', '2022-03-12 15:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pro_name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `pro_image` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pro_name`, `price`, `category`, `pro_image`, `created_at`) VALUES
(1, 'Glass', 455, 'Medical', 'pavol.jpg', '2022-03-12'),
(2, 'Clothes', 478, 'Garment', 'surface.jpg', '2022-03-12'),
(3, 'Laptop', 14788, 'Electronics', 'pavol.jpg', '2022-03-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindetails`
--
ALTER TABLE `admindetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

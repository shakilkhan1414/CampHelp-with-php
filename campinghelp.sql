-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 03:06 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campinghelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `ordered_by` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `ordered_by`, `product_id`, `date`) VALUES
(1, '1', '3', '2022-02-24'),
(2, '1', '1', '2022-02-26'),
(3, '1', '2', '2022-02-25'),
(4, '2', '3', '2022-01-05'),
(5, '1', '3', '2022-02-16'),
(6, '1', '3', '2022-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` int(20) NOT NULL,
  `available_time` varchar(20) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `available_time`, `availability`, `image`) VALUES
(1, 'Tent for 4 pax', 'A tent is a movable, lightweight shelter which uses thin fabric to protect people from wind, rain and from the cold.', 24, '24 hour', 'yes', 'tent.jpg'),
(2, 'BBQ set equipment', 'They can also be used for grilling, re-heating and frying; perfect for any kind of barbecue parties and events. Foldable Or Portable Barbecue Grill Set.', 10, '20 hour', 'yes', 'bbq.jpg'),
(3, 'Sleeping Bag', 'A sleeping bag is an insulated covering for a person, essentially a lightweight quilt that can be closed with a zipper or similar means to form a tube, which functions as lightweight, portable bedding in situations where a person is sleeping outdoors.', 30, '2 days', 'yes', 'sleepingbag.jpg'),
(6, 'demo', 'demo', 24, 'demo', 'demo', 'demo'),
(7, 'demo', 'demo', 10, 'demo', 'demo', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Tahmid', 'tahmid@gmail.com', 'tahmid123', 'user'),
(2, 'Riad Opu', 'khan@gmail.com', 'Opu', 'user'),
(3, 'Saba Ahmed', 'rafid@gmail.com', 'pass', 'user'),
(4, 'ds', 'tahmid2@gmail.com', 'tahmid2', 'user'),
(5, 'admin', 'admin@gmail.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

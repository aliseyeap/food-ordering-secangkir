-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2025 at 09:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee-blend`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `adminname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `adminname`, `email`, `password`, `created_at`) VALUES
(1, 'admin.first', 'admin.first@gmail.com', '$2y$10$nlhdvRV2AtBVcGwKkSzBM.qIh3rVVGzlyLDWHvNge9.8ZMPY9ZvMi', '2023-05-06 13:15:43'),
(2, 'second.admin', 'second.admin@gmail.com', '$2y$10$Ea4yoZWFG1Xa/2A4gKBBzOIRzqiPLtKGTSrzPzznZdAXGA/Q6PUty', '2023-05-06 13:59:22'),
(3, 'Alise', 'aliseyeap75@gmail.com', '$2y$10$zF6HKjTPNeAwDYTMP1dmU.JlfDJoRkHvULtzdQoypjvpRnOQwfDBK', '2025-02-23 06:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Pending',
  `user_id` int(7) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `first_name`, `last_name`, `date`, `time`, `phone`, `message`, `status`, `user_id`, `created_at`) VALUES
(17, 'Small', 'Test', '2/23/2025', '12:00am', '1234567890', '11121431243qq', 'Done', 8, '2025-02-22 09:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `pro_id` int(10) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `image`, `price`, `pro_id`, `description`, `quantity`, `user_id`, `created_at`) VALUES
(13, 'Ice Coffee', 'menu-2.jpg', '7', 2, 'A small river named Duden flows by their place and supplies', 1, 3, '2023-05-07 10:56:31'),
(14, 'Coffe Capuccino', 'menu-3.jpg', '6', 1, 'A small river named Duden flows by their place and supplies', 1, 3, '2023-05-07 10:59:55'),
(15, 'Ice Coffee', 'menu-2.jpg', '7', 2, 'A small river named Duden flows by their place and supplies', 3, 4, '2025-02-22 10:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `town` varchar(200) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` varchar(200) NOT NULL,
  `total_price` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `state`, `street_address`, `town`, `zip_code`, `phone`, `user_id`, `status`, `total_price`, `created_at`) VALUES
(5, 'Small', 'Test', 'Kedah', '21284', 'Alor Setar', '06000', '1234567890', 8, 'Delivered', 31, '2025-02-22 15:38:10'),
(6, 'esdrtthgnbdgfs', 'fgdhnjd', 'Selangor', 'dfsghnbdg', 'dngfhdghn', '06000', '1234567890', 8, 'Pending', 52, '2025-02-23 05:21:50'),
(7, 'Yeap', 'RX', 'Kedah', '267', 'Alor Setar', '06400', '01233456789', 8, 'Delivered', 65, '2025-02-25 10:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `type` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `description`, `price`, `type`, `created_at`) VALUES
(1, 'Capuccino', 'menu-3.jpg', 'A balanced mix of espresso, steamed milk, and frothy milk.', '10', 'drink', '2023-05-04 10:40:16'),
(2, 'Cold Brew', 'menu-2.jpg', 'Smooth, less acidic coffee brewed cold.', '12', 'drink', '2023-05-04 10:40:16'),
(3, 'Hot Cake Honey', 'dessert-1.jpg', 'Soft, fluffy hotcakes drizzled with golden honey.', '14', 'dessert', '2023-05-06 09:08:34'),
(4, 'Pancake', 'dessert-2.jpg', 'Light and airy pancakes served with butter and syrup.\n', '9', 'dessert', '2023-05-06 09:08:34'),
(5, 'Vienna Coffee', 'drink-4.jpg', 'Espresso topped with whipped cream.', '16', 'drink', '2025-02-23 07:34:38'),
(6, 'Turkish Coffee', 'drink-1.jpg', 'A strong, unfiltered coffee brewed in a cezve.', '15', 'drink', '2025-02-23 07:43:22'),
(7, 'Flat White', 'drink-2.jpg', 'A stronger, smoother latte with less foam.', '11', 'drink', '2025-02-23 07:46:29'),
(8, 'Macchiato', 'drink-3.jpg', 'Espresso with a small amount of milk foam.', '14', 'drink', '2025-02-23 07:50:18'),
(9, 'Tiramisu', 'dessert-3.jpg', 'Espresso-soaked sponge, mascarpone, and cocoa.', '18', 'dessert', '2025-02-23 07:58:17'),
(10, 'Cheesecake', 'dessert-4.jpg', 'Creamy cheese filling on a biscuit base.', '15', 'dessert', '2025-02-23 07:59:21'),
(11, 'Brownies', 'dessert-5.jpg', 'Rich, fudgy chocolate squares.', '12', 'dessert', '2025-02-23 08:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) NOT NULL,
  `review` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review`, `username`, `created_at`) VALUES
(1, 'I very love the ambiance at Secangkir Coopitiam Cafe! The rustic decor and warm lighting make it the perfect spot to relax. Their signature Kopi Kaw is a must-try—rich, smooth, and full of flavor', 'Lisa M.', '2023-05-06 10:42:11'),
(2, 'The Nasi Lemak Ayam Berempah was incredibly flavorful, and the sambal had the perfect balance of sweet and spicy', 'Amin R.', '2023-05-06 10:45:39'),
(3, 'I’ve tried roti bakar at many cafes, but Secangkir Coopitiam does it best! The butter kaya toast was crispy on the outside and soft inside—absolutely perfect', 'Nadia T.', '2023-05-06 10:42:11'),
(4, 'This cafe is a hidden gem! The menu has a great mix of traditional and modern flavors. I loved the Char Kuey Teow, which had the perfect wok hei aroma', 'Jonathan K.', '2023-05-06 10:45:39'),
(6, 'Very niceee', 'AI210338', '2025-02-23 08:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(3, 'user2@gmail.com', 'user2@gmail.com', '$2y$10$nlhdvRV2AtBVcGwKkSzBM.qIh3rVVGzlyLDWHvNge9.8ZMPY9ZvMi', '2023-05-02 12:00:10'),
(8, 'AI210338', 'ai210338@siswa.uthm.edu.my', '$2y$10$y88mtgOXPh2uBjR8Duqw0Os3EXzbyU41FnrRWVu5K1WLoqUYjqKdq', '2025-02-22 14:22:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

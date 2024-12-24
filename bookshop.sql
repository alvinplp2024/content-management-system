-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2024 at 11:00 AM
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
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'ALVIN', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `link` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `link`) VALUES
(1, 'Programming', 'py_read.php'),
(2, 'Web Design', 'wd_read.php'),
(3, 'Mobile', 'ma_read.php'),
(4, 'Data Science', 'data_read.php'),
(5, 'Visual Basic', 'vb_read.php'),
(6, 'Data Structure', 'ds_read.php'),
(7, 'AI and ML', 'ml_read.php');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `address`, `phone`, `email`, `ip_address`, `password`) VALUES
(2, 'alvin', 'alvin', '+254700921906', 'alvinondieki5@gmail.com', '::1', '$2y$10$pnvrd3ozFqBC8swyOke6oOntNw4SZOzt9.GtGGfaOd0rlVWN3PoNS');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(30) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `title`, `description`, `keyword`, `category`, `image`, `author`, `publisher`, `price`, `status`) VALUES
(1, 'Data structures and algorithms', 'This book gives a detailed explanation and will allow you to write efficient computer programs', 'programming, data, STRUCTURE, ', '6', 'dsa.jpg', 'Alfred V ahoa', 'Routledge', 900, ''),
(2, 'Python Programming', 'Python for Beginners is a textbook that will help the students to understand the fundamentals and applications of Python.', 'program, PROGRAM, programming,', '1', 'pyt.jpg', 'Bhasin, Harsh', 'New Age International (P) Ltd., Publishers', 1099, ''),
(3, 'Web Design', 'This book provides you with the understanding of crafting engaging and functional online experiences.', 'web, website, programming, pro', '2', 'web.png', 'Ben Frain', 'Packt Edition>', 777, ''),
(4, 'Mobile Application Development', 'This book gives you a tips on creating software tailored for mobile devices.', 'mobile, app, android, ios, jav', '3', 'mobile.jpg', 'J Mary Catherine, V Nandhini, ', 'VR1 Publications', 1563, ''),
(5, 'Visual Basic for Beginners', 'This book gives you a Simplified programming for Windows-based applications.', 'vb, basic, visual, .net, visua', '5', 'vb.jpg', 'Ray Yao', 'Kindle Edition', 963, ''),
(6, 'AI and ML', 'This book gives you a Machines learning and thinking for you.', 'ml, ai, machine, learn, artifi', '7', 'ml.jpg', 'Dr. Anil Kumar Bisht', 'GEH Press', 1463, ''),
(7, 'Data Science ', 'This book contains guidlines on turning raw data into actionable insights.', 'data, science, analyse, analyz', '4', 'data science.jpg', 'Jeffrey S. Saltz and Jeffery M', 'SAGE Publications, Inc', 1499, '');

-- --------------------------------------------------------

--
-- Table structure for table `myorder`
--

CREATE TABLE `myorder` (
  `order_id` int(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shopping_fee` int(255) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myorder`
--

INSERT INTO `myorder` (`order_id`, `user_id`, `shopping_fee`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(1, 1, 2752, '299594045', '2', '2022-07-06 15:15:51', 'Complete'),
(2, 1, 1354, '1110627441', '1', '2022-07-06 15:22:01', 'Complete'),
(3, 1, 1263, '1962495831', '2', '2024-12-23 09:02:20', 'Complete'),
(4, 1, 6093, '1457989786', '1', '2024-12-23 09:10:50', 'Complete'),
(5, 2, 1463, '1101668955', '1', '2024-12-24 00:08:42', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `order_id`, `invoice_number`, `amount`, `payment_mode`, `date`) VALUES
(4, 3, 1962495831, 1263, 'Cash on delivery', '2024-12-23 09:02:20'),
(5, 4, 1457989786, 6093, 'M-pesa', '2024-12-23 09:10:50'),
(6, 5, 1101668955, 1463, 'M-pesa', '2024-12-24 00:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `pending`
--

CREATE TABLE `pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending`
--

INSERT INTO `pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 1, 299594045, 2, 2, 'pending'),
(2, 1, 1110627441, 2, 2, 'pending'),
(3, 1, 1962495831, 5, 1, 'pending'),
(6, 1, 1457989786, 2, 9, 'pending'),
(7, 2, 1101668955, 6, 1, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myorder`
--
ALTER TABLE `myorder`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `customer_name` (`shopping_fee`),
  ADD UNIQUE KEY `customer_name_2` (`shopping_fee`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending`
--
ALTER TABLE `pending`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `myorder`
--
ALTER TABLE `myorder`
  MODIFY `order_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pending`
--
ALTER TABLE `pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

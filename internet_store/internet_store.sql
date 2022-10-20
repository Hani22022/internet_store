-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 أكتوبر 2022 الساعة 19:00
-- إصدار الخادم: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internet_store`
--

-- --------------------------------------------------------

--
-- بنية الجدول `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `number_of_products` int(11) NOT NULL,
  `customer_time` date NOT NULL,
  `notes` varchar(50) NOT NULL,
  `customer_case` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `contact_us`
--

INSERT INTO `contact_us` (`id`, `firstname`, `lastname`, `country`, `subject`) VALUES
(5, 'هاني', 'lm;ترررجيي', '', 'تكككف'),
(6, '', '', '', '');

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Produced_name` varchar(50) NOT NULL,
  `Product_Type` varchar(50) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `author_name` int(11) NOT NULL,
  `Product_Picture` varchar(50) NOT NULL,
  `price` varchar(11) NOT NULL,
  `time_update` datetime NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `Produced_name`, `Product_Type`, `isbn`, `author_name`, `Product_Picture`, `price`, `time_update`, `note`) VALUES
(14, 'شاشة ايفون اكس', '', 'Apple', 1, '09222022014539.png', '', '0000-00-00 00:00:00', 'ujbusikdjzlnikvjdsb'),
(15, 'ممم', '', 'Apple', 1, '10172022201451.jfif', '', '0000-00-00 00:00:00', 'لابتوب'),
(16, 'ممم', '', 'Apple', 1, '10172022201555.jfif', '', '0000-00-00 00:00:00', 'لابتوب');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phon` varchar(50) NOT NULL,
  `adrees` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time_add` datetime NOT NULL,
  `time_update` datetime NOT NULL,
  `situs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `phon`, `adrees`, `email`, `time_add`, `time_update`, `situs`) VALUES
(12, 'hani', '123', '22222222', '11111111', 'Hani122@email.com', '2022-09-21 21:39:56', '2022-10-17 20:20:45', 'عميل'),
(13, 'Hani2022', '111', '22222222', '11111111', 'Hani122@email.com', '2022-09-21 23:08:16', '2022-10-17 20:20:49', 'عميل'),
(14, 'هاني', '111', '05055555', '11111111', 'Hani122@email.com', '2022-09-23 02:37:45', '0000-00-00 00:00:00', 'الادارة'),
(15, 'هانيي', '111', '', '', '', '2022-09-23 02:39:24', '0000-00-00 00:00:00', 'عميل'),
(16, 'هانييي', '123', '', '', '', '2022-09-23 02:40:17', '0000-00-00 00:00:00', 'عميل'),
(18, 'اااا', '111', '', '', '', '2022-09-23 02:42:06', '0000-00-00 00:00:00', 'عميل');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

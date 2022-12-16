-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 03, 2022 at 05:05 PM
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
-- Database: `gofer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(0, 1, 2),
(0, 1, 13),
(0, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_Fname` varchar(30) NOT NULL,
  `user_Lname` varchar(30) NOT NULL,
  `user_pass` longtext NOT NULL,
  `user_email` tinytext NOT NULL,
  `user_phone` int(15) NOT NULL,
  `user_Address` longtext NOT NULL,
  `user_twitter` text NOT NULL,
  `user_facebook` text NOT NULL,
  `user_instagram` text NOT NULL,
  `user_Pbox` varchar(20) NOT NULL,
  `user_Img` text NOT NULL,
  `user_ip` bigint(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_token` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `user_name`, `user_Fname`, `user_Lname`, `user_pass`, `user_email`, `user_phone`, `user_Address`, `user_twitter`, `user_facebook`, `user_instagram`, `user_Pbox`, `user_Img`, `user_ip`, `user_type`, `user_token`) VALUES
(2, 'selamA', 'selam', 'Alemu', '$2y$10$ZA3uKg0Kd1n23MhaRj4gvu6WPbNZvJ6ZISmI63qXpfH.2HruOjUEG', 'selam@gmail.com', 938040302, 'Gondar', '@selam', '@selam', '@selam', '1234', 'team_06.jpg', 0, 'user', '$2y$10$B4W/EA5LFAt2t98brhm7be590xA9Easj/6rKJ24TVNlSdF2Cq.WQK'),
(3, 'babuji', 'selam', 'Alemu', '$2y$10$DJCr7TPB0DxY/3dogIhAruIiuhFuFeCdNpMt9guzx9YDLqp5a13Sy', 'babu@gmail.com', 938040302, 'Gondar', '@selam', '@selam', '@selam', '1234', 'team_06.jpg', 0, 'user', '$2y$10$i.MZAh/Mgtl25WkwxCX12u7WOkht7go2Qf1IuiyAvdfO4t364b22m'),
(4, 'lidiya', 'Lidiya', 'Tesefaye', '$2y$10$y4Oh4pPsnCPyXY36LBIpVeOobpITvqTYJNo4d1nImhAIhMYDDn9Va', 'lidiya@gmail.com', 902914005, 'Gondar,Ethiopia', '@Lidiya', '@lidiya', '@lidiya', '123', '1 (2).jpg', 0, 'user', '$2y$10$FuCAa75gvDjWEYOtIeq14eHWI6ayT5iaR0Tn.z.9mcbPwPsZQYqOG'),
(5, 'lili', '456t6', '66', '$2y$10$XKWq.s./6MRTee4yfR5/keiOrE9wi.Kb1aJY77Vh65abw3u5n7VK.', 'dfx@gmail.com', 7777, '7777', 'fbc', 'cb', 'cb', 'yyy', '1 (2).jpg', 0, 'user', '$2y$10$uxOCvi32cgSOgAksPXSK1OicXJQ4vw/5FXL1uaw.fHeZB7HnumEYW'),
(6, 'kalab3434', 'Kalab', 'alll', '$2y$10$0Fe3ouQctKS4QtbNaXO7gOxULLmUbC0xKZgdYdHYWF2rOMQoDb1rq', 'kakalakhkjdhfas@gmail.com', 39499877, 'jkadfkla', 'fds', 'df', 'dfs', '3434', '1 (1).jpg', 0, 'user', '$2y$10$1gT/XooCXdObRtyn9RKz3OdiDrdu3EPHabO77tQg.dyKgnWXBfF/C'),
(7, 'kalab', 'Kalab', 'alll', '$2y$10$QZU4S5ahRNMyInxK2bVhBecyD39SiUlevhYj7duedNsl8Q97JtE2e', 'kala', 39499877, 'erw', '@fdfd', 'dfsd', 'dfsd', '3434', '1 (2).jpg', 0, 'user', '$2y$10$PH17Wvt543vwlUbM3GO3Zu3vfbBIlbIQN1VY0moHMYBmolg/K8dym'),
(8, 'fgd', '', '', '$2y$10$5PxLB3R6YbLj8FXjjjTl2OJ2Mwn3PS8j9Hvq8HnlIKYGF3H7Hj5oK', '', 0, '', '', '', '', '', '', 0, 'user', '$2y$10$Duqpd0nB0vWZD8mihQej2erb73vo/3XXsHteAF1QUQu4Pn4iayA6C'),
(9, 'kalabA', 'kalab', 'amssalu', '$2y$10$WPYn0idGYgAGxD.dN0yqH.dHm2Zwoi7/s7Ogk1irWwbT7toGDAA8.', 'kalab@gmiil.com', 938040302, 'gondar,ethiopia', '@kalab', '@kalab', '@kalab', '1234', '1 (3).jpg', 0, 'user', '$2y$10$REArUWZ67U2Y.xBthtMX3u8xOU/y8GPjM4xS/cTqCS8P4C0yvzq0u');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` text NOT NULL,
  `item_register` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(2, 'AirJordan-10', 'AirJordan- brand10', 1220.00, './assets/image/products/2.png', '2022-03-28 08:08:57'),
(3, 'AirJordan 90s', 'AirJordan brand90s', 1220.00, './assets/image/products/3.png', '2022-03-28 08:08:57'),
(4, 'AirJordan100', 'AirJordan brand100', 1202.00, './assets/image/products/4.png', '2022-03-28 08:08:57'),
(5, 'AirJordan1999', 'AirJordan brand1999', 1322.00, './assets/image/products/5.png', '2022-03-28 08:08:57'),
(6, 'AirJordan12', 'AirJordan brand12', 1223.00, './assets/image/products/6.png', '2022-03-28 08:08:57'),
(7, 'AirJordan13', 'AirJordan brand13', 1223.00, './assets/image/products/8.png', '2022-03-28 08:08:57'),
(8, 'AirJordan14', 'AirJordan brand14', 1224.00, './assets/image/products/10.png', '2022-03-28 08:08:57'),
(10, 'AirJordan16', 'AirJordan brand16', 1562.00, './assets/image/products/12.png', '2022-03-28 08:08:57'),
(11, 'AirJordan17', 'AirJordan brand17', 1527.00, './assets/image/products/13.png', '2022-03-28 08:08:57'),
(12, 'AirJordan23', 'Ap jordan', 1528.00, './assets/image/products/14.png', '2022-03-28 08:08:57'),
(13, 'jordan', 'Air', 1952.00, './assets/image/products/15.png', '2022-03-28 08:08:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 06, 2022 at 11:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `fname`, `lname`, `email`, `phone`, `password`, `date_time`) VALUES
(1, 'Ganesh', 'Naik', 'ganeshravinaik2001@gmail.com', '8971046276', 'Gasa1234', '2022-03-28 09:06:09pm'),
(3, 'Kiran', 'naik', 'kirunaik@gmail.com', '8574968596', 'Kiru1234', '2022-03-28 09:21:47pm'),
(4, 'Abhay', 'PG', 'abhay67@gmail.com', '7485142563', 'Abha1234', '2022-03-31 09:12:25pm');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `iname` varchar(30) NOT NULL,
  `idesc` varchar(100) NOT NULL,
  `iprice` int(50) NOT NULL,
  `ioff` int(20) NOT NULL,
  `quantity` int(10) NOT NULL,
  `type` varchar(40) NOT NULL,
  `item_image` varchar(50) NOT NULL,
  `rating` int(10) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `iname`, `idesc`, `iprice`, `ioff`, `quantity`, `type`, `item_image`, `rating`, `sname`, `password`) VALUES
(1, 'Black shirt', 'best seling shirt new model', 500, 10, 50, 'Fashion', 'fashion_item1.jpg', 0, 'Gajanan', 'Gaja1234'),
(2, 'Blue Shirt', 'best seling blue shirt new model', 150, 5, 100, 'Fashion', 'fashion_item2.jpg', 0, 'Prasad', 'Pras1234'),
(3, 'Trendy T-Shirt', 'best selling T shirt new model', 200, 10, 75, 'Fashion', 'fashion_item3.jpg', 0, 'Prasad', 'Pras1234'),
(4, 'Samsang 64GB', 'best selling phone in the market', 1000, 10, 50, 'Mobiles', 'mobile_item1.jpg', 0, 'Rashmi', 'Rash1234'),
(5, 'IPhone  8+', 'best selling phone in the market with 121GB RAM', 1500, 15, 100, 'Mobiles', 'mobile_item2.jpg', 0, 'Rashmi', 'Rash1234'),
(6, 'IPhone 12 Pro', 'best phone with 128MP camera', 1200, 12, 150, 'Mobiles', 'mobile_item3.jpg', 0, 'Rashmi', 'Rash1234'),
(7, 'Samsang Narzo', 'best phone with 64GB RAM and 128 MP camera', 2000, 20, 200, 'Mobiles', 'mobile_item4.jpg', 0, 'Rashmi', 'Rash1234'),
(8, 'Redmi MI 11 Pro', 'Best phone for gaming and video editing', 700, 14, 125, 'Mobiles', 'mobile_item5.jpg', 0, 'Rashmi', 'Rash1234'),
(9, 'Lenovo Smart edge', 'best phone with 8 inch display', 1400, 8, 75, 'Mobiles', 'mobile_item6.jpg', 0, 'Rashmi', 'Rash1234'),
(10, 'Boat Headphone', 'Best headphone in the market with low price', 150, 6, 150, 'Electronics', 'electronics_item1.jpg', 0, 'Niyat', 'Niya1234'),
(11, 'Smart TV 10 Pro', 'Best smart TV in the market', 2000, 15, 50, 'Electronics', 'electronics_item2.jpg', 0, 'Niyat', 'Niya1234'),
(12, 'Adibas Shoe', 'best sports shoe in the world', 500, 10, 200, 'Shoes', 'shoes_item1.jpg', 0, 'Prasad', 'Pras1234'),
(13, 'Bata Shoes ', 'best sports shoe for men in the world', 400, 12, 160, 'Shoes', 'shoes_item2.jpg', 0, 'Prasad', 'Pras1234'),
(14, 'Shoes 7zip', 'best casual shoes in the world', 200, 6, 500, 'Shoes', 'shoes_item3.jpg', 0, 'Prasad', 'Pras1234'),
(15, 'Spark 8 Shoe', 'new brand shoes', 650, 40, 150, 'Shoes', 'shoes_item4.jpg', 0, 'Prasad', 'Pras1234'),
(16, 'Running  Shoes', 'best running shoes in the market', 450, 17, 200, 'Shoes', 'shoes_item5.jpg', 0, 'Prasad', 'Pras1234'),
(17, 'Cool Table', 'Best wooden table for sale', 1500, 40, 20, 'Furnitures', 'furniture_item1.jpg', 0, 'Ajay', 'Ajay1234'),
(18, 'Smooth and soft chair', 'best kushan chair for sale', 2000, 20, 15, 'Furnitures', 'furniture_item2.jpg', 0, 'Ajay', 'Ajay1234'),
(19, 'All Groceries', 'all item in one pack', 500, 8, 250, 'Groceries', 'groceries_item1.jpg', 0, 'Ajay', 'Ajay1234'),
(20, 'Groceries Items', 'all item in one pack', 400, 10, 50, 'Groceries', 'groceries_item2.jpg', 0, 'Ajay', 'Ajay1234'),
(21, 'Green Medicine', 'best medcine', 50, 3, 50, 'Health', 'health_item1.jpg', 0, 'Aditya', 'Adit1234'),
(22, 'Blue Tablet', 'best tablet', 40, 4, 60, 'Health', 'health_item2.jpg', 0, 'Aditya', 'Adit1234'),
(23, 'Kids toy cars', 'colorful kids toys', 150, 10, 150, 'Kids', 'kids_item1.jpg', 0, 'Aditya', 'Adit1234'),
(24, 'Toy Train', 'best kids Toy train', 200, 15, 15, 'Kids', 'kids_item2.jpg', 0, 'Aditya', 'Adit1234');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `lid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `name`, `date_time`) VALUES
(1, 'Ganesh', '2022-03-28 10:36:48pm'),
(2, 'Prasad', '2022-03-28 10:39:24pm'),
(3, 'Prasad', '2022-03-28 10:41:33pm'),
(4, 'Ganesh', '2022-03-28 10:41:54pm'),
(5, 'Ganesh', '2022-03-29 03:55:05pm'),
(6, 'kiran', '2022-03-29 04:04:20pm'),
(7, 'Ganesh', '2022-03-29 04:44:26pm'),
(8, 'Ganesh', '2022-03-29 04:50:05pm'),
(9, 'Ganesh', '2022-03-29 05:33:21pm'),
(10, 'kiran', '2022-03-29 08:17:39pm'),
(11, 'kiran', '2022-03-29 08:17:56pm'),
(12, 'Ganesh', '2022-03-29 08:19:53pm'),
(13, 'Gajanan', '2022-03-29 08:31:14pm'),
(14, 'Gajanan', '2022-03-29 08:34:58pm'),
(15, 'Gajanan', '2022-03-29 08:35:56pm'),
(16, 'Gajanan', '2022-03-29 08:41:41pm'),
(17, 'Gajanan', '2022-03-29 09:30:45pm'),
(18, 'Ganesh', '2022-03-29 09:30:54pm'),
(19, 'Gajanan', '2022-03-29 09:42:15pm'),
(20, 'Gajanan', '2022-03-29 10:06:04pm'),
(21, 'Prasad', '2022-03-29 10:53:01pm'),
(22, 'Gajanan', '2022-03-29 11:16:38pm'),
(23, 'Ganesh', '2022-03-29 11:17:32pm'),
(24, 'Ganesh', '2022-03-30 07:52:13pm'),
(25, 'Gajanan', '2022-03-30 08:03:57pm'),
(26, 'Ganesh', '2022-03-30 08:05:06pm'),
(27, 'Ganesh', '2022-03-30 08:52:06pm'),
(28, 'kiran', '2022-03-30 08:53:44pm'),
(29, 'Ganesh', '2022-03-31 01:34:11pm'),
(30, 'Ganesh', '2022-03-31 03:31:32pm'),
(31, 'Gajanan', '2022-03-31 03:57:11pm'),
(32, 'kiran', '2022-03-31 03:57:29pm'),
(33, 'Gajanan', '2022-03-31 03:58:36pm'),
(34, 'Kiran', '2022-03-31 03:59:27pm'),
(35, 'Kiran', '2022-03-31 04:10:57pm'),
(36, 'Rashmi', '2022-03-31 06:03:23pm'),
(37, 'Kiran', '2022-03-31 06:03:50pm'),
(38, 'Kiran', '2022-03-31 07:21:14pm'),
(39, 'Rashmi', '2022-03-31 07:24:04pm');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(10) NOT NULL,
  `itemno` int(10) NOT NULL,
  `amount` int(50) NOT NULL,
  `p_mode` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `itemno`, `amount`, `p_mode`, `username`, `password`) VALUES
(1, 3, 200, 'Cash On Delivery', 'Ganesh', 'Gasa1234'),
(2, 1, 500, 'Cash On Delivery', 'kiran', 'Kiru1234'),
(3, 5, 1500, 'card', 'Kiran', 'Kiru1234'),
(4, 11, 2000, 'Cash On Delivery', 'Abhay', 'Abha1234'),
(5, 14, 200, 'Cash On Delivery', 'Ganesh', 'Gasa1234'),
(6, 24, 200, 'card', 'Kiran', 'Kiru1234');

-- --------------------------------------------------------

--
-- Table structure for table `saler`
--

CREATE TABLE `saler` (
  `sid` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saler`
--

INSERT INTO `saler` (`sid`, `fname`, `lname`, `email`, `phone`, `password`, `date_time`) VALUES
(3, 'Ganesh', 'Naik', 'ganeshravinaik2001@gmail.com', '8971046276', 'Saler123', '2022-03-28 09:13:07pm'),
(5, 'Gajanan', 'bhat', 'gajabhat@gmail.com', '7485415293', 'Gaja1234', '2022-03-28 09:25:09pm'),
(7, 'Prasad', 'Naik', 'prasad24@gmail.com', '7391824655', 'Pras1234', '2022-03-28 09:29:19pm'),
(8, 'Rashmi', 'Raj', 'rashmi@gmail.com', '9685748596', 'Rash1234', '2022-03-31 05:03:30pm'),
(9, 'Niyat', 'N', 'niyat@gmail.com', '4152859674', 'Niya1234', '2022-03-31 09:09:17pm'),
(10, 'Ajay', 'sing', 'ajay@gmail.com', '4679851263', 'Ajay1234', '2022-04-01 10:22:34am'),
(11, 'Aditya', 'N', 'aditya@gmail.com', '7453918659', 'Adit1234', '2022-04-01 11:21:59am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `saler`
--
ALTER TABLE `saler`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `saler`
--
ALTER TABLE `saler`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

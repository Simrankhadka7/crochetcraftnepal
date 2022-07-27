-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 07:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crochet`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(225) NOT NULL,
  `Price` int(11) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `Colors` varchar(50) NOT NULL,
  `Picture` text NOT NULL,
  `Posted_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Date`, `Type`, `Description`, `Price`, `Size`, `Colors`, `Picture`, `Posted_by`) VALUES
(20, '0000-00-00', 'crochet1', 'white woolen full sleeve cardigan', 1200, 'medium', 'white', '8263316_clothing.jpg', '8'),
(21, '0000-00-00', 'crochet mask', 'pink and grey crochet mask', 100, 'medium', 'pink and grey', '357727_clothing.jpg', '16'),
(22, '0000-00-00', 'Top', 'crochet butter cup top', 1500, 'medium', 'peach', '5854985_clothing.jpg', '16'),
(25, '0000-00-00', 'scarf', 'blue crochet scarf', 250, 'medium', 'blue', '5446949_clothing.jpg', '23');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(11) NOT NULL,
  `commented_by` varchar(255) NOT NULL,
  `commented_by_id` int(11) NOT NULL,
  `commented_on_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ID`, `commented_by`, `commented_by_id`, `commented_on_id`, `comment`, `date`) VALUES
(34, 'simran', 16, 21, 'nice', '2022-07-27'),
(35, 'simran', 16, 21, 'nice', '2022-07-27'),
(36, 'sim', 18, 20, '', '2022-07-27'),
(39, 'aarya dahal', 23, 25, 'beautiful', '2022-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `PhoneNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`ID`, `Name`, `Email`, `Password`, `Address`, `PhoneNo`) VALUES
(16, 'simran', 'simrankhadka13@gmail.com', '202cb962ac59075b964b07152d234b70', 'baglung', 2147483647),
(17, 'simran11', 'sk6431478@gmail.com', '202cb962ac59075b964b07152d234b70', 'kalanki', 980776534),
(18, 'sim', 'sk6431478@gmail.com ', '202cb962ac59075b964b07152d234b70', 'kalanki', 0),
(19, 'prena kc', 'prenakc13@gmail.com', '202cb962ac59075b964b07152d234b70', 'lalitpur ', 2147483647),
(20, 'prerna kc', 'prernakc@gmail.com', '202cb962ac59075b964b07152d234b70', 'lalitpur', 2147483647),
(21, 'prince khadka', 'princekhadka@gmail.com', '202cb962ac59075b964b07152d234b70', 'kathmandu', 2147483647),
(22, 'simran khadka', 'simrankhadka@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'baglung', 2147483647),
(23, 'aarya dahal', 'aaryadahal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'lalitpur', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 06:23 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prodId` int(11) NOT NULL,
  `prodName` varchar(50) NOT NULL,
  `prodPrice` float NOT NULL,
  `prodSeller` varchar(50) NOT NULL,
  `prodDesc` varchar(100) NOT NULL,
  `prodImg` varchar(50) NOT NULL,
  `prodCat` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prodId`, `prodName`, `prodPrice`, `prodSeller`, `prodDesc`, `prodImg`, `prodCat`) VALUES
(1, 'Milton Bottle', 479, 'Milton', '500ml,Thermosteel', 'img/prodImg/bot1.jpg', 'Home'),
(2, 'Nivia Radar Bottle', 250, 'Nivia', '600ml', 'img/prodImg/bot2.jpg', 'Home'),
(3, 'IShake Hercules Bottle', 215, 'IShake', '700ml', 'img/prodImg/bot3.jpg', 'Home'),
(4, 'Nivia Ultra Sipper', 130, 'Nivia', '600ml', 'img/prodImg/bot4.jpg', 'Home'),
(5, 'Cello Lunch Box', 360, 'Cello', 'Polypropylene,225ml,4 piece', 'img/prodImg/lb1.jpg', 'Home'),
(6, 'Milton Double Decker Lunch Box', 250, 'Milton', 'Double Decker', 'img/prodImg/lb2.jpg', 'Home'),
(7, 'Signoraware Lunch Box', 461, 'Signoraware', 'Bag provided', 'img/prodImg/lb3.jpg', 'Home'),
(8, 'Espoir Analogue Watch', 500, 'Espoir', 'Men\'s watch', 'img/prodImg/wa1.jpg', 'Personal'),
(9, 'Timex Analogue Watch', 710, 'Timex', 'Men\'s watch', 'img/prodImg/wa2.jpg', 'Personal'),
(10, 'Fossil Touchscreen Watch', 1300, 'Fossil', 'Men\'s watch,Touchscreen', 'img/prodImg/wa3.jpg', 'Personal'),
(11, 'Geneva Analogue Watch', 350, 'Geneva', 'Women\'s watch', 'img/prodImg/wa4.jpg', 'Personal'),
(12, 'Kitcone Analogue Watch', 500, 'Kitcone', 'Women\'s watch', 'img/prodImg/wa5.jpg', 'Personal'),
(13, 'Geneva Analogue Watch', 350, 'Geneva', 'Women\'s watch', 'img/prodImg/wa6.jpg', 'Personal'),
(14, 'General Knowledge 2018', 20, 'Manohar Pandey', 'Paperback', 'img/prodImg/bo1.jpg', 'Book'),
(15, 'Indian Economy', 345, 'Ramesh Singh', 'Paperback', 'img/prodImg/bo2.jpg', 'Book'),
(16, 'Theory of Computation', 220, 'Mishra K.L.P', 'Paperback', 'img/prodImg/bo3.jpg', 'Book'),
(17, 'Operating System Concepts', 450, 'Silberschatz', 'Paperback', 'img/prodImg/bo4.jpg', 'Book');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prodId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

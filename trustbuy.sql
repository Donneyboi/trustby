-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 08:32 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trustbuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(999) DEFAULT NULL,
  `password` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'trustbuy@gmail.com', '419');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(255) NOT NULL,
  `user` varchar(999) DEFAULT NULL,
  `amount` varchar(999) DEFAULT NULL,
  `time` varchar(999) DEFAULT NULL,
  `status` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `user`, `amount`, `time`, `status`) VALUES
(12, '5', '5000', '1675416940', 'confirm'),
(13, '3', '1000', '1675679754', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `postid` varchar(999) DEFAULT NULL,
  `amount` varchar(999) DEFAULT NULL,
  `status` varchar(999) DEFAULT NULL,
  `time` varchar(999) DEFAULT NULL,
  `user` varchar(999) DEFAULT NULL,
  `message` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `postid`, `amount`, `status`, `time`, `user`, `message`) VALUES
(23, NULL, '5000', 'confirm', '1674550751', '3', 'You Deposit'),
(24, NULL, '5000', 'confirm', '1674720976', '3', 'You Deposit'),
(25, NULL, '5000', 'confirm', '1674721186', '3', 'You Deposit'),
(26, NULL, '200', 'pending', '1674726527', '3', 'You Deposit'),
(29, NULL, '5000', 'confirm', '1675416940', '5', NULL),
(30, NULL, '1000', 'pending', '1675679754', '3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mode`
--

CREATE TABLE `mode` (
  `id` int(255) NOT NULL,
  `mode` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mode`
--

INSERT INTO `mode` (`id`, `mode`) VALUES
(1, 'light'),
(2, 'black');

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `id` int(11) NOT NULL,
  `money` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`id`, `money`) VALUES
(1, '1800');

-- --------------------------------------------------------

--
-- Table structure for table `ordershping`
--

CREATE TABLE `ordershping` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` varchar(999) DEFAULT NULL,
  `productname` varchar(999) DEFAULT NULL,
  `company` varchar(999) DEFAULT NULL,
  `email` varchar(999) DEFAULT NULL,
  `issus` varchar(999) DEFAULT NULL,
  `itemamount` varchar(999) DEFAULT NULL,
  `location` varchar(999) DEFAULT NULL,
  `number` varchar(999) DEFAULT NULL,
  `image` varchar(999) DEFAULT NULL,
  `total` varchar(999) DEFAULT NULL,
  `trackid` varchar(999) DEFAULT NULL,
  `status` varchar(999) DEFAULT NULL,
  `user` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordershping`
--

INSERT INTO `ordershping` (`id`, `name`, `quantity`, `productname`, `company`, `email`, `issus`, `itemamount`, `location`, `number`, `image`, `total`, `trackid`, `status`, `user`) VALUES
(41, 'mathew dominic', '1', 'iphone x', 'Suaware', 'juicewrld@gmail.com', 'nothing mush is just having minior issues ', '20000', 'abuja', '090197918349', '10812814751353683107trade_type_cfds.webp', '23500', 'TYTYZX1900011880QXCB', 'confirm', '3'),
(42, 'dominic ', '3', 'guic', 'Suaware', 'gunna@gmail.com', '333', '7000', 'abuja', '0901978', '6650496019633326411.jpg', '26188', 'TYTYZX2008878586QXCB', 'confirm', '3');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(255) NOT NULL,
  `firstname` varchar(999) DEFAULT NULL,
  `lastname` varchar(999) DEFAULT NULL,
  `email` varchar(999) DEFAULT NULL,
  `number` varchar(999) DEFAULT NULL,
  `state` varchar(999) DEFAULT NULL,
  `city` varchar(999) DEFAULT NULL,
  `password` varchar(999) DEFAULT NULL,
  `date` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `email`, `number`, `state`, `city`, `password`, `date`) VALUES
(3, 'Onogwu', 'wisdom', 'gunna@gmail.com1', '09019791849', 'River', 'Port Harcourt', '111', '1674463706'),
(4, 'gun', 'na', 'gunna@gmail.co', '09019791849', 'river', 'Port Harcourt', '12345', '1674463748'),
(5, 'gun', 'na', 'donneyboi112@gmail.com', '090', 'river', 'Port Harcourt', '419', '1675416868');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mode`
--
ALTER TABLE `mode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordershping`
--
ALTER TABLE `ordershping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `mode`
--
ALTER TABLE `mode`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordershping`
--
ALTER TABLE `ordershping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

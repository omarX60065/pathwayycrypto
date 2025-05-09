-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2025 at 03:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecryptoandtrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'Admin', 'Operator', 'support@pathwayycrypto.com', 'admin1', '2025');

-- --------------------------------------------------------

--
-- Table structure for table `approved_withdrawal`
--

CREATE TABLE `approved_withdrawal` (
  `number` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `account` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `wallet` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_names`
--

CREATE TABLE `bank_names` (
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_names`
--

INSERT INTO `bank_names` (`userid`, `name`, `rate`, `percentage`, `duration`, `date`) VALUES
(1, 'BKASH', '500-25000', '12', '4 Days', '2021-04-24 00:00:00'),
(2, 'NORDEACREDIT UNION', '1000 - 10000000', '10', '12 Days', '2021-04-24 00:00:00'),
(3, 'DUTCH BANGLA BANK', '50-2000', '14', '7 Days', '2021-04-24 00:00:00'),
(4, 'CSB', '100 - 2000', '15', '5 Days', '2021-04-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `userid` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `validID` varchar(255) NOT NULL,
  `balance` decimal(11,2) NOT NULL,
  `acc_level` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `verified` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `refered_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`userid`, `fullname`, `email`, `phone`, `address`, `validID`, `balance`, `acc_level`, `date`, `password`, `active`, `status`, `verified`, `code`, `refered_by`) VALUES
(3, 'Gabi', 'user@gmail.com', '234321234', 'House 11 Prime Estate', '12345', '2900.00', 'Basic', '2022-04-03', '1234', 0, 0, 'verified', '926356', '');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `number` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `plan` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`number`, `userid`, `amount`, `date`, `plan`, `status`) VALUES
(1, 3, '2900.00', '2025-05-06 14:22:51', 'Basic', 1);

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `number` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `plan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`number`, `userid`, `amount`, `date`, `plan`) VALUES
(1, 1, '500.00', '2020-09-18 10:37:08', 'Live Trading'),
(2, 1, '200.00', '2020-09-24 16:09:10', 'Gold'),
(3, 1, '5000000.00', '2020-09-24 16:14:07', 'Platinum'),
(4, 10, '500.00', '2020-12-20 11:38:42', 'Gold'),
(5, 10, '18500.00', '2020-12-20 23:10:58', 'Gold'),
(6, 12, '500.00', '2020-12-21 14:22:18', 'Gold'),
(7, 10, '100.00', '2022-03-24 11:39:51', 'Gold'),
(8, 3, '2900.00', '2025-05-06 14:24:03', 'Basic');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `userid` int(11) NOT NULL,
  `cryp_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`userid`, `cryp_name`, `address`) VALUES
(1, 'Bitcoin', '123345'),
(2, 'Ethereum', '000000'),
(3, 'BNB', '123345'),
(4, 'TRUMP', '000000'),
(5, 'USDT', '0000'),
(6, 'Tron', '00000'),
(7, 'Sol', '00000'),
(8, 'Pepe', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `number` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `amount` decimal(11,2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `wallet` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`number`, `userid`, `amount`, `email`, `wallet`, `date`, `status`) VALUES
(1, 10, '500.00', 'user@gmail.com', 'w2e3r4t5kyutfdytfhmfgduigdsetghjuio7re5w4', '2022-03-14 22:05:50', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `approved_withdrawal`
--
ALTER TABLE `approved_withdrawal`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `bank_names`
--
ALTER TABLE `bank_names`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `earnings`
--
ALTER TABLE `earnings`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `approved_withdrawal`
--
ALTER TABLE `approved_withdrawal`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank_names`
--
ALTER TABLE `bank_names`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `earnings`
--
ALTER TABLE `earnings`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

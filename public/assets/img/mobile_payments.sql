-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2020 at 02:01 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interwg4_mpesa_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile_payments`
--

CREATE TABLE `mobile_payments` (
  `transLoID` int(11) NOT NULL,
  `TransactionType` varchar(199) NOT NULL,
  `TransID` varchar(199) DEFAULT NULL,
  `TransTime` varchar(199) NOT NULL,
  `TransAmount` varchar(199) NOT NULL,
  `BusinessShortCode` varchar(199) NOT NULL,
  `BillRefNumber` varchar(199) NOT NULL,
  `InvoiceNumber` varchar(199) NOT NULL,
  `OrgAccountBalance` varchar(199) NOT NULL,
  `ThirdPartyTransID` varchar(199) NOT NULL,
  `MSISDN` varchar(14) NOT NULL,
  `FirstName` varchar(199) DEFAULT NULL,
  `MiddleName` varchar(10) DEFAULT NULL,
  `LastName` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobile_payments`
--

INSERT INTO `mobile_payments` (`transLoID`, `TransactionType`, `TransID`, `TransTime`, `TransAmount`, `BusinessShortCode`, `BillRefNumber`, `InvoiceNumber`, `OrgAccountBalance`, `ThirdPartyTransID`, `MSISDN`, `FirstName`, `MiddleName`, `LastName`, `created_at`, `updated_at`) VALUES
(1, 'THCL4XYDOZ', NULL, '20200204124221', '10', '603421', 'SIM001', '', '49197.00', '', '254708374149', 'John', '', 'Doe', '2020-02-04 12:42:22', '2020-02-04 12:42:22'),
(2, '', 'LGRMZ70EQT', '20200204124507', '10', '603421', 'SIM001', '', '49197.00', '', '254708374149', 'John', '', 'Doe', '2020-02-04 12:45:09', '2020-02-04 12:45:09'),
(3, '', 'SVMBG7QCLY', '20200204124619', '10', '603421', 'SIM001', '', '49197.00', '', '254708374149', 'John', '', 'Doe', '2020-02-04 12:46:20', '2020-02-04 12:46:20'),
(4, 'Pay Bill', 'OB441HB63G', '20200204160904', '1234.00', '601361', 'invoice', '', '306310.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-04 12:52:29', '2020-02-04 12:52:29'),
(5, 'Pay Bill', 'OB461HB63I', '20200204161017', '5027.00', '601361', 'rent-payment', '', '311337.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-04 12:53:41', '2020-02-04 12:53:41'),
(6, 'Pay Bill', 'OB471HB63J', '20200204161129', '5027.00', '601361', 'rent-payment', '', '316364.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-04 19:54:55', '2020-02-04 19:54:55'),
(7, 'Pay Bill', 'OB491HB63L', '20200204161220', '1000.00', '601361', 'water-bill-payment', '', '317364.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-04 19:55:44', '2020-02-04 19:55:44'),
(8, 'Pay Bill', 'OB421HB63O', '20200204161501', '1000.00', '601361', 'water-bill-payment', '', '318364.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-04 19:58:26', '2020-02-04 19:58:26'),
(9, 'Pay Bill', 'OB491HB63V', '20200204170852', '1000.00', '601361', 'water-bill-payment', '', '319364.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-04 20:52:17', '2020-02-04 20:52:17'),
(10, 'Pay Bill', 'OB401HB63W', '20200204172006', '1000.00', '601361', 'water-bill-payment', '', '320364.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-04 21:03:30', '2020-02-04 21:03:30'),
(11, '', 'JI3XCE5FP7', '20200204141417', '10', '603421', 'SIM001', '', '49197.00', '', '254708374149', 'John', '', 'Doe', '2020-02-04 21:14:19', '2020-02-04 21:14:19'),
(12, 'Pay Bill', 'OB411HB63X', '20200204174733', '1000.00', '601361', 'water-bill-payment', '', '321364.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-04 21:30:58', '2020-02-04 21:30:58'),
(13, 'Pay Bill', 'OB421HB63Y', '20200204174847', '1000.00', '601361', 'water-bill-payment', '', '322364.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-04 21:32:11', '2020-02-04 21:32:11'),
(14, 'Pay Bill', 'OB421HB64I', '20200204231304', '1000.00', '601361', 'water-bill-payment', '', '323364.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-05 02:56:27', '2020-02-05 02:56:27'),
(15, 'Pay Bill', 'OB431HB64J', '20200204231329', '1200.00', '601361', 'water-bill-payment', '', '324564.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-05 02:56:52', '2020-02-05 02:56:52'),
(16, 'Pay Bill', 'OB441HB64K', '20200204231330', '1200.00', '601361', 'water-bill-payment', '', '325764.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-05 02:56:54', '2020-02-05 02:56:54'),
(17, 'Pay Bill', 'OB461HB656', '20200204235341', '1200.00', '601361', 'water-bill-payment', '', '326964.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-05 03:37:04', '2020-02-05 03:37:04'),
(18, 'Pay Bill', 'OB471HB657', '20200204235342', '1200.00', '601361', 'water-bill-payment', '', '328164.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-05 03:37:05', '2020-02-05 03:37:05'),
(19, 'Pay Bill', 'OB481HB658', '20200204235344', '1200.00', '601361', 'water-bill-payment', '', '329364.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-05 03:37:07', '2020-02-05 03:37:07'),
(20, 'Pay Bill', 'OB531HB65N', '20200205001804', '455.00', '601361', 'food-delivery', '', '329819.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-05 04:01:27', '2020-02-05 04:01:27'),
(21, 'Pay Bill', 'OB541HB65O', '20200205002026', '205.00', '601361', 'gas-delivery', '', '330024.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-05 04:03:49', '2020-02-05 04:03:49'),
(22, 'Pay Bill', 'OB591HB67H', '20200205102443', '1200.00', '601361', 'water-bill-payment', '', '331224.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-05 14:08:03', '2020-02-05 14:08:03'),
(23, 'Pay Bill', 'OB501HB67I', '20200205102532', '100.00', '601361', 'water-bill-payment', '', '331324.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-05 14:08:53', '2020-02-05 14:08:53'),
(24, 'Pay Bill', 'OB531HB67L', '20200205102911', '100.00', '601361', 'water-bill-payment', '', '331424.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-05 14:12:32', '2020-02-05 14:12:32'),
(25, 'Pay Bill', 'OB711HBAEX', '20200207180450', '100.00', '601361', 'water-bill-payment', '', '331524.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-07 21:47:59', '2020-02-07 21:47:59'),
(26, 'Pay Bill', 'OB721HBAEY', '20200207180452', '100.00', '601361', 'water-bill-payment', '', '331624.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-07 21:48:01', '2020-02-07 21:48:01'),
(27, 'Pay Bill', 'OB841HBAGO', '20200208224619', '5000.00', '601361', 'inv210', '', '336624.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-09 02:29:22', '2020-02-09 02:29:22'),
(28, 'Pay Bill', 'OB851HBAGP', '20200208225242', '5500.00', '601361', 'inv220', '', '342124.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-09 02:35:45', '2020-02-09 02:35:45'),
(29, 'Pay Bill', 'OB861HBAGQ', '20200208225249', '5500.00', '601361', 'inv220', '', '347624.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-09 02:35:52', '2020-02-09 02:35:52'),
(30, 'Pay Bill', 'OB871HBAGR', '20200208225718', '5500.00', '601361', 'inv220', '', '353124.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-09 02:40:21', '2020-02-09 02:40:21'),
(31, 'Pay Bill', 'OB891HBAGT', '20200208232442', '5500.00', '601361', 'inv220', '', '358624.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-09 03:07:45', '2020-02-09 03:07:45'),
(32, 'Pay Bill', 'OB901HBAHE', '20200209100850', '7867.00', '601361', 'water-bill-payment', '', '366491.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-09 13:51:51', '2020-02-09 13:51:51'),
(33, 'Pay Bill', 'OB911HBAHF', '20200209100852', '7867.00', '601361', 'water-bill-payment', '', '374358.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-09 13:51:53', '2020-02-09 13:51:53'),
(34, 'Pay Bill', 'OB921HBAHG', '20200209100854', '7867.00', '601361', 'water-bill-payment', '', '382225.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-09 13:51:55', '2020-02-09 13:51:55'),
(35, 'Pay Bill', 'OB931HBAHH', '20200209100855', '7867.00', '601361', 'water-bill-payment', '', '390092.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-09 13:51:56', '2020-02-09 13:51:56'),
(36, 'Pay Bill', 'OBA41HBAO6', '20200210094102', '4500.00', '601361', 'Room 001', '', '394592.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-10 13:23:58', '2020-02-10 13:23:58'),
(37, 'Pay Bill', 'OBA91HBAOV', '20200210115805', '4550.00', '601361', 'Room A002', '', '399142.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-10 15:41:01', '2020-02-10 15:41:01'),
(38, 'Pay Bill', 'OBA01HBAOW', '20200210120011', '4550.00', '601361', 'Room A002', '', '403692.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-10 15:43:07', '2020-02-10 15:43:07'),
(39, 'Pay Bill', 'OBA91HBAP5', '20200210120545', '4550.00', '601361', 'Room A002', '', '408242.00', '', '254708374149', 'John', 'J.', 'Doe', '2020-02-10 15:48:43', '2020-02-10 15:48:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  ADD PRIMARY KEY (`transLoID`),
  ADD UNIQUE KEY `TransID` (`TransID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  MODIFY `transLoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

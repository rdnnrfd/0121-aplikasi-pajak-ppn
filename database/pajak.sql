-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 11:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajak`
--

-- --------------------------------------------------------

--
-- Table structure for table `persediaan`
--

CREATE TABLE `persediaan` (
  `id` int(20) NOT NULL,
  `KodeBarang` varchar(20) NOT NULL,
  `NamaBarang` varchar(255) NOT NULL,
  `Deskripsi` varchar(500) NOT NULL,
  `Harga` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persediaan`
--

INSERT INTO `persediaan` (`id`, `KodeBarang`, `NamaBarang`, `Deskripsi`, `Harga`, `Foto`, `created_at`, `updated_by`) VALUES
(1, 'KB01-001', 'Jordan Jumpman', 'More Benefit', '1800000', 'jordan-jumpman-2021.jpg', '2021-01-20 16:32:12', '2021-01-20 16:32:12'),
(2, 'KB01-002', 'Nike Air Max 90', 'benefitsss', '2279000', 'air-max-2090-shoe.jpg', '2021-01-20 17:39:30', '2021-01-20 17:39:30'),
(3, 'KB01-003', 'Nike Infinity Run 2', 'The Nike React Infinity Run Flyknit 2 continues to help keep you running.', '2350000', 'react-infinity-run-flyknit-2.jpg', '2021-01-20 17:41:21', '2021-01-20 17:41:21'),
(4, 'KB01-004', 'LeBron 18', 'The LeBron 18 is designed to harness his abilities while helping with the stress he puts on his body.', '2999000', 'lebron-18-basketball-shoe-JNqV61.jpg', '2021-01-20 17:44:32', '2021-01-20 17:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(20) NOT NULL,
  `IdTransaksi` varchar(255) NOT NULL,
  `TglTransaksi` varchar(255) NOT NULL,
  `NamaBarang` varchar(255) NOT NULL,
  `Qty` varchar(255) NOT NULL,
  `Harga` varchar(255) NOT NULL,
  `Nominal` varchar(255) NOT NULL,
  `PPN` varchar(255) NOT NULL,
  `Total` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `IdTransaksi`, `TglTransaksi`, `NamaBarang`, `Qty`, `Harga`, `Nominal`, `PPN`, `Total`, `created_at`, `updated_at`) VALUES
(12, 'KT01-001', '20-01-2021', 'Basketball Shoe Jordan Jumpman 2021 PF', '1', '1800000', '1800000', '180000', '1980000', '2021-01-20 09:35:04', '2021-01-20 09:35:04'),
(15, 'KT01-004', '20-01-2021', 'Jordan Jumpman', '6', '1800000', '10800000', '1080000', '11880000', '2021-01-20 17:38:27', '2021-01-20 17:38:27'),
(16, 'KT01-005', '20-01-2021', 'Jordan Jumpman', '1', '1800000', '1800000', '180000', '1980000', '2021-01-20 17:39:06', '2021-01-20 17:39:06'),
(17, 'KT01-006', '21-01-2021', 'Nike React Infinity Run 2', '3', '2350000', '7050000', '705000', '7755000', '2021-01-21 02:46:38', '2021-01-21 02:46:38'),
(18, 'KT01-007', '21-01-2021', 'LeBron 18', '1', '2999999', '2999999', '299999.9', '3299998.9', '2021-01-21 02:47:08', '2021-01-21 02:47:08'),
(19, 'KT01-008', '22-01-2021', 'LeBron 18', '3', '2999000', '8997000', '899700', '9896700', '2021-01-21 23:40:55', '2021-01-21 23:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'rdnnrfd', 'rdnnrfd@gmail.com', '48404a63a11363d74ceaa5088d3ae2cf', '2021-01-08 13:33:43'),
(3, 'admin', 'admin@test.com', '25d55ad283aa400af464c76d713c07ad', '2021-01-08 11:39:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persediaan`
--
ALTER TABLE `persediaan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `KodeBarang` (`KodeBarang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `IdTransaksi` (`IdTransaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persediaan`
--
ALTER TABLE `persediaan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

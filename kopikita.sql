-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 04:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopikita`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `detail_id` int(11) NOT NULL,
  `kode_produk` varchar(15) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `penjualan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`detail_id`, `kode_produk`, `nama_produk`, `harga`, `jumlah`, `penjualan_id`) VALUES
(1, 'ESP.01', 'Espresso Regular', 20000, 2, 1),
(2, 'ESP.02', 'Espresso Regular Susu', 25000, 3, 1),
(3, 'CAP.01', 'Cappucino Regular', 24000, 1, 1),
(4, 'ESP.01', 'Espresso Regular', 20000, 2, 2),
(5, 'CAP.01', 'Cappucino Regular', 24000, 2, 2),
(6, 'ESP.01', 'Espresso Regular', 20000, 3, 3),
(7, 'ESP.02', 'Espresso Regular Susu', 25000, 3, 3),
(8, 'CAP.01', 'Cappucino Regular', 24000, 3, 3),
(9, 'ESP.01', 'Espresso Regular', 20000, 2, 4),
(10, 'CAP.01', 'Cappucino Regular', 24000, 3, 4),
(11, 'CAP.01', 'Cappucino Regular', 24000, 2, 5),
(12, 'CAP.01', 'Cappucino Regular', 24000, 1, 5),
(13, 'ESP.01', 'Espresso Regular', 20000, 2, 6),
(14, 'CAP.01', 'Cappucino Regular', 24000, 2, 6),
(15, 'ESP.01', 'Espresso Regular', 20000, 2, 7),
(16, 'ESP.01', 'Espresso Regular', 20000, 2, 8),
(17, 'CAP.01', 'Cappucino Regular', 24000, 3, 8),
(18, 'CAP.02', 'Cappucino large', 35000, 2, 8),
(19, 'ESP.01', 'Espresso Regular', 20000, 2, 9),
(20, 'ESP.02', 'Espresso Regular Susu', 25000, 2, 9),
(21, 'CAP.01', 'Cappucino Regular', 24000, 4, 9),
(22, 'ESP.01', 'Espresso Regular', 20000, 1, 10),
(23, 'CAP.02', 'Cappucino large', 35000, 5, 10),
(24, 'CAP.01', 'Cappucino Regular', 24000, 2, 10),
(25, 'CAP.01', 'Cappucino Regular', 24000, 5, 11),
(26, 'ESP.01', 'Espresso Regular', 20000, 5, 11),
(27, 'ESP.02', 'Espresso Regular Susu', 25000, 5, 12),
(28, 'CAP.01', 'Cappucino Regular', 24000, 2, 12),
(29, 'CAP.01', 'Cappucino Regular', 24000, 3, 12),
(30, 'ESP.01', 'Espresso Regular', 20000, 2, 13),
(31, 'ESP.02', 'Espresso Regular Susu', 25000, 3, 14),
(32, 'CAP.01', 'Cappucino Regular', 24000, 3, 14),
(33, 'CAP.02', 'Cappucino large', 35000, 3, 14),
(34, 'AME.02', 'Americano Large', 40000, 3, 14),
(35, 'ESP.01', 'Espresso Regular', 20000, 3, 15),
(36, 'CAP.01', 'Cappucino Regular', 24000, 1, 15),
(37, 'AME.02', 'Americano Large', 40000, 1, 15),
(38, 'AME.02', 'Americano Large', 40000, 3, 16),
(39, 'ESP.01', 'Espresso Regular', 20000, 3, 16),
(40, 'AME.02', 'Americano Large', 40000, 3, 17),
(41, 'ESP.02', 'Espresso Regular Susu', 25000, 2, 17),
(44, 'CAP.01', 'Cappucino Regular', 24000, 1, 17),
(46, 'ESP.01', 'Espresso Regular', 20000, 2, 18),
(47, 'AME.01', 'Americano Regular', 25000, 2, 18),
(48, 'ESP.02', 'Espresso Regular Susu', 25000, 3, 19),
(49, 'CAP.01', 'Cappucino Regular', 24000, 2, 19),
(50, 'AME.01', 'Americano Regular', 25000, 5, 19),
(51, 'ESP.01', 'Espresso Regular', 20000, 1, 20),
(52, 'CAP.01', 'Cappucino Regular', 24000, 3, 20),
(53, 'ESP.01', 'Espresso Regular', 20000, 2, 21),
(54, 'CAP.01', 'Cappucino Regular', 24000, 1, 21),
(55, 'AME.01', 'Americano Regular', 25000, 3, 21),
(56, 'ESP.01', 'Espresso Regular', 20000, 5, 22),
(57, 'CAP.02', 'Cappucino large', 35000, 5, 22),
(58, 'ESP.01', 'Espresso Regular', 20000, 2, 23),
(59, 'ESP.02', 'Espresso Regular Susu', 25000, 2, 23),
(60, 'CAP.01', 'Cappucino Regular', 24000, 1, 23),
(61, 'ESP.02', 'Espresso Regular Susu', 25000, 3, 24),
(62, 'AME.02', 'Americano Large', 40000, 2, 24),
(63, 'ESP.02', 'Espresso Regular Susu', 25000, 2, 25),
(64, 'CAP.01', 'Cappucino Regular', 24000, 1, 25),
(65, 'ESP.01', 'Espresso Regular', 20000, 1, 27),
(66, 'AME.02', 'Americano Large', 40000, 1, 27),
(67, 'ESP.01', 'Espresso Regular', 20000, 1, 28),
(68, 'AME.01', 'Americano Regular', 25000, 1, 29),
(69, 'ESP.02', 'Espresso Regular Susu', 25000, 1, 29),
(70, 'ESP.01', 'Espresso Regular', 20000, 3, 30),
(71, 'CAP.01', 'Cappucino Regular', 24000, 1, 30),
(72, 'ESP.02', 'Espresso Regular Susu', 25000, 1, 31),
(74, 'ESP.01', 'Espresso Regular', 20000, 1, 34),
(75, 'AME.01', 'Americano Regular', 25000, 1, 36),
(76, 'MOC.02', 'Moccacino Regular', 28000, 3, 37),
(77, 'CAP.01', 'Cappucino Regular', 24000, 5, 38),
(78, 'CAP.01', 'Cappucino Regular', 24000, 2, 38),
(79, 'CAP.01', 'Cappucino Regular', 24000, 2, 41),
(80, 'AME.01', 'Americano Regular', 25000, 6, 41),
(81, 'MOC.02', 'Moccacino Regular', 28000, 3, 42),
(82, 'ESP.01', 'Espresso Regular', 20000, 2, 43),
(83, 'CAP.01', 'Cappucino Regular', 24000, 1, 44),
(84, 'CAP.02', 'Cappucino large', 35000, 1, 45),
(85, 'MOC.02', 'Moccacino Regular', 28000, 4, 46),
(86, 'AME.01', 'Americano Regular', 25000, 2, 47),
(87, 'AME.01', 'Americano Regular', 25000, 1, 47),
(88, 'AME.01', 'Americano Regular', 25000, 5, 48),
(89, 'AME.01', 'Americano Regular', 25000, 5, 49),
(90, 'AME.01', 'Americano Regular', 25000, 1, 50),
(91, 'AME.01', 'Americano Regular', 25000, 1, 51),
(92, 'AME.01', 'Americano Regular', 25000, 1, 51),
(93, 'AME.01', 'Americano Regular', 25000, 5, 52),
(94, 'AME.01', 'Americano Regular', 25000, 1, 53),
(95, 'AME.01', 'Americano Regular', 25000, 1, 54),
(96, 'AME.01', 'Americano Regular', 25000, 1, 55),
(97, 'CAP.02', 'Cappucino large', 35000, 1, 56),
(98, 'AME.01', 'Americano Regular', 25000, 1, 57),
(99, 'MOC.02', 'Moccacino Regular', 28000, 10, 58),
(100, 'MOC.02', 'Moccacino Regular', 28000, 1, 59),
(101, 'MOC.02', 'Moccacino Regular', 28000, 1, 60),
(102, 'MOC.02', 'Moccacino Regular', 28000, 1, 61),
(103, 'AME.02', 'Americano Large', 40000, 1, 62),
(104, 'CAP.01', 'Cappucino Regular', 24000, 1, 62),
(105, 'ESP.01', 'Espresso Regular', 20000, 1, 65),
(106, 'CAP.01', 'Cappucino Regular', 24000, 1, 66),
(107, 'AME.01', 'Americano Regular', 25000, 1, 67),
(108, 'ESP.01', 'Espresso Regular', 20000, 1, 70),
(109, 'ESP.02', 'Espresso Regular Susu', 25000, 2, 71),
(110, 'ESP.01', 'Espresso Regular', 20000, 1, 72),
(111, 'ESP.01', 'Espresso Regular', 20000, 1, 72),
(112, 'ESP.02', 'Espresso Regular Susu', 25000, 1, 72),
(113, 'ESP.02', 'Espresso Regular Susu', 25000, 2, 73),
(114, 'AME.01', 'Americano Regular', 25000, 1, 74),
(115, 'AME.01', 'Americano Regular', 25000, 1, 74),
(116, 'ESP.01', 'Espresso Regular', 20000, 1, 75),
(117, 'ESP.01', 'Espresso Regular', 20000, 1, 75),
(118, 'ESP.02', 'Espresso Regular Susu', 25000, 1, 76),
(119, 'CAP.01', 'Cappucino Regular', 24000, 1, 76),
(120, 'ESP.02', 'Espresso Regular Susu', 25000, 1, 76),
(121, 'ESP.01', 'Espresso Regular', 20000, 1, 79),
(123, 'ESP.01', 'Espresso Regular', 20000, 1, 81),
(124, 'AME.01', 'Americano Regular', 25000, 1, 82),
(125, 'CAP.01', 'Cappucino Regular', 24000, 1, 84),
(126, 'ESP.01', 'Espresso Regular', 20000, 2, 85),
(127, 'ESP.01', 'Espresso Regular', 20000, 1, 86),
(128, 'CAP.01', 'Cappucino Regular', 24000, 1, 87),
(130, 'AME.01', 'Americano Regular', 25000, 1, 88),
(131, 'AME.02', 'Americano Large', 40000, 1, 88),
(132, 'ESP.01', 'Espresso Regular', 20000, 1, 89),
(134, 'AME.01', 'Americano Regular', 25000, 1, 91),
(135, 'CAP.02', 'Cappucino large', 35000, 1, 91),
(136, 'MOC.02', 'Moccacino Regular', 28000, 1, 92),
(137, 'CAP.01', 'Cappucino Regular', 24000, 1, 93),
(138, 'CAP.01', 'Cappucino Regular', 24000, 1, 94),
(139, 'AME.01', 'Americano Regular', 25000, 2, 95),
(140, 'CAP.01', 'Cappucino Regular', 24000, 1, 96),
(141, 'ESP.02', 'Espresso Regular Susu', 25000, 2, 97),
(142, 'CAP.01', 'Cappucino Regular', 24000, 3, 98),
(143, 'AME.01', 'Americano Regular', 25000, 1, 99),
(144, 'AME.02', 'Americano Large', 40000, 2, 100),
(145, 'AME.01', 'Americano Regular', 25000, 2, 101),
(146, 'CAP.01', 'Cappucino Regular', 24000, 1, 102),
(147, 'AME.02', 'Americano Large', 40000, 3, 103),
(148, 'AME.01', 'Americano Regular', 25000, 2, 104),
(149, 'ESP.01', 'Espresso Regular', 20000, 3, 105),
(150, 'ESP.01', 'Espresso Regular', 20000, 2, 106),
(151, 'ESP.02', 'Espresso Regular Susu', 25000, 4, 107),
(152, 'ESP.02', 'Espresso Regular Susu', 25000, 1, 109),
(153, 'MOC.02', 'Moccacino Large', 35000, 1, 110),
(154, 'ESP.01', 'Espresso Regular', 20000, 1, 110),
(155, 'MOC.02', 'Moccacino Large', 35000, 10, 111),
(156, 'LAT.01', 'Latte Regular', 25000, 5, 112),
(157, 'LAT.02', 'Latte Large', 33000, 6, 112),
(158, 'LAT.02', 'Latte Large', 33000, 3, 113),
(159, 'LAT.01', 'Latte Regular', 25000, 2, 113),
(160, 'MOC.02', 'Moccacino Large', 35000, 1, 114);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `kode_pelanggan` varchar(15) DEFAULT NULL,
  `nama_pelanggan` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `kode_pelanggan`, `nama_pelanggan`, `alamat`, `no_hp`) VALUES
(1, 'P.001', 'Adell', 'Jl. Anggur No. 31 Majalengka\r\n', '085111222333'),
(2, 'P.002', 'Azell', 'Jl. Manggis No. 44 Majalengka', '085222333444'),
(3, 'P.003', 'Zheaa', 'Jl. Harumanis No. 23 Majalengka', '086748392023'),
(4, 'P.004', 'Ayiss', 'Jl. Delima No. 59 Majalengka', '083423456546'),
(5, 'P.005', 'Canva', 'Jl.Jakarta Selatan No.22 Jaksel', '0895222499'),
(6, 'P.006', 'dea', 'Japan', '089673638605');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `penjualan_id` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`penjualan_id`, `tanggal`, `total_harga`, `bayar`, `id_pelanggan`, `id_petugas`, `nama_petugas`) VALUES
(27, '2024-08-29 20:32:35', 60000, 100000, NULL, 1, 'Gyshela Shalwa'),
(28, '2024-08-27 17:26:01', 20000, 20000, NULL, 1, 'Gyshela Shalwa'),
(29, '2024-08-30 17:52:33', 50000, 100000, NULL, 2, 'Dea Sri'),
(30, '2024-09-20 18:19:49', 84000, 100000, NULL, 2, 'Dea Sri'),
(31, '2024-09-23 18:35:00', 25000, 25000, NULL, 2, 'Dea Sri'),
(33, '2024-09-26 19:06:22', 28000, 30000, NULL, 4, 'Siti Nurdianti'),
(34, '2024-09-27 14:57:17', 20000, 50000, NULL, 1, 'Gyshela Shalwa'),
(36, '2024-09-28 08:03:03', 25000, 50000, NULL, 1, 'Gyshela Shalwa'),
(37, '2024-09-28 08:06:01', 84000, 100000, NULL, 1, 'Gyshela Shalwa'),
(38, '2024-09-28 08:28:15', 223000, 250000, NULL, 2, 'Dea Sri'),
(41, '2024-09-30 18:35:21', 198000, 200000, NULL, 4, 'Siti Nurdianti'),
(42, '2024-09-29 18:36:35', 84000, 100000, NULL, 4, 'Siti Nurdianti'),
(43, '2024-09-29 18:43:13', 40000, 50000, NULL, 1, 'Gyshela Shalwa'),
(44, '2024-09-29 19:22:50', 35000, 50000, NULL, 1, 'Gyshela Shalwa'),
(45, '2024-09-29 19:20:23', 35000, 50000, NULL, 1, 'Gyshela Shalwa'),
(46, '2024-10-16 19:45:16', 112000, 150000, NULL, 5, 'Pazri'),
(47, '2024-10-17 04:41:49', 81000, 100000, NULL, 5, 'Pazri'),
(48, '2024-10-17 04:43:20', 140000, 150000, NULL, 5, 'Pazri'),
(49, '2024-10-17 06:03:05', 125000, 150000, NULL, 1, 'Gyshela Shalwa'),
(50, '2024-10-17 08:02:51', 25000, 50000, NULL, 1, 'Gyshela Shalwa'),
(51, '2024-10-17 19:28:21', 53000, 70000, 1, 1, 'Gyshela Shalwa'),
(52, '2024-10-17 20:21:34', 56000, 60000, 3, 1, 'Gyshela Shalwa'),
(53, '2024-10-18 00:47:24', 28000, 30000, NULL, 2, 'Dea Sri'),
(54, '2024-10-18 00:48:32', 28000, 30000, 2, 1, 'Gyshela Shalwa'),
(55, '2024-10-18 08:55:38', 28000, 30000, NULL, 1, 'Gyshela Shalwa'),
(56, '2024-10-18 08:56:10', 35000, 50000, NULL, 1, 'Gyshela Shalwa'),
(57, '2024-10-18 08:56:35', 28000, 30000, 1, 1, 'Gyshela Shalwa'),
(58, '2024-10-18 08:57:36', 280000, 300000, 2, 1, 'Gyshela Shalwa'),
(59, '2024-10-18 08:59:18', 28000, 30000, NULL, 1, 'Gyshela Shalwa'),
(60, '2024-10-18 09:05:53', 28000, 28000, NULL, 1, 'Gyshela Shalwa'),
(61, '2024-10-18 09:20:04', 28000, 50000, NULL, 2, 'Dea Sri'),
(62, '2024-10-18 09:27:03', 75000, 100000, NULL, 4, 'Siti Nurdianti'),
(65, '2024-10-18 11:15:31', 20000, 50000, 1, 1, 'Gyshela Shalwa'),
(66, '2024-10-20 07:20:14', 35000, 40000, NULL, 4, 'Siti Nurdianti'),
(67, '2024-10-20 08:57:42', 28000, 50000, NULL, 1, 'Gyshela Shalwa'),
(70, '2024-10-21 11:42:07', 20000, 50000, NULL, 1, 'Gyshela Shalwa'),
(71, '2024-10-21 14:22:09', 50000, 50000, NULL, 1, 'Gyshela Shalwa'),
(72, '2024-10-21 14:23:49', 65000, 75000, NULL, 1, 'Gyshela Shalwa'),
(73, '2024-10-21 14:55:10', 50000, 100000, NULL, 1, 'Gyshela Shalwa'),
(75, '2024-10-21 19:08:17', 40000, 50000, NULL, 1, 'Gyshela Shalwa'),
(76, '2024-10-21 20:07:19', 74000, 80000, NULL, 2, 'Dea Sri'),
(79, '2024-10-21 20:23:14', 20000, 20000, NULL, 1, 'Gyshela Shalwa'),
(81, '2024-10-21 20:55:03', 20000, 20000, NULL, 1, 'Gyshela Shalwa'),
(82, '2024-10-21 21:03:19', 28000, 30000, NULL, 1, 'Gyshela Shalwa'),
(84, '2024-10-22 08:16:32', 24000, 30000, NULL, 1, 'Gyshela Shalwa'),
(85, '2024-10-22 08:34:38', 40000, 50000, NULL, 1, 'Gyshela Shalwa'),
(86, '2024-10-22 08:41:59', 20000, 20000, NULL, 1, 'Gyshela Shalwa'),
(87, '2024-10-22 08:55:38', 24000, 30000, NULL, 1, 'Gyshela Shalwa'),
(89, '2024-10-22 22:03:48', 20000, 30000, NULL, 1, 'Gyshela Shalwa'),
(91, '2024-10-23 08:20:51', 63000, 100000, NULL, 1, 'Gyshela Shalwa'),
(92, '2024-10-23 08:21:18', 28000, 30000, NULL, 1, 'Gyshela Shalwa'),
(93, '2024-10-23 08:21:39', 24000, 30000, NULL, 1, 'Gyshela Shalwa'),
(94, '2024-10-23 08:21:58', 35000, 35000, NULL, 1, 'Gyshela Shalwa'),
(95, '2024-10-23 08:22:19', 50000, 100000, NULL, 1, 'Gyshela Shalwa'),
(96, '2024-10-23 08:23:00', 35000, 50000, NULL, 1, 'Gyshela Shalwa'),
(97, '2024-10-23 08:23:44', 50000, 70000, NULL, 1, 'Gyshela Shalwa'),
(98, '2024-10-23 08:25:02', 72000, 100000, NULL, 1, 'Gyshela Shalwa'),
(99, '2024-10-23 08:29:35', 28000, 50000, NULL, 1, 'Gyshela Shalwa'),
(100, '2024-10-23 08:33:12', 80000, 90000, NULL, 2, 'Dea Sri'),
(101, '2024-10-23 08:58:57', 56000, 60000, NULL, 4, 'Siti Nurdianti'),
(102, '2024-10-23 09:00:28', 35000, 37000, NULL, 5, 'Pazri'),
(103, '2024-10-23 09:01:18', 120000, 200000, NULL, 6, 'Fardhan'),
(104, '2024-11-01 14:22:16', 56000, 100000, NULL, 1, 'Gyshela Shalwa'),
(105, '2024-11-05 15:54:08', 60000, 60000, NULL, 1, 'Gyshela Shalwa'),
(106, '2024-11-05 18:34:59', 40000, 50000, NULL, 2, 'Dea Sri'),
(107, '2024-11-06 07:40:29', 100000, 100000, NULL, 1, 'Gyshela Shalwa'),
(108, '2024-11-06 07:58:39', NULL, NULL, NULL, 0, NULL),
(109, '2024-11-06 17:12:38', 25000, 50000, NULL, 1, 'Gyshela Shalwa'),
(110, '2024-11-07 07:45:44', 55000, 100000, NULL, 1, 'Gyshela Shalwa'),
(111, '2024-11-07 07:46:26', 350000, 350000, NULL, 1, 'Gyshela Shalwa'),
(112, '2024-11-07 07:51:50', 323000, 350000, NULL, 1, 'Gyshela Shalwa'),
(113, '2024-11-07 10:09:20', 149000, 200000, NULL, 2, 'Dea Sri'),
(114, '2024-11-07 10:36:41', 35000, 50000, NULL, 1, 'Gyshela Shalwa');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama_petugas` varchar(35) DEFAULT NULL,
  `level` enum('admin','petugas') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'gisella', '$2y$10$MK74fpXgciKX1TvdWFaXm.BWJQKU6HQ8s4h2MXQhG/zgYWLNvDiaG', 'Gyshela Shalwa', 'admin'),
(2, 'dea', '$2y$10$LT7vU7HknsSQQPeWk5.vfuOgcfX3Y0SgzpXAi9ZYwavcb75TIoFKK', 'Dea Sri', 'petugas'),
(4, 'siti', '$2y$10$o7t1/gw7OOTuYKF7RSmwC.Rvz2keden.kEJCgtxtmH44yN/Q50n/O', 'Siti Nurdianti', 'petugas'),
(5, 'pazri', '$2y$10$BFfQfudUEtj9aAwzWaMGbOgV8tW/.FAfCFh9RIAstZydli0k0IzsS', 'Pazri', 'petugas'),
(6, 'fardhan', '$2y$10$4r33HQei3n3vcL7hCfA2t.Si7Cb6IShahIeVK5ZQMJx7KCVPy2dxK', 'Fardhan', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(15) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama_produk`, `harga`, `stok`) VALUES
(8, 'ESP.01', 'Espresso Regular', 20000, 25),
(10, 'ESP.02', 'Espresso Regular Susu', 25000, 20),
(11, 'CAP.01', 'Cappucino Regular', 24000, 20),
(14, 'CAP.02', 'Cappucino Large', 35000, 17),
(15, 'AME.01', 'Americano Regular', 25000, 22),
(16, 'AME.02', 'Americano Large', 40000, 10),
(19, 'MOC.01', 'Moccacino Regular', 28000, 23),
(22, 'MOC.02', 'Moccacino Large', 35000, 20),
(23, 'LAT.01', 'Latte Regular', 25000, 20),
(24, 'LAT.02', 'Latte Large', 33000, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tambah_stok`
--

CREATE TABLE `tambah_stok` (
  `tambah_id` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `kode_produk` varchar(15) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tambah_stok`
--

INSERT INTO `tambah_stok` (`tambah_id`, `tanggal`, `kode_produk`, `jumlah`) VALUES
(1, '2024-01-31 08:39:02', 'M.001', 20),
(2, '2024-01-31 08:39:48', 'M.002', 10),
(3, '2024-01-31 08:41:23', 'M.003', 20),
(4, '2024-01-31 08:43:53', 'M.005', 10),
(5, '0000-00-00 00:00:00', 'M.001', 10),
(6, '0000-00-00 00:00:00', 'M.001', 50),
(7, '0000-00-00 00:00:00', 'D.002', 10),
(8, '0000-00-00 00:00:00', 'VIETCOFF.08-RG', 10),
(9, '0000-00-00 00:00:00', 'ESP.01', 20),
(10, '0000-00-00 00:00:00', 'ESP.01', 20),
(11, '2024-10-15 05:48:00', 'ESP.02-RG-S', 20),
(12, '2024-10-15 05:48:14', 'ESP.02-RG-S', 20),
(13, '2024-10-15 05:48:23', 'ESP.01', 0),
(14, '2024-10-15 05:48:35', 'ESP.01', 4),
(15, '2024-10-15 05:49:04', 'ESP.01', 2),
(16, '2024-10-15 05:49:29', 'MOC.06-XL-CHOC', 5),
(17, '2024-10-15 05:54:51', 'CAP.03-RG', 30),
(18, '2024-10-15 06:04:50', 'MOC.06-XL-CHOC', 15),
(19, '2024-10-17 01:03:27', 'AME.07-RG', 20),
(20, '2024-10-18 22:06:01', 'ESP.01', 6),
(21, '2024-10-18 22:06:17', '', 7),
(22, '2024-10-18 22:06:37', 'AFFO.09-LG', 25),
(23, '2024-10-18 22:06:54', 'MAC.10-MD', 25),
(24, '2024-10-18 22:07:08', 'VIETCOFF.08-RG', 10),
(25, '2024-10-18 22:07:23', 'LAT.05-MD', 7),
(26, '2024-10-21 15:22:23', 'CAP.03-RG', 6),
(27, '2024-10-21 15:24:54', 'CAP.03-RG', 20),
(28, '2024-10-22 03:36:36', 'AFFO.09-LG', 5),
(29, '2024-10-22 08:44:14', 'KAP.02', 5),
(30, '2024-10-23 09:23:45', 'ESP.01', 5),
(31, '2024-11-06 01:44:17', 'LAT.05-MD', 10),
(32, '2024-11-06 02:12:20', 'AME.07-RG', 20),
(33, '2024-11-06 02:12:51', 'AME.07-RG', 12),
(34, '2024-11-07 01:04:25', 'CAP.03-RG', 13),
(35, '2024-11-07 01:11:26', 'CAP.02', 20),
(36, '2024-11-07 01:27:48', 'CAP.01', 20),
(37, '2024-11-07 01:28:20', 'CAP.01', 30),
(38, '2024-11-07 01:28:31', '', 29),
(39, '2024-11-07 01:28:55', 'CAP.01', 20),
(40, '2024-11-07 01:31:21', 'ESP.02', 15),
(41, '2024-11-07 01:31:39', 'ESP.02', 20),
(42, '2024-11-07 01:31:57', 'ESP.02', 5),
(43, '2024-11-07 01:34:01', 'AME.01', 25),
(44, '2024-11-07 01:34:11', '', 15),
(45, '2024-11-07 01:35:24', 'AME.01', 15),
(46, '2024-11-07 01:35:44', 'AME.01', 13),
(47, '2024-11-07 01:37:54', 'AME.02', 30),
(48, '2024-11-07 01:45:33', 'MOC.02', 25),
(49, '2024-11-07 01:49:03', 'ESP.01', 10),
(50, '2024-11-07 02:00:09', 'LAT.02', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`penjualan_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tambah_stok`
--
ALTER TABLE `tambah_stok`
  ADD PRIMARY KEY (`tambah_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `penjualan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tambah_stok`
--
ALTER TABLE `tambah_stok`
  MODIFY `tambah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

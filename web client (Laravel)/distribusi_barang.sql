-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 07:10 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `distribusi_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_agen`
--

CREATE TABLE `tabel_agen` (
  `kode_agen` int(11) NOT NULL,
  `nama_agen` varchar(255) NOT NULL,
  `alamat_agen` varchar(255) NOT NULL,
  `no_tlp_agen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_agen`
--

INSERT INTO `tabel_agen` (`kode_agen`, `nama_agen`, `alamat_agen`, `no_tlp_agen`) VALUES
(1, 'sentosa_purwodadi', 'jalan kolonel sugiono no.16A', '08192839234'),
(2, 'sentosa_kudus', 'jalan suprapto kudus', '0899371937283'),
(3, 'makmur jaya', 'jalan adi sucipto no.77', '081928392847'),
(4, 'makmur sentosa', 'jalan adi sumarmo no.87', '08993893423');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_distribusi`
--

CREATE TABLE `tabel_distribusi` (
  `kode_distribusi` int(11) NOT NULL,
  `tanggal_distribusi` datetime NOT NULL,
  `kode_produk` int(11) NOT NULL,
  `kode_agen` int(11) NOT NULL,
  `kode_status_barang` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_distribusi`
--

INSERT INTO `tabel_distribusi` (`kode_distribusi`, `tanggal_distribusi`, `kode_produk`, `kode_agen`, `kode_status_barang`, `harga_satuan`, `jumlah_barang`) VALUES
(1, '2021-06-29 06:55:45', 1, 3, 3, 10000, 100),
(2, '2021-06-29 06:55:45', 4, 4, 1, 15000, 50),
(3, '2021-06-29 07:03:27', 3, 4, 2, 10000, 250),
(4, '2021-06-29 07:03:27', 2, 3, 1, 7000, 200),
(5, '2021-06-29 07:07:07', 6, 4, 3, 2000, 500),
(6, '2021-06-29 07:07:07', 5, 4, 1, 5000, 500);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_produk`
--

CREATE TABLE `tabel_produk` (
  `kode_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_produk`
--

INSERT INTO `tabel_produk` (`kode_produk`, `nama_produk`, `harga_produk`) VALUES
(1, 'Detergen ABC', 10000),
(2, 'Sikat gigi', 7000),
(3, 'Shampo Navea', 15000),
(4, 'Conditioner', 15000),
(5, 'Sunlightt', 5000),
(6, 'Spons pembersih', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_status_barang`
--

CREATE TABLE `tabel_status_barang` (
  `kode_status_barang` int(11) NOT NULL,
  `status_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_status_barang`
--

INSERT INTO `tabel_status_barang` (`kode_status_barang`, `status_barang`) VALUES
(1, 'Dikirim'),
(2, 'Diterima'),
(3, 'Belum dikirim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_agen`
--
ALTER TABLE `tabel_agen`
  ADD PRIMARY KEY (`kode_agen`);

--
-- Indexes for table `tabel_distribusi`
--
ALTER TABLE `tabel_distribusi`
  ADD PRIMARY KEY (`kode_distribusi`),
  ADD KEY `kode_produk` (`kode_produk`,`kode_agen`,`kode_status_barang`),
  ADD KEY `kode_agen` (`kode_agen`),
  ADD KEY `kode_status_barang` (`kode_status_barang`);

--
-- Indexes for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indexes for table `tabel_status_barang`
--
ALTER TABLE `tabel_status_barang`
  ADD PRIMARY KEY (`kode_status_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_agen`
--
ALTER TABLE `tabel_agen`
  MODIFY `kode_agen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tabel_distribusi`
--
ALTER TABLE `tabel_distribusi`
  MODIFY `kode_distribusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  MODIFY `kode_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tabel_status_barang`
--
ALTER TABLE `tabel_status_barang`
  MODIFY `kode_status_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_distribusi`
--
ALTER TABLE `tabel_distribusi`
  ADD CONSTRAINT `tabel_distribusi_ibfk_1` FOREIGN KEY (`kode_agen`) REFERENCES `tabel_agen` (`kode_agen`),
  ADD CONSTRAINT `tabel_distribusi_ibfk_2` FOREIGN KEY (`kode_status_barang`) REFERENCES `tabel_status_barang` (`kode_status_barang`),
  ADD CONSTRAINT `tabel_distribusi_ibfk_3` FOREIGN KEY (`kode_produk`) REFERENCES `tabel_produk` (`kode_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

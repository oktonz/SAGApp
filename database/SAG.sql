-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2015 at 11:01 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SAG`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ingudang`
--

CREATE TABLE IF NOT EXISTS `tbl_ingudang` (
  `kd_gudang` varchar(50) NOT NULL,
  `nama_gudang` varchar(100) DEFAULT NULL,
  `ket_gudang` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ingudang`
--

INSERT INTO `tbl_ingudang` (`kd_gudang`, `nama_gudang`, `ket_gudang`) VALUES
('AZ', 'Amazone', ''),
('BAN', 'Ban', ''),
('BD', 'Baldan', ''),
('CT', 'Cmt', ''),
('CY', 'County', ''),
('DS', 'Discplough', ''),
('FD', 'Ford', ''),
('HW', 'Howard', ''),
('JCB', 'Jcb', ''),
('JD', 'Johndeere', ''),
('KBT', 'Kubota', ''),
('LL', 'Serba-serbi', ''),
('MF', 'Massey Ferguson', ''),
('PRN', 'Perkin', ''),
('RS', 'Ransomes', ''),
('TS', 'Testing 123', 'Ini Keterangan'),
('TSS', 'Test123', 'Ini Kt Test 2'),
('WIN', 'Wintor', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inkategori`
--

CREATE TABLE IF NOT EXISTS `tbl_inkategori` (
  `kd_kategori` varchar(50) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `ket_kategori` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inkategori`
--

INSERT INTO `tbl_inkategori` (`kd_kategori`, `nama_kategori`, `ket_kategori`) VALUES
('AE', 'India', ''),
('ASLI', 'Original', ''),
('BP', 'BEPCO', ''),
('RE', 'Renault Pro', 'Barang bagus Amrik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inmstproduk`
--

CREATE TABLE IF NOT EXISTS `tbl_inmstproduk` (
  `kd_produk` varchar(50) NOT NULL,
  `harga_jual` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inproduk`
--

CREATE TABLE IF NOT EXISTS `tbl_inproduk` (
  `kd_produk` varchar(50) NOT NULL,
  `kd_gudang` varchar(50) NOT NULL,
  `kd_kategori` varchar(50) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `ket_produk` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inproduk`
--

INSERT INTO `tbl_inproduk` (`kd_produk`, `kd_gudang`, `kd_kategori`, `nama_produk`, `ket_produk`) VALUES
('55555', 'BAN', 'ASLI', 'Gagang Plastik', 'Tidak ada'),
('6272726', 'HW', 'BP', 'roda', 'Gaga'),
('88795', 'BD', 'ASLI', 'Ban Dalam', 'Tidak ada.'),
('Test', 'AZ', 'AE', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jabatan` varchar(150) DEFAULT NULL,
  `tgl_masuk` date NOT NULL,
  `tpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `nama_lengkap`, `jabatan`, `tgl_masuk`, `tpt_lahir`, `tgl_lahir`, `no_telp`, `alamat`, `foto`, `username`, `password`, `role`) VALUES
(1, 'Administrator', 'Master Admin', '2015-10-01', 'Jakarta', '0000-00-00', 'TBD', 'TBD', NULL, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Master');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ingudang`
--
ALTER TABLE `tbl_ingudang`
  ADD PRIMARY KEY (`kd_gudang`);

--
-- Indexes for table `tbl_inkategori`
--
ALTER TABLE `tbl_inkategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `tbl_inproduk`
--
ALTER TABLE `tbl_inproduk`
  ADD PRIMARY KEY (`kd_produk`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

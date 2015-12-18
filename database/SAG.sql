-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2015 at 02:42 AM
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
-- Table structure for table `tbl_dettransklr`
--

CREATE TABLE IF NOT EXISTS `tbl_dettransklr` (
  `kode` int(11) NOT NULL,
  `kd_produk` varchar(200) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` double NOT NULL,
  `kd_transklr` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dettransklr`
--

INSERT INTO `tbl_dettransklr` (`kode`, `kd_produk`, `satuan`, `qty`, `harga`, `jumlah`, `kd_transklr`) VALUES
(1, '21QR929', 'Unit', 4, 700000, 2800000, 'INV.001'),
(2, 'TED1093', 'Unit', 2, 500000, 1000000, 'INV.002'),
(3, '21QR929', 'Unit', 2, 700000, 1400000, 'INV.003'),
(4, 'YFT919TT', 'Unit', 1, 70000000, 70000000, 'INV.004'),
(5, 'YFT919TT', 'Unit', 1, 60000000, 60000000, 'INV.005');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dettransmsk`
--

CREATE TABLE IF NOT EXISTS `tbl_dettransmsk` (
  `kode` int(11) NOT NULL,
  `kd_produk` varchar(150) DEFAULT NULL,
  `satuan` varchar(15) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `kd_transmsk` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dettransmsk`
--

INSERT INTO `tbl_dettransmsk` (`kode`, `kd_produk`, `satuan`, `qty`, `harga`, `jumlah`, `kd_transmsk`) VALUES
(1, '21QR929', 'Unit', 5, 1000000, 5000000, 'BPB.001'),
(2, '21QR929', 'Unit', 10, 500000, 5000000, 'BPB.002'),
(3, 'TED1093', 'Unit', 5, 200000, 1000000, 'BPB.002'),
(4, 'YFT919TT', 'Unit', 1, 50000000, 50000000, 'BPB.002'),
(5, 'YFT919TT', 'Unit', 2, 50000000, 100000000, 'BPB.005');

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
-- Table structure for table `tbl_inkategoritrans`
--

CREATE TABLE IF NOT EXISTS `tbl_inkategoritrans` (
  `kd_kattrans` int(11) NOT NULL,
  `nm_kattrans` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inmstproduk`
--

CREATE TABLE IF NOT EXISTS `tbl_inmstproduk` (
  `idx` int(11) NOT NULL,
  `kd_produk` varchar(50) NOT NULL,
  `harga_jual` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inmstproduk`
--

INSERT INTO `tbl_inmstproduk` (`idx`, `kd_produk`, `harga_jual`, `harga_beli`, `stok`) VALUES
(1, 'TED1093', 500000, 200000, 3),
(2, '21QR929', 700000, 500000, 9),
(3, 'YFT919TT', 60000000, 50000000, 1),
(4, '', 0, 0, 0),
(5, 'QQ123', 0, 0, 0);

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
('21QR929', 'AZ', 'AE', 'Ban Forklift', 'Test'),
('TED1093', 'BAN', 'ASLI', 'Turbo Fan 123', 'Ok siap'),
('YFT919TT', 'MF', 'BP', 'Turbo Jet', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_intransklr`
--

CREATE TABLE IF NOT EXISTS `tbl_intransklr` (
  `kd_transklr` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `subtotal` double DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_intransklr`
--

INSERT INTO `tbl_intransklr` (`kd_transklr`, `kategori`, `tanggal`, `subtotal`, `keterangan`) VALUES
('INV.001', '0', '2015-12-14', 0, 'asd'),
('INV.002', '0', '2015-12-01', 0, 'test'),
('INV.003', '0', '2015-12-31', 0, 'Test'),
('INV.004', '0', '2015-12-31', 0, 'Tidak ada'),
('INV.005', '0', '2015-12-31', 0, 'as');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_intransmsk`
--

CREATE TABLE IF NOT EXISTS `tbl_intransmsk` (
  `kd_transmsk` varchar(100) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_intransmsk`
--

INSERT INTO `tbl_intransmsk` (`kd_transmsk`, `kategori`, `tanggal`, `subtotal`, `keterangan`) VALUES
('BPB.001', 'kategori 1', '2015-12-14', 0, 'Test'),
('BPB.002', 'kategori 1', '2015-11-11', 0, 'Test'),
('BPB.005', 'kategori 1', '2015-12-31', 0, 'Tidak ada keterangan');

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
-- Indexes for table `tbl_dettransklr`
--
ALTER TABLE `tbl_dettransklr`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_dettransmsk`
--
ALTER TABLE `tbl_dettransmsk`
  ADD PRIMARY KEY (`kode`);

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
-- Indexes for table `tbl_inkategoritrans`
--
ALTER TABLE `tbl_inkategoritrans`
  ADD PRIMARY KEY (`kd_kattrans`);

--
-- Indexes for table `tbl_inmstproduk`
--
ALTER TABLE `tbl_inmstproduk`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `tbl_inproduk`
--
ALTER TABLE `tbl_inproduk`
  ADD PRIMARY KEY (`kd_produk`);

--
-- Indexes for table `tbl_intransklr`
--
ALTER TABLE `tbl_intransklr`
  ADD PRIMARY KEY (`kd_transklr`);

--
-- Indexes for table `tbl_intransmsk`
--
ALTER TABLE `tbl_intransmsk`
  ADD PRIMARY KEY (`kd_transmsk`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dettransklr`
--
ALTER TABLE `tbl_dettransklr`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_dettransmsk`
--
ALTER TABLE `tbl_dettransmsk`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_inkategoritrans`
--
ALTER TABLE `tbl_inkategoritrans`
  MODIFY `kd_kattrans` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_inmstproduk`
--
ALTER TABLE `tbl_inmstproduk`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

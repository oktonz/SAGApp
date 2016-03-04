-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 08:01 AM
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
(1, '21QR929', 'Unit', 2, 150000, 300000, 'INV.001'),
(2, 'TED1093', 'Unit', 2, 15000000, 30000000, 'INV.002'),
(3, '21QR929', 'Unit', 14, 150000, 2100000, 'INV.002'),
(4, 'RQQ', 'Unit', 2, 1000000, 2000000, 'INV.003'),
(5, 'ASD123', 'Unit', 2, 90000000, 180000000, 'INV.004');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dettransmsk`
--

INSERT INTO `tbl_dettransmsk` (`kode`, `kd_produk`, `satuan`, `qty`, `harga`, `jumlah`, `kd_transmsk`) VALUES
(6, '21QR929', 'Unit', 50, 120000, 6000000, 'BPB.001'),
(7, 'YFT919TT', 'Unit', 1, 56000000, 56000000, 'BPB.001'),
(8, 'TED1093', 'Unit', 5, 12000000, 60000000, 'BPB.001'),
(9, 'RQQ', 'Unit', 5, 850000, 4250000, 'BPB.003'),
(10, 'ASD123', 'Unit', 5, 12000000, 60000000, 'BPB.004'),
(11, 'RQQ', 'Unit', 2, 10000000, 20000000, 'BPB.004');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gldepartment`
--

CREATE TABLE IF NOT EXISTS `tbl_gldepartment` (
  `kd_department` varchar(2) NOT NULL,
  `nm_department` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gldepartment`
--

INSERT INTO `tbl_gldepartment` (`kd_department`, `nm_department`, `keterangan`) VALUES
('01', 'Metaguna', '-'),
('02', 'Sahabat Motor', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_glkategori`
--

CREATE TABLE IF NOT EXISTS `tbl_glkategori` (
  `kd_kategori` varchar(5) NOT NULL,
  `nm_kategori` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_glkategori`
--

INSERT INTO `tbl_glkategori` (`kd_kategori`, `nm_kategori`, `keterangan`) VALUES
('A', 'Aktiva', 'test'),
('B', 'Pasiva', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_glmst`
--

CREATE TABLE IF NOT EXISTS `tbl_glmst` (
  `kode_gl` varchar(8) NOT NULL,
  `nama_gl` varchar(100) NOT NULL,
  `saldo_awal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('LK', 'Lokal', '-');

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
-- Table structure for table `tbl_inkattrans`
--

CREATE TABLE IF NOT EXISTS `tbl_inkattrans` (
  `kode` int(11) NOT NULL,
  `kategori_trans` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inkattrans`
--

INSERT INTO `tbl_inkattrans` (`kode`, `kategori_trans`) VALUES
(1, 'kategori 1'),
(2, 'kategori 2');

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
(1, 'TED1093', 15000000, 12000000, 3),
(2, '21QR929', 150000, 120000, 34),
(3, 'YFT919TT', 0, 56000000, 1),
(4, 'RQQ', 1000000, 10000000, 5),
(5, 'Asd123', 90000000, 12000000, 3);

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
('ASD123', 'AZ', 'LK', 'Pesawat', ''),
('RQQ', 'MF', 'ASLI', 'Jet', '-'),
('TED1093', 'BAN', 'ASLI', 'Turbo Fan', ''),
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
('INV.001', '', '2015-12-01', 300000, 'Test'),
('INV.002', 'kategori 1', '2015-12-02', 32100000, '-'),
('INV.003', 'kategori 1', '2016-01-04', 2000000, '-'),
('INV.004', 'kategori 1', '2016-01-06', 180000000, '-');

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
('BPB.001', 'kategori 1', '2015-12-01', 122000000, '-'),
('BPB.003', 'kategori 1', '2015-12-01', 4250000, '-'),
('BPB.004', 'kategori 2', '2016-01-06', 80000000, '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posupplier`
--

CREATE TABLE IF NOT EXISTS `tbl_posupplier` (
  `kd_sup` int(11) NOT NULL,
  `nama_sup` varchar(200) NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `telp` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_posupplier`
--

INSERT INTO `tbl_posupplier` (`kd_sup`, `nama_sup`, `nama_perusahaan`, `alamat`, `kota`, `telp`) VALUES
(1, 'Suyono', 'PT Agriteknik', 'Jalan Kartini Raya No. 99', 'Jakarta Pusat', '021-888111'),
(2, 'Tino Suwanto', 'PT Motor Jaya', 'Jalan Gajah Mada IX No. 100', 'Jakarta Pusat', '021-778212');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sicustomers`
--

CREATE TABLE IF NOT EXISTS `tbl_sicustomers` (
  `kd_cust` int(11) NOT NULL,
  `nama_cust` varchar(200) NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sicustomers`
--

INSERT INTO `tbl_sicustomers` (`kd_cust`, `nama_cust`, `nama_perusahaan`, `alamat`, `kota`, `telp`) VALUES
(1, 'Hartono', 'PT Borneo Star', 'Jalan Merdeka barat No. 19', 'Pontianak', '0561-765858'),
(2, 'Sutrisno', 'PT Teknik Mekar', 'Jalan Taman Sari No. 192', 'Jakarta Pusat', '021-111222');

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
-- Indexes for table `tbl_gldepartment`
--
ALTER TABLE `tbl_gldepartment`
  ADD PRIMARY KEY (`kd_department`);

--
-- Indexes for table `tbl_glkategori`
--
ALTER TABLE `tbl_glkategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `tbl_glmst`
--
ALTER TABLE `tbl_glmst`
  ADD PRIMARY KEY (`kode_gl`);

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
-- Indexes for table `tbl_inkattrans`
--
ALTER TABLE `tbl_inkattrans`
  ADD PRIMARY KEY (`kode`);

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
-- Indexes for table `tbl_posupplier`
--
ALTER TABLE `tbl_posupplier`
  ADD PRIMARY KEY (`kd_sup`);

--
-- Indexes for table `tbl_sicustomers`
--
ALTER TABLE `tbl_sicustomers`
  ADD PRIMARY KEY (`kd_cust`);

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
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_inkategoritrans`
--
ALTER TABLE `tbl_inkategoritrans`
  MODIFY `kd_kattrans` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_inkattrans`
--
ALTER TABLE `tbl_inkattrans`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_inmstproduk`
--
ALTER TABLE `tbl_inmstproduk`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_posupplier`
--
ALTER TABLE `tbl_posupplier`
  MODIFY `kd_sup` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sicustomers`
--
ALTER TABLE `tbl_sicustomers`
  MODIFY `kd_cust` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

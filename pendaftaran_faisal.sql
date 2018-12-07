-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 12:17 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_faisal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_adm` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nomor` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `nama`, `password`, `nomor`, `alamat`) VALUES
('001', 'Faisal', 'pocarisweet', '0215323544', 'jl santai'),
('admin', 'admin', 'admin', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE IF NOT EXISTS `pendaftar` (
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor` varchar(15) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `flowtype` varchar(5) NOT NULL,
  `sim` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `skck` varchar(100) NOT NULL,
  `stnk` varchar(100) NOT NULL,
  `rekening` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`email`, `nama`, `nomor`, `kota`, `password`, `flowtype`, `sim`, `ktp`, `skck`, `stnk`, `rekening`) VALUES
('anto@gmail.com', 'anto jakmania uye', '12344', 'tebet', '1234', 'mobil', '2.jpg', '2.jpg', '2.jpg', '2.jpg', '2.jpg'),
('antothejak@gmail.com', 'anto mania', '123', 'jakarta', '1234', 'motor', '2.jpg', '2.jpg', '2.jpg', '2.jpg', '2.jpg'),
('ardy.prayogo@yahoo.com', 'ardy prayogo', '123', 'jakara', '123456', 'motor', '2.jpg', '2.jpg', 'download.svg', 'download.svg', 'download.svg'),
('sule@gmail.com', 'sule suleeeee', '123', 'jkt', '123', 'mobil', '2.jpg', '2.jpg', '2.jpg', '2.jpg', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE IF NOT EXISTS `verifikasi` (
  `id_ver` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_adm` varchar(20) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifikasi`
--

INSERT INTO `verifikasi` (`id_ver`, `email`, `id_adm`, `status`) VALUES
(7, 'ardy.prayogo@yahoo.com', 'admin', 'success'),
(8, 'anto@gmail.com', 'admin', 'success'),
(10, 'sule@gmail.com', 'admin', 'success'),
(11, 'antothejak@gmail.com', 'admin', 'failed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`id_ver`),
  ADD KEY `no_pend` (`id_ver`),
  ADD KEY `id_pend` (`email`),
  ADD KEY `id_adm` (`id_adm`),
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `verifikasi`
--
ALTER TABLE `verifikasi`
  MODIFY `id_ver` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD CONSTRAINT `verifikasi_ibfk_1` FOREIGN KEY (`id_adm`) REFERENCES `admin` (`id_adm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `verifikasi_ibfk_2` FOREIGN KEY (`email`) REFERENCES `pendaftar` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

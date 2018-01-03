-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 05:17 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `andri`
--
CREATE DATABASE IF NOT EXISTS `andri` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `andri`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kendaraan`
--

CREATE TABLE IF NOT EXISTS `tb_kendaraan` (
  `platnomor` varchar(30) NOT NULL,
  `id_merk` varchar(5) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `tahunterbit` int(5) NOT NULL,
  `status` enum('bebas','jalan') NOT NULL,
  PRIMARY KEY (`platnomor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kendaraan`
--

INSERT INTO `tb_kendaraan` (`platnomor`, `id_merk`, `warna`, `tahunterbit`, `status`) VALUES
('AB2174QI', 'M2', 'putih', 2016, 'bebas'),
('AB3774UU', 'M4', 'kuning', 2015, 'bebas'),
('AB4892FY', 'M3', 'hitam', 2014, 'bebas'),
('AB6607XZ', 'M7', 'silver', 2013, 'bebas'),
('AB6719EZ', 'M5', 'pink', 2013, 'bebas'),
('AB6938HZ', 'M6', 'putih', 2013, 'bebas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_merk`
--

CREATE TABLE IF NOT EXISTS `tb_merk` (
  `id_merk` varchar(5) NOT NULL,
  `merk_motor` varchar(15) NOT NULL,
  PRIMARY KEY (`id_merk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_merk`
--

INSERT INTO `tb_merk` (`id_merk`, `merk_motor`) VALUES
('M1', 'vario cw'),
('M2', 'vario'),
('M3', 'beat'),
('M4', 'mio m3'),
('M5', 'mio j'),
('M6', 'nex'),
('M7', 'lets');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `univ` varchar(30) NOT NULL,
  `fakultas` varchar(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` int(13) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `univ`, `fakultas`, `alamat`, `nohp`) VALUES
(13, 'anik', 'UIN Sunan Kalijagaa', 'DAKWAHa', 'Kebumena', 2147483647),
(14, 'dani', 'UIN Sunan Kalijaga', 'FISHUM', 'Banjarnegara', 812345789),
(15, 'dini', 'UIN Sunan Kalijaga', 'Tarbiyah', 'Banjarnegara', 812345789),
(16, 'tami', 'UIN Sunan Kalijaga', 'FISHUM', 'Kebumen', 812345789);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tarif`
--

CREATE TABLE IF NOT EXISTS `tb_tarif` (
  `id_tarif` varchar(5) NOT NULL,
  `id_merk` varchar(11) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_tarif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tarif`
--

INSERT INTO `tb_tarif` (`id_tarif`, `id_merk`, `harga`) VALUES
('A04', 'M1', 25000),
('A12', 'M1', 30000),
('A24', 'M1', 50000),
('B04', 'M2', 25000),
('B12', 'M2', 28000),
('B24', 'M2', 55000),
('C04', 'M3', 20000),
('C12', 'M3', 25000),
('C24', 'M3', 45000),
('D04', 'M4', 20000),
('D12', 'M4', 23000),
('D24', 'M4', 40000),
('E04', 'M6', 18000),
('E12', 'M6', 20000),
('E24', 'M6', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_kasir` varchar(5) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `platnomor` varchar(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jam_rental` time NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jam_kembali` time NOT NULL,
  `id_tarif` varchar(5) NOT NULL,
  `transaksi_total` int(11) NOT NULL,
  `transaksi_status` enum('mulai','selesai') NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_kasir`, `id_pelanggan`, `platnomor`, `tgl_transaksi`, `jam_rental`, `tgl_kembali`, `jam_kembali`, `id_tarif`, `transaksi_total`, `transaksi_status`) VALUES
(3, '1', 12, 'AB2174QI', '2017-12-05', '08:00:00', '2017-12-05', '20:00:00', 'B12', 28000, 'mulai'),
(4, '2', 14, 'AB3774UU', '2017-11-01', '09:00:00', '2017-11-01', '13:00:00', 'D04', 20000, 'mulai'),
(5, '2', 14, 'AB3774UU', '2017-10-01', '09:00:00', '2017-11-01', '13:00:00', 'D04', 20000, 'mulai'),
(6, '2', 14, 'AB3774UU', '2017-09-01', '09:00:00', '2017-11-01', '13:00:00', 'D04', 20000, 'mulai'),
(7, '2', 14, 'AB3774UU', '2017-08-01', '09:00:00', '2017-11-01', '13:00:00', 'D04', 20000, 'mulai'),
(8, '2', 14, 'AB3774UU', '2017-07-01', '09:00:00', '2017-11-01', '13:00:00', 'D04', 20000, 'mulai'),
(9, '1', 14, 'AB3774UU', '2017-06-01', '09:00:00', '2017-11-01', '13:00:00', 'D04', 20000, 'mulai'),
(10, '1', 14, 'AB3774UU', '2017-05-01', '09:00:00', '2017-11-01', '13:00:00', 'D04', 20000, 'mulai'),
(11, '1', 14, 'AB3774UU', '2017-04-01', '09:00:00', '2017-11-01', '13:00:00', 'D04', 20000, 'mulai'),
(12, '1', 14, 'AB3774UU', '2017-03-01', '09:00:00', '2017-11-01', '13:00:00', 'D04', 20000, 'mulai'),
(13, '1', 14, 'AB3774UU', '2017-02-01', '09:00:00', '2017-11-01', '13:00:00', 'D04', 20000, 'mulai'),
(14, '1', 14, 'AB3774UU', '2017-01-01', '09:00:00', '2017-11-01', '13:00:00', 'D04', 20000, 'mulai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `type` enum('admin','kasir') NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(4) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `type`, `nama_user`, `password`, `status`) VALUES
('2', 'admin', 'maradiyah', 'mar', 'user'),
('4', 'kasir', 'ernawati', 'erna', 'user'),
('a', 'admin', 's', 'user', ''),
('q', 'kasir', 'q', 'q', 'user'),
('w1', 'admin', 'w', 'w', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

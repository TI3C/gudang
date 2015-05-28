-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2015 at 03:53 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsisteminformasiperusahaan`
--
CREATE DATABASE IF NOT EXISTS `dbsisteminformasiperusahaan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbsisteminformasiperusahaan`;

-- --------------------------------------------------------

--
-- Table structure for table `tblabsensi`
--

CREATE TABLE IF NOT EXISTS `tblabsensi` (
  `Kd_Absensi` char(12) CHARACTER SET utf8 NOT NULL,
  `Kd_Pegawai` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Tgl` date DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `Shift` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `IdAdmin` int(11) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblalat`
--

CREATE TABLE IF NOT EXISTS `tblalat` (
  `Kd_Alat` char(12) CHARACTER SET utf8 NOT NULL,
  `Tgl_Beli` date DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblbahankeluar`
--

CREATE TABLE IF NOT EXISTS `tblbahankeluar` (
  `Kd_BahanKeluar` char(12) CHARACTER SET utf8 NOT NULL,
  `Tgl_Keluar` varchar(50) DEFAULT NULL,
  `Kd_Pegawai` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Kd_JenisBahan` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbahankeluar`
--

INSERT INTO `tblbahankeluar` (`Kd_BahanKeluar`, `Tgl_Keluar`, `Kd_Pegawai`, `Kd_JenisBahan`, `Jumlah`) VALUES
('BK01', '2015-04-26', 'P01', 'J1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblbelibahan`
--

CREATE TABLE IF NOT EXISTS `tblbelibahan` (
  `Kd_Bahan` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Tgl_Beli` date DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL,
  `Jumlah` int(11) DEFAULT NULL,
  `Kd_JenisBahan` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `Kd_Pemasok` varchar(20) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbelibahan`
--

INSERT INTO `tblbelibahan` (`Kd_Bahan`, `Tgl_Beli`, `Nominal`, `Jumlah`, `Kd_JenisBahan`, `Kd_Pemasok`) VALUES
('BM1', '2015-04-12', 5000, 2, 'J1', 'P01'),
('BM2', '2015-04-27', 5000, 4, 'J1', 'P01');

-- --------------------------------------------------------

--
-- Table structure for table `tbldetailmaintenance`
--

CREATE TABLE IF NOT EXISTS `tbldetailmaintenance` (
  `Kd_DetMaintenance` char(12) CHARACTER SET utf8 NOT NULL,
  `Keterangan_Kerusakan` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `Biaya` int(11) DEFAULT NULL,
  `Kd_Maintenance` char(12) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbldetailpenjualan`
--

CREATE TABLE IF NOT EXISTS `tbldetailpenjualan` (
  `Kd_Penjualan` char(12) CHARACTER SET utf8 NOT NULL,
  `Kd_Barang` char(12) CHARACTER SET utf8 NOT NULL,
  `Harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblgaji`
--

CREATE TABLE IF NOT EXISTS `tblgaji` (
  `Kd_Gaji` char(12) CHARACTER SET utf8 NOT NULL,
  `Kd_Pegawai` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Periode` varchar(20) DEFAULT NULL,
  `Tgl_Ambil` date DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblhutang`
--

CREATE TABLE IF NOT EXISTS `tblhutang` (
  `Kd_Hutang` char(12) CHARACTER SET utf8 NOT NULL,
  `Tgl_Masuk` date DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL,
  `Keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbljenisbahan`
--

CREATE TABLE IF NOT EXISTS `tbljenisbahan` (
  `Kd_JenisBahan` varchar(12) CHARACTER SET utf8 NOT NULL,
  `Keterangan` text,
  `Jumlah` int(255) NOT NULL,
  `Satuan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljenisbahan`
--

INSERT INTO `tbljenisbahan` (`Kd_JenisBahan`, `Keterangan`, `Jumlah`, `Satuan`) VALUES
('J1', 'Kain', 5, 'Meter');

-- --------------------------------------------------------

--
-- Table structure for table `tblkepentingan`
--

CREATE TABLE IF NOT EXISTS `tblkepentingan` (
  `Kd_Kepentingan` char(12) CHARACTER SET utf8 NOT NULL,
  `Keterangan` char(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmaintenance`
--

CREATE TABLE IF NOT EXISTS `tblmaintenance` (
  `Kd_Maintenance` char(12) CHARACTER SET utf8 NOT NULL,
  `Tgl_Perbaikan` date DEFAULT NULL,
  `Kd_Alat` char(12) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpegawai`
--

CREATE TABLE IF NOT EXISTS `tblpegawai` (
  `Kd_Pegawai` char(12) CHARACTER SET utf8 NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Jenis_Kelamin` varchar(1) DEFAULT NULL,
  `Telpon` varchar(15) DEFAULT NULL,
  `Alamat` text,
  `Status` varchar(20) DEFAULT NULL,
  `Bagian` varchar(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(5) NOT NULL,
  PRIMARY KEY (`Kd_Pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpegawai`
--

INSERT INTO `tblpegawai` (`Kd_Pegawai`, `Nama`, `Jenis_Kelamin`, `Telpon`, `Alamat`, `Status`, `Bagian`, `username`, `password`, `level`) VALUES
('P01', 'Laudia Olivianita', 'P', '081944946463', 'Jl.Danau Maninjau Malang', 'Belum Menikah', 'Gudang', 'laudia', 'laudia', 'ADMIN'),
('P02', 'Hendry', 'L', '2813018301', 'Jombang', 'Belum Menikah', 'Kepegawaian', 'hen', 'hend', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `tblpemasok`
--

CREATE TABLE IF NOT EXISTS `tblpemasok` (
  `kd_pemasok` char(12) CHARACTER SET utf8 NOT NULL,
  `nama_pemasok` varchar(50) DEFAULT NULL,
  `telpon` varchar(15) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpembiayaandivisi`
--

CREATE TABLE IF NOT EXISTS `tblpembiayaandivisi` (
  `Kd_Pembiayaan` char(12) CHARACTER SET utf8 NOT NULL,
  `Divisi` int(11) DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL,
  `Kd_Kepentingan` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Keterangan_Lain` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpengiriman`
--

CREATE TABLE IF NOT EXISTS `tblpengiriman` (
  `Kd_Pengiriman` char(12) CHARACTER SET utf8 NOT NULL,
  `Kd_Penjualan` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Tgl_Pengiriman` date DEFAULT NULL,
  `Alamat_Pengiriman` text,
  `Atas_Nama` varchar(50) DEFAULT NULL,
  `Telpon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpenjualan`
--

CREATE TABLE IF NOT EXISTS `tblpenjualan` (
  `Kd_Penjualan` char(12) CHARACTER SET utf8 NOT NULL,
  `Tgl_Penjualan` date DEFAULT NULL,
  `Atas_Nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblpenjualanmasuk`
--

CREATE TABLE IF NOT EXISTS `tblpenjualanmasuk` (
  `Kd_PenjualanMasuk` varchar(12) CHARACTER SET utf8 NOT NULL,
  `Kd_Penjualan` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Tgl_PenjualanMasuk` date DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblregistrasiproduk`
--

CREATE TABLE IF NOT EXISTS `tblregistrasiproduk` (
  `Kd_Barang` char(12) CHARACTER SET utf8 NOT NULL,
  `Kd_Jenis` char(12) CHARACTER SET utf8 DEFAULT NULL,
  `Kualitas` int(11) DEFAULT NULL,
  `Tgl_Registrasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

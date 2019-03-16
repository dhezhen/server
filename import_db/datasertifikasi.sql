-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2018 at 12:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(2, 'Dede Husen', 'ade', 'ade'),
(3, 'adm', 'admin', 'admin'),
(4, 'Ahmad Bustomi', 'ahmad', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `datahalal`
--

CREATE TABLE `datahalal` (
  `no_sertifikat` varchar(15) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `tgl_buat` date NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datahalal`
--

INSERT INTO `datahalal` (`no_sertifikat`, `nama_produk`, `jenis`, `nama_perusahaan`, `tgl_buat`, `exp_date`) VALUES
('00100007301298', 'MINUMAN', 'AQUA ', 'PT DANONE', '2018-07-16', '2020-07-20'),
('001287564763767', 'MAKANAN', 'Beng-Beng', 'PT Sentosa Jaya Abadi', '2018-07-16', '2020-07-30'),
('002019999209182', 'MINUMAN', 'Susu Kental Manis', 'PT. Frisian Flag', '2018-07-18', '2020-07-18'),
('2147483647', 'MAKANAN', 'MAKANAN', 'PT. Ultra Prima Pribadi', '2017-01-01', '2020-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `datahalal`
--
ALTER TABLE `datahalal`
  ADD PRIMARY KEY (`no_sertifikat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

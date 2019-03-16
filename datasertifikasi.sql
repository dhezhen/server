-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 04:04 AM
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
(11, 'ade', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `datahalal`
--

CREATE TABLE `datahalal` (
  `no_sertifikat` varchar(17) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `tgl_buat` date NOT NULL,
  `exp_date` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datahalal`
--

INSERT INTO `datahalal` (`no_sertifikat`, `jenis`, `nama_produk`, `nama_perusahaan`, `tgl_buat`, `exp_date`, `tgl_kadaluarsa`) VALUES
('00100007301297', 'MAKANAN', 'Wafer  Tanggo', 'PT ULTRA PRIMA ABADI', '2018-08-14', '2020-08-14', '2018-08-28'),
('00100014251200', 'MAKANAN', 'TRENZ Glazed Cracker', 'PT. INDOFOOD CBP SUKSES MAMKMU', '2018-08-14', '2020-08-14', '0000-00-00'),
('12121', 'MAKANAN', 'deded', 'dsfasfdsf', '2018-08-01', '2018-08-03', '2018-08-26'),
('469110002129', 'MINUMAN', 'ULTRA Sari Kacang Ijo', 'PT ULTRA JAYA ABADI', '2017-10-10', '2019-10-10', '0000-00-00'),
('7892122237', 'MAKANAN', '', '', '0000-00-00', '0000-00-00', '0000-00-00');

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

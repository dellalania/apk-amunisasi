-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 05:50 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amonisasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataanak`
--

CREATE TABLE `dataanak` (
  `id_anak` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` text NOT NULL,
  `jk` text NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataanak`
--

INSERT INTO `dataanak` (`id_anak`, `nama`, `tgl_lahir`, `tempat_lahir`, `jk`, `nama_ayah`, `nama_ibu`) VALUES
(4, 'Alhizam Rafasayah', '2021-03-31', 'palembang', 'laki-laki', 'heri', 'neta');

-- --------------------------------------------------------

--
-- Table structure for table `databidan`
--

CREATE TABLE `databidan` (
  `id_bidan` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `databidan`
--

INSERT INTO `databidan` (`id_bidan`, `nama`, `tgl_lahir`, `tempat_lahir`, `alamat`, `no_hp`) VALUES
(1, 'widya putri mentari', '2000-02-19', 'dangku', 'dangku', 2147483647),
(2, 'Dellania', '2000-02-20', '', 'jakabaring', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `dataibu`
--

CREATE TABLE `dataibu` (
  `id_ibu` int(11) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataibu`
--

INSERT INTO `dataibu` (`id_ibu`, `nama_ibu`, `tgl_lahir`) VALUES
(1, 'neta', '1995-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `datapos`
--

CREATE TABLE `datapos` (
  `id_pos` int(11) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `alamat`) VALUES
(1, 'admin', 'admin', 'dangku');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataanak`
--
ALTER TABLE `dataanak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `databidan`
--
ALTER TABLE `databidan`
  ADD PRIMARY KEY (`id_bidan`);

--
-- Indexes for table `dataibu`
--
ALTER TABLE `dataibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indexes for table `datapos`
--
ALTER TABLE `datapos`
  ADD PRIMARY KEY (`id_pos`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataanak`
--
ALTER TABLE `dataanak`
  MODIFY `id_anak` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `databidan`
--
ALTER TABLE `databidan`
  MODIFY `id_bidan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dataibu`
--
ALTER TABLE `dataibu`
  MODIFY `id_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datapos`
--
ALTER TABLE `datapos`
  MODIFY `id_pos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 02:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kosthost`
--

-- --------------------------------------------------------

--
-- Table structure for table `akunpemilikkost`
--

CREATE TABLE `akunpemilikkost` (
  `IDPemilik` int(11) NOT NULL,
  `namaPemilik` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `akunpencarikost`
--

CREATE TABLE `akunpencarikost` (
  `IDPencari` int(11) NOT NULL,
  `namaPencari` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kost`
--

CREATE TABLE `kost` (
  `IDKost` int(11) NOT NULL,
  `namaKost` varchar(50) NOT NULL,
  `alamatKost` varchar(255) NOT NULL,
  `kotaKost` varchar(25) NOT NULL,
  `jenisKost` varchar(25) NOT NULL,
  `jumlahKamar` int(11) NOT NULL,
  `hargaKost` int(11) NOT NULL,
  `deskripsiFasilitas` varchar(255) NOT NULL,
  `fotoKost` varchar(255) NOT NULL,
  `IDPemilik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `IDPenghuni` int(11) NOT NULL,
  `namaPenghuni` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `status` varchar(25) NOT NULL,
  `IDPencari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penyewaan`
--

CREATE TABLE `penyewaan` (
  `IDSewa` int(11) NOT NULL,
  `IDKost` int(11) NOT NULL,
  `IDPenghuni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akunpemilikkost`
--
ALTER TABLE `akunpemilikkost`
  ADD PRIMARY KEY (`IDPemilik`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `akunpencarikost`
--
ALTER TABLE `akunpencarikost`
  ADD PRIMARY KEY (`IDPencari`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `kost`
--
ALTER TABLE `kost`
  ADD PRIMARY KEY (`IDKost`),
  ADD KEY `IDPemilik` (`IDPemilik`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`IDPenghuni`),
  ADD KEY `IDPencari` (`IDPencari`);

--
-- Indexes for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`IDSewa`),
  ADD KEY `IDKost` (`IDKost`) USING BTREE,
  ADD KEY `IDPenghuni` (`IDPenghuni`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akunpemilikkost`
--
ALTER TABLE `akunpemilikkost`
  MODIFY `IDPemilik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `akunpencarikost`
--
ALTER TABLE `akunpencarikost`
  MODIFY `IDPencari` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kost`
--
ALTER TABLE `kost`
  MODIFY `IDKost` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `IDPenghuni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `IDSewa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kost`
--
ALTER TABLE `kost`
  ADD CONSTRAINT `kost_ibfk_1` FOREIGN KEY (`IDPemilik`) REFERENCES `akunpemilikkost` (`IDPemilik`);

--
-- Constraints for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD CONSTRAINT `penghuni_ibfk_1` FOREIGN KEY (`IDPencari`) REFERENCES `akunpencarikost` (`IDPencari`);

--
-- Constraints for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD CONSTRAINT `penyewaan_ibfk_1` FOREIGN KEY (`IDPenghuni`) REFERENCES `penghuni` (`IDPenghuni`),
  ADD CONSTRAINT `penyewaan_ibfk_2` FOREIGN KEY (`IDKost`) REFERENCES `kost` (`IDKost`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

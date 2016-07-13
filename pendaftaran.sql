-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2016 at 12:27 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(6, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `no_pendaftaran` int(11) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `hasil` varchar(15) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal` varchar(2) NOT NULL,
  `bulan` varchar(2) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `alamat_lengkap` varchar(25) NOT NULL,
  `no_telp_hp` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `keahlian` varchar(12) NOT NULL,
  `nama_sekolah` varchar(30) NOT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `no_sttb` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nilai_bing` varchar(3) NOT NULL,
  `nilai_bindo` varchar(3) NOT NULL,
  `nilai_matematika` varchar(3) NOT NULL,
  `nilai_ipa` varchar(3) NOT NULL,
  `nama_ayah` varchar(12) NOT NULL,
  `nama_ibu` varchar(12) NOT NULL,
  `pekerjaan_ayah` varchar(12) NOT NULL,
  `pekerjaan_ibu` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no_pendaftaran`, `password`, `nama`, `hasil`, `foto`, `jenis_kelamin`, `tempat_lahir`, `tanggal`, `bulan`, `tahun`, `alamat_lengkap`, `no_telp_hp`, `email`, `keahlian`, `nama_sekolah`, `tahun_lulus`, `no_sttb`, `nisn`, `nilai_bing`, `nilai_bindo`, `nilai_matematika`, `nilai_ipa`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`) VALUES
(27, 'bcd724d15cde8c47650fda962968f102', 'a', 'Lulus', 'siswa.png', 'Perempuan', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'Akuntansi', 'a', 'a', 'a', 'siswa', 'a', 'a', 'a', 'a', 'a', 'a', 'Guru', 'Guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no_pendaftaran`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

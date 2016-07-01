-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2016 at 08:37 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, '', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'lestari', '4297f44b13955235245b2497399d7a93'),
(3, 'cantik', 'df2188846dcda12b7dfe2e932107e3ec');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE IF NOT EXISTS `announce` (
  `id_announce` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `pelaksanaan` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `images` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `password` varchar(35) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat_lengkap` varchar(25) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nilai_kimia` varchar(3) NOT NULL,
  `nilai_biologi` varchar(3) NOT NULL,
  `nilai_matematika` varchar(3) NOT NULL,
  `nilai_fisika` varchar(3) NOT NULL,
  `nilai_bindo` varchar(3) NOT NULL,
  `nilai_bing` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `password`, `nama`, `asal_sekolah`, `foto`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat_lengkap`, `no_telepon`, `no_hp`, `email`, `nilai_kimia`, `nilai_biologi`, `nilai_matematika`, `nilai_fisika`, `nilai_bindo`, `nilai_bing`) VALUES
(1, 'aaa', 'fcea920f7412b5da7be0cf42b8c93759', 'Azhary Arliansyah', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '09090', '4a69a5acb4bee8c73e7895ca4650d626', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '090211', '59c76754b70ff1705934d21685ee4531', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'siswa_cantik', '827ccb0eea8a706c4c34a16891f84e7b', 'Ayu Lestari', 'SMAN 01 Kota Pagaralam', '', 'lahat', '10 Agustus 1998', 'Perempuan', 'Islam', 'Desa Muaratawi', '082372348081', '082372348081', 'lestariayu669@gmail.com', '100', '100', '100', '100', '100', '100'),
(14, 'lestari', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '100898', '4a9f14a347829bd6569f679a8376789f', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id_announce`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id_announce` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

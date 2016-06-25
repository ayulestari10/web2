-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2016 at 03:30 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_siswa`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat_lengkap`, `no_telepon`, `no_hp`, `email`, `nilai_kimia`, `nilai_biologi`, `nilai_matematika`, `nilai_fisika`, `nilai_bindo`, `nilai_bing`) VALUES
(3, '09021181520021', 'Ayu Lestari Cantik', 'Lahat', '10 Agustus 1998', 'Perempuan', 'Islam', 'Desa Tercinta', '082372348081', 'lestariayu669@g', '082372348081', '100', '100', '100', '100', '100', '100'),
(7, '09021181419007', 'Azhary Arliansyah', 'Lubuk Linggau', '5 Agustus 1996', 'laki-laki', 'Islam', 'Jalan ngoding tanpa coca-', '08blablabla', 'arliansyah_azha', 'pokokny tri wkwk', '100', '101', '101', '101', '100', '101');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nis`, `username`, `password`, `role`) VALUES
(4, 'ayules', '', 'df2188846dcda12b7dfe2e932107e3ec', 'siswa'),
(5, 'admin', 'admin', 'admin', 'admin'),
(6, '123456', '', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(7, 'lestari', '', 'f3bab21fe648634117ba2e1d70b09740', 'siswa'),
(8, '', 'cantik', '1cdac5ad084879e80e5b67c51baa9095', 'admin'),
(9, '', 'lalala', '9aa6e5f2256c17d2d430b100032b997c', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

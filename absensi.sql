-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2021 at 05:17 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_adm`, `username`, `email`, `password`) VALUES
(2, 'ayeb', '1711500122@smansa.ac.id', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `email`, `password`, `jabatan`) VALUES
(7, '1711500123', 'Fernandy', 'fernandy16@gmail.com', '1234', 'Guru Matematika'),
(9, '1711500110', 'Febriansyah', 'febri.an46@yahoo.com', '1234', 'Wakil Kepala Sekolah'),
(10, '1711500138', 'Jimmy Syibli', 'jimmysyibli@gmail.com', '1234', 'Kepala TU'),
(11, '1711500073', 'Gulik Purwanto', 'gulikdomino@gmail.com', '1234', 'Kepala Sekolah'),
(12, '1711500121', 'Panji Darma Yudha', 'panjiganteng@gmail.com', '1234', 'Satpam');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `jns_kegiatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `jns_kegiatan`) VALUES
(27, 'Absen Masuk', 'Absensi Siswa Keluar Sekolah'),
(28, 'absen pulang', 'absensi'),
(29, 'LABKOM 1', 'Pemakaian Ruangan'),
(30, 'LABKOM 2', 'Pemakaian Ruangan'),
(31, 'Ruang Olahraga', 'Pemakaian Ruangan'),
(32, 'Lapangan Upacara', 'Pemakaian Lapangan');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `id_swa` int(20) NOT NULL,
  `id_guru` int(20) NOT NULL,
  `waktu` datetime NOT NULL,
  `id_kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id_kehadiran`, `id_swa`, `id_guru`, `waktu`, `id_kegiatan`) VALUES
(1, 0, 0, '2021-07-06 23:00:06', 27),
(2, 11, 0, '2021-07-06 23:00:42', 27),
(5, 0, 0, '2021-07-06 23:34:40', 27),
(6, 0, 0, '2021-07-06 23:39:24', 27),
(7, 0, 0, '2021-07-06 23:39:24', 27),
(8, 0, 0, '2021-07-06 23:39:38', 27),
(9, 0, 0, '2021-07-06 23:39:38', 27),
(10, 0, 0, '2021-07-06 23:40:39', 27),
(11, 0, 0, '2021-07-06 23:40:39', 27),
(12, 0, 0, '2021-07-06 23:41:37', 27),
(13, 0, 0, '2021-07-06 23:42:03', 27),
(15, 0, 0, '2021-07-06 23:42:50', 27),
(16, 0, 0, '2021-07-06 23:44:02', 27),
(25, 0, 0, '2021-07-28 23:24:59', 30),
(26, 0, 0, '2021-07-28 23:28:33', 27),
(33, 111, 0, '2021-07-28 23:57:51', 27),
(35, 111, 0, '2021-07-29 00:29:20', 27),
(39, 111, 0, '2021-07-29 00:39:34', 28),
(44, 111, 0, '2021-07-29 00:44:08', 27),
(49, 111, 0, '2021-07-29 00:51:34', 27),
(63, 1711500122, 0, '2021-07-30 23:06:35', 29),
(64, 4444, 1711500123, '2021-07-30 23:22:32', 29),
(65, 4444, 1711500123, '2021-07-30 23:22:43', 29),
(66, 4444, 1711500123, '2021-07-30 23:23:42', 29),
(67, 555, 1711500123, '2021-07-30 23:23:44', 29),
(68, 5555, 1711500123, '2021-07-30 23:24:53', 28),
(69, 1711500122, 1711500123, '2021-07-30 23:25:49', 30),
(70, 7777, 1711500123, '2021-07-30 23:25:57', 30),
(71, 1711500122, 1711500123, '2021-07-30 23:26:48', 31);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id_session` int(11) NOT NULL,
  `id_swa` int(20) NOT NULL,
  `id_guru` int(20) NOT NULL,
  `waktu` datetime NOT NULL,
  `id_kegiatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_swa` int(11) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `alamat` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_swa`, `nis`, `nama`, `email`, `password`, `ttl`, `jeniskelamin`, `alamat`) VALUES
(6, '5555', 'Ayeb', 'ayeb@gmail.com', '1234', 'Muntok, 12 Desember 1999', 'Pria', 'Kp Jawa'),
(11, '7777', 'Eri', 'eri@gmail.com', '1234', 'Palembang, 17 Agustus 2012', 'Laki2', 'Pangkal Pinang'),
(16, '1711500122', 'Nizar', 'nizar.yahya.14@gmail.com', '1234', 'Muntok, 12 Des 1999', 'Pria', 'Muntok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id_session`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_swa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id_session` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_swa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

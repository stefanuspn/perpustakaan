-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Apr 2018 pada 11.30
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_admin` varchar(50) NOT NULL,
  `date_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `nama`, `email`, `username`, `nohp`, `password`, `foto_admin`, `date_register`) VALUES
(1, 'stefanus prasetyo nugrohov', 'stefanusnugroho585@gmail.com', 'admin', '089635406806', '$2y$10$C.CSO/CW5OX3.a/4HWp9Je1hpL00e3gAAww0Ju01xcL51tWfllPRq', 'Tulips.jpg', '2018-03-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `uid` int(12) NOT NULL,
  `id_anggota` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(15) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `date_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`uid`, `id_anggota`, `nama`, `tempatlahir`, `tanggal_lahir`, `alamat`, `jk`, `nohp`, `foto_user`, `date_register`) VALUES
(3, '704059777434885', 'Stefanus Prasetyo Nugroho', 'Bekasi', '10/20/1997', 'Perum Bekasi Regensi 1 Blok K6 No 20 Cibitung', 'Pria', '089635406806', 'Koala.jpg', '2018-03-23'),
(4, '090253306653756', 'Aika Putri Aryanti', 'Bengkulu', '05/27/1998', 'Bengkulu', 'Wanita', '08963540786', 'Penguins.jpg', '2018-03-23'),
(5, '903383764067456', 'Stefanus Prasetyo Nugrohossafaf', 'Bekasi', '10/09/1997', 'd', 'Pria', '1515', 'Jellyfish.jpg', '2018-03-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(12) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `fotobuku` varchar(100) NOT NULL,
  `jumlahbuku` int(11) NOT NULL,
  `lokasi` varchar(10) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `fotobuku`, `jumlahbuku`, `lokasi`, `tgl_input`) VALUES
(2, 'Buku Pintar Pemrogramman Web', 'Adhi Prasetyon', 'mediakita', 1997, '9789797943479', 'Tulips.jpg', 3, 'Rak 1', '2018-03-20'),
(6, 'w', 'w', 'w', 1997, '3341414', 'Koala.jpg', 19, 'ra', '2018-03-23');

-- --------------------------------------------------------

--
-- Stand-in structure for view `jumlahanggota`
--
CREATE TABLE `jumlahanggota` (
`jk` varchar(15)
,`jumlah` bigint(21)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(12) NOT NULL,
  `NoTrans` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `judulbuku` varchar(100) NOT NULL,
  `jumlah_pinjam` int(15) NOT NULL,
  `tgl_pinjam` varchar(50) NOT NULL,
  `tgl_kembali` varchar(50) NOT NULL,
  `bulan` varchar(50) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `NoTrans`, `nama`, `judulbuku`, `jumlah_pinjam`, `tgl_pinjam`, `tgl_kembali`, `bulan`, `tahun`, `status`) VALUES
(17, '20187034609425', 'Aika Putri Aryanti', 'Buku Pintar Pemrogramman Web', 1, '31-03-2018', '07-04-2018', '03', '2018', 'kembali'),
(18, '20186694946946', 'Stefanus Prasetyo Nugroho', 'w', 3, '02-04-2018', '09-04-2018', '04', '2018', 'kembali'),
(19, '20183718147236', 'Stefanus Prasetyo Nugroho', 'w', 2, '02-04-2018', '09-04-2018', '04', '2018', 'kembali'),
(20, '20186132446124', 'Stefanus Prasetyo Nugroho', 'Buku Pintar Pemrogramman Web', 2, '02-04-2018', '', '04', '2018', 'kembali'),
(21, '20189617850357', 'Aika Putri Aryanti', 'w', 2, '02-04-2018', '16-04-2018', '04', '2018', 'kembali'),
(22, '20180707622441', 'Stefanus Prasetyo Nugroho', 'Buku Pintar Pemrogramman Web', 3, '02-04-2018', '09-04-2018', '04', '2018', 'kembali'),
(27, '20182562091891', 'Stefanus Prasetyo Nugroho', 'Buku Pintar Pemrogramman Web', 2, '03-04-2018', '10-04-2018', '04', '2018', 'pinjam');

-- --------------------------------------------------------

--
-- Struktur untuk view `jumlahanggota`
--
DROP TABLE IF EXISTS `jumlahanggota`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlahanggota`  AS  select `anggota`.`jk` AS `jk`,count(0) AS `jumlah` from `anggota` group by `anggota`.`jk` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `uid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

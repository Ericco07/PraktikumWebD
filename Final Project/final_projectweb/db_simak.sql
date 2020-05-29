-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 11:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simak`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsimak`
--

CREATE TABLE `adminsimak` (
  `id_admin` int(11) NOT NULL,
  `role` char(1) NOT NULL,
  `nip` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminsimak`
--

INSERT INTO `adminsimak` (`id_admin`, `role`, `nip`, `nama`, `email`, `alamat`, `tgl_lahir`, `password`) VALUES
(1, '0', '1234567890', 'Administrator', 'admin@gmail.com', 'Ubud', '1999-05-05', '$2y$10$myFCUysMmWRR2PZ5NUcXqer1gK.TkrVEtMPXsPFzllHE/FgyCLO2C');

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan`
--

CREATE TABLE `bimbingan` (
  `id_bimbingan` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bimbingan`
--

INSERT INTO `bimbingan` (`id_bimbingan`, `id_dosen`, `id_mahasiswa`) VALUES
(6, 4, 3),
(7, 4, 4),
(8, 5, 5),
(9, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `role` char(1) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nidn` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `role`, `nip`, `nidn`, `nama`, `email`, `alamat`, `tanggal_lahir`, `status`, `password`) VALUES
(4, '2', '1234554321', '1122334455', 'I Wayan Putu', 'wayan@gmail.com', 'Denpasar', '2020-05-11', 'aktif', '$2y$10$YV/1CAv0uKsjDExjO36wiuEH5FwAzRzof4lKS.syMjgsu2aybDQFG'),
(5, '2', '5432112345', '6677889900', 'I Made Kadek', 'made@gmail.com', 'Jimbaran', '2020-05-08', 'aktif', '$2y$10$7uIf43hMMYlYnIfB7dhnfei1GOYfVQGhI1F/0gpQury8Cef4ZDcY6');

-- --------------------------------------------------------

--
-- Table structure for table `join_kelas`
--

CREATE TABLE `join_kelas` (
  `id_join` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `join_kelas`
--

INSERT INTO `join_kelas` (`id_join`, `id_mahasiswa`, `id_kelas`) VALUES
(20, 3, 10),
(21, 3, 11);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `jam_kuliah` varchar(20) NOT NULL,
  `kuota_kelas` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jam_kuliah`, `kuota_kelas`, `id_dosen`, `status`) VALUES
(10, 'Virtual dan Realitas Tertambah', '08.00-10.30', 10, 4, 'aktif'),
(11, 'Analisis Antarmuka', '10.30-13.00', 10, 5, 'aktif'),
(12, 'AI Pada Game', '', 10, 5, 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_mk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id_krs`, `semester`, `id_mahasiswa`, `id_mk`) VALUES
(8, 'Genap 2020/2021', 3, 4),
(9, 'Genap 2020/2021', 3, 5),
(10, 'Genap 2020/2021', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `role` char(1) NOT NULL,
  `nim` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `role`, `nim`, `nama`, `email`, `alamat`, `tanggal_lahir`, `status`, `password`) VALUES
(3, '1', '1708561078', 'I Kadek Agus Andika Putra', 'dexandika19@gmail.com', 'Jalan Sahadewa No. 15', '1999-03-19', 'aktif', '$2y$10$mJXgVhAmLo7sL91lSjRTqORKq4JlXwJlNot6KENjqrgDeeRB0nuha'),
(4, '1', '1708561079', 'I Made Agus', 'made@gmail.com', 'Denpasar', '2020-05-02', 'aktif', '$2y$10$pqQqd0Jp87LHMw2lDlFXpeK2weh/yipHY2tB2r053vStlhEDHE8GC'),
(5, '1', '1708561080', 'I Wayan Agus', 'wayan@gmail.com', 'Denpasar', '2020-05-19', 'aktif', '$2y$10$pJ8AS14U876eRnaVed2I/.1ir/dPcEHu0rr3LZGuhaRav34y70T7G'),
(6, '1', '1708561081', 'I  Putu Agus', 'putu@gmail.com', 'Denpasar', '2020-05-06', 'aktif', '$2y$10$pQFZXOSSPho8HOkBWmrpSuDDNp95ije67htWmCEKOicSZGip59fz2');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_mk` int(11) NOT NULL,
  `kode_mk` char(6) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_mk`, `kode_mk`, `matakuliah`, `sks`) VALUES
(4, 'IF0899', 'Virtual dan Realitas Tertambah', 3),
(5, 'IF0888', 'Analisis Antarmuka', 3),
(6, 'IF0877', 'AI Pada Game', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminsimak`
--
ALTER TABLE `adminsimak`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD PRIMARY KEY (`id_bimbingan`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `join_kelas`
--
ALTER TABLE `join_kelas`
  ADD PRIMARY KEY (`id_join`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`),
  ADD KEY `id_mk` (`id_mk`),
  ADD KEY `id_mahasiswa` (`id_mahasiswa`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_mk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminsimak`
--
ALTER TABLE `adminsimak`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bimbingan`
--
ALTER TABLE `bimbingan`
  MODIFY `id_bimbingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `join_kelas`
--
ALTER TABLE `join_kelas`
  MODIFY `id_join` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bimbingan`
--
ALTER TABLE `bimbingan`
  ADD CONSTRAINT `bimbingan_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`),
  ADD CONSTRAINT `bimbingan_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);

--
-- Constraints for table `join_kelas`
--
ALTER TABLE `join_kelas`
  ADD CONSTRAINT `join_kelas_ibfk_1` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`),
  ADD CONSTRAINT `join_kelas_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);

--
-- Constraints for table `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`id_mk`) REFERENCES `matakuliah` (`id_mk`),
  ADD CONSTRAINT `krs_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa` (`id_mahasiswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

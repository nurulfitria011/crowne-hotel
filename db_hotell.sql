-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 04:40 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotell`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('petugas','tamu','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Nurul Fitria', 'nurulfitria', '39596dfee3b2b8409147bff7d9a6269b', 'petugas'),
(2, 'Divia Sintia', 'diviasintia', '674ed60027a2772560a597731e8be31c', 'tamu'),
(3, 'Fariz Anggara', 'farizanggara', 'cb389dbb97d56277765beafe54053f69', 'admin'),
(4, 'Saepul Anwar', 'saepulanwar', '9952809a427ef1be4ce290aa010703f2', 'tamu'),
(5, 'Gusti Nugraha', 'gustinugraha', '4816c00e313c704a5695a9d55d98b32d', 'petugas'),
(6, 'Gusti Nugraha', 'gustinugraha', '4816c00e313c704a5695a9d55d98b32d', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fasilitas`
--

CREATE TABLE `tbl_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fasilitas`
--

INSERT INTO `tbl_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`) VALUES
(0, '', ''),
(1, 'Gym', 'Berada disebelah kolam renang'),
(2, 'Kolam Renang', 'Berada dibelakang Kamar standar'),
(3, 'Restoran', 'Berada di lobby hotel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  `fasilitas_kamar` varchar(255) NOT NULL,
  `harga_kamar` int(11) NOT NULL,
  `jml_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id_kamar`, `nama_kamar`, `fasilitas_kamar`, `harga_kamar`, `jml_kamar`) VALUES
(1, 'Standard Room', 'shield, Ac, bath tub, televisi, wifi, telepon, meja, dapur dan kamar mandi.\r\n', 500000, 22),
(2, 'Standard Twin Room', 'shield, Ac bath tub, Shower, handuk, televisi, wifi, telepon, meja, dapur dan kamar mandi.\r\n', 650000, 10),
(3, 'Superior Room', 'shield, Ac, bath tub, shower, televisi, wifi, telepon, meja, minibar, dapur dan kamar mandi.\r\n', 750000, 15),
(4, 'Deluxe Room', 'shield, Ac, bath tub, shower, handuk, televisi, wifi, telepon, meja, dapur dan kamar mandi.\r\n', 850000, 8),
(5, 'Junior Suite Room', 'shield, Ac, bath tub, shower, televisi, wifi, telepon, meja, dapur dan kamar mandi.\r\n', 1000000, 12),
(6, 'Family Suite Room', 'shield, Ac, bath tub, shower, televisi, wifi, telepon, meja, dapur dan kamar mandi.\r\n', 1500000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `kd_bayar` char(6) NOT NULL,
  `id_pesan` char(6) NOT NULL,
  `bukti_bayar` varchar(100) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `nama_akun_rekening` varchar(50) NOT NULL,
  `nmr_rekening` char(14) NOT NULL,
  `status_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`kd_bayar`, `id_pesan`, `bukti_bayar`, `tgl_bayar`, `nama_akun_rekening`, `nmr_rekening`, `status_bayar`) VALUES
('BYR001', 'PSN001', 'sweety.jpg', '2022-03-27', 'nurul fitria', '12345678910', 1),
('BYR002', 'PSN002', '20220325_169505', '2022-03-27', 'anggraeni', '135798657', 1),
('BYR003', 'PSN003', 'IMG-20220321', '2022-03-31', 'setra winjani', '2233432156', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `id_pesan` char(6) NOT NULL,
  `kd_tamu` char(5) NOT NULL,
  `tgl_check_in` date NOT NULL,
  `tgl_check_out` date NOT NULL,
  `jml_kamar_dipesan` int(11) NOT NULL,
  `jml_orang` int(11) NOT NULL,
  `jml_hari` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status_reservasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`id_pesan`, `kd_tamu`, `tgl_check_in`, `tgl_check_out`, `jml_kamar_dipesan`, `jml_orang`, `jml_hari`, `id_kamar`, `total_bayar`, `status_reservasi`) VALUES
('<br />', '<br /', '2022-03-27', '2022-03-29', 1, 1, 2, 0, 1000000, 0),
('PSN001', 'TM001', '2022-03-27', '2022-03-29', 1, 1, 2, 1, 1000000, 1),
('PSN002', 'TM002', '2022-03-26', '2022-03-27', 1, 1, 1, 2, 650000, 1),
('PSN003', 'TM003', '2022-03-28', '2022-03-31', 1, 1, 3, 3, 2250000, 1),
('PSN004', 'TM004', '2022-03-29', '2022-03-30', 1, 1, 1, 4, 750000, 1),
('PSN005', 'TM005', '2022-03-27', '2022-03-31', 1, 1, 4, 5, 3400000, 1),
('PSN006', 'TM006', '2022-03-28', '2022-03-29', 1, 1, 1, 6, 1500000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resepsionis`
--

CREATE TABLE `tbl_resepsionis` (
  `id` int(11) NOT NULL,
  `nama_resepsionis` varchar(50) NOT NULL,
  `username_resepsionis` varchar(50) NOT NULL,
  `password_resepsionis` varchar(255) NOT NULL,
  `level_login` enum('petugas','tamu','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_resepsionis`
--

INSERT INTO `tbl_resepsionis` (`id`, `nama_resepsionis`, `username_resepsionis`, `password_resepsionis`, `level_login`) VALUES
(1, 'Aditya Nugraha', 'adityanugraha', '357344787fa3d91429f000604af9667f', 'petugas'),
(2, 'Gita Aprilia', 'gitaaprilia', '81dc9bdb52d04dc20036dbd8313ed055', 'petugas'),
(3, 'Anggun Puspita', 'anggunpuspita', '3935b0f7136af4765a2c09ab4d93025e', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `kd_tamu` char(5) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_telepon` char(13) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`kd_tamu`, `nama_tamu`, `email`, `no_telepon`, `alamat`, `provinsi`, `kota`, `kecamatan`, `password`) VALUES
('TM001', 'Nurul Fitria Hidayani', 'fitrianurul280@gmail.com', '085861229784', 'Kp. Cigintung ', '1', '1', '1', '0192023a7bbd73250516f069df18b500'),
('TM002', 'Selvia April', 'selvia12@gmail.com', '082287982246', 'Kp. Babakan', '1', '1', '3', '754af7ac801db3dd9d720c512c617003'),
('TM003', 'Anggia Dita', 'anggia123@gmail.com', '085845632322', 'Jl. Haji Maksum', '1', '35', '22', '827ccb0eea8a706c4c34a16891f84e7b'),
('TM004', 'Sandi Gustiana', 'sandi256@gmail.com', '081345628546', 'Parahyangan', '1', '1', '8', '0be5353c908c0ece098035362baf7edd'),
('TM005', 'Rizky Nurdiansyah', 'rizky890@gmail.com', '098767845632', 'Kp. Citiis', '1', '35', '16', '5c9ca16b108ae60bf19b52e879541c1e'),
('TM006', 'Aprilia  Dwi', 'dwi11@gmail.com', '087845623455', 'Kp. Pasir Astana', '1', '1', '1', '440ed9c161f1d162edd66487b0f6d468');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('petugas','admin','tamu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `alamat`, `no_telp`, `username`, `password`, `level`) VALUES
(1, 'Dini Aditya', 'dini123@gmail.com', 'Jl. Raya Cimanggis', '082254327656', 'diniaditya', '20f2c963a0bc322a6a7e4adb38b18e0d', 'petugas'),
(2, 'Dian Agistiana', 'dianA234@gmail.com', 'Jl. Mekar Sari No. 12', '085844537654', 'dianagistiana', '528c279a11b5b30c3c1a0d647f613544', 'petugas'),
(3, 'Putri Permata', 'putt212@gmail.com', 'Kp. Cipeundeuy No.32', '088223574452', 'putripermata', 'bcb0cca77c70b820ea9fe2c548920dc5', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_fasilitas`
--
ALTER TABLE `tbl_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`kd_bayar`),
  ADD KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `kd_tamu` (`kd_tamu`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `tbl_resepsionis`
--
ALTER TABLE `tbl_resepsionis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tamu`
--
ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`kd_tamu`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_resepsionis`
--
ALTER TABLE `tbl_resepsionis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

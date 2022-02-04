-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 09:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diskominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `cuti_id` int(11) NOT NULL,
  `tenaga_ahli_id` int(11) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `jenis_cuti` enum('Cuti Tahunan','Cuti Menikah','Cuti Sakit','Cuti Melahirkan/Bersalin','Cuti Karena Alasan Penting') NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `jumlah_hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`cuti_id`, `tenaga_ahli_id`, `tanggal_pengajuan`, `jenis_cuti`, `tanggal_mulai`, `tanggal_selesai`, `jumlah_hari`) VALUES
(1, 1, '2021-02-07', 'Cuti Menikah', '2021-07-05', '2021-07-08', 4),
(2, 3, '2021-02-19', 'Cuti Menikah', '2021-02-22', '2021-02-25', 4),
(3, 4, '2021-03-03', 'Cuti Melahirkan/Bersalin', '2021-03-04', '2021-03-05', 2),
(4, 5, '2021-04-09', 'Cuti Menikah', '2021-04-12', '2021-04-15', 4),
(5, 6, '2021-05-14', 'Cuti Menikah', '2021-05-17', '2021-05-20', 4),
(6, 7, '2021-10-04', 'Cuti Sakit', '2021-10-04', '2021-10-06', 3),
(7, 8, '2021-11-15', 'Cuti Melahirkan/Bersalin', '2021-11-15', '2021-11-17', 3),
(8, 9, '2021-06-16', 'Cuti Sakit', '2021-06-16', '2021-06-18', 3),
(12, 12, '2021-09-21', 'Cuti Melahirkan/Bersalin', '2021-09-21', '2021-09-23', 3),
(13, 13, '2021-12-06', 'Cuti Sakit', '2021-12-06', '2021-12-07', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kinerja`
--

CREATE TABLE `kinerja` (
  `kinerja_id` int(11) NOT NULL,
  `tenaga_ahli_id` int(11) NOT NULL,
  `nama_penilai` enum('Muryadi Imansyah, S.Kom') NOT NULL,
  `inisiatif` int(11) NOT NULL,
  `disiplin` int(11) NOT NULL,
  `tanggung_jawab` int(11) NOT NULL,
  `kerja_sama` int(11) NOT NULL,
  `pemecahan_masalah` int(11) NOT NULL,
  `pengambilan_keputusan` int(11) NOT NULL,
  `nilai_total` int(11) NOT NULL,
  `keterangan` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kinerja`
--

INSERT INTO `kinerja` (`kinerja_id`, `tenaga_ahli_id`, `nama_penilai`, `inisiatif`, `disiplin`, `tanggung_jawab`, `kerja_sama`, `pemecahan_masalah`, `pengambilan_keputusan`, `nilai_total`, `keterangan`) VALUES
(12, 1, 'Muryadi Imansyah, S.Kom', 80, 85, 90, 70, 70, 100, 83, 'Baik'),
(13, 3, 'Muryadi Imansyah, S.Kom', 80, 85, 75, 80, 90, 85, 83, 'Baik'),
(14, 4, 'Muryadi Imansyah, S.Kom', 95, 70, 90, 88, 85, 90, 86, 'Baik'),
(15, 5, 'Muryadi Imansyah, S.Kom', 90, 80, 95, 85, 80, 90, 87, 'Baik'),
(16, 6, 'Muryadi Imansyah, S.Kom', 90, 90, 90, 85, 80, 75, 85, 'Baik'),
(17, 7, 'Muryadi Imansyah, S.Kom', 90, 80, 60, 70, 90, 85, 79, 'Cukup'),
(18, 8, 'Muryadi Imansyah, S.Kom', 85, 80, 70, 90, 75, 85, 81, 'Baik'),
(19, 9, 'Muryadi Imansyah, S.Kom', 90, 80, 75, 85, 90, 70, 82, 'Baik'),
(20, 12, 'Muryadi Imansyah, S.Kom', 90, 90, 85, 95, 80, 80, 87, 'Baik'),
(21, 13, 'Muryadi Imansyah, S.Kom', 85, 80, 70, 75, 90, 85, 81, 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `presensi_id` int(11) NOT NULL,
  `tenaga_ahli_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keterangan` enum('Masuk','Keluar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`presensi_id`, `tenaga_ahli_id`, `tanggal`, `jam`, `keterangan`) VALUES
(1, 1, '2022-01-03', '06:30:00', 'Masuk'),
(2, 1, '2022-01-03', '16:30:00', 'Keluar'),
(3, 3, '2022-01-03', '06:28:00', 'Masuk'),
(4, 3, '2022-01-03', '16:30:00', 'Keluar'),
(6, 4, '2022-01-03', '06:27:00', 'Masuk'),
(7, 4, '2022-01-03', '16:30:00', 'Keluar'),
(8, 5, '2022-01-03', '06:30:00', 'Masuk'),
(9, 5, '2022-01-03', '16:30:00', 'Keluar'),
(10, 6, '2022-01-03', '06:26:00', 'Masuk'),
(11, 6, '2022-01-03', '16:30:00', 'Keluar'),
(12, 7, '2022-01-03', '06:24:00', 'Masuk'),
(13, 7, '2022-01-03', '16:30:00', 'Keluar'),
(14, 8, '2022-01-03', '06:29:00', 'Masuk'),
(15, 8, '2022-01-03', '16:30:00', 'Keluar'),
(16, 9, '2022-01-03', '06:30:00', 'Masuk'),
(17, 9, '2022-01-03', '16:30:00', 'Keluar'),
(20, 12, '2022-01-03', '06:30:00', 'Masuk'),
(21, 12, '2022-01-03', '16:30:00', 'Keluar'),
(22, 13, '2022-01-03', '06:27:00', 'Masuk'),
(23, 13, '2022-01-03', '16:30:00', 'Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `sk`
--

CREATE TABLE `sk` (
  `sk_id` int(11) NOT NULL,
  `tenaga_ahli_id` int(11) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `tmt_pengangkatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sk`
--

INSERT INTO `sk` (`sk_id`, `tenaga_ahli_id`, `nomor_surat`, `tmt_pengangkatan`) VALUES
(16, 1, '201/04/DISKOMINFO/VII/2019', '2019-07-10'),
(17, 3, '201/05/DISKOMINFO/VII/2019', '2019-07-10'),
(18, 4, '201/06/DISKOMINFO/VII/2019', '2019-07-10'),
(19, 5, '201/13/DISKOMINFO/VIII/2020', '2020-08-18'),
(20, 6, '201/07/DISKOMINFO/VII/2019', '2019-07-10'),
(21, 7, '201/16/DISKOMINFO/VIII/2020', '2020-08-18'),
(22, 8, '201/17/DISKOMINFO/VIII/2020', '2020-08-18'),
(23, 9, '201/19/DISKOMINFO/VIII/2020', '2020-08-18'),
(29, 12, '201/14/DISKOMINFO/VIII/2020', '2020-08-18'),
(30, 13, '201/20/DISKOMINFO/VIII/2020', '2020-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `st`
--

CREATE TABLE `st` (
  `st_id` int(11) NOT NULL,
  `tenaga_ahli_id` int(11) NOT NULL,
  `nomor_surat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_tugas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `st`
--

INSERT INTO `st` (`st_id`, `tenaga_ahli_id`, `nomor_surat`, `tanggal`, `jenis_tugas`) VALUES
(13, 1, '500/ST-156/DIS/2021', '2021-11-09', 'Monitoring dan perbaikan jaringan CCTV di taman Kamboja Banjarmasin'),
(14, 3, '500/ST-157/DIS/2021', '2021-11-09', 'Monitoring dan perbaikan jaringan CCTV di taman Kamboja Banjarmasin'),
(15, 4, '500/ST-160/DIS/2021', '2021-11-18', 'Monitoring dan maintance jaringan server di Pemko Banjarmasin'),
(16, 5, '500/ST-161/DIS/2021', '2021-11-18', 'Monitoring dan maintance jaringan server di Pemko Banjarmasin'),
(17, 6, '500/ST-134/DIS/2021', '2021-09-20', 'Sosialisasi aplikasi di Dinas Kependudukan dan Pencatatan Sipil Banjarmasin'),
(18, 7, '500/ST-135/DIS/2021', '2021-09-20', 'Sosialisasi aplikasi di Dinas Kependudukan dan Pencatatan Sipil Banjarmasin'),
(19, 8, '500/ST-101/DIS/2021', '2021-02-10', 'Sosialisasi aplikasi SIMPEG di Pemerintah Kota Banjarmasin'),
(20, 9, '500/ST-102/DIS/2021', '2021-02-10', 'Sosialisasi aplikasi SIMPEG di Pemerintah Kota Banjarmasin'),
(22, 12, '500/ST-162/DIS/2021', '2021-11-18', 'Monitoring dan maintance jaringan server di Pemko Banjarmasin'),
(23, 13, '500/ST-103/DIS/2021', '2021-02-10', 'Sosialisasi aplikasi SIMPEG di Pemerintah Kota Banjarmasin');

-- --------------------------------------------------------

--
-- Table structure for table `tenaga_ahli`
--

CREATE TABLE `tenaga_ahli` (
  `tenaga_ahli_id` int(11) NOT NULL,
  `nama_tenaga_ahli` varchar(100) NOT NULL,
  `divisi` enum('Jaringan','Programmer') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Khonghucu') NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenaga_ahli`
--

INSERT INTO `tenaga_ahli` (`tenaga_ahli_id`, `nama_tenaga_ahli`, `divisi`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `pendidikan_terakhir`, `alamat`, `no_telepon`) VALUES
(1, 'Rahadianor Rendra Wardani, S.Kom', 'Jaringan', 'Banjarmasin', '1995-03-16', 'Islam', 'Laki - Laki', 'S1', 'Jl. Jahri Saleh RT 10 No. 6A Banjarmasin', '081953671446'),
(3, 'Sit Anwar, S.Kom', 'Jaringan', 'Bandung', '1995-07-24', 'Islam', 'Laki - Laki', 'S1', 'Jl. Gunung Sari 5 No. 18 Banjarmasin', '081649594009'),
(4, 'M. Aldy Renaldi, S.Kom', 'Jaringan', 'Tanjung', '1995-08-09', 'Islam', 'Laki - Laki', 'S1', 'Jl. Rawasari 12 No. 37 Banjarmasin', '08565152751'),
(5, 'Muhammad Hasan, S.Kom', 'Jaringan', 'Banjarmasin', '1996-11-05', 'Islam', 'Laki - Laki', 'S1', 'Jl. Kelayan B Gg. Setia Rahman No. 13', '089691515730'),
(6, 'Muhammad Muzakir, S.Kom', 'Programmer', 'Banjarmasin', '1995-09-25', 'Islam', 'Laki - Laki', 'S1', 'Jl. Kelayan A Gg. Arafah Permai 2 No. 87 Banjarmasin', '085389281052'),
(7, 'Tri Angga Utama, S.Kom', 'Programmer', 'Batulicin', '1997-05-09', 'Islam', 'Laki - Laki', 'S1', 'Jl. Pembangunan 1 No. 26 Banjarmasin', '083142209673'),
(8, 'M. Ihsan Hafiz, S.Kom', 'Programmer', 'Kandangan', '1996-02-14', 'Islam', 'Laki - Laki', 'S1', 'Jl. Wildan Sari II No.7 Banjarmasin', '085828225517'),
(9, 'Rangga Alfarizi, S.Kom', 'Programmer', 'Martapura', '1997-10-21', 'Islam', 'Laki - Laki', 'S1', 'Jl. Rantauan Timur II No. 56 Banjarmasin', '083821461047'),
(12, 'Muhammad Taufiq Qurrahman, S.Kom', 'Jaringan', 'Martapura', '1996-08-08', 'Islam', 'Laki - Laki', 'S1', 'Jl. Ampera Raya Gg. Ampera III No. 26 Banjarmasin', '085354678998'),
(13, 'Wawan Kurniawan, S.Kom', 'Programmer', 'Pelaihari', '1997-11-20', 'Islam', 'Laki - Laki', 'S1', 'Jl. Kuin Selatan Gg. Pusara No. 7 Banjarmasin', '085468936489');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1:superadmin, 2:admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'M. Rizki Akbar Siregar', 'Sampit', 1),
(5, 'superadmin', '889a3a791b3875cfae413574b53da4bb8a90d53e', 'Pimpinan', 'Diskominfo', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`cuti_id`),
  ADD KEY `tenaga_ahli_id` (`tenaga_ahli_id`);

--
-- Indexes for table `kinerja`
--
ALTER TABLE `kinerja`
  ADD PRIMARY KEY (`kinerja_id`),
  ADD KEY `tenaga_ahli_id` (`tenaga_ahli_id`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`presensi_id`),
  ADD KEY `tenaga_ahli_id` (`tenaga_ahli_id`);

--
-- Indexes for table `sk`
--
ALTER TABLE `sk`
  ADD PRIMARY KEY (`sk_id`),
  ADD KEY `tenaga_ahli_id` (`tenaga_ahli_id`) USING BTREE;

--
-- Indexes for table `st`
--
ALTER TABLE `st`
  ADD PRIMARY KEY (`st_id`),
  ADD KEY `tenaga_ahli_id` (`tenaga_ahli_id`);

--
-- Indexes for table `tenaga_ahli`
--
ALTER TABLE `tenaga_ahli`
  ADD PRIMARY KEY (`tenaga_ahli_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `cuti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kinerja`
--
ALTER TABLE `kinerja`
  MODIFY `kinerja_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `presensi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sk`
--
ALTER TABLE `sk`
  MODIFY `sk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `st`
--
ALTER TABLE `st`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tenaga_ahli`
--
ALTER TABLE `tenaga_ahli`
  MODIFY `tenaga_ahli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`tenaga_ahli_id`) REFERENCES `tenaga_ahli` (`tenaga_ahli_id`);

--
-- Constraints for table `kinerja`
--
ALTER TABLE `kinerja`
  ADD CONSTRAINT `kinerja_ibfk_1` FOREIGN KEY (`tenaga_ahli_id`) REFERENCES `tenaga_ahli` (`tenaga_ahli_id`);

--
-- Constraints for table `presensi`
--
ALTER TABLE `presensi`
  ADD CONSTRAINT `presensi_ibfk_1` FOREIGN KEY (`tenaga_ahli_id`) REFERENCES `tenaga_ahli` (`tenaga_ahli_id`);

--
-- Constraints for table `sk`
--
ALTER TABLE `sk`
  ADD CONSTRAINT `sk_ibfk_1` FOREIGN KEY (`tenaga_ahli_id`) REFERENCES `tenaga_ahli` (`tenaga_ahli_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `st`
--
ALTER TABLE `st`
  ADD CONSTRAINT `st_ibfk_1` FOREIGN KEY (`tenaga_ahli_id`) REFERENCES `tenaga_ahli` (`tenaga_ahli_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

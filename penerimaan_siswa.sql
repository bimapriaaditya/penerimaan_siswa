-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 12:48 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penerimaan_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Kristen Protestan'),
(3, 'Kristen Khatolik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Konghuchu');

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` int(11) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `jenis_kelamin`, `no_telepon`, `email`) VALUES
(1, 'Bima Pria Aditya', 1, '087878182791', 'Bpabima@gmail.com'),
(2, 'Sony Sugema Chalange', 1, '098766789087', 'sonyaggbh@gmial.com'),
(3, 'Ferdian Krispi', 2, '098765456789', 'Ayamkrspy@gmail.com'),
(5, 'Lorem Ipsum Dolor', 1, '0222532278', 'Loremlol@yahoo.com'),
(6, 'Alian Dodol', 1, '5678123098', 'Example@dodol.com'),
(7, 'Duar', 2, '1111111111', '12345678910@gmail.com'),
(8, 'Arya Wiguna', 1, '0666666666', 'Arya666@666.com'),
(9, '1', 1, '1', '1'),
(10, 'Udin', 2, '909090909090', 'SembilaPuluh@gmail.com'),
(11, 'Lorem', 1, '+6287878182791', 'satuduatiga@yahoo.com'),
(12, 'Dadan Satria', 1, '89769879', 'Example@dodol.com');

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id` int(11) NOT NULL,
  `id_calon_siswa` int(11) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jarak_sekolah` int(11) NOT NULL,
  `id_jalur_pendaftaran` int(11) NOT NULL,
  `id_smp` int(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_jurusan_2` int(11) DEFAULT NULL,
  `nama_orang_tua` varchar(255) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `keterangan` text,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`id`, `id_calon_siswa`, `nama_lengkap`, `nisn`, `nik`, `alamat`, `jarak_sekolah`, `id_jalur_pendaftaran`, `id_smp`, `id_agama`, `id_jurusan`, `id_jurusan_2`, `nama_orang_tua`, `tinggi_badan`, `berat_badan`, `tanggal_daftar`, `keterangan`, `img`) VALUES
(1, 1, 'BIMA PRIA ADITYA', '2264719018', '12456543234567898765', 'Jl Raya Kesepian No 34 RT 03 RW 14 Kelurahan Sadang Serang Kecamatan Coblong Kota Bandung Pos : 40113', 2000, 2, 22, 1, 1, 2, 'UDIN', 170, 60, '2019-11-19', 'Ok Sheep', 'siswa_1.jpg'),
(2, 2, 'SONY SUGEMA CHALLANGE', '125432245', '0987678987654567', 'JL RAYA SEPI NO 2 RT 11 RW 04 KEC. CAHEUM KEL. LEDENG KOTA BANDUNG POS : 117261', 4000, 1, 20, 2, 3, 1, '34334', 180, 45, '2019-11-19', 'GAGABAH WAE', ''),
(4, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '117264361', '452349841234569876', 'Gg. Rawan Sempit No 2 RT 05 RW 15 KEC Oplos Kell Serang Kota Bandung Pos : 17655', 6500, 2, 2, 1, 1, NULL, 'Budi Budiantuti', 176, 67, '2019-11-27', 'LOL', ''),
(8, 3, 'Lorem', '1', '1', '1', 1, 1, 1, 1, 1, 1, '1', 1, 1, '0000-00-00', '1', 'siswa_8.jpg'),
(14, 7, '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, '1', 1, 1, '0001-01-01', '1', ''),
(15, 6, '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, '1', 1, 1, '0001-01-01', '1', ''),
(17, 8, 'Arya Wighuna Djancoe', '1234562', '2345676545678', 'Jl 666 STN', 666, 3, 2, 6, 3, 1, 'Bpk.666', 666, 666, '0666-06-06', '666', ''),
(18, 10, 'UDIN SURYA DJAYA', '10393829', '102928740901929847', 'JL JUTAAN ORANG', 3050, 1, 40, 5, 3, 1, 'UDIN GAMBOET', 186, 54, '2019-05-12', 'RIBUAN ORANG BAHKAN JUTAAN ORANG TIDAK TAHU BAHWA TANAM TANAM UBI TAK PERLU DI BAJAK', 'siswa_18.jpg'),
(28, 11, '1', '1', '1', '1', 1, 2, 1, 5, 3, 3, '1', 1, 1, '0111-11-11', '111', 'siswa_.jpg'),
(29, 12, '1', '1', '1', '1', 1, 1, 4, 1, 1, NULL, '1', 1, 1, '2019-08-24', '1', 'siswa_29.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jalur_akademis`
--

CREATE TABLE `jalur_akademis` (
  `id` int(11) NOT NULL,
  `id_calon_siswa` int(11) NOT NULL,
  `nilai_mtk` int(11) NOT NULL,
  `nilai_indo` int(11) NOT NULL,
  `nilai_ipa` int(11) NOT NULL,
  `nilai_inggris` int(11) NOT NULL,
  `nilai_un` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jalur_akademis`
--

INSERT INTO `jalur_akademis` (`id`, `id_calon_siswa`, `nilai_mtk`, `nilai_indo`, `nilai_ipa`, `nilai_inggris`, `nilai_un`) VALUES
(1, 1, 80, 90, 80, 70, 320);

-- --------------------------------------------------------

--
-- Table structure for table `jalur_pendaftaran`
--

CREATE TABLE `jalur_pendaftaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jalur_pendaftaran`
--

INSERT INTO `jalur_pendaftaran` (`id`, `nama`) VALUES
(1, 'Jalur Prestasi'),
(2, 'Jalur Akademis'),
(3, 'Jalur SKTM');

-- --------------------------------------------------------

--
-- Table structure for table `jalur_prestasi`
--

CREATE TABLE `jalur_prestasi` (
  `id` int(11) NOT NULL,
  `id_calon_siswa` int(11) NOT NULL,
  `nilai_mtk` int(11) NOT NULL,
  `nilai_indo` int(11) NOT NULL,
  `nilai_ipa` int(11) NOT NULL,
  `nilai_inggris` int(11) NOT NULL,
  `nilai_un` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jalur_prestasi`
--

INSERT INTO `jalur_prestasi` (`id`, `id_calon_siswa`, `nilai_mtk`, `nilai_indo`, `nilai_ipa`, `nilai_inggris`, `nilai_un`) VALUES
(1, 2, 20, 20, 20, 20, 80),
(2, 3, 30, 30, 30, 30, 120),
(3, 10, 45, 50, 65, 70, 230);

-- --------------------------------------------------------

--
-- Table structure for table `jalur_sktm`
--

CREATE TABLE `jalur_sktm` (
  `id` int(11) NOT NULL,
  `id_calon_siswa` int(11) NOT NULL,
  `nilai_mtk` int(11) NOT NULL,
  `nilai_indo` int(11) NOT NULL,
  `nilai_ipa` int(11) NOT NULL,
  `nilai_inggris` int(11) NOT NULL,
  `nilai_un` int(11) NOT NULL,
  `id_pekerjaan_ibu` int(11) DEFAULT NULL,
  `id_penghasilan_ibu` int(11) DEFAULT NULL,
  `id_pekerjaan_ayah` int(11) DEFAULT NULL,
  `id_penghasilan_ayah` int(11) DEFAULT NULL,
  `id_tempat_tinggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jalur_sktm`
--

INSERT INTO `jalur_sktm` (`id`, `id_calon_siswa`, `nilai_mtk`, `nilai_indo`, `nilai_ipa`, `nilai_inggris`, `nilai_un`, `id_pekerjaan_ibu`, `id_penghasilan_ibu`, `id_pekerjaan_ayah`, `id_penghasilan_ayah`, `id_tempat_tinggal`) VALUES
(1, 8, 60, 80, 70, 20, 0, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`) VALUES
(1, 'Teknik Komputer Informatika (TKI)'),
(2, 'Teknik Mesin (TM)'),
(3, 'Seni Rupa (SR)');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`) VALUES
(1, 'Buruh'),
(2, 'Petani'),
(3, 'Nelayan'),
(4, 'PNS'),
(5, 'Dokter'),
(6, 'Perawat'),
(7, 'Poiri'),
(8, 'Abri'),
(9, 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `penghasilan`
--

CREATE TABLE `penghasilan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penghasilan`
--

INSERT INTO `penghasilan` (`id`, `nama`) VALUES
(1, 'Dibawah 1 Juta Rupiah'),
(2, '1-2 Juta Rupiah'),
(3, '2-3 Juta Rupiah'),
(4, '3-4 Juta Rupiah'),
(5, '4-5 Juta Rupiah'),
(6, 'Lebih Dari 5 Juta');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`) VALUES
(1, 'Asma'),
(2, 'TBC'),
(3, 'HIV / AIDS'),
(4, 'Hepatitis A'),
(5, 'Hepatitis B'),
(6, 'Hepatitis C'),
(7, 'Bronkhitis'),
(8, 'Darah Rendah'),
(9, 'Anemia'),
(10, 'Kencing Manis');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `id_calon_siswa` int(11) NOT NULL,
  `nama` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `id_calon_siswa`, `nama`, `img`) VALUES
(1, 2, 'Juara 1 Makan Kerupuk Tingkat RW', 'lorem'),
(2, 2, 'Juara 3 Lomba Makan Karung', 'img2'),
(4, 10, 'JUARA 3 MEMECAHKAN PIRING PECAH DALAM 1 JAM TINGKAT RUMAH TANGGA BAPAK UDIN GAMBOET', 'GAMBOET/IMG'),
(5, 10, 'JUARA BOHONG BOHONGAN', 'UDIN/IMG');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_penyakit`
--

CREATE TABLE `riwayat_penyakit` (
  `id` int(11) NOT NULL,
  `id_calon_siswa` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_penyakit`
--

INSERT INTO `riwayat_penyakit` (`id`, `id_calon_siswa`, `id_penyakit`, `keterangan`) VALUES
(5, 1, 1, 'Gak Parah Parah Amat Lah'),
(6, 2, 5, 'Suka Kambuh '),
(7, 3, 2, 'Aman'),
(8, 5, 8, 'Lorem'),
(9, 5, 2, 'Lorem'),
(13, 6, 6, 'Suka Kambuh Kalau Makan Royco'),
(14, 1, 3, 'Dalam Penyembuhan'),
(15, 1, 9, 'Suka Kambuh kalau lagi Ketawa'),
(18, 8, 1, ''),
(19, 10, 3, 'BARU KENA KEMAREN');

-- --------------------------------------------------------

--
-- Table structure for table `smp`
--

CREATE TABLE `smp` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smp`
--

INSERT INTO `smp` (`id`, `nama`) VALUES
(1, 'SMPN 1 Kota Bandung'),
(2, 'SMPN 2 Kota Bandung'),
(3, 'SMPN 3 Kota Bandung'),
(4, 'SMPN 4 Kota Bandung'),
(5, 'SMPN 5 Kota Bandung'),
(6, 'SMPN 6 Kota Bandung'),
(7, 'SMPN 7 Kota Bandung'),
(8, 'SMPN 8 Kota Bandung'),
(9, 'SMPN 9 Kota Bandung'),
(10, 'SMPN 10 Kota Bandung'),
(11, 'SMPN 11 Kota Bandung'),
(12, 'SMPN 12 Kota Bandung'),
(13, 'SMPN 13 Kota Banudng'),
(14, 'SMPN 14 Kota Bandung'),
(15, 'SMPN 15 Kota Bandung'),
(16, 'SMPN 16 Kota Bandung'),
(17, 'SMPN 17 Kota Bandung'),
(18, 'SMPN 18 Kota Bandung'),
(19, 'SMPN 19 Kota Bandung'),
(20, 'SMPN 20 Kota Bandung'),
(21, 'SMPN 21 Kota Bandung'),
(22, 'SMPN 22 Kota Bandung'),
(23, 'SMPN 23 Kota Bandung'),
(24, 'SMPN 24 Kota Bandung'),
(25, 'SMPN 25 Kota Bandung'),
(26, 'SMPN 26 Kota Bandung'),
(27, 'SMPN 27 Kota Bandung'),
(28, 'SMPN 28 Kota Bandung'),
(29, 'SMPN 29 Kota Bandung'),
(30, 'SMPN 30 Kota Bandung'),
(31, 'SMPN 31 Kota Bandung'),
(32, 'SMPN 32 Kota Bandung'),
(33, 'SMPN 33 Kota Bandung'),
(34, 'SMPN 34 Kota Bandung'),
(35, 'SMPN 15 Kota Bandung'),
(36, 'SMPN 36 Kota Bandung'),
(37, 'SMPN 37 Kota Bandung'),
(38, 'SMPN 38 Kota Bandung'),
(39, 'SMPN 39 Kota Bandung'),
(40, 'SMPN 40 Kota Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nama`, `nip`, `alamat`, `no_telepon`, `email`) VALUES
(1, 'Bima Pria Aditya', '12345678910', 'Jl Gagak Dalam no 34', '087878182791', 'bpabima@gmail.com'),
(2, 'Sony Sugema Challange', '1818181718', 'Jl Ovonel Odo No 3', '09877162512', 'SonySSCGntg@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_tinggal`
--

CREATE TABLE `tempat_tinggal` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat_tinggal`
--

INSERT INTO `tempat_tinggal` (`id`, `nama`) VALUES
(1, 'Kos Kosan'),
(2, 'Kontrakan'),
(3, 'Rumah Sendiri'),
(4, 'Rumah Orang Tua'),
(5, 'Nebeng');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_staff` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_staff`, `username`, `password`, `role`) VALUES
(1, 1, 'admin', 'admin123', 1),
(2, 2, 'Sony GGWP', 'ggwp', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_smp` (`id_smp`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `id_calon_siswa` (`id_calon_siswa`) USING BTREE,
  ADD KEY `id_jalur_pendaftaran` (`id_jalur_pendaftaran`),
  ADD KEY `id_jurusan_2` (`id_jurusan_2`);

--
-- Indexes for table `jalur_akademis`
--
ALTER TABLE `jalur_akademis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_calon_siswa` (`id_calon_siswa`);

--
-- Indexes for table `jalur_pendaftaran`
--
ALTER TABLE `jalur_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jalur_prestasi`
--
ALTER TABLE `jalur_prestasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_calon_siswa` (`id_calon_siswa`);

--
-- Indexes for table `jalur_sktm`
--
ALTER TABLE `jalur_sktm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pekerjaan_ibu` (`id_pekerjaan_ibu`),
  ADD KEY `id_penghasilan_ibu` (`id_penghasilan_ibu`),
  ADD KEY `id_pekerjaan_ayah` (`id_pekerjaan_ayah`),
  ADD KEY `id_penghasilan_ayah` (`id_penghasilan_ayah`),
  ADD KEY `id_tempat_tinggal` (`id_tempat_tinggal`),
  ADD KEY `id_calon_siswa` (`id_calon_siswa`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penghasilan`
--
ALTER TABLE `penghasilan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_calon_siswa` (`id_calon_siswa`) USING BTREE;

--
-- Indexes for table `riwayat_penyakit`
--
ALTER TABLE `riwayat_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_formulir` (`id_calon_siswa`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `smp`
--
ALTER TABLE `smp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempat_tinggal`
--
ALTER TABLE `tempat_tinggal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_staff` (`id_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jalur_akademis`
--
ALTER TABLE `jalur_akademis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jalur_pendaftaran`
--
ALTER TABLE `jalur_pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jalur_prestasi`
--
ALTER TABLE `jalur_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jalur_sktm`
--
ALTER TABLE `jalur_sktm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penghasilan`
--
ALTER TABLE `penghasilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `riwayat_penyakit`
--
ALTER TABLE `riwayat_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `smp`
--
ALTER TABLE `smp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tempat_tinggal`
--
ALTER TABLE `tempat_tinggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `formulir`
--
ALTER TABLE `formulir`
  ADD CONSTRAINT `formulir_ibfk_1` FOREIGN KEY (`id_smp`) REFERENCES `smp` (`id`),
  ADD CONSTRAINT `formulir_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id`),
  ADD CONSTRAINT `formulir_ibfk_3` FOREIGN KEY (`id_agama`) REFERENCES `agama` (`id`),
  ADD CONSTRAINT `formulir_ibfk_4` FOREIGN KEY (`id_calon_siswa`) REFERENCES `calon_siswa` (`id`),
  ADD CONSTRAINT `formulir_ibfk_5` FOREIGN KEY (`id_jalur_pendaftaran`) REFERENCES `jalur_pendaftaran` (`id`),
  ADD CONSTRAINT `formulir_ibfk_6` FOREIGN KEY (`id_jurusan_2`) REFERENCES `jurusan` (`id`);

--
-- Constraints for table `jalur_akademis`
--
ALTER TABLE `jalur_akademis`
  ADD CONSTRAINT `jalur_akademis_ibfk_1` FOREIGN KEY (`id_calon_siswa`) REFERENCES `calon_siswa` (`id`);

--
-- Constraints for table `jalur_prestasi`
--
ALTER TABLE `jalur_prestasi`
  ADD CONSTRAINT `jalur_prestasi_ibfk_1` FOREIGN KEY (`id_calon_siswa`) REFERENCES `calon_siswa` (`id`);

--
-- Constraints for table `jalur_sktm`
--
ALTER TABLE `jalur_sktm`
  ADD CONSTRAINT `jalur_sktm_ibfk_1` FOREIGN KEY (`id_pekerjaan_ayah`) REFERENCES `pekerjaan` (`id`),
  ADD CONSTRAINT `jalur_sktm_ibfk_2` FOREIGN KEY (`id_pekerjaan_ibu`) REFERENCES `pekerjaan` (`id`),
  ADD CONSTRAINT `jalur_sktm_ibfk_3` FOREIGN KEY (`id_tempat_tinggal`) REFERENCES `tempat_tinggal` (`id`),
  ADD CONSTRAINT `jalur_sktm_ibfk_4` FOREIGN KEY (`id_penghasilan_ayah`) REFERENCES `penghasilan` (`id`),
  ADD CONSTRAINT `jalur_sktm_ibfk_5` FOREIGN KEY (`id_penghasilan_ibu`) REFERENCES `penghasilan` (`id`),
  ADD CONSTRAINT `jalur_sktm_ibfk_6` FOREIGN KEY (`id_calon_siswa`) REFERENCES `calon_siswa` (`id`);

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_ibfk_1` FOREIGN KEY (`id_calon_siswa`) REFERENCES `calon_siswa` (`id`);

--
-- Constraints for table `riwayat_penyakit`
--
ALTER TABLE `riwayat_penyakit`
  ADD CONSTRAINT `riwayat_penyakit_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`),
  ADD CONSTRAINT `riwayat_penyakit_ibfk_3` FOREIGN KEY (`id_calon_siswa`) REFERENCES `calon_siswa` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

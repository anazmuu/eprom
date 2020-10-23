-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Okt 2020 pada 06.50
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-prom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `forget_password`
--

CREATE TABLE `forget_password` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `temp_key` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `forget_password`
--

INSERT INTO `forget_password` (`id`, `email`, `temp_key`, `created`) VALUES
(75, 'muhamadsahid666@gmail.com', 'b46b60acb0dee4ab53ac991f14e47aef', '2020-09-14 04:17:49'),
(76, 'densyahid12@gmail.com', 'a3193930e6c48a00e9b4c81132cb5d9a', '2020-09-14 04:19:54'),
(77, 'muhamadsahid666@gmail.com', '2206f6a21a6f644a9f08d9bb007c62c1', '2020-09-14 04:27:08'),
(78, 'muhamadsahid666@gmail.com', '2147fba311c635a7bd0bdeb10d2c2aba', '2020-09-15 02:46:56'),
(79, 'densyahid12@gmail.com', 'f9214a122dc954ccbdc5aabace07db39', '2020-09-15 02:48:20'),
(80, 'admin@gmail.com', '06002c44126aea354cb7bcfd9309be66', '2020-09-15 04:30:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inbox`
--

CREATE TABLE `tb_inbox` (
  `id_inbox` int(11) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `nama_tujuan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `subject` varchar(255) NOT NULL,
  `status_penerima` varchar(255) NOT NULL,
  `tgl_hapus` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_inbox`
--

INSERT INTO `tb_inbox` (`id_inbox`, `nama_pengirim`, `nama_tujuan`, `isi`, `status`, `tanggal`, `subject`, `status_penerima`, `tgl_hapus`) VALUES
(4, 'Aldiyunan07@gmail.com', 'sihaji897@gmail.com', 'buifyudt5s6w45dtfuygiuhijhiguidt5s46w35q46ed5tfyiguohij;ohigufydt5s4w6aq35aw4s5edf6yiguo', 'draft', '2020-09-29', 'Entahlah', 'sudah', '0000-00-00'),
(5, 'Aldiyunan07@gmail.com', 'Aldiyunan7@gmail.com', 'Balonku Ada lima rupa rupa warna nya hijau kuuning kelabu merah muda dan biru meletus balon hijau dar ', 'draft', '2020-09-29', 'Balonku', 'dibaca', '0000-00-00'),
(141, 'denisahid11@gmail.com', 'Aldiyunan07@gmail.com', 'Saya Dokter Deni Sahidin\r\nidzin hari ini tidak masuk karena ngoding dulu ', 'trash', '2020-09-15', 'ngoding dulu', 'trash', '2020-10-18'),
(153, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(154, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(155, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(156, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(158, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(159, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(162, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(163, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(164, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(165, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(166, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(167, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(168, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(169, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(170, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'arsip', '2020-09-30', 'percobaan', 'sudah', '2020-10-10'),
(171, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-19'),
(172, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(173, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'terkirim', '2020-09-30', 'percobaan', 'dibaca', '0000-00-00'),
(174, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'terkirim', '2020-09-30', 'percobaan', 'masuk', '0000-00-00'),
(175, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'terkirim', '2020-09-30', 'percobaan', 'masuk', '0000-00-00'),
(176, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(177, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(178, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'terkirim', '2020-09-30', 'percobaan', 'masuk', '0000-00-00'),
(179, 'dokter_koding@gmail.com', 'Aldiyunan07@gmail.com', 'aaaa', 'trash', '2020-09-30', 'percobaan', 'trash', '2020-10-18'),
(193, 'Aldiyunan07@gmail.com', 'asdd', 'aaaaaa', 'terkirim', '2020-10-28', 'dsdsds', 'ddd', '0000-00-00'),
(194, 'muhamadsahid666@gmail.com', 'Aldiyunan@gmail.com', 'a aaaaaaaaaaaaaaaaaaaaa', 'terkirim', '2020-10-14', 'tugas', 'sudah', '0000-00-00'),
(195, 'muhamadsahid666@gmail.com', 'Aldiyunan@gmail.com', 'a aaaaaaaaaaaaaaaaaaaaa', 'terkirim', '2020-10-14', 'tugas', 'sudah', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nik` varchar(15) DEFAULT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `username`, `nama`, `password`, `nik`, `email`) VALUES
('1', 'Admin', 'Administrator', '0192023a7bbd73250516f069df18b500', '181910041', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dokter`
--

CREATE TABLE `t_dokter` (
  `id_dokter` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `usia` int(3) NOT NULL,
  `jk` enum('Laki laki','Perempuan') NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `spesialisasi` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_dokter`
--

INSERT INTO `t_dokter` (`id_dokter`, `nik`, `gambar`, `nama`, `alamat`, `usia`, `jk`, `notelp`, `spesialisasi`, `username`, `password`, `email`) VALUES
(1, 112, '15.jpg', 'Tony Stark', ' Kp.babakan Hantap', 18, 'Laki laki', '232323', 'Paru Paru', 'asep', 'f3465a353436bbab3617815f64083c84', 'Nasependi78@gmail.com'),
(2, 65314387, '20190202_075010.jpg', 'Handi Kartiwa', 'Kp.Pangkalan', 18, 'Laki laki', '1341', 'Bedah', 'asepbm', '12365cbc80c6a273c2b86980a38c4e32', 'Handi@gmail.com'),
(3, 687267235, '20181201_103350.jpg', 'Deni Sahidin', 'Kp.Pangkalan', 17, 'Laki laki', '909374348579', 'Bedah', 'Fadlan', 'dec7bc6aee20d3bba81094d758b7671d', 'densahid11@gmail.com'),
(7, 12345, 'IMG_9156.JPG', 'Sehab Pudin', ' Kp.Cijugul', 16, 'Laki laki', '085320616557', 'Hewan ', 'Sehab07', '755c83b6f8a7f4fc63ceef8d2ab325a7', 'Sehabpudin@gmail.com'),
(10, 181910045, 'Screen-Shot-2019-06-19-at-15.50.41-9e81702.png', 'Tom Holland', 'Brooklyn', 20, 'Laki laki', '089969631963', 'Spiderman', 'Tomholland', '5caf72868c94f184650f43413092e82c', 'Tomholland12@gmail.com'),
(11, 11111111, '20200919_154451_0000.png', 'lala', 'garut', 23, 'Perempuan', '089765432567', 'hewan', 'lala', '412a1ed6d21e55191ee5131f266f5178', 'lala@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pasien`
--

CREATE TABLE `t_pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` text NOT NULL,
  `ttl` date NOT NULL,
  `jk` enum('Laki Laki','Perempuan') DEFAULT NULL,
  `notelp` varchar(15) DEFAULT NULL,
  `tmp_lahir` text,
  `r_penyakit` text,
  `usia` int(3) DEFAULT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pasien`
--

INSERT INTO `t_pasien` (`id_pasien`, `no_antrian`, `nik`, `nama`, `alamat`, `ttl`, `jk`, `notelp`, `tmp_lahir`, `r_penyakit`, `usia`, `tgl_masuk`) VALUES
(1, 1, 181910040, 'Aldi yunan Anwari', 'Kp.Rantun    ', '2020-09-02', 'Laki Laki', '081221997131', ' Cisompet ', ' - ', 17, '2020-09-13'),
(2, 2, 181910040, 'Jang Aduy', ' Kp.Rantun  ', '2020-09-08', 'Laki Laki', '089122199713', ' Garut ', ' Asma ', 17, '2020-09-13'),
(3, 3, 181910041, 'Fadlan Abdul Rojak', 'Kp.Bongkor', '2020-09-16', 'Laki Laki', '082358877164', 'Garut', 'Tipes', 18, '2020-09-13'),
(4, 3, 181910042, 'Neng Hindun', 'Kp.babakan Caringin', '2020-09-22', 'Perempuan', '085320616557', 'Bandung', '-', 16, '2020-09-13'),
(6, 4, 181910044, 'Sarjang', 'Kp.Babakan', '0000-00-00', 'Perempuan', '0802937102', 'Serang', '-', 15, '0000-00-00'),
(7, 7, 181910046, 'Saha ', 'Kapakan', '0000-00-00', 'Laki Laki', '081221997131', 'Medan', '-', 20, '2020-09-12'),
(8, 43, 1343243, 'hdlkehl', 'lbflje', '2020-09-08', 'Laki Laki', ';wdhlwg', ';wkdhlwq', 'qwdjlqw', 12, '2020-09-12'),
(9, 12, 32312, 'bljbkj', 'ljbjk', '2020-09-22', 'Perempuan', 'jvwdkv', 'jlwdvkjqwb', 'ljvk', 213, '0000-00-00'),
(13, 18, 181910052, 'Herlia Aprillia ', 'Kamojang  ', '2020-10-07', 'Laki Laki', '08823456456', '', '', 17, '2020-10-10'),
(14, 17, 181910041, 'Rahma Ilmi Firdaus', 'Kp.Bongkor  ', '2020-10-08', 'Perempuan', '08823456456', 'Garut  ', 'Naon nya   ', 19, '2020-10-10'),
(15, 12345, 181910041, 'Riyad Erga ', 'Kp.Panunjuk  ', '2020-10-08', 'Laki Laki', '081221997131', 'Garut  ', 'Asma   ', 16, '2020-10-13'),
(16, 0, 181910041, 'Jang Haji', 'Kp.Bongkor', '0000-00-00', 'Laki Laki', '081221997131', '', 'Asma', 12, '2020-10-20'),
(17, 0, 123, 'Aku', 'piwhdqwidh', '2020-10-28', 'Laki Laki', '0918309273', '', 'wjdbqwkjdb', 12, '2020-10-20'),
(18, 0, 111, 'hamdan gunawan', 'Garut', '2020-10-08', 'Laki Laki', '0898765443', '', 'Stroke', 19, '2020-10-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_perawat`
--

CREATE TABLE `t_perawat` (
  `id_perawat` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `usia` int(3) NOT NULL,
  `jk` enum('Laki laki','Perempuan') NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_perawat`
--

INSERT INTO `t_perawat` (`id_perawat`, `nik`, `nama`, `alamat`, `usia`, `jk`, `notelp`, `username`, `password`, `email`) VALUES
(1, 2147483647, 'Fadlan', 'Garut', 17, 'Laki laki', '909374348579', 'Fadlan', 'dec7bc6aee20d3bba81094d758b7671d', ''),
(2, 181910040, 'Aldi yunan anwari ', 'Kp.Rantun', 17, 'Laki laki', '081221997131', 'Jang aduy', '455b718d80e2736eca9565daa9335277', 'Aldiyunan07@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forget_password`
--
ALTER TABLE `forget_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_inbox`
--
ALTER TABLE `tb_inbox`
  ADD PRIMARY KEY (`id_inbox`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `t_dokter`
--
ALTER TABLE `t_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `t_pasien`
--
ALTER TABLE `t_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `t_perawat`
--
ALTER TABLE `t_perawat`
  ADD PRIMARY KEY (`id_perawat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forget_password`
--
ALTER TABLE `forget_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `tb_inbox`
--
ALTER TABLE `tb_inbox`
  MODIFY `id_inbox` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;
--
-- AUTO_INCREMENT for table `t_dokter`
--
ALTER TABLE `t_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `t_pasien`
--
ALTER TABLE `t_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `t_perawat`
--
ALTER TABLE `t_perawat`
  MODIFY `id_perawat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Des 2020 pada 14.17
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bantuan`
--

CREATE TABLE `tb_bantuan` (
  `id_bantuan` varchar(10) NOT NULL,
  `nm_bantuan` text NOT NULL,
  `ket_bantuan` text NOT NULL,
  `kuota_bantuan` int(9) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bantuan`
--

INSERT INTO `tb_bantuan` (`id_bantuan`, `nm_bantuan`, `ket_bantuan`, `kuota_bantuan`, `id_user`) VALUES
('BNPT', 'Bantuan Pangan Non-Tunai', 'Memberikan bantuan kepada warga berupa sembako atau keperluan lain yang bersifat pokok dan tidak beru[a uang', 997, 3),
('BPKH', 'Bantuan Program Keluarga Harapan', 'Memberikan Bantuan Berupa Uang', 996, 4),
('MCK', 'Perbaikan MCK', 'Memperbaiki MCK atau membangun MCK', 17, 3),
('RTLH', 'Bantuan Rumah Tidak Layak Huni', 'Memberikan atau membangun sebuah rumah', 998, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kk`
--

CREATE TABLE `tb_kk` (
  `no_kk` varchar(50) NOT NULL,
  `nik_kepala` varchar(50) NOT NULL,
  `nm_kepala` text NOT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kk`
--

INSERT INTO `tb_kk` (`no_kk`, `nik_kepala`, `nm_kepala`, `password`) VALUES
('3318020708070049', '3318022108770001', 'AHMAD SHOLIHIN', 'd41d8cd98f00b204e9800998ecf8427e'),
('3318022202080032', '3318024107470392', 'SUKEMI', 'd41d8cd98f00b204e9800998ecf8427e'),
('3318022407090005', '3318022202850001', 'SUTRISNO', 'd41d8cd98f00b204e9800998ecf8427e'),
('3318022407090038', '3318021406800004', 'ARIFIN', 'd41d8cd98f00b204e9800998ecf8427e'),
('3318022507080030', '3318022103670006', 'SUPARLAN', 'd41d8cd98f00b204e9800998ecf8427e'),
('3318022507090023', '3318020107550326', 'SARWI', 'd41d8cd98f00b204e9800998ecf8427e'),
('3319060102100126', '3319061802620001', 'KHAMLUDDIN', 'd41d8cd98f00b204e9800998ecf8427e'),
('3319062302970009', '3319062302970004', 'Aji Wijaya', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` int(2) NOT NULL,
  `jenjang_pendidikan` text NOT NULL,
  `ket` text DEFAULT NULL,
  `status` enum('ADA','HAPUS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pendidikan`, `jenjang_pendidikan`, `ket`, `status`) VALUES
(1, 'SD/SEDERAJAT', '      SEKOLAH DASAR SEDERAJAT', 'ADA'),
(2, 'SLTP/SEDERAJAT', 'SEKOLAH LANJUTAN TINGKAT PERTAMA SEDERAJAT', 'ADA'),
(3, 'SLTA/SEDERAJAT', 'SEKOLAH LANJUTAN TINGKAT AKHIR ATAU SEDERAJAT', 'ADA'),
(4, 'S1', 'STRATA-1', 'ADA'),
(5, 'S2', 'STRATA-2', 'ADA'),
(6, 'S3', 'STRATA-3', 'ADA'),
(7, 'DI', 'DIPLOMA-I', 'ADA'),
(8, 'DII', 'DIPLOMA-II', 'ADA'),
(9, 'DIII', 'DIPLOMA-III', 'ADA'),
(10, 'DIV', 'DIPLOMA-IV', 'ADA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penerima`
--

CREATE TABLE `tb_penerima` (
  `id_penerima` int(9) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `id_bantuan` varchar(10) NOT NULL,
  `tgl_info` date NOT NULL,
  `tgl_konfirmasi` date DEFAULT NULL,
  `tgl_realisasi` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `diterima_oleh` text DEFAULT NULL,
  `status` enum('INFO','KONFIRMASI','PROSES','SELESAI') NOT NULL DEFAULT 'INFO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penerima`
--

INSERT INTO `tb_penerima` (`id_penerima`, `no_kk`, `id_bantuan`, `tgl_info`, `tgl_konfirmasi`, `tgl_realisasi`, `tgl_selesai`, `diterima_oleh`, `status`) VALUES
(6, '3319062302970009', 'MCK', '2020-01-09', '2020-01-09', NULL, NULL, NULL, 'SELESAI'),
(8, '3318020708070049', 'MCK', '2020-01-09', '2020-01-09', '2020-01-09', '2020-01-09', '3319062302970004', 'SELESAI'),
(9, '3318022202080032', 'RTLH', '2020-01-09', '2020-01-09', '2020-01-09', '2020-01-09', '3319062302970004', 'SELESAI'),
(10, '3318020708070049', 'BNPT', '2020-01-10', '2020-01-10', '2020-01-10', '2020-01-10', '3319062302970004', 'SELESAI'),
(11, '3318022202080032', 'BNPT', '2020-01-10', NULL, NULL, NULL, NULL, 'INFO'),
(12, '3318022407090005', 'BPKH', '2020-01-10', NULL, NULL, NULL, NULL, 'INFO'),
(13, '3318022407090038', 'BPKH', '2020-01-10', NULL, NULL, NULL, NULL, 'INFO'),
(14, '3318022507080030', 'BPKH', '2020-01-10', NULL, NULL, NULL, NULL, 'INFO'),
(15, '3319060102100126', 'RTLH', '2020-01-10', NULL, NULL, NULL, NULL, 'INFO'),
(16, '3319062302970009', 'BPKH', '2020-01-10', NULL, NULL, NULL, NULL, 'INFO'),
(17, '3318022507090023', 'MCK', '2020-01-10', NULL, NULL, NULL, NULL, 'INFO'),
(18, '3318020708070049', 'BNPT', '2020-12-18', NULL, NULL, NULL, NULL, 'INFO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `nm_user` text DEFAULT NULL,
  `no_hp` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `jabatan` enum('ADMINISTRASI','KEPDES','PETUGAS') DEFAULT NULL,
  `ket` enum('ADA','HAPUS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nm_user`, `no_hp`, `alamat`, `jabatan`, `ket`) VALUES
(1, 'admin', '9d127228d15be02d35d734084e571731', 'Irwan', '0897777', 'Kayen dewe tenang', 'ADMINISTRASI', 'ADA'),
(2, 'kepdes', '9d127228d15be02d35d734084e571731', 'Kepala Desa', '0999', 'Jl', 'KEPDES', 'ADA'),
(3, 'ajiw100', '9d127228d15be02d35d734084e571731', 'Muhammad Yusuf Aji Wijaya', '0895411547434', 'Jl. Sumber - Bulusan, No. 69', 'PETUGAS', 'ADA'),
(4, 'irwan100', '827ccb0eea8a706c4c34a16891f84e7b', 'Muhammad Irwan Budiarto', '0895411547434', 'Jl. Kunu', 'PETUGAS', 'ADA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_warga`
--

CREATE TABLE `tb_warga` (
  `no_kk` varchar(50) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nm_lengkap` text DEFAULT NULL,
  `jk` enum('LAKI-LAKI','PEREMPUAN') DEFAULT NULL,
  `tmp_lahir` text DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` enum('ISLAM','KRISTEN','KATHOLIK','HINDU','BUDDHA','KONGHUCU') DEFAULT NULL,
  `id_pendidikan` int(2) DEFAULT NULL,
  `jpekerjaan` text DEFAULT NULL,
  `st_kawin` enum('KAWIN','BELUM KAWIN') DEFAULT NULL,
  `st_hubungan` enum('KEPALA KELUARGA','ISTRI','ANAK') DEFAULT NULL,
  `ayah` text DEFAULT NULL,
  `ibu` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `rt` int(3) DEFAULT NULL,
  `rw` int(3) DEFAULT NULL,
  `desa` text DEFAULT NULL,
  `kecamatan` text DEFAULT NULL,
  `kab` text DEFAULT NULL,
  `provinsi` text DEFAULT NULL,
  `kode_pos` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_warga`
--

INSERT INTO `tb_warga` (`no_kk`, `nik`, `nm_lengkap`, `jk`, `tmp_lahir`, `tgl_lahir`, `agama`, `id_pendidikan`, `jpekerjaan`, `st_kawin`, `st_hubungan`, `ayah`, `ibu`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kab`, `provinsi`, `kode_pos`) VALUES
('3319060102100126', '3319061802620001', 'KHAMLUDDIN', 'PEREMPUAN', 'PATI', '2020-01-07', 'KRISTEN', 6, 'GURU SD', 'BELUM KAWIN', 'KEPALA KELUARGA', 'SISWO PUSPITO', 'ALTI', 'Jl. Sumber - Bulusan', 5, 5, 'Hadipolo', 'Jekulo', 'Kudus', 'Jawa Tengah', 59382),
('3319060102100126', '3319066604650002', 'KUSWATI', 'PEREMPUAN', 'KUDUS', '2020-01-06', 'ISLAM', 6, 'GURU SD', 'KAWIN', 'ISTRI', 'SISWO PUSPITO', 'ALTI', 'fdfd', 6, 6, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3319062302970009', '3319062302970004', 'Aji Wijaya', 'LAKI-LAKI', 'KUDUS', '2020-01-06', 'ISLAM', 4, 'GURU SD', 'KAWIN', 'KEPALA KELUARGA', 'SISWO PUSPITO', 'ALTI', 'Jl. Kayen Raya', 6, 8, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022202080032', '3318024107470392', 'SUKEMI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KEPALA KELUARGA', NULL, NULL, 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022202080032', '3318021004760010', 'RUDIYANTO', 'LAKI-LAKI', 'PATI', '1976-04-10', 'ISLAM', 3, 'WIRASWASTA', 'BELUM KAWIN', 'ANAK', 'KARSIMIN', 'SUKEMI', 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022202080032', '3318026812840002', 'RUKAYATUN', 'PEREMPUAN', 'PATI', '1984-12-28', 'ISLAM', 3, 'WIRASWASTA', 'BELUM KAWIN', 'ANAK', 'KARSIMIN', 'SUKEMI', 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022202080032', '3318026812840003', 'RUKAYATI', 'PEREMPUAN', 'PATI', '1984-12-28', 'ISLAM', 3, 'WIRASWASTA', 'BELUM KAWIN', 'ANAK', 'KARSIMIN', 'SUKEMI', 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022507080030', '3318022103670006', 'SUPARLAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KEPALA KELUARGA', NULL, NULL, 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022507080030', '3318025011760004', 'RUMIYATI', 'PEREMPUAN', 'PATI', '1976-11-10', 'ISLAM', 3, 'WIRASWASTA', 'KAWIN', 'ISTRI', 'KARSIMIN', 'SUKEMI', 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022507080030', '3318020307970004', 'AZIZ SAIFUDDIN FATURRUZI ANNUR', 'LAKI-LAKI', 'PATI', '1997-07-03', 'ISLAM', 1, 'PELAJAR', 'BELUM KAWIN', 'ANAK', 'SUPARLAN', 'RUMIYATI', 'Jalan Raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022507080030', '3318023003010005', 'AQLIS KHOLIFATUL INSAN', 'LAKI-LAKI', 'PATI', '2001-03-30', 'ISLAM', 1, 'PELAJAR', 'BELUM KAWIN', 'ANAK', 'SUPARLAN', 'RUMIYATI', 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022407090038', '3318021406800004', 'ARIFIN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KEPALA KELUARGA', NULL, NULL, 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022407090038', '3318024705810010', 'SARPINI', 'PEREMPUAN', 'PATI', '1981-05-07', 'ISLAM', 1, 'MENGURUS RUMAH TANGGA', 'KAWIN', 'ISTRI', 'SARWI', 'SUMARNI', 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022407090038', '3318026908030002', 'FANIARSITA', 'PEREMPUAN', 'PATI', '2003-08-29', 'ISLAM', 1, 'PELAJAR', 'BELUM KAWIN', 'ANAK', 'ARIFIN', 'SARPINI', 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318020708070049', '3318022108770001', 'AHMAD SHOLIHIN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KEPALA KELUARGA', NULL, NULL, 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318020708070049', '3318026404860001', 'SITI YULIAYUN', 'PEREMPUAN', 'PATI', '1986-04-24', 'ISLAM', 3, 'MENGURUS RUMAH TANGGA', 'KAWIN', 'ISTRI', 'KASIRUN', 'SUTINAH', 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318020708070049', '3318024607060001', 'FINA LIVATUL WADDAH', 'PEREMPUAN', 'PATI', '2005-07-08', 'ISLAM', 1, 'PELAJAR', 'BELUM KAWIN', 'ANAK', 'AHMAD SHOLIHIN', 'SITI YULIATUN', 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022507090023', '3318020107550326', 'SARWI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KEPALA KELUARGA', NULL, NULL, 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022507090023', '3318024107600837', 'SUMARNI', 'PEREMPUAN', 'PATI', '1960-07-01', 'ISLAM', 1, 'PETANI', 'KAWIN', 'ISTRI', 'SURANJI', 'KARNI', 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022507090023', '3318022308960002', 'SUDARTO', 'LAKI-LAKI', 'PATI', '1995-05-23', 'ISLAM', 2, 'WIRASWASTA', 'BELUM KAWIN', 'ANAK', 'SARWI', 'SUMARNI', 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022407090005', '3318022202850001', 'SUTRISNO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KEPALA KELUARGA', NULL, NULL, 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171),
('3318022407090005', '3318025604850005', 'SITI MASLIHAH', 'PEREMPUAN', 'PATI', '1985-04-16', 'ISLAM', 1, 'PETANI', 'KAWIN', 'ISTRI', 'KARWAT', 'RUMISEH', 'Jalan raya Kayen', 7, 2, 'Kayen', 'Kayen', 'Pati', 'Jawa Tengah', 59171);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bantuan`
--
ALTER TABLE `tb_bantuan`
  ADD PRIMARY KEY (`id_bantuan`),
  ADD KEY `id_user2` (`id_user`);

--
-- Indeks untuk tabel `tb_kk`
--
ALTER TABLE `tb_kk`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indeks untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indeks untuk tabel `tb_penerima`
--
ALTER TABLE `tb_penerima`
  ADD PRIMARY KEY (`id_penerima`),
  ADD KEY `no_kk2` (`no_kk`),
  ADD KEY `id_bantuan1` (`id_bantuan`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `tb_warga`
--
ALTER TABLE `tb_warga`
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `no_kk1` (`no_kk`),
  ADD KEY `id_pendidikan1` (`id_pendidikan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_penerima`
--
ALTER TABLE `tb_penerima`
  MODIFY `id_penerima` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_bantuan`
--
ALTER TABLE `tb_bantuan`
  ADD CONSTRAINT `id_user2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_penerima`
--
ALTER TABLE `tb_penerima`
  ADD CONSTRAINT `id_bantuan1` FOREIGN KEY (`id_bantuan`) REFERENCES `tb_bantuan` (`id_bantuan`),
  ADD CONSTRAINT `no_kk2` FOREIGN KEY (`no_kk`) REFERENCES `tb_kk` (`no_kk`);

--
-- Ketidakleluasaan untuk tabel `tb_warga`
--
ALTER TABLE `tb_warga`
  ADD CONSTRAINT `id_pendidikan1` FOREIGN KEY (`id_pendidikan`) REFERENCES `tb_pendidikan` (`id_pendidikan`),
  ADD CONSTRAINT `no_kk1` FOREIGN KEY (`no_kk`) REFERENCES `tb_kk` (`no_kk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2020 pada 19.56
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `gambar`, `tanggal`) VALUES
(1, 'Bulan Desember Bantuan MKCK akan meningkat98', '<p>\r\n	tes23</p>\r\n', '1.jpg', '2019-11-12'),
(2, 'Antusias penerima bantuan PKH ', '<p>\r\n	jdfjdfjd</p>\r\n', '1.jpg', '2019-11-12'),
(3, 'Antusias penerima bantuan PKH ', '<p align=\"center\">\r\n	<strong>Antusias Warga Desa Kayen Penerima Bantuan KUBE dan RTLH</strong></p>\r\n<p align=\"center\">\r\n	&nbsp;</p>\r\n<table align=\"left\" cellpadding=\"0\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td height=\"0\">\r\n				&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				&nbsp;</td>\r\n			<td>\r\n				&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ratusan warga Desa Kayen t berkumpul dalam sosialisasi pencairan Kelompok Usaha Bersama (<a href=\"https://limawaktu.id/tag/KUBE\"><strong>KUBE</strong></a>) dan Rumah Tidak Layak Huni (<a href=\"https://limawaktu.id/tag/RTLH\"><strong>RTLH</strong></a>) yang digulirkan Kementerian Sosial Republik Indonesia.&nbsp;Antusiasme warga tampak terlihat saat para pendamping program tersebut memberikan penjelasannya.&nbsp;</p>\r\n<p>\r\n	Menurut Tatang, salah seorang pendamping program bantuan KUBE dan RTLH di Kabupaten Bandung Barat, pencairan dana bantuan KUBE dan RTLH ini segera dilakukan, dengan alokasi 30 kelompok usaha warga&nbsp;<a href=\"https://limawaktu.id/tag/KBB\"><strong>KBB</strong></a>&nbsp;dan 30 unit bantuan rumah tidak layak huni.&nbsp;</p>\r\n<p>\r\n	&quot;Program ini terealisasi atas aspirasi yang diserap anggota&nbsp;<a href=\"https://limawaktu.id/tag/DPR\"><strong>DPR</strong></a>&nbsp;RI asal Fraksi&nbsp;<a href=\"https://limawaktu.id/tag/PDI\"><strong>PDI</strong></a>&nbsp;Perjuangan KH Djalaludin Rahmat melalui program yang digulirkan Kementerian Sosial,&quot; jelasnya kepada Limawaktu.id, Senin (10/12).&nbsp;</p>\r\n<p>\r\n	Dia menyebutkan, bantuan KUBE diberikan untuk kelompok&nbsp; peternak, perikanan, warungan dan lain-lain. Sedangkan untuk bantuan RTLH diberikan sebanyak 30 unit untuk memperbaiki rumah warga KBB yang tidak layak huni.&nbsp;</p>\r\n<p>\r\n	&quot;30 unit rumah warga akan diperbaiki dengan RTLH yang masing-masing 10 unit di Kecamatan Cipongkor, 10 unit di Kecamatan Cikaongwetan dan Kecamatan Cililin 10 unit.</p>\r\n<p>\r\n	Bantuan perbaikan rumah tersebut nilainya Rp 15 juta untuk masing-masing rumah. Harapannya, bantuan tersebut hanya stimulant dari pemerintah, swadaya masyarakat sekitar sangat membantu tetangganya,&quot; sebutnya.&nbsp;</p>\r\n<p>\r\n	Salah seorang warga bernama Jaim sangat bersyukur dia bisa mendapatkan bantuan modal usaha warungan melalui program KUBE dari&nbsp;<a href=\"https://limawaktu.id/tag/Kemensos\"><strong>Kemensos</strong></a>&nbsp;tersebut. Hal yang sama disampaikan Oban, penerima bantuan RTLH.&nbsp;</p>\r\n<p>\r\n	&quot;Saya berterimakasih dan terharu mendapatkan bantuan perbaikan rumah saya yang masih berlantai tanah dan berdinding bilik, &quot;jelasnya.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n', 'bantuan-sembako-untuk-lansia-yang-kurang-mampu-di-desa-pakisan-62.jpg', '2019-11-21'),
(4, 'Antusias Warga Penerima Bantuan PKH ', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; text-align: justify;\">\r\n	&nbsp;Ratusan warga Desa Kayen t berkumpul dalam sosialisasi pencairan Kelompok Usaha Bersama (<a href=\"https://limawaktu.id/tag/KUBE\" style=\"box-sizing: border-box; color: rgb(0, 123, 255); text-decoration-line: none; background-color: transparent;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">KUBE</span></a>) dan Rumah Tidak Layak Huni (<a href=\"https://limawaktu.id/tag/RTLH\" style=\"box-sizing: border-box; color: rgb(0, 123, 255); text-decoration-line: none; background-color: transparent;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">RTLH</span></a>) yang digulirkan Kementerian Sosial Republik Indonesia.&nbsp;Antusiasme warga tampak terlihat saat para pendamping program tersebut memberikan penjelasannya.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; text-align: justify;\">\r\n	Menurut Tatang, salah seorang pendamping program bantuan KUBE dan RTLH di Kabupaten Bandung Barat, pencairan dana bantuan KUBE dan RTLH ini segera dilakukan, dengan alokasi 30 kelompok usaha warga&nbsp;<a href=\"https://limawaktu.id/tag/KBB\" style=\"box-sizing: border-box; color: rgb(0, 123, 255); text-decoration-line: none; background-color: transparent;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">KBB</span></a>&nbsp;dan 30 unit bantuan rumah tidak layak huni.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; text-align: justify;\">\r\n	&quot;Program ini terealisasi atas aspirasi yang diserap anggota&nbsp;<a href=\"https://limawaktu.id/tag/DPR\" style=\"box-sizing: border-box; color: rgb(0, 123, 255); text-decoration-line: none; background-color: transparent;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">DPR</span></a>&nbsp;RI asal Fraksi&nbsp;<a href=\"https://limawaktu.id/tag/PDI\" style=\"box-sizing: border-box; color: rgb(0, 123, 255); text-decoration-line: none; background-color: transparent;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">PDI</span></a>&nbsp;Perjuangan KH Djalaludin Rahmat melalui program yang digulirkan Kementerian Sosial,&quot; jelasnya kepada Limawaktu.id, Senin (10/12).&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; text-align: justify;\">\r\n	Dia menyebutkan, bantuan KUBE diberikan untuk kelompok&nbsp; peternak, perikanan, warungan dan lain-lain. Sedangkan untuk bantuan RTLH diberikan sebanyak 30 unit untuk memperbaiki rumah warga KBB yang tidak layak huni.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; text-align: justify;\">\r\n	&quot;30 unit rumah warga akan diperbaiki dengan RTLH yang masing-masing 10 unit di Kecamatan Cipongkor, 10 unit di Kecamatan Cikaongwetan dan Kecamatan Cililin 10 unit.</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; text-align: justify;\">\r\n	Bantuan perbaikan rumah tersebut nilainya Rp 15 juta untuk masing-masing rumah. Harapannya, bantuan tersebut hanya stimulant dari pemerintah, swadaya masyarakat sekitar sangat membantu tetangganya,&quot; sebutnya.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; text-align: justify;\">\r\n	Salah seorang warga bernama Jaim sangat bersyukur dia bisa mendapatkan bantuan modal usaha warungan melalui program KUBE dari&nbsp;<a href=\"https://limawaktu.id/tag/Kemensos\" style=\"box-sizing: border-box; color: rgb(0, 123, 255); text-decoration-line: none; background-color: transparent;\"><span style=\"box-sizing: border-box; font-weight: bolder;\">Kemensos</span></a>&nbsp;tersebut. Hal yang sama disampaikan Oban, penerima bantuan RTLH.&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; text-align: justify;\">\r\n	&quot;Saya berterimakasih dan terharu mendapatkan bantuan perbaikan rumah saya yang masih berlantai tanah dan berdinding bilik, &quot;jelasnya.</p>\r\n', 'bantuan-sembako-untuk-lansia-yang-kurang-mampu-di-desa-pakisan-62.jpg', '2019-11-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `judul`, `konten`) VALUES
(123, 'Visi Misi ', '<p style=\"text-align: center;\">\r\n	<strong>Visi, Misi dan Tujuan Diskominfo Kab. Pati</strong></p>\r\n<ol>\r\n	<li>\r\n		<strong>Misi Diskominfo kab. Pati</strong></li>\r\n</ol>\r\n<ul>\r\n	<li>\r\n		Terwujudnya penyelenggaraan komunikasi dan penyebaran informasi di Kabupaten Pati yang akurat, cepat, efisien, dan aman.</li>\r\n</ul>\r\n<ol>\r\n	<li value=\"2\">\r\n		<strong>Visi Diskominfo Kab. Pati</strong></li>\r\n</ol>\r\n<ul>\r\n	<li>\r\n		Meningkatkan kualitas sumber daya manusia di bidang komunikasi dan informatika,</li>\r\n	<li>\r\n		Meningkatkan sarana dan prasarana pendukung kinerja bidang komunikasi dan informatika,</li>\r\n	<li>\r\n		Menyelenggarakan pengumpulan data, pengolahan, dan penyerahan informasi yang akurat dan cepat (Kominfo),</li>\r\n	<li>\r\n		Mewujudkan infrastruktur dan aplikasi teknologi informasi yang terintegrasi, (e-gov),</li>\r\n	<li>\r\n		Mewujudkan birokrasi layanan komunikasi dan informatika yang aman (sandi).<span id=\"cke_bm_114E\" style=\"display: none;\">&nbsp;</span></li>\r\n</ul>\r\n<ol>\r\n	<li value=\"3\">\r\n		<strong>Tujuan Diskominfo Kab. Pati</strong></li>\r\n</ol>\r\n<ul>\r\n	<li>\r\n		Perumusan kebijakan urusan pemerintah daerah bidang Komunikasi dan Informatika,</li>\r\n	<li>\r\n		Pelaksanaan kebijakan urusan pemerintah daerah bidang Komunikasi dan Informatika, bidang persandian, serta bidang statistik,</li>\r\n	<li>\r\n		Pelaksanaan evaluasi dan pelaporan urusan pemerintah daerah bidang Komunikasi dan Informatika, bidang persandian serta bidang statistik,</li>\r\n	<li>\r\n		Pelaksanaan fungsi lain yang diberikan oleh Bupati terkait tugas dan fungsinya.</li>\r\n</ul>\r\n'),
(124, 'Tupoksi', '<p align=\"center\">\r\n	<span style=\"font-size:18px;\"><strong>TUGAS POKOK</strong></span></p>\r\n<p>\r\n	<strong>Dinas mempunyai tugas membantu Bupati melaksanakan urusan pemerintahan bidang Komunikasi dan Informatika, bidang persandian, serta bidang statistik dan tugas pembantuan yang diberikan kepada daerah.</strong></p>\r\n<ol>\r\n	<li>\r\n		&nbsp;Dinas merupakan unsur pelaksana urusan Pemerintahan di bidang Komunikasi dan Informatika, bidang&nbsp;&nbsp;&nbsp; persandian serta bidang statistik.</li>\r\n	<li>\r\n		Dinas dipimpin oleh Kepala Dinas yang berkedudukan di bawah dan bertanggung jawab kepada Bupati melalui Sekretaris Daerah.</li>\r\n</ol>\r\n<p>\r\n	&nbsp;</p>\r\n<p align=\"center\">\r\n	<strong>FUNGSI</strong></p>\r\n<p>\r\n	Dinas dalam melaksanakan tugas mempunyai fungsi :</p>\r\n<ol>\r\n	<li>\r\n		Perumusan kebijakan urusan pemerintahan daerah bidang Komunikasi dan Informatika, bidang persandian serta bidang statistik;</li>\r\n	<li>\r\n		Pelaksanaan kebijakan urusan pemerintahan daerah bidang Komunikasi Informatika, bidang persandian serta bidang statistik;</li>\r\n	<li>\r\n		Pelaksanaan evaluasi dan pelaporan urusan pemerintahan daerah bidang Komunikasi Informatika, bidang persandian serta bidang statistik;</li>\r\n	<li>\r\n		Pelaksanaan administrasi urusan pemerintahan daerah bidang Komunikasi Informatika, bidang persandian serta bidang statistik;</li>\r\n	<li>\r\n		Pelaksanaan fungsi lain yang diberikan oleh Bupati terkait tugas dan fungsinya;</li>\r\n</ol>\r\n'),
(125, 'Struktur Organisasi', '<p>\r\n	<strong>Susunan Organisasi Dinas Terdiri dari :</strong></p>\r\n<p>\r\n	a. Kepala Dinas</p>\r\n<p>\r\n	b. Sekretariat, terdiri dari :</p>\r\n<ol>\r\n	<li>\r\n		Subbagian Program dan Keuangan</li>\r\n	<li>\r\n		Subbagian Umum dan Kepegawaian</li>\r\n</ol>\r\n<p>\r\n	c. Bidang Informasi dan Komunikasi Publik, terdiri dari :</p>\r\n<ol>\r\n	<li>\r\n		Seksi Pelayanan Informasi Publik</li>\r\n	<li>\r\n		Seksi Pengelolaan Jaringan Komunikasi Publik</li>\r\n</ol>\r\n<p>\r\n	d. Bidang e-Government, terdiri dari :</p>\r\n<ol>\r\n	<li>\r\n		Seksi Pengelolaan Infrastruktur dan Menara Telekomunikasi</li>\r\n	<li>\r\n		Seksi Pelayanan Pengelolaan dan Pengembangan Aplikasi</li>\r\n</ol>\r\n<p>\r\n	e. Bidang Persandian, terdiri dari :</p>\r\n<ol>\r\n	<li>\r\n		Seksi Tata Kelola Persandian</li>\r\n	<li>\r\n		Seksi Operasional Pengamanan Persandian</li>\r\n</ol>\r\n<p>\r\n	f. Kelompok Jabatan Fungsional</p>\r\n<p>\r\n	g. Unit Pelaksana Teknis Dinas</p>\r\n'),
(126, 'Info Kepegawaian', '<p style=\"text-align: center;\">\r\n	<strong>DAFTAR KARYAWAN KARYAWATI</strong></p>\r\n<p style=\"text-align: center;\">\r\n	<strong>DISKOMINFO KAB. PATI 2018</strong></p>\r\n<p>\r\n	&nbsp;</p>\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"3059\" width=\"545\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					<strong>NO</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>NAMA / NIP</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>PANGKAT / GOLONGAN / JABATAN</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					1</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>Drs. JUMANI, M. Si.</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pembina Tk. I / (IV/b)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					<strong>NIP. 19701114 199011 1 001</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Plt. Kepala Diskominfo</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					2</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>ABD. ROHIM, S Pd, MM</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pembina Tk. I / (IV/b)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19620906 198603 1 016</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Sekretaris</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					3</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>LILIK SUYANTO, ST, MM</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pembina Tk. I / (IV/b)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19631216 199703 1 002</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Kabid. Informasi dan komunikasi</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					4</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>LUKY PRATUGAS N,S STP,MM</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Kabid. E-Government / (IV/a)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19810806 200012 1 001</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pembina</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					5</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>SALI, SH, MM</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Kabid Persandian / (IV/a)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19660301 199003 1 012</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pembina</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					6</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>Dra. PUDJI RUSTIJANTI</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Kasi Pelayanan Informasi Publik / (III/d)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19600630 199403 2 001</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					7</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>SISWANTARI, SH</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Kasubbag Program dan Keuangan / (III/d)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19600311 198607 2 001</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					8</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>R ADI PRASASTO,S Sos</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Kasi Pengelolaan Jarkom Publik / (III/d)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19650109 199103 1 018</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					9</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>NONO HARJONO, SH</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Kasi Pengelolaan Infrastruktur dan Menara Telekomunikasi / (III/d)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19701104 199703 1 004</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					10</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>PRIYONO ARIEF F , S Kom</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Kasi Pelayanan Pengelolaan dan Pengembangan Aplikasi / (III/d)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19750813 199703 1 002</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					11</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>ADI GUSMOYO, SE.</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Kasi Tata Kelola Persandian / (III/c)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19780820 200604 1 009</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					12</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>SLAMET SARWONO, SH</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Kasi Operasional Pengamanan Persandian / (III/d)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19611206 198903 1 006</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					13</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>KRISTANTI SINTORINI, SE, MM</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Kasubbag Umum dan Kepegawaian / (III/c)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19771119 200604 2 016</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					14</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>WASIS KUSIDI, SH</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/d)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19661013 198603 1 006</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					15</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>BAMBANG SUGIHARTO, SH</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/d)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19620527 198603 1 010</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					16</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>SISTIYANI, SE</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/c)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19640614 200701 2 006</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					17</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>MOCH. ZULKIFLI .L, SH, MM</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/c)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19750406 199803 1 004</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					18</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>JATMIKA, Amd</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/c)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19600410 198510 1 001</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					19</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>PUJIWATI, S Kom</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/b)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19770506 201001 2 010</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Muda Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					20</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>APRILIA PUSPITASARI, S Sos</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/b)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19860430 201001 2 019</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Muda Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					21</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>JATMI, S Kom</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/b)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19800509 201101 2 002</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Muda Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					22</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>BAYU SETYATMOKO, ST, MT</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/b)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19740815 200903 1 002</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Muda Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					23</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>SAPARAH</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/b)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19600725 198003 2 001</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Muda Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					24</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>SUTIYONO, S ST</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/b)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19681228 200701 1 012</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Muda Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					25</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>MUCH. ROSUL, S Kom</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/a)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19820111 201503 1 002</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Muda</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					26</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>ENDANG PRIHATININGSIH</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/a)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19710521 200701 2 012</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Muda</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					27</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>HENI ARYANI, A Md</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/a)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19800703 200701 2 005</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Muda</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					28</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>YULI KRISTIYANI W, SE</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (III/a)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19720730 201001 2 003</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Penata Muda</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					29</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>HARIS MUFTI, A md</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (II/d)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19781208 201001 1 015</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pengatur Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					30</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>WAHYU BUDI N, A Md. Kom</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (II/d)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19841013 201001 1 017</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pengatur Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					31</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>KRISTIAN ARIS SETIAWAN</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (II/d)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19750327 200501 1 005</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pengatur Tk. I</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					32</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>SUBANDI</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (II/c)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19661017 198703 1 007</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pengatur</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					33</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>S U L I</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (II/c)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19630426 200604 2 001</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pengatur</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					34</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>RIYANI YULI ASTUTI</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (II/c)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19740706 200901 2 003</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pengatur</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					35</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>MINTARJO</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (II/c)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19750807 200901 1 003</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pengatur</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td rowspan=\"2\">\r\n				<p>\r\n					36</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					<strong>PUJI LEKSONO</strong></p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Staf / (II/c)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<p>\r\n					NIP. 19721228 200604 1 015</p>\r\n			</td>\r\n			<td>\r\n				<p>\r\n					Pengatur</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(127, 'sekertariat', '<p>\r\n	<u><strong>SUBBAGIAN PROGRAM DAN KEUANGAN</strong></u></p>\r\n<p>\r\n	Subbagian Program dan Keuangan mempunyai rincian tugas :</p>\r\n<ol>\r\n	<li style=\"text-align: justify;\">\r\n		Merencanakan dan mengkonsep program dan rencana kerja serta rencana kerja serta rencana kegiatan subbagian program dan keuangan berdasarkan program kerja tahun sebelumnya sebagai pedoman kerja agar pelaksanaan program kerja sesuai dengan rencana;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mempelajari dan menelaah peraturan perundang-undangan yang terkait dengan subbagian Program dan Keuangan dan yang terkait dengan bidang tugasnya;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membagi tugas, memberi petunjuk dan membimbing bawahannya dalam melaksanakan&nbsp; tugasnya berdasarkan jabatannya dan kompetensinya untuk pemerataan dan kelancaran pelaksanaan tugas secara benar;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Meneliti atau memeriksa dan menyelia pelaksanaan tugas bawahan berdasarkan arahan sebelumnya agar diperoleh hasl kerja yang optimal;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan konsultasi dan koordinasi baik vertical maupun&nbsp; horizontal guna sinkronisasi dan kelancaran pelaksaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan penyusunan rencana program dan kegiatan dinas dengan menghimpu kegiatan dari masing-masing bidang untuk pelaksaan kegiatan;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Merancang pengelolaan system informasi manajemen bidang komunikasi dan informatika sebagai bahan informasi dinas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan pemantauan dan evaluasi kegiatan dari masing-masing bidang untuk mengetahui mutu pelaksanaan kegiatan;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanaan penyusunan rencana belanja dinas berdasarkan alokasi dana dalam dokumen pelaksaan anggaran satuan kerja perangkat daerah (DPA-SKPD) guna terwujudnya tertib penggunaan anggran;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan penyusunan belanja tidak langsung, belanja langsung dan penerimaan sesuai petunjuk teknis kegiatan guna terwujudnya tertib anggaran;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan pengelolaan keuangan, verifikasi, pembukuan dan akutansi sesuai dengan petunjuk dan pedoman yang telah ditentukan guna tertib administrasi;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan penilaian dan prestasi kerja bawahan berdasarkan sasaran kerja pegawai&nbsp; dan perilaku kerja sesuai ketentuan dalam rangka peningkatan karier, pemberian penghargaan dan sanksi;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mengevaluasi hasil pelaksanaan kegiatan sub bagian program dan keuangan berdasarkan program kerja agar sesuai dengan target hasil;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membuat laporan pelaksanaan kegiatan sub bagian program dan keuangan sesuai dengan hasil pelaksanaan&nbsp; kegiatan sebagai wujud akuntabilitas dan transparansi pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan tugas kedinasan&nbsp; lain yang diberikan oleh pimpinan baik lisa maupun tulisan;</li>\r\n</ol>\r\n<p>\r\n	<u><strong>SUBBAGIAN UMUM DAN KEPEGAWAIAN</strong></u></p>\r\n<p>\r\n	Sub bagian umum dan kepegawaian mempunyai rincian tugas :</p>\r\n<ol>\r\n	<li style=\"text-align: justify;\">\r\n		Merencanakan dan mengkonsep program dan rencana kerja serta rencana kegiatan sub bagian umum dan kepegawaian berdasarkan program kerja tahun sebelumnya sebagai pedoman kerja agar pelaksanaan&nbsp; program kerja sesuai dengan rencana;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mempelajari dan menelaah peraturan perundang-undangan yang terkait dengan sub bagian umum dan kepegawaian dan yang terkait dengan bidang tugasnya;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membagi tugas,memberi petunjuk dan membimbing bawahannya dalam melaksanaka tugasnya berdasarkan jabatan dan kompetensinya untuk pemerataan dan kelancaran pelaksanaan tugas secara benar;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Meneliti/ memeriksa dan menyelia pelaksanaan tugas bawahan berdasarkan arahan sebelumnya agar diperoleh hasil kerja yang optimal.</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan konsultasi dan koordinasi baik vertical maupun horizontal guna sinkronisasi dan kelancaran pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mengelola pelaksanaan surat menyurat dan kearsipan dinas dengan meneliti berikut kelengkapan surat untuk terwujudnya tertib administrasi;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Menyusun pelaksanaan perencanaan, pengadaan dan pemeliharaan serta pelaporan sarana prasarana sesuai kebutuhan untuk mendukung kelancaran tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Menyusun pelaksanaan administrasi kepegawaian sesuai dengan ketentuan yang berlaku guna tertib administrasi kepegawaian;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan pelayanan urusan hukum, hubungan masyarakat dan organisasi untuk kelancaran komunikasi dan informasi dinas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan penilaian dan prestasi kerja bawahan berdasarkan sasaran kerja pegawai dan perilaku kerja sesuai ketentuan dalam rangka peningkatan karier, pemberian penghargaan dan sanksi;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mengevaluasi hasil pelaksanaan kegiatan sub bagian umum dan kepegawaian berdasarkan program kerja agar sesuai dengan target hasil;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membuat laporan pelaksanaan kegiatan sub bagian umum dan kepegawaian sesuai dengan hasil pelaksanaan kegiatan sebagai wujud akuntabilitas dan transparansi pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan baik lisan maupun tulisan;</li>\r\n</ol>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n'),
(128, 'Bidang IKP', '<p>\r\n	<u><strong>SEKSI PELAYANAN INFORMASI PUBLIK</strong></u></p>\r\n<p>\r\n	Seksi Pelayanan Informasi Publik mempunyai rincian tugas :</p>\r\n<ol>\r\n	<li style=\"text-align: justify;\">\r\n		Merencanakan dan mengonsep program dan rencana kerja serta rencana kegiatan di Seksi Pelayanan Informasi Publik berdasarkan program kerja sebelumnya sebagai pedoman kerja agar pelaksanaan sesuai dengan rencana;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mempelajari dan menelaah peraturan perundang-undangan yang terkait dengan Seksi Pelayanan Informasi Publik dan yang terkait dengan bidang tugasnya;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membagi tugas, memberi petunjuk, dan membimbing bawahannya dalam melaksanakan tugasnya berdasarkan jabatan dan kompetensinya untuk pemerataan dan kelancaran pelaksanaan tugas secara benar;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Meneliti dan menyelia pelaksanaan tugas bawahan berdasarkan arahan sebelumnya agar diperoleh hasil kerja yang optimal;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan konsultasi dan koordinasi baik vertikal maupun horizontal berdasarkan bidang tugasnya guna sinkronisasi dan kelancaran pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Menyusun bahan kebijakan teknis Seksi Pelayanan Informasi Publik sesuai dengan peraturan perundang-undangan dan petunjuk teknis untuk sebagai bahan kajian pimpinan;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan pelayanan Data Informasi Publik sesuai peraturan perundang-undangan dan petunjuk teknis untuk Pemerintah dan Masyarakat;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan pengumpulan, pengklarifikasian, pendokumentasian Data Survei Statistik sektoral dan pengumpulan pendapat umum sesuai dengan peraturan dan petunjuk teknis untuk mendapat informasi dari masyarakat yang objektif dan akurat;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan pengemasan ulang Konten Nasional menjadi Konten Daerah dan pembuatan Konten Daerah berdasarkan prioritas tema untuk media Komunikasi Publik;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan penyusunan metode, petunjuk dan pelaksanakan teknis survey statistik sektoral dan pengumpulan pendapat umum berdasarkan peraturan dan petunjuk teknis dalam rangka peningkatan mutu data statistik;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan monitoring isu publik di media, pemantauan tema kampanye kebijakan Pemerintah dan Pemerintah Daerah berdasarkan peraturan dan petunjuk teknis sebagai bahan analisa kebijakan Pemerintah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksankan penilaian dan prestasi kerja bawahan berdasarkan sasaran kerja pegawai dan perilaku kerja sesuai ketentuan dalam rangka peningkatan karier, pemberian penghargaan dan sanksi;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mengevaluasi hasil pelaksanaan kegiatan Seksi Pelayanan Informasi Publik berdasarkan program kerja agar sesuai dengan target hasil;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membuat laporan pelaksanaan kegiatan Seksi Pelayanan Informasi Publik sesuai dengan hasil pelaksanaan kegiatan wujud akuntabilitas dan transparansi pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan, baik lisan maupun tertulis;</li>\r\n</ol>\r\n<p>\r\n	<u><strong>SEKSI PENGELOLAAN JARINGAN KOMUNIKASI PUBLIK</strong></u></p>\r\n<ol>\r\n	<li style=\"text-align: justify;\">\r\n		Merencanakan dan mengonsep program dan rencana kerja serta rencana kegiatan di Seksi Pengelolaan Jaringan Komunikasi Publik berdasarkan program kerja tahun sebelumnya sebagai pedoman kerja agar pelaksanaan program kerja sesuai dengan rencana;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mempelajari dan menelaah peraturan perundang-undangan yang terkait dengan Seksi Pengelolaan Jaringan Komunikasi Publik dan yang terkait dengan bidang tugasnya;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membagi tugas, memberi petunjuk, dan membimbing bawahannya dalam melaksanakan tugasnya berdasarkan jabatan dan kompetensinya untuk pemerataan dan kelancaran pelaksanaan tugas secara benar;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Meneliti atau memeriksa dan menyelia pelaksanaan tugas bawahan berdasarkan arahan sebelumnya agar diperoleh hasil kerja yang optimal;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan konsultasi dan koordinasi baik vertikal maupun horizontal guna sinkronisasi dan kelancaran pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Menyusun bahan kebijakan teknis Seksi Pengelolaan Jaringan komunikasi Publik sesuai dengan peraturan perundang-undangan dan petunjuk teknis sebagai bahan kajian pimpinan;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan pembuatan strategi komunikasi melalui media Pemerintah Daerah dan Non Pemerintah Daerah berdasarkan peraturan dan petunjuk teknis untuk mendukung pelaksanaan kebijakan Pemerintah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan diseminasi informasi kebijakan Pemerintah, hasil survey statistik sektoral dan pendapat umum (Polling) dan pelaksanaan Konferensi Pers melalui media Pemerintah Daerah dan Non Pemerintah Daerah berdasarkan peraturan dan petunjuk teknis untuk penyebarluasan informasi kebijakan Pemerintah Daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan pengelolaan Jaringan Komunikasi Publik Milik Pemerintah Daerah berdasarkan peraturan perundang-undangan dan petunjuk teknis untuk penyebarluasan informasi kebijakan Pemerintah Daerah.</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan pemberian rekomendasi persyaratan administrasi dan kelayakan data teknis berdasarkan peraturan perundang-undangan dan petunjuk teknis untuk permohonan ijin penyelenggaran radio;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan penguatan hubungan dengan media baik Pemerintah Daerah dan Non Pemerintah Daerah melalui pembentukan kelompok kerja, pembentukan komunitas dan pembinaan sumber daya manusia media berdasarkan peraturan dan petunjuk teknis untuk sinkronisasi tugas dan peningkatan kualitas media;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan penilaian dan prestasi kerja bawahan berdasarkan sasaran kerja pegawai dan perilaku kerja sesuai ketentuan dalam rangka peningkatan karier, pemberian penghargaan dan sanksi;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mengevaluasi hasil pelaksanaan kegiatan Seksi Pengelolaan Jaringan Komunikasi Publik berdasarkan program kerja agar sesuai dengan target hasil;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membuat laporan pelaksanaan kegiatan Saksi Pengelolaan Jaringan Komunikasi Publik sesuai dengan hasil pelaksanaan kegiatan sebagai wujud akuntabilitas dan transparansi pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan, baik lisan maupun tertulis.</li>\r\n</ol>\r\n<p style=\"text-align: justify;\">\r\n	<u><strong>SEKSI PENGELOLAAN INFRASTRUKTUR DAN MENARA TELEKOMUNIKASI</strong></u></p>\r\n<p style=\"text-align: justify;\">\r\n	Seksi Pengelolaan Infrastruktur dan Menara Telekomunikasi mempunyai rincian tugas :</p>\r\n<ol>\r\n	<li style=\"text-align: justify;\">\r\n		Merencanakan dan mengonsep program dan rencana kerja serta rencana kegiatan&nbsp; di Seksi Pengelolaan Infrastruktur dan Menara Telekomunikasi berdasarkan program kerja tahun sebelumnya sebagai pedoman kerja agar pelaksanaan program kerja sesuai dengan rencana.</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mempelajari dan menelaah peraturan perundang-undangan yang terkait dengan Seksi Pengelolaan Infrastruktur dan Menara Telekomunikasi dan yang terkait dengan bidang tugasnya;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membagi tugas, memberi petunjuk, dan membimbing bawahannya dalam melaksanakan tugasnya berdasarkan jabatan dan kompetensinya untuk pemerataan dan kelancaran pelaksanaan tugas secara benar;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Meneliti dan menyelia pelaksanaan tugas bawahan berdasarkan arahan sebelumnya agar diperoleh hasil kerja yang optimal;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan konsultasi dan koordinasi baik vertikla maupun horizontal sesuai bidang tugasnya guna sinkronisasi dan kelancaran pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Menyusun bahan kebijakna teknis Seksi Pengelolaan Infrastrukturdan Menara Telekomunikasi sesuai dengan peraturan perundang-undangan dan petunjuk teknis sebagai bahan kajian pimpinan;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan penyediaan sarana dan prasarana jaringan internet dan intranet bagi perangkat daerah dan masyarakat berdasarkan peraturan dan petunjuk teknis untuk mendukung penyenggaraan informasi publik berbasis TIK;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan penyediaan dan pengelolaan Data Center dan&nbsp;<em>Disaster Recovery Center</em>bagi seluruh perangkat daerah dan instansi lain berdasarkan Master plan TIK untuk kepentingan penyelenggaraan&nbsp;<em>Smart City</em>;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan kerja sama TIK antara pemerintah dengan instansi lain serta kerjasama pemerintah dengan non peamerintah berdasarkan peraturan dan petunjuk teknis untuk kepentingan pengembangan&nbsp;<em>Smart City;</em></li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan perencanaan lokasi menara (&nbsp;<em>Cell Plan&nbsp;</em>), pembuatan rekomendasi menara, perhitungan retribusi, serta pengawasan dan pengendalian menara berdasarkan peraturan perundang-undangan dan petunjuk teknis dalam rangka penyelenggaraan Menara Telekomunikasi;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan penilaian dan prestasi kerja bawahan berdasarkan sasaran kerja pegawai dan perilaku kerja sesuai ketentuan dalam rangka peningkatan karier, pemberian penghargaan dan sanksi;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mengevaluasi hasil pelaksanaan kegiatan Seksi Pengelolaan Infrastruktur dan Menara Telekomunikasi berdasarkan program kerja agar sesuai dengan target hasil;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membuat laporan pelaksanaan kegiatan sebagai wujud akuntabilitas dan transparansi pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan, baik lisan maupun tertulis.</li>\r\n</ol>\r\n'),
(129, 'Bidang Egov', '<p>\r\n	<u><strong>SEKSI PELAYANAN PENGELOLAAN DAN PENGEMBANGAN APLIKASI</strong></u></p>\r\n<p>\r\n	Seksi Pelayanan Pengelolaan dan Pengembangan Aplikasi mempunyai rincian tugas :</p>\r\n<ol>\r\n	<li style=\"text-align: justify;\">\r\n		Merencanakan dan mengonsep program dan dan rencana kerja serta rencana kegiatan di Seksi Pelayanan Pengelolaan dan Pengembangan Aplikasi berdasarkan program kerja tahun sebelumnya sebagai pedoman kerja agar pelaksanaan program kerja sesuai dengan rencana;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mempelajari dan menelaah peraturan perundang-undangan yang terkait dengan Seksi Pelayanan Pengelolaan dan Pengembangan Aplikasi dan yang terkait dengan bidangnya;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membagi tugas, memberi petunjuk, dan membimbing bawahannya dalam melaksanakan tugasnya berdasarkan jabatan dan kompetensinya untuk pemerataan dan kelancaran pelaksanaan tugas secara benar;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Meneliti dan menyelia pelaksanaan tugas bawahan berdasarkan arahan sebelumnya agar diperoleh hasil kerja yang optimal;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan konsultasi baik vertikal maupun horisontal berdasarkan arahan sebelumnya agar diperoleh hasil kerja yang optimal;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Menyusun bahan kebijakan teknis Seksi Pelayanan Peneglolaan dan Pengembangan Aplikasi sesuai dengan peraturan perundang-undangan dan petunjuk teknis sebagai bahan kajian pimpinan;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan bidang pengembangan Layanan Portal Kabupaten, Integrasi Layanan Publik dan Kepemerintahan, pemberian rekomendasi nama domain, nama subdomain, dan hosting, pengembangan&nbsp;<em>Application Program Interface</em>(API) dan berdasarkan peraturan dan petunjuk bagi seluruh perangkat daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan pengolahan penyediaan Data, Pengembangan Analisa Big Data, Bisnis Proses&nbsp;<em>Re-engineering</em>lintas perangkat daerah dan perencanaan penanganan insiden keamanan informasi berdasarkan peraturan dan petunjuk teknis bagi selutuh perangkat daerah dan instansi lain;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan pengembangan regulasi dan tata kelola&nbsp;<em>e-Government,&nbsp;</em>peningkatan kapasitas SDM aparatur perangkat daerah dan masyarakat bidang TIK melalui bimbingan teknis berdasarkan peraturan dan petunjuk teknis untuk peningkatan kualitas penyeleggaranan&nbsp;&nbsp;<em>e-Government</em>lingkup kabupaten;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan penilaian dan prestasi kerja bawahan berdasarkan sasaran kerja pegawai dan perilaku kerja sesuai ketentuan dalam rangka peningkatan karier, pemberian penghargaan dan sanksi;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mengevaluasi hasil pelaksanaan kegiatan Seksi Pelayanan Pengelolaan dan Pengembangan Aplikasi sesuai dengan hasil pelaksanaan kegiatan sebagai wujud akuntabilitas dan transparansi pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membuat laporan pelaksanaan kegiatan Seksi Pelayanan Pengelolaan dan Pengembangan Aplikasi sesuai dengan hasil pelaksanaan kegiatan sebagai wujud akuntabilitas dan transparansi pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan, baik lisan maupun tertulis;</li>\r\n</ol>\r\n'),
(130, 'persandian', '<p>\r\n	<u><strong>SEKSI TATA KELOLA PERSANDIAN</strong></u></p>\r\n<p>\r\n	Seksi Tata Kelola Persandian mempunyai rincian tugas :</p>\r\n<ol>\r\n	<li style=\"text-align: justify;\">\r\n		Merencanakan dan mengonsep program dan rencana kerja serta rencana kegiatan di Seksi Tata Kelola Persandian berdasarkan program kerja tahun sebelumnya sebagai pedoman kerja agar pelaksanaan program kerja sesuai rencana;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mempelajari dan menelaah peraturan perundang-undangan yang terkait dengan Seksi Tata Kelola Persandian dan yang terkait dengan bidang tugasnya;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membagi tugas, memberi petunjuk, dan membimbing bawahannya dalam melaksanakan tugasnya berdasarkan jabatan dan kompetensinya untuk pemerataan dan kelancaran pelaksanaan tugas secara benar;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Meneliti dan menyelia pelaksanaan tugas bawahan berdasarkan arahan sebelumnya agar diperoleh hasil kerja yang optimal;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan konsultasi dan koordianasi baik vertikal maupun horizontal sesuai bidang tugasnya guna sinkronisasi dan kelancaran pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Menyusun bahan kebijakan teknis Seksi Tata Kelola Persandian sesuai dengan peraturan perundang-undangan dan petunjuk teknis sebagai bahan kajian pimpinan;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan pengiriman, penyimpanan, pengklarifikasian, pemanfaatan dan penghancuran informasi milik Pemerintah Daerah berdasarkan peraturan dan petunjuk teknis untuk kelancaran tugas persandian lingkup daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan Pengamanan dan perlindungan informasi milik Pemerintah Daerah berdasarkan peraturan dan petunjuk teknis untuk kelancaran tugas persandian lingkup daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan penyiapan, pengelolaan, pemanfaatan dan pengembangan kompetensi sumber daya manusia Sandi melalui kegiatan peningkatan kompetensi sumber daya manusia Sandi berdasarkan peraturan dan petunjuk teknis untuk kelancaran tugas persandian lingkup daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan perencanaan kebutuhan perangkat lunak persandian, perangkat keras persandian, dan jaringan komunikasi sandi antar perangkat daerah berdasarkan peraturan dan petunjuk teknis untuk kelancaran tugas persandian lingkup daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan peningkatan kesadaran keamanan informasi melalui program bimbingan teknis, workshop, sosialisasi berdasarkan peraturan dan petunjuk teknis untuk peningkatan kualitas pengamanan dan perlindungan informasi milik Pemerintah Daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan penilaian dan prestasi kerja bawahan berdasarkan sasaran kerja pegawai dan perilaku kerja sesuai ketentuan dalam rangka peningkatan karier, pemberian penghargaan dan sanksi;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mengevaluasi hasil pelaksanaan kegiatan Seksi Tata Kelola Persandian berdasarkan program kerja agar sesuai dengan target hasil;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membuat laporan pelaksanaan kegiatan Seksi Tata Kelola Persandian sesuai dengan hasil pelaksanaan kegiatan sebagai wujud akuntabilitas dan transparansi pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan tugas kedinasan lain yang diberikan oleh pimpinan, baik lisan maupun tertulis.</li>\r\n</ol>\r\n<p>\r\n	<u><strong>SEKSI OPERASIONAL PENGAMANAN PERSANDIAN</strong></u></p>\r\n<p>\r\n	Seksi Operasional Pengamanan Persandian mempunyai rincian tugas :</p>\r\n<ol>\r\n	<li style=\"text-align: justify;\">\r\n		Merencanakan dan mongonsep program dan rencana kerja serta rencana kegiatan di Seksi Operasional Pengamanan Persandian berdasarkan program kerja tahun sebelumnya sebagai pedoman kerja agar pelaksanaan program kerja sesuai dengan rencana;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mempelajari dan menelaah peraturan perundang-undangan yang terkait dengan Seksi Operasional Pengamanan Persandian dan yang terkait dengan bidang tugasnya;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membagi tugas, memberi petunjuk, dan membimbing bawahannya dalam melaksanakan tugasnya berdasarkan jabatan dan kompetensinya untuk pemerataan dan kelancaran pelaksanaan tugas secara benar;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Meneliti dan menyelia pelaksanaan tugas bawahan berdasarkan arahan sebelumnya agar diperoleh hasil kerja optimal;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanaan konsultasi dan koordinasi baik vertikal maupun horisontal sesuai bidang tugasnya guna sinkronisasi dan kelancaran pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Menyusun bahan kebijakan teknis Seksi Operasional Pengamanan Persandian sesuai dengan peraturan perundang-undangan dan petunjuk teknis sebagai bahan kajian pimpinan;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan perancangan pola di Lingkungan kabupaten berdasarkan peraturan dan petunjuk teknis untuk kelancaran tugas persandian lingkup daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan pengelolaan&nbsp;<em>Security Operation Center&nbsp;</em>(SOC) / pusat data persandian dan pengelolaan komunikasi sandi antar perangkat daerah berdasarkan peraturan dan petunjuk teknis untuk kelancaran tugas persandian lingkup daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan pengawasan penyelenggaraan persandian terhadap akses informasi atau fasilitas pemroses informasi terutama yang berkaitan langsung dengan pimpinan daerah berdasarkan peraturan dan petunjuk teknis untuk peningkatan kualitas persandian lingkup daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melakasnakan kegiatan kebijakan manajemen risiko asset organisasi, konsep pola hubungan komunikasi berdasarkan peraturan dan petunjuk teknis untuk peningkatan kualitas persandian lingkup daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan pengamanan terhadap kegiatan, asset dan instalasi vital persandian melalui kontra penginderaan dan atau metode pengamanan persandian lingkup daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan kegiatan pemulihan data dari gangguan jaringan sistem informasi dengan tetap menjaga integritas dan ketersediaan data berdasarkan peraturan dan petunjuk teknis untuk kelancaran tugas persandian lingkup daerah;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanakan penilaian dan prestasi kerja bawahan berdasarkan sasaran kerja pegawai dan perilaku kerja sesuai ketentuan dalam rangka peningkatan karier, pemberian penghargaan dan sanksi;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Mengevaluasi hasil pelaksanaan kegiatan Seksi Operasional Pengamanan Persandian berdasarkan program kerja agar sesuai dengan target hasil;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Membuat laporan pelaksanaan kegiatan Seksi Operasional Pengamanan Persandian sesuai dengan hasil pelaksanaan kegiatan sebagai wujud akuntabilitas dan transparansi pelaksanaan tugas;</li>\r\n	<li style=\"text-align: justify;\">\r\n		Melaksanaan tugas kedinasan lain yang diberikan oleh pimpinan, baik lisan maupun tertulis.</li>\r\n</ol>\r\n'),
(131, 'hubungi kami', '<div>\r\n	&nbsp; &nbsp;&lt;h1 class=&quot;display-30&quot;&gt;SUGENG RAWUH, MASYARAKAT DESA KAYEN&lt;/h1&gt;</div>\r\n<div>\r\n	&nbsp; &lt;p class=&quot;lead&quot;&gt;Desa adalah kesatuan masyarakat hukum yang memiliki batas wilayah yang berwenang untuk mengatur dan mengurus urusan pemerintah dan kepentingan masyarakat berdasarkan prakarsa masyarakat, hak asal usul, dan/atau hak tradisional yang diakui dan dihormati dalam system pemerintahan NKRI.</div>\r\n<div>\r\n	&nbsp; Desa sebagai ujung tombak pembangunan dan peningkatan kesejahteraan masyarakat. Desa diberikan kewenangan dan sumber dana yang memadai agar dapat mengelola potensi yang dimilikinya guna meningkatkan ekonomi dan kesejahteraan masyarakat.Dalam pelaksanaan UU Desa, berbagai regulasi turunan undang-undang telah diterbitkan untuk mengatur berbagai hal agar pembangunan desa dapat berjalan sebagaimana amanat Undang-Undang Desa.</div>\r\n<div>\r\n	Khususnya di desa Kayen,ada beberapa alokasi dana bantuan yang bersumber dari program pemerintah pusat, maupun program yang sudah disusun pemerintah tingkat desa,Beberapa program bantuan yang sudah ada dan sedang terealisasikan yaitu :&nbsp; &lt;/p&gt;</div>\r\n<div>\r\n	&nbsp; &lt;p class=&quot;lead&quot;&gt;1). Bantuan Rumah Tidak Layak Huni (RTLH).&lt;/p&gt;</div>\r\n<div>\r\n	&nbsp; &lt;p class=&quot;lead&quot;&gt;2). Bantuan MCK dan Sarana Air Bersih.&lt;/p&gt;</div>\r\n<div>\r\n	&nbsp; &lt;p class=&quot;lead&quot;&gt;3). Bantuan Pangan Non Tunai (BPNT).&lt;/p&gt;</div>\r\n<div>\r\n	&nbsp; &lt;p class=&quot;lead&quot;&gt;Agar berbagai peraturan pelaksanaan UU Desa tersebut dapat diimplementasikan dengan baik, maka perlu dilakukan penyelarasan dalam penyusunan kebijakan di masing-masing kementerian, yang ditujukan untuk meningkatkan efisiensi, efektivitas, transparansi, dan akuntabilitas pemanfaatan Dana Desa.&nbsp;</div>\r\n<div>\r\n	&nbsp; Masyarakat juga mempunyai hak untuk melakukan pengawasan melalui korbinwas (koordinasi, bimbingan dan pengawasan).Guna mendukung pelaksanaan tugas dan fungsi desa dalam penyelenggaraan pemerintahan dan pembangunan desa dalam segala aspeknya sesuai dengan kewenangan yang dimiliki, UU Nomor 6 Tahun 2014 memberikan mandat kepada Pemerintah untuk mengalokasikan Dana Desa. Agar tersalurkan dengan baik dan tepat sasaran.&lt;/p&gt;</div>\r\n<div>\r\n	&nbsp; &lt;hr class=&quot;my-4&quot;&gt;</div>\r\n<div>\r\n	&nbsp; &lt;p&gt;Informasi mengenai tentang alokasi dana desa untuk kesejahteraan masyarakat.&lt;/p&gt;</div>\r\n<div>\r\n	&nbsp; &nbsp;</div>\r\n');
INSERT INTO `profil` (`id_profil`, `judul`, `konten`) VALUES
(197, 'isiindek', '<p style=\"text-align: center;\">\r\n	<strong>SUGENG RAWUH MASYARAKAT DESA KAYEN</strong></p>\r\n<p style=\"text-align: justify;\">\r\n	Maksud dan tujuan dibuatnya website desa ini adalah untuk memberi informasi kepada masyarakat khususnya warga Kayen untuk bisa mengetahui apa saja program bantuan yang dicanangkan pemerintah pusat/program desa kayen sendiri.Warga bisa mengecek setiap saat beberapa bantuan baik yang sudah menerima/maupun yang belum menerima sesuai periode dibagikannya bantuan tersebut.Masyarakat juga bisa melaporkan jika ada masalah kepada petugas dengan menggunakan nomor kontak yang sudah tersedia.</p>\r\n<p style=\"text-align: justify;\">\r\n	Adapun beberapa bantuan yaitu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>\r\n<ol>\r\n	<li style=\"text-align: justify;\">\r\n		Bantuan Rumah Tidak Layak Huni (BPNT).</li>\r\n	<li style=\"text-align: justify;\">\r\n		Bantuan MCK dan Sarana Air Bersih.</li>\r\n	<li style=\"text-align: justify;\">\r\n		Bantuan Pangan Non Tunai.</li>\r\n	<li style=\"text-align: justify;\">\r\n		Bantuan Program Keluarga Harapan.</li>\r\n</ol>\r\n<p style=\"text-align: justify;\">\r\n	Program yang sudah ada tersebut adalah program pemerintah desa agar masyakat desa Kayen lebih sejahtera dan makmur. Dengan adanya sistem yang transparan ini masyarakat harus berperan aktif dalam mencari infromasi dan kritik saran pada website ini sangat penting agar lebih maju kedepannya.</p>\r\n<p style=\"text-align: center;\">\r\n	&nbsp;</p>\r\n');

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
('BNPT', 'Bantuan Pangan Non-Tunai', 'Memberikan bantuan kepada warga berupa sembako atau keperluan lain yang bersifat pokok dan tidak beru[a uang', 998, 3),
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
(17, '3318022507090023', 'MCK', '2020-01-10', NULL, NULL, NULL, NULL, 'INFO');

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
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'Irwan', '0897777', 'Kayen dewe tenang', 'ADMINISTRASI', 'ADA'),
(2, 'kepdes', '827ccb0eea8a706c4c34a16891f84e7b', 'Kepala Desa', '0999', 'Jl', 'KEPDES', 'ADA'),
(3, 'ajiw100', '827ccb0eea8a706c4c34a16891f84e7b', 'Muhammad Yusuf Aji Wijaya', '0895411547434', 'Jl. Sumber - Bulusan, No. 69', 'PETUGAS', 'ADA'),
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
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

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
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_penerima`
--
ALTER TABLE `tb_penerima`
  MODIFY `id_penerima` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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

-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2022 pada 11.58
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_adopt_me`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_adopted_tanaman`
--

CREATE TABLE `tb_adopted_tanaman` (
  `id_adopted` int(16) NOT NULL,
  `id_adopter` int(16) NOT NULL,
  `id_tanaman` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_adopter`
--

CREATE TABLE `tb_adopter` (
  `id_adopter` int(16) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_adopter`
--

INSERT INTO `tb_adopter` (`id_adopter`, `nama_lengkap`, `username`, `email`, `password`) VALUES
(1, 'Uji coba', 'Uji coba', 'ujiCoba@gmail.com', 'a4793163bd1d6bdc0574dd680ea1870fb978a336670555b89c9856796f41a7e1'),
(6, 'nasdaww', 'pengadopsi 2', 'contohemail@gmail.com', 'e0ab1f8aba4ca51e6e278f34ac230a00b0a5cabffee2de999713c869061a5765'),
(7, 'parjay maba', 'memang beda', 'parjay23mabar@gmail.com', 'cc82c8a1cdc815c21b69bcc2f7365f6454e0df49e738a833b9242889d428b361'),
(10, '&lt;h1&gt;parjay mabar&lt;/h1&gt;', 'Username Sudah Digunakan', 'parjay23mabar@gmail.com', 'cc82c8a1cdc815c21b69bcc2f7365f6454e0df49e738a833b9242889d428b361'),
(11, '&lt;h1&gt;parjay mabar&lt;/h1&gt;', 'Username Sudah Digunakan', 'parjay23mabar@gmail.com', 'cc82c8a1cdc815c21b69bcc2f7365f6454e0df49e738a833b9242889d428b361'),
(12, '&lt;h1&gt;parjay mabar&lt;/h1&gt;', '', '', 'cc82c8a1cdc815c21b69bcc2f7365f6454e0df49e738a833b9242889d428b361'),
(13, '&lt;h1&gt;parjay mabar&lt;/h1&gt;', '', '', 'cc82c8a1cdc815c21b69bcc2f7365f6454e0df49e738a833b9242889d428b361'),
(16, '&lt;h1&gt;parjay mabar&lt;/h1&gt;', 'memang beda 2', 'parjay123mabar@gmail.com', '73348bb7948476c26184d7a2483270a204ee575cc19713bc7920ad51803676a8'),
(17, 'Desak Putu Sudiarti', 'Buk Desak', 'desaksayang83@gmail.com', 'a4793163bd1d6bdc0574dd680ea1870fb978a336670555b89c9856796f41a7e1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_perwatan`
--

CREATE TABLE `tb_data_perwatan` (
  `id_petani` int(16) NOT NULL,
  `id_pengelola` int(16) NOT NULL,
  `id_tanaman` int(16) NOT NULL,
  `tanggal_pelaporan` date NOT NULL,
  `foto_pelaporan` varchar(256) NOT NULL,
  `laporan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengelola`
--

CREATE TABLE `tb_pengelola` (
  `id_pengelola` int(8) NOT NULL,
  `nama_pengelola` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengelola`
--

INSERT INTO `tb_pengelola` (`id_pengelola`, `nama_pengelola`, `email`, `password`) VALUES
(1, 'nama boleh sama', 'email gak boleh sama', 'hihihi'),
(2, 'pengelola - 1', 'bukan email', 'huyy'),
(3, 'pengelola - 1', 'contohemail1@gmail.com', 'adwawd'),
(4, 'pengelola - 1', 'contohemail2@gmail.com', 'cek-1'),
(5, 'pengelola - 1', 'contohemail3@gmail.com', 'awdwwsd'),
(6, 'pengelola - 1', 'contohemail4@gmail.com', 'asdfes'),
(7, 'pengelola - 1', 'contohemail5@gmail.com', 'dwafnhdf'),
(8, 'Parjay Company', 'parjayCompany@gmail.com', 'a4793163bd1d6bdc0574dd680ea1870fb978a336670555b89c9856796f41a7e1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petani`
--

CREATE TABLE `tb_petani` (
  `id_petani` int(116) NOT NULL,
  `id_pengelola` int(16) NOT NULL,
  `nama_petani` varchar(64) NOT NULL,
  `lokasi_petani` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_petani`
--

INSERT INTO `tb_petani` (`id_petani`, `id_pengelola`, `nama_petani`, `lokasi_petani`) VALUES
(1, 0, 'ParthaWijaya', 'batubulan'),
(2, 0, 'Matthew', 'Hutan'),
(7, 0, 'dana-sama', 'reerere'),
(14, 0, 'widi att - 6', 'random att - 6'),
(15, 0, 'ParthaWijaya att - 2', 'parjay random att - 2'),
(16, 0, 'dummy', 'dummy - 1'),
(28, 0, 'attempt - 1', 'attempt - 1'),
(29, 0, 'cek fungsi', 'cek fungsi'),
(31, 8, 'Petani Baru edit', 'Denpasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tanaman`
--

CREATE TABLE `tb_tanaman` (
  `id_tanaman` int(16) NOT NULL,
  `nama_tanaman` varchar(64) NOT NULL,
  `lokasi_tanaman` varchar(256) NOT NULL,
  `id_pengelola` int(16) NOT NULL,
  `kategori` varchar(64) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `biaya_adopsi_per_unit` float NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `status` varchar(32) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tanaman`
--

INSERT INTO `tb_tanaman` (`id_tanaman`, `nama_tanaman`, `lokasi_tanaman`, `id_pengelola`, `kategori`, `jumlah`, `biaya_adopsi_per_unit`, `deskripsi`, `status`, `bukti_bayar`) VALUES
(2, 'Bambu', 'lokasi 1', 1, 'kategori 1', 0, 123, 'deskripsi - lorem ipsum', 'not adopted', ''),
(3, 'Tomat', 'lokasi 1', 1, 'kategori 1', 0, 123, 'deskripsi 1 - lorem ipsum', 'not adopted', ''),
(4, 'Tembakau', 'lokasi 1', 1, 'kategori 1', 0, 123, 'deskripsi 1 - lorem ipsum', 'adopted', ''),
(6, 'tanaman 4', 'lokasi 2', 2, 'kategori 2', 0, 123456, 'deskripsi 2 lorem ipsum', 'not adopted', ''),
(7, 'tembakau', 'rumah udel update', 8, 'investasi update', 10, 0, 'tembakau nya 009 ni boss update', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_adopted_tanaman`
--
ALTER TABLE `tb_adopted_tanaman`
  ADD PRIMARY KEY (`id_adopted`);

--
-- Indeks untuk tabel `tb_adopter`
--
ALTER TABLE `tb_adopter`
  ADD PRIMARY KEY (`id_adopter`);

--
-- Indeks untuk tabel `tb_data_perwatan`
--
ALTER TABLE `tb_data_perwatan`
  ADD PRIMARY KEY (`id_petani`);

--
-- Indeks untuk tabel `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  ADD PRIMARY KEY (`id_pengelola`);

--
-- Indeks untuk tabel `tb_petani`
--
ALTER TABLE `tb_petani`
  ADD PRIMARY KEY (`id_petani`);

--
-- Indeks untuk tabel `tb_tanaman`
--
ALTER TABLE `tb_tanaman`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_adopted_tanaman`
--
ALTER TABLE `tb_adopted_tanaman`
  MODIFY `id_adopted` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_adopter`
--
ALTER TABLE `tb_adopter`
  MODIFY `id_adopter` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_data_perwatan`
--
ALTER TABLE `tb_data_perwatan`
  MODIFY `id_petani` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  MODIFY `id_pengelola` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_petani`
--
ALTER TABLE `tb_petani`
  MODIFY `id_petani` int(116) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tb_tanaman`
--
ALTER TABLE `tb_tanaman`
  MODIFY `id_tanaman` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
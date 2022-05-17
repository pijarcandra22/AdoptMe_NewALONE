-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2022 pada 08.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adopt_me`
--

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
(1, 'Pijar Candra Mahatagandha', 'pijarcandra22', 'pijarcandra22@gmail.com', '$2y$10$Xdmajh/2J4ca6dHEidwT6O6/FCUwGuvSE9RB0d82.I0npzKEhpwn6'),
(2, 'Putu Widya Eka Safitri', 'widya', 'pijarcandra22@gmail.com', '$2y$10$PsRHrPV3FCK28f1ICtI7P.6y5w3qLa8HL9hq3AQYGOWHps.Ao6jMK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_perwatan`
--

CREATE TABLE `tb_data_perwatan` (
  `id_perawatan` int(11) NOT NULL,
  `id_petani` int(16) NOT NULL,
  `id_pengelola` int(16) NOT NULL,
  `id_tanaman` int(16) NOT NULL,
  `tanggal_pelaporan` date NOT NULL,
  `foto_pelaporan` varchar(256) NOT NULL,
  `laporan` text NOT NULL,
  `status_pembayaran` varchar(100) NOT NULL DEFAULT 'Belum Dibayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_perwatan`
--

INSERT INTO `tb_data_perwatan` (`id_perawatan`, `id_petani`, `id_pengelola`, `id_tanaman`, `tanggal_pelaporan`, `foto_pelaporan`, `laporan`, `status_pembayaran`) VALUES
(1, 1, 1, 3, '2022-05-06', '6274f6dcc1777.jpeg', 'haiwsdhuhasdhsadiashdiahsdi asdiashasd', 'Belum Dibayar'),
(2, 1, 1, 3, '2022-05-06', '6274f816149e4.jpg', 'hzcsbxcusa', 'Belum Dibayar'),
(3, 1, 1, 3, '2022-05-06', '6274f86a4a03b.jpg', 'hisc', 'Belum Dibayar'),
(5, 1, 1, 3, '2022-05-16', '', 'qiwheqwge', 'Belum Dibayar'),
(6, 1, 1, 3, '2022-05-16', '', 'KASJDBASD', 'Belum Dibayar'),
(7, 1, 1, 3, '2022-05-16', '6281c5494b475.jpg', 'akshdsabd', 'Belum Dibayar'),
(8, 1, 1, 3, '2022-05-16', '6281c58c6d245.png', 'qwejkhqwe', 'Belum Dibayar'),
(9, 1, 1, 3, '2022-05-16', '', 'sefjoweijfweoijfweoijfiowej', 'Belum Dibayar'),
(10, 1, 1, 3, '2022-05-16', '6281c80a0cf54.png', 'lasa;sd;aksd;kajsd;jasdkj', 'Belum Dibayar'),
(11, 1, 1, 1, '2022-05-16', '6281c83717f43.jpg', 'sadaskdjlaskcnalskncasn', 'Belum Dibayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_landing_tag`
--

CREATE TABLE `tb_landing_tag` (
  `id_landing` int(11) DEFAULT NULL,
  `plant_tittle` varchar(100) DEFAULT NULL,
  `plant_desc` varchar(225) DEFAULT NULL,
  `plant_tag` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_landing_tag`
--

INSERT INTO `tb_landing_tag` (`id_landing`, `plant_tittle`, `plant_desc`, `plant_tag`, `image`) VALUES
(1, 'Nature', 'Help mother earth we bring your donation to the farmer/people to grow for 2 years', 'nature', 'c1.png'),
(2, 'Togetherness', 'Help people, we use your donation become a capital for farmer to grow their farming with natural way', 'Togetherness', 'c2.png'),
(3, 'Special', 'We use your donation to help conservation, we ask people to preserve plants/animal around', 'Special', 'c3.png');

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
(1, 'AdoptPlantManager', 'adoptmeindonesia2022@gmail.com', '$2y$10$1.RO2L0vZR6B2sBGRgSYx.tuyXYXexOcsaQtNa49tXyyHF7hG0wKS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petani`
--

CREATE TABLE `tb_petani` (
  `id_petani` int(116) NOT NULL,
  `id_pengelola` int(16) NOT NULL,
  `nama_petani` varchar(64) NOT NULL,
  `lokasi_petani` varchar(256) NOT NULL,
  `no_rekening` varchar(225) NOT NULL,
  `rek_nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_petani`
--

INSERT INTO `tb_petani` (`id_petani`, `id_pengelola`, `nama_petani`, `lokasi_petani`, `no_rekening`, `rek_nama`) VALUES
(1, 1, 'Swidanayasa', '-8.271867816558725, 115.16359685461363', '10', ''),
(2, 1, 'Manager_admin', '-8.630565058758144, 115.21063800677099', '120', '');

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
  `gambar` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `status` varchar(32) NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL,
  `id_adopter` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `nama_alamat` varchar(225) NOT NULL,
  `id_petani` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tanaman`
--

INSERT INTO `tb_tanaman` (`id_tanaman`, `nama_tanaman`, `lokasi_tanaman`, `id_pengelola`, `kategori`, `gambar`, `harga`, `deskripsi`, `status`, `bukti_bayar`, `id_adopter`, `tanggal_transaksi`, `nama_alamat`, `id_petani`) VALUES
(1, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'adopsi', '', 1, '2022-05-04 19:38:54', 'Desa Candikuning', 1),
(2, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '0000-00-00 00:00:00', 'Desa Candikuning', 1),
(3, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'adopsi', '', 1, '0000-00-00 00:00:00', 'Desa Candikuning', 1),
(4, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '0000-00-00 00:00:00', 'Desa Candikuning', 1),
(5, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '0000-00-00 00:00:00', 'Desa Candikuning', 1),
(6, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 08:37:20', 'Desa Candikuning', 1),
(7, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 08:37:20', 'Desa Candikuning', 1),
(8, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-17 12:39:35', 'Desa Candikuning', 1),
(9, 'Brokoli Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae994575f9.jpg', 200000, '1 Polibag Brokoli monokultur, panen 70 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '0000-00-00 00:00:00', 'Desa Candikuning', 1),
(10, 'Brokoli Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae994575f9.jpg', 200000, '1 Polibag Brokoli monokultur, panen 70 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '0000-00-00 00:00:00', 'Desa Candikuning', 1),
(11, 'Brokoli Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae994575f9.jpg', 200000, '1 Polibag Brokoli monokultur, panen 70 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 13:00:20', 'Desa Candikuning', 1),
(12, 'Brokoli Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae994575f9.jpg', 200000, '1 Polibag Brokoli monokultur, panen 70 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 12:58:23', 'Desa Candikuning', 1),
(13, 'Brokoli Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae994575f9.jpg', 200000, '1 Polibag Brokoli monokultur, panen 70 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 12:55:09', 'Desa Candikuning', 1),
(14, 'Brokoli Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae994575f9.jpg', 200000, '1 Polibag Brokoli monokultur, panen 70 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 09:16:34', 'Desa Candikuning', 1),
(15, 'Brokoli Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae994575f9.jpg', 200000, '1 Polibag Brokoli monokultur, panen 70 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 09:16:19', 'Desa Candikuning', 1),
(16, 'Brokoli Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae994575f9.jpg', 200000, '1 Polibag Brokoli monokultur, panen 70 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 09:09:15', 'Desa Candikuning', 1),
(17, 'Wortel Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af235393e6.jpg', 200000, '1 Polibag Wortel monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 21:17:00', 'Desa Candikuning', 1),
(18, 'Wortel Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af235393e6.jpg', 200000, '1 Polibag Wortel monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 20:32:08', 'Desa Candikuning', 1),
(19, 'Wortel Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af235393e6.jpg', 200000, '1 Polibag Wortel monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 09:09:19', 'Desa Candikuning', 1),
(20, 'Wortel Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af235393e6.jpg', 200000, '1 Polibag Wortel monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 09:09:11', 'Desa Candikuning', 1),
(21, 'Wortel Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af235393e6.jpg', 200000, '1 Polibag Wortel monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 09:08:23', 'Desa Candikuning', 1),
(22, 'Wortel Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af235393e6.jpg', 200000, '1 Polibag Wortel monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-18 13:09:23', 'Desa Candikuning', 1),
(23, 'Wortel Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af235393e6.jpg', 200000, '1 Polibag Wortel monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-18 13:09:23', 'Desa Candikuning', 1),
(24, 'Wortel Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af235393e6.jpg', 200000, '1 Polibag Wortel monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-12 09:08:35', 'Desa Candikuning', 1),
(25, 'Selada Bulat & Bawang Pere', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af3e850986.png', 200000, 'Selada Bulat & Bawang Pere diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '0000-00-00 00:00:00', 'Desa Candikuning', 1),
(26, 'Selada Bulat & Bawang Pere', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af3e850986.png', 200000, 'Selada Bulat & Bawang Pere diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '0000-00-00 00:00:00', 'Desa Candikuning', 1),
(27, 'Selada Bulat & Bawang Pere', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af3e850986.png', 200000, 'Selada Bulat & Bawang Pere diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '0000-00-00 00:00:00', 'Desa Candikuning', 1),
(28, 'Selada Bulat & Bawang Pere', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af3e850986.png', 200000, 'Selada Bulat & Bawang Pere diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 10:01:47', 'Desa Candikuning', 1),
(29, 'Selada Bulat & Bawang Pere', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af3e850986.png', 200000, 'Selada Bulat & Bawang Pere diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 09:02:36', 'Desa Candikuning', 1),
(30, 'Selada Bulat & Bawang Pere', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af3e850986.png', 200000, 'Selada Bulat & Bawang Pere diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 08:54:36', 'Desa Candikuning', 1),
(31, 'Selada Bulat & Bawang Pere', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af3e850986.png', 200000, 'Selada Bulat & Bawang Pere diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 08:54:36', 'Desa Candikuning', 1),
(32, 'Selada Bulat & Bawang Pere', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af3e850986.png', 200000, 'Selada Bulat & Bawang Pere diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 08:54:36', 'Desa Candikuning', 1),
(33, 'Selada Bulat & Seledri', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af47023e68.png', 200000, 'Selada Bulat & Seledri diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 08:41:08', 'Desa Candikuning', 1),
(34, 'Selada Bulat & Seledri', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af47023e68.png', 200000, 'Selada Bulat & Seledri diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 08:28:42', 'Desa Candikuning', 1),
(35, 'Selada Bulat & Seledri', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af47023e68.png', 200000, 'Selada Bulat & Seledri diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 08:28:42', 'Desa Candikuning', 1),
(36, 'Selada Bulat & Seledri', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af47023e68.png', 200000, 'Selada Bulat & Seledri diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 08:28:42', 'Desa Candikuning', 1),
(37, 'Selada Bulat & Seledri', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af47023e68.png', 200000, 'Selada Bulat & Seledri diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 08:28:42', 'Desa Candikuning', 1),
(38, 'Selada Bulat & Seledri', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af47023e68.png', 200000, 'Selada Bulat & Seledri diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 08:28:42', 'Desa Candikuning', 1),
(39, 'Selada Bulat & Seledri', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af47023e68.png', 200000, 'Selada Bulat & Seledri diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '2022-04-27 08:28:42', 'Desa Candikuning', 1),
(40, 'Selada Bulat & Seledri', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625af47023e68.png', 200000, 'Selada Bulat & Seledri diatur dalam 1 paket, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-12 09:09:26', 'Desa Candikuning', 1),
(41, 'Mangrove', '-8.702538337972424, 115.16555925394076', 1, '#nature', '625afaf9a0572.jpg', 500000, 'Help mother earth we bring your dobation to the farmer/people to grow for 2 years (monthly report)', 'waiting', '', 1, '2022-05-17 08:59:18', 'Pantai Legian', 0),
(42, 'Eucaliptus', '-8.583986824951687, 115.26899627587889', 1, '#nature', '625afb579b428.jpg', 500000, 'Help mother earth we bring your dobation to the farmer/people to grow for 2 years (monthly report)', 'waiting', '', 1, '2022-05-17 09:07:48', 'Sukawati', 0),
(43, 'Bamboo', '-8.583986824951687, 115.26899627587889', 1, '#nature', '625afbac00d54.jpg', 500000, 'Help mother earth we bring your dobation to the farmer/people to grow for 2 years (monthly report)', 'waiting', '', 1, '2022-05-10 08:41:47', 'Sukawati', 0),
(44, 'Mango', '-8.144450930484659, 115.16900923950567', 1, '#fruits', '625afc1ae3456.jpg', 500000, 'Help mother earth we bring your dobation to the farmer/people to grow for 2 years (monthly report)', '', '', 0, '0000-00-00 00:00:00', 'Sawan', 0),
(45, 'Local Cows', '-8.528134528053569, 115.18067982084867', 1, '#spesialpurpose', '625afcb50bd4c.jpg', 50000000, 'Help mother earth we bring your dobation to the farmer/people to grow for 2 years (monthly report)', '', '', 0, '0000-00-00 00:00:00', 'Mengwi', 0),
(46, 'Local Stingless Bee', '-8.476678288471426, 115.5482775987978', 1, '#spesialpurpose', '625afd4c25c67.jpg', 500000, 'Help mother earth we bring your dobation to the farmer/people to grow for 2 years (monthly report)', 'waiting', '', 1, '2022-05-10 12:52:00', 'Manggis', 0),
(47, 'Local Honey Bee', '-8.476678288471426, 115.5482775987978', 1, '#spesialpurpose', '625afd8dea5a1.jpg', 500000, 'Help mother earth we bring your dobation to the farmer/people to grow for 2 years (monthly report)', 'waiting', '', 1, '2022-05-17 09:03:09', 'Manggis', 0),
(48, 'Palm Tree', '-8.476678288471426, 115.5482775987978', 1, '#spesialpurpose', '625afdefd2e43.jpg', 500000, 'Help mother earth we bring your dobation to the farmer/people to grow for 2 years (monthly report)', 'waiting', '', 1, '2022-05-10 12:49:19', 'Manggis', 0),
(49, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '0000-00-00 00:00:00', 'Desa Candikuning', 1),
(50, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '0000-00-00 00:00:00', 'Desa Candikuning', 0),
(51, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', '', '', 0, '0000-00-00 00:00:00', 'Desa Candikuning', 0),
(52, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 10:00:03', 'Desa Candikuning', 0),
(53, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 09:58:40', 'Desa Candikuning', 0),
(54, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 09:15:16', 'Desa Candikuning', 0),
(55, 'Palm Tree', '-8.476678288471426, 115.5482775987978', 1, '#spesialpurpose', '625afdefd2e43.jpg', 500000, 'Help mother earth we bring your dobation to the farmer/people to grow for 2 years (monthly report)', '', '', 0, '0000-00-00 00:00:00', 'Manggis', 0),
(56, 'Kentang Monokultur', '-8.271867816558725, 115.16359685461363', 1, '#vegetables', '625ae8c6a6680.jpg', 200000, '1 Polibag Kentang monokultur, panen 90 hari lagi Pintu terbuka siapapun boleh berkunjung.Alamat ty. Banjar Batusesa desa Candikuning kecamatan Baturiti kab.Tabanan.', 'waiting', '', 1, '2022-05-17 09:01:12', 'Desa Candikuning', 0),
(57, 'Palm Tree', '-8.476678288471426, 115.5482775987978', 1, '#spesialpurpose', '625afdefd2e43.jpg', 500000, 'Help mother earth we bring your dobation to the farmer/people to grow for 2 years (monthly report)', '', '', 0, '0000-00-00 00:00:00', 'Manggis', 0),
(58, 'Monyet', '-8.271867816558725, 115.16359685461363', 1, '#fajosdjas', '6280df6f24aab.jpg', 1231, 'asdasfasf', 'Not Ready', '', 0, '0000-00-00 00:00:00', 'Pecatu', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_adopter`
--
ALTER TABLE `tb_adopter`
  ADD PRIMARY KEY (`id_adopter`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indeks untuk tabel `tb_data_perwatan`
--
ALTER TABLE `tb_data_perwatan`
  ADD PRIMARY KEY (`id_perawatan`) USING BTREE;

--
-- Indeks untuk tabel `tb_landing_tag`
--
ALTER TABLE `tb_landing_tag`
  ADD UNIQUE KEY `id_landing` (`id_landing`);

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
-- AUTO_INCREMENT untuk tabel `tb_adopter`
--
ALTER TABLE `tb_adopter`
  MODIFY `id_adopter` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_data_perwatan`
--
ALTER TABLE `tb_data_perwatan`
  MODIFY `id_perawatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  MODIFY `id_pengelola` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_petani`
--
ALTER TABLE `tb_petani`
  MODIFY `id_petani` int(116) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_tanaman`
--
ALTER TABLE `tb_tanaman`
  MODIFY `id_tanaman` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2023 pada 13.48
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_week7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `game` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_barang`
--

INSERT INTO `tabel_barang` (`id_barang`, `nama`, `gambar`, `game`, `stock`, `harga`) VALUES
(1, 'Acrylic Stand Yae Miko', 'yae_miko.jpg', 'Genshin Impact', 21, 100000),
(3, 'Sticker Pack Eula', 'eula.jpg', 'Genshin Impact', 30, 40000),
(4, 'Keychain Zhongli', 'zhongli.jpg', 'Genshin Impact', 40, 40000),
(5, 'Keychain Yelan', 'yelan.jpg', 'Genshin Impact', 50, 40000),
(7, 'Sticker Pack Dan Heng Il', 'dan_heng.jpg', 'Honkai Star Rail', 40, 20000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

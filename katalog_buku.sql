-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2021 pada 05.50
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
-- Database: `katalog_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpusguru`
--

CREATE TABLE `perpusguru` (
  `id` int(11) NOT NULL,
  `kode_buku` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perpusguru`
--

INSERT INTO `perpusguru` (`id`, `kode_buku`, `judul`, `pengarang`) VALUES
(17, 2147483647, 'BUMI &amp; BULAN', 'tereliye'),
(23, 123456789, 'MARIPOSA', 'LULUK HF'),
(26, 237947927, 'GALAKSI', 'Poppi Pertiwi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perpusguru`
--
ALTER TABLE `perpusguru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perpusguru`
--
ALTER TABLE `perpusguru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

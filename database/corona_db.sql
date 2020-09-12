-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Sep 2020 pada 11.09
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corona_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lapor_sigap`
--

CREATE TABLE `tbl_lapor_sigap` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telephon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `penanganan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_lapor_sigap`
--

INSERT INTO `tbl_lapor_sigap` (`id`, `nama`, `telephon`, `alamat`, `gejala`, `penanganan`) VALUES
(6, 'alfin', '089', 'sragen', 'kanker ga punya duit', 'kerja cari duit dong');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_lapor_sigap`
--
ALTER TABLE `tbl_lapor_sigap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_lapor_sigap`
--
ALTER TABLE `tbl_lapor_sigap`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2022 pada 14.14
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_ilham`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_ilham`
--

CREATE TABLE `users_ilham` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_ilham`
--

INSERT INTO `users_ilham` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(8, 'ilham', 'ilhamsuryo46@gmail.com  ', '12345', '09875'),
(9, 'Ilham SL', 'ilhamsuryol18@gmail.com ', '4567', '08127893450'),
(10, 'Rizky Wibs', 'ilhamsuryo12@gmail.com  ', '234', '082364789'),
(11, 'Ahmad Us', 'ilhamah@gmail.com  ', 'kil', '09674848');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users_ilham`
--
ALTER TABLE `users_ilham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users_ilham`
--
ALTER TABLE `users_ilham`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

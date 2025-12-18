-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2025 pada 15.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_danusstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(2, 'novalliza21@gmail.com ', 'admin1234'),
(6, 'novalliza@gmail.com ', '12345'),
(11, 'novalliza@email.com ', '12345'),
(12, 'novalliza@email.com ', '12345'),
(14, 'novalliza@email.com ', '12345'),
(15, 'novapsw8@gmail.com', '4567'),
(17, 'elza13@gmail.com', '0312'),
(18, 'silpi24@gmail.com', '1918'),
(19, 'shaniaa24@gmail.com', '6785'),
(20, 'shaniaaaaa13@gmail.com', '0987'),
(21, 'erikaaa45@gmail.com', '1298'),
(22, 'mikoooo34@gmial.com', '1604'),
(23, 'athifia22@gmail.com', '0312'),
(24, 'lizaaaa1@gmail.com', '4567'),
(25, 'nasyaa21@gmail.com', '2108'),
(26, 'rayna@gmail.com', '2012'),
(27, 'balqis@gmail.com', '3412'),
(28, 'klm@gmail.com', '4567'),
(29, 'nadin@gmail.com', '1367'),
(30, 'naya@gmail.com', '0987'),
(31, 'nvaliza@gmailcom', '7702'),
(32, 'anasya@gmail.com', '1010'),
(33, 'bapak@gmail.com', '2202'),
(34, 'senyom@gmail.com', '4783'),
(35, 'avon@gmail.com', '9080'),
(36, 'afra@gmail.com', '2006'),
(37, 'nsy@gmail.com', '2025'),
(38, 'zavi@gmail.com', '1111'),
(39, 'yna@gmail.com', '2323'),
(40, 'ytt@gmail.com', '7878'),
(41, 'haha@gmail.com', '3452'),
(42, 'nlz@gmail.com', '6767'),
(43, 'trasi@gmail.com', '5454'),
(44, 'regis@gmail.com', '2026'),
(45, 'registrasi@gmail.com', '2021'),
(46, 'registrasiiii@gmail.com', '2023'),
(47, 'novaaa@gmail.com', '2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `stok`) VALUES
(4, 'kaos', 75, 200),
(5, 'tumbler', 50, 60),
(6, 'totebag', 40, 300),
(8, 'stiker', 15, 500),
(9, 'keychain', 12, 400),
(10, 'topi', 60, 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `registrasi`
--

INSERT INTO `registrasi` (`id`, `email`, `password`) VALUES
(1, 'novalliza21@gmail.com', '6789'),
(2, 'novapsw8@gmail.com', '4567'),
(3, 'novalliza@gmail.com', '54321'),
(4, 'inesaaisahwa01@gmail.com', '54321'),
(5, 'elza13@gmail.com', '0312'),
(6, 'silpi24@gmail.com', '1918'),
(7, 'shaniaa24@gmail.com', '6785'),
(8, 'shaniaaaaa13@gmail.com', '0987'),
(9, 'erikaaa45@gmail.com', '1298'),
(10, 'mikoooo34@gmial.com', '1604'),
(11, 'athifia22@gmail.com', '0312'),
(12, 'lizaaaa1@gmail.com', '4567'),
(13, 'nasyaa21@gmail.com', '2108'),
(14, 'rayna@gmail.com', '2012'),
(15, 'balqis@gmail.com', '3412'),
(16, 'klm@gmail.com', '4567'),
(17, 'nadin@gmail.com', '1367'),
(18, 'naya@gmail.com', '0987'),
(19, 'nvaliza@gmailcom', '7702'),
(20, 'anasya@gmail.com', '1010'),
(21, 'bapak@gmail.com', '2202'),
(22, 'senyom@gmail.com', '4783'),
(27, 'yna@gmail.com', '2323'),
(28, 'ytt@gmail.com', '7878'),
(29, 'haha@gmail.com', '3452'),
(30, 'nlz@gmail.com', '6767'),
(31, 'trasi@gmail.com', '5454'),
(32, 'regis@gmail.com', '2026'),
(33, 'registrasi@gmail.com', '2021'),
(34, 'registrasiiii@gmail.com', '2023'),
(35, 'novaaa@gmail.com', '2020');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

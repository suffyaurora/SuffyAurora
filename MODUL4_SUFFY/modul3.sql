-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2022 pada 12.53
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `showroom_suffy_table`
--

CREATE TABLE `showroom_suffy_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `showroom_suffy_table`
--

INSERT INTO `showroom_suffy_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(21, 'SPORT', 'Aurora', 'TOYOTA', '2022-11-15', ' bismillah punya mobil', 'mobil2.jpg', 'Lunas'),
(22, 'TESLA', 'SUFFY', 'Mobil Listrik', '2022-11-15', 'mobil listrik kerenn abisss', 'tesla.jpg', 'Lunas'),
(23, 'RANGE ROVER', 'SUFFY', 'SPORT', '2022-11-26', 'bismillah mobil idaman', 'range.jpg', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_suffy`
--

CREATE TABLE `user_suffy` (
  `id` bigint(20) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_suffy`
--

INSERT INTO `user_suffy` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(0, 'suffy@gmail.com', 'Aurora', '0812345', '345'),
(0, '', '', '', ''),
(0, 'suffyaurora@gmail.com', 'Suffy', '08123456', '123'),
(0, 'suffyaurora@yahoo.co.id', 'Suf', '08987', '678'),
(0, 'suffyaurora@gmail.com', 'Suffy', '08123456', '123'),
(0, 'suffyaurora@gmail.com', 'Suffy Aurora', '08123456', '123'),
(0, 'suffy@gmail.com', 'Suffy', '123456', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `showroom_suffy_table`
--
ALTER TABLE `showroom_suffy_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `showroom_suffy_table`
--
ALTER TABLE `showroom_suffy_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

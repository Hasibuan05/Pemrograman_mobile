-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2023 pada 08.32
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
-- Database: `pemilu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilu`
--

CREATE TABLE `pemilu` (
  `ID` int(5) NOT NULL,
  `Kelurahan` varchar(15) NOT NULL,
  `Tps` varchar(5) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Usia` varchar(10) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Referensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemilu`
--

INSERT INTO `pemilu` (`ID`, `Kelurahan`, `Tps`, `Nama`, `Nik`, `Tanggal_lahir`, `Usia`, `Jenis_kelamin`, `Referensi`) VALUES
(2, 'Medan Sunggal', '2', 'Lalaa', '345673456', '2023-11-08', '21', 'Perempuan', 'saiful'),
(8, 'wesdfghfdsdf', '5', 'Lola cantik', '876543', '2002-10-10', '20 Tahun', 'Perempuas', 'Kamal Julianto'),
(9, 'Medan Karimun', '4', 'Sandiaga Uno', '12092787665435', '1987-10-21', '40 Tahun', 'Perempuan', 'Waluyo pakpakbarat'),
(15, 'DUSUN III DESA ', '3', 'LOLA PRASTIKA HASIBU', '210900987546667', '2003-10-05', '20 TAHUN', 'Perempuan', 'Sasimo'),
(16, 'Tanjung Tiram', '5', 'Amalya syoibah', '2197654567890', '2002-12-12', '21 Tahun', 'Perempuan', 'Kamal Julianto'),
(17, 'Sei Batang hari', '3', 'Lola Prastika Hasibu', '21090875467832', '2003-10-05', '20 ', 'Perempuan', 'Saiful Amri'),
(18, 'Tanjung Tiram', '2', 'Miftah Alina', '19765456789065', '2002-12-12', '21 ', 'Perempuan', 'Kamal Julianto'),
(19, 'Medan Sunggal', '5', 'Cinta Melati Kusuma', '2109876543456', '1987-12-12', '40', 'Perempuan', 'Kamal Julianto'),
(20, 'Medan sunggal', '5', 'Lola hasibuan', '210987656789', '2002-12-12', '21', 'Perempuan', 'Waluyo pakpakbarat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemilu`
--
ALTER TABLE `pemilu`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemilu`
--
ALTER TABLE `pemilu`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

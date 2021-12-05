-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2021 pada 17.41
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_rama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` varchar(8) NOT NULL,
  `id_karyawan` varchar(8) NOT NULL,
  `nama_karyawan` varchar(120) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `jabatan` varchar(60) NOT NULL,
  `jeniscuti` varchar(1000) NOT NULL,
  `tgl_cuti` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `id_karyawan`, `nama_karyawan`, `departemen`, `jabatan`, `jeniscuti`, `tgl_cuti`) VALUES
('G9821', '109089', 'Muhamad', 'HRD', 'Manager', 'Cuti Biasa', '2021-12-04'),
('G9822', '109081', 'Muhamad Yoga', 'HRD', 'Manager', 'Cuti Khusus', '2021-12-05'),
('G9823', '109080', 'Dimas Toni', 'Marketing', 'Leader', 'Cuti Khusus', '2021-12-08'),
('G9824', '109090', 'Lusi', 'Produksi', 'Admin', 'Cuti Biasa', '2021-12-10'),
('G9825', '109091', 'Toha', 'Produksi', 'Staff', 'Cuti Biasa', '2021-12-18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

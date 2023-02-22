-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Feb 2023 pada 02.45
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kas_wirausaha`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_addmision_fee`
--

CREATE TABLE `tb_addmision_fee` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `saldo` double NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_addmision_fee`
--

INSERT INTO `tb_addmision_fee` (`id`, `name`, `date`, `saldo`, `description`) VALUES
(3, 'Ikbal', '2023-01-01', 10000, 'saldo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kas`
--

CREATE TABLE `tb_kas` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `input` double NOT NULL,
  `output` double NOT NULL,
  `Information` text NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kas`
--

INSERT INTO `tb_kas` (`id`, `name`, `date`, `input`, `output`, `Information`, `total`) VALUES
(7, 'ikba', '2023-02-09', 0, 0, '', 0),
(8, 'Dini', '2023-02-04', 30000, 0, 'Selanjutnya', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_money_out`
--

CREATE TABLE `tb_money_out` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `saldo` double NOT NULL,
  `information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `No hp` char(20) NOT NULL,
  `Address` text NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `role` enum('admin','petugas','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`ID`, `Name`, `No hp`, `Address`, `Username`, `Password`, `role`) VALUES
(1, 'Ikbal', '083829667585', 'kp. cimapag Rt 01 Rw 04', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Daus', '083114208863', 'kp. cimapag Rt 01 Rw 04', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_addmision_fee`
--
ALTER TABLE `tb_addmision_fee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date_2` (`date`);

--
-- Indeks untuk tabel `tb_kas`
--
ALTER TABLE `tb_kas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_money_out`
--
ALTER TABLE `tb_money_out`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date` (`date`),
  ADD KEY `date_2` (`date`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_addmision_fee`
--
ALTER TABLE `tb_addmision_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kas`
--
ALTER TABLE `tb_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_money_out`
--
ALTER TABLE `tb_money_out`
  ADD CONSTRAINT `tb_money_out_ibfk_1` FOREIGN KEY (`date`) REFERENCES `tb_addmision_fee` (`date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

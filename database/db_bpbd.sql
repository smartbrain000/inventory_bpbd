-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2023 pada 14.06
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bpbd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_keluar` int(11) NOT NULL,
  `id_masuk` int(11) NOT NULL,
  `jml_barang_keluar` int(5) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_keluar`, `id_masuk`, `jml_barang_keluar`, `tujuan`, `tgl_keluar`) VALUES
(2, 1, 1, 'posko', '2021-12-23'),
(3, 2, 2, 'KORBAN GEMPA', '2023-05-04'),
(4, 6, 2, 'KORBAN GEMPA', '2023-05-04'),
(5, 12, 2, 'KORBAN GEMPA', '2023-05-04'),
(6, 14, 2, 'KORBAN GEMPA', '2023-05-04'),
(7, 15, 2, 'KORBAN GEMPA', '2023-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_masuk` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `jml_barang` int(5) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_sumber` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_exp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_masuk`, `nama_barang`, `kode_barang`, `jml_barang`, `satuan`, `id_kategori`, `id_sumber`, `tgl_masuk`, `tgl_exp`) VALUES
(2, 'minyak', 2, 6, 'kg', 3, 2, '2021-12-02', '2020-09-02'),
(6, 'Baju', 0, 6, 'pcs', 1, 2, '2022-01-07', '0000-00-00'),
(7, 'minyak', 0, 3, 'kg', 2, 2, '2022-01-06', '2022-01-29'),
(8, 'minyak', 0, 6, 'kg', 2, 1, '2022-01-07', '2022-01-21'),
(9, 'minyak', 0, 3, 'kg', 2, 1, '2022-01-02', '2022-01-06'),
(10, 'minyak', 0, 2, 'kg', 2, 2, '2022-01-31', '2022-02-01'),
(12, 'minyak', 0, 4, 'kg', 1, 1, '2022-01-07', '2022-01-16'),
(14, 'minyakk', 0, 1, 'pcs', 1, 1, '2022-01-01', '2022-01-07'),
(15, 'Sabun', 0, 9, 'pcs', 1, 3, '2022-01-10', '2022-01-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `exp`
--

CREATE TABLE `exp` (
  `id_exp` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `jml_barang` int(5) NOT NULL,
  `satuan` varchar(11) NOT NULL,
  `id_sumber` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_exp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sandang'),
(2, 'Pangan'),
(3, 'Papan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumber`
--

CREATE TABLE `sumber` (
  `id_sumber` int(11) NOT NULL,
  `nama_sumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sumber`
--

INSERT INTO `sumber` (`id_sumber`, `nama_sumber`) VALUES
(1, 'BNPB'),
(2, 'BPBD Provinsi'),
(3, 'BPBD Kabupaten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `username`, `password`, `nama`) VALUES
(1, 'sandramarlianti27@gmail.com', 'sandra', 'acbffaf49a31dbe6d84e4dadf5ec04ae', 'Sandra');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indeks untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indeks untuk tabel `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id_exp`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `sumber`
--
ALTER TABLE `sumber`
  ADD PRIMARY KEY (`id_sumber`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `exp`
--
ALTER TABLE `exp`
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sumber`
--
ALTER TABLE `sumber`
  MODIFY `id_sumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

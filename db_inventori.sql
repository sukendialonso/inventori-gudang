-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2023 pada 09.25
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventori`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(20) DEFAULT NULL,
  `nama_barang` varchar(80) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `stok`, `satuan`, `keterangan`, `tanggal`) VALUES
(6, '26516928', 'Segel Jaring', 500, 'pcs', '/1 Karung = 100 PCS', '2023-01-20 07:18:07'),
(7, '34301250', 'Segel Kawat/Selling', 900, 'pcs', '/1 Dus = 500 PCS', '2023-01-20 07:16:02'),
(8, '79359995', 'Segel Botol', 300, 'pcs', '/1 Dus = 20 PCS', '2023-01-20 07:17:45'),
(9, '81753566', 'Kertas A4', 500, 'pcs', '/1 Dus = 100 LEMBAR', '2023-01-20 07:21:29'),
(10, '45968047', 'Kertas F4', 300, 'pcs', '/1 Dus = 100 LEMBAR', '2023-01-20 07:21:13'),
(11, '66121085', 'Surat Jalan Export', 400, 'pcs', '/1 Dus = 100 LEMBAR', '2023-01-20 07:21:56'),
(12, '61093349', 'Surat Jalan Lokal', 500, 'pcs', '/1 Dus = 100 LEMBAR', '2023-01-20 07:22:26'),
(13, '91735038', 'VBas', 2000, 'pcs', '/1 Dus = 500 PCS', '2023-01-20 07:23:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_perusahaan`
--

CREATE TABLE `data_perusahaan` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(80) DEFAULT NULL,
  `nama_pemilik` varchar(80) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_perusahaan`
--

INSERT INTO `data_perusahaan` (`id`, `nama_perusahaan`, `nama_pemilik`, `no_telepon`, `alamat`) VALUES
(1, 'Gudang Ban Radial PT Gajah Tunggal Tbk', 'Sukendi', '081384764300', 'Kota Tangerang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_keluar`
--

CREATE TABLE `detail_keluar` (
  `no_keluar` varchar(25) DEFAULT NULL,
  `nama_barang` varchar(80) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_keluar`
--

INSERT INTO `detail_keluar` (`no_keluar`, `nama_barang`, `jumlah`, `satuan`) VALUES
('TR1674218783', 'Segel Jaring', 100, 'pcs'),
('TR1674218852', 'Segel Jaring', 100, 'pcs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_terima`
--

CREATE TABLE `detail_terima` (
  `no_terima` varchar(25) DEFAULT NULL,
  `nama_barang` varchar(80) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_terima`
--

INSERT INTO `detail_terima` (`no_terima`, `nama_barang`, `jumlah`, `satuan`) VALUES
('TR1674173404', 'Segel Jaring', 100, 'pcs'),
('TR1674174852', 'Segel Jaring', 100, 'pcs'),
('TR1674220470', 'Segel Jaring', 100, 'pcs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_pegawai` varchar(80) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama_pegawai`, `telepon`, `email`, `alamat`, `jenis_kelamin`, `jabatan`) VALUES
(8, '16-0684', 'Sukendi', '081384764300', 'sukendi@raharja.info', 'Kota Tangerang', 'Laki-Laki', 'Admin'),
(11, '16-0685', 'Burhanudin', '085123456789', 'burhanudin@raharja.info', 'Kabupaten Tangerang', 'Laki-Laki', 'Admin'),
(13, '16-0686', 'Restu Luhur Budi', '085123456789', 'restuluhurbudi@rahraja.info', 'Kota Tangerang', 'Laki-Laki', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id` int(11) NOT NULL,
  `no_terima` varchar(25) DEFAULT NULL,
  `tgl_terima` varchar(25) DEFAULT NULL,
  `jam_terima` varchar(10) DEFAULT NULL,
  `nama_vendorr` varchar(80) DEFAULT NULL,
  `nama` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penerimaan`
--

INSERT INTO `penerimaan` (`id`, `no_terima`, `tgl_terima`, `jam_terima`, `nama_vendorr`, `nama`) VALUES
(20, 'TR1674173404', '20/01/2023', '07:10:04', 'Gudang Bahan', 'Sukendi Alonso'),
(21, 'TR1674174852', '20/01/2023', '07:34:12', 'GT-Plant A', 'Sukendi'),
(22, 'TR1674220470', '20/01/2023', '20:14:30', 'Gudang Bahan', 'Sukendi Alonso');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `no_keluar` varchar(25) DEFAULT NULL,
  `tgl_keluar` varchar(25) DEFAULT NULL,
  `jam_keluar` varchar(10) DEFAULT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `nama_user` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `no_keluar`, `tgl_keluar`, `jam_keluar`, `nama`, `nama_user`) VALUES
(2, 'TR1674218783', '20/01/2023', '19:46:23', 'Sukendi Alonso', 'Sukendi Alonso'),
(3, 'TR1674218852', '20/01/2023', '19:47:32', 'Sukendi Alonso', 'Sukendi Alonso');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nip`, `nama`, `username`, `password`) VALUES
(6, '16-0684', 'Sukendi', 'ADMIN-1', 'admin'),
(7, '16-0685', 'Jamalludin', 'ADMIN-2', 'admin'),
(8, '16-0686', 'Aban Syabani', 'ADMIN-3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nip`, `nama`, `username`, `password`) VALUES
(9, ' 16-0685', 'Burhanudin', 'burhanudin', 'admin'),
(10, ' 16-0686', 'Restu Luhur Budi', 'restuluhurbudi', 'admin'),
(11, ' 16-0687', 'Izil Minan', 'izilminan', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendorr`
--

CREATE TABLE `vendorr` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama_vendorr` varchar(80) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vendorr`
--

INSERT INTO `vendorr` (`id`, `kode`, `nama_vendorr`, `telepon`, `email`, `alamat`) VALUES
(15, 'VENDOR - 25', 'Gudang Bahan', '085123456789', 'gudang.bahan@gt-tires.com', 'Kota Tangerang'),
(16, 'VENDOR - 85', 'GT-Plant A', '085123456789', 'gtplant.a@gt-tires.com', 'Kota Tangerang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_terima` (`no_terima`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_keluar` (`no_keluar`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vendorr`
--
ALTER TABLE `vendorr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `data_perusahaan`
--
ALTER TABLE `data_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `vendorr`
--
ALTER TABLE `vendorr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jun 2019 pada 08.53
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cus_nama` varchar(30) NOT NULL,
  `cus_alamat` text NOT NULL,
  `cus_notlp` varchar(15) NOT NULL,
  `cus_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_nama`, `cus_alamat`, `cus_notlp`, `cus_password`) VALUES
(1, 'fajri', 'Bantul, Yogyakarta', '087838916161', '123'),
(2, 'kurnia', 'Bantul, Yogtakarta', '08783871231', '123'),
(4536, 'dik', 'Jogja, Yogyakarta', '085734258900', '888'),
(9897, 'daud', 'Yogyakarta', '085436787761', '777'),
(9989, 'madi', 'Yogyakarta', '08334433212', '222');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_reservasi`
--

CREATE TABLE `detail_reservasi` (
  `no_reservasi` int(11) NOT NULL,
  `kode_pertandingan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_reservasi`
--

INSERT INTO `detail_reservasi` (`no_reservasi`, `kode_pertandingan`, `jumlah`) VALUES
(1112, 209, 10),
(1128, 203, 15),
(1211, 105, 8),
(1240, 109, 20),
(2321, 106, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` char(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `klub_b` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `stadion` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `total` varchar(100) NOT NULL,
  `pembayaran` varchar(20) NOT NULL,
  `liga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `klub_b`, `tanggal`, `stadion`, `kelas`, `total`, `pembayaran`, `liga`) VALUES
('20', 'juki', 'BHAYANGKARA FC VS SEMEN PADANG', '0000-00-00 00:00:00', 'Patriot', 'ekonomi', '70000', 'bca', 'pialapresiden'),
('207', 'yunus', 'PERSIB BANDUNG VS PS BARITO PUTERA', '2019-02-02 18:30:00', 'Kapten I Wayan Dipta, Gianyar', 'vip', '150000', 'bca', 'liga1'),
('323', 'diky', 'PSM MAKASSAR VS PSMS', '2019-02-03 15:30:00', 'Andi Mattalatta, Makassar', 'ekonomi', '650000', 'bca', 'liga1'),
('708', 'yunus v2', 'PERSIBAT VS ACEH UNITED', '2019-03-11 18:30:00', 'Sarengat', 'ekonomi', '400000', 'bca', 'liga2'),
('777', 'juki', 'PSPS VS PSIR', '2019-03-11 15:30:00', 'Krida, Rembang', 'ekonomi', '250000', 'bca', 'liga2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertandingan`
--

CREATE TABLE `pertandingan` (
  `kode_pertandingan` int(11) NOT NULL,
  `partai_pertandingan` varchar(100) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `harga_tiket2` int(11) NOT NULL,
  `stok_tiket` int(11) NOT NULL,
  `waktu_pertandingan` datetime NOT NULL,
  `stadion` varchar(40) NOT NULL,
  `liga` enum('liga1','liga2','pialapresiden','') NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertandingan`
--

INSERT INTO `pertandingan` (`kode_pertandingan`, `partai_pertandingan`, `harga_tiket`, `harga_tiket2`, `stok_tiket`, `waktu_pertandingan`, `stadion`, `liga`, `gambar`) VALUES
(100, 'PERSEBAYA FC VS PSIS SEMARANG', 70000, 10000, 10000, '2019-02-01 15:30:00', 'Gelora Bung Tomo, Surabaya', 'liga1', 'L1 5.JPG'),
(101, 'BHAYANGKARA FC VS BALI UNITED FC', 60000, 10000, 9000, '2019-02-01 18:30:00', 'PTIK, Jakarta Selatan', 'liga1', 'L1 1.JPG'),
(102, 'MADURA UNITED VS PERSELA LAMONGAN', 70000, 10000, 10000, '2019-02-02 15:30:00', 'Ratu Pamelingan, Pamekasan', 'liga1', 'L1 2.JPG'),
(103, 'PERSIB BANDUNG VS PS BARITO PUTERA', 80000, 10000, 12000, '2019-02-02 18:30:00', 'Kapten I Wayan Dipta, Gianyar', 'liga1', 'L1 3.JPG'),
(104, 'PSM MAKASSAR VS PSMS', 65000, 10000, 10000, '2019-02-03 15:30:00', 'Andi Mattalatta, Makassar', 'liga1', 'L1 6.JPG'),
(105, 'BORNEO FC VS PS.TIRA', 65000, 10000, 9000, '2019-02-03 18:30:00', 'Segiri, Samarinda', 'liga1', 'L1 7.JPG'),
(106, 'PERSIPURA JAYAPURA VS PERSERU', 80000, 10000, 12000, '2019-02-04 15:30:00', 'Mandala, Jayapura', 'liga1', 'L1 9.JPG'),
(107, 'AREMA FC VS SRIWIJAYA FC', 70000, 10000, 12000, '2019-02-04 18:30:00', 'Kanjuruhan, Kab. Malang', 'liga1', 'L1 8.JPG'),
(108, 'PERSIJA JAKARTA VS MITRA KUKAR FC', 80000, 10000, 12000, '2019-02-05 15:30:00', 'Gelora Bung Karno, Jakarta', 'liga1', 'L1 10.JPG'),
(109, 'PSM MAKASSAR VS PERSIJA JAKARTA', 80000, 10000, 13000, '2019-02-05 18:30:00', 'Andi Mattalatta, Makassar', 'liga1', 'L1 11.JPG'),
(200, 'PERSIS VS SEMEN PADANG', 50000, 10000, 9000, '2019-03-10 15:30:00', 'Gelora Haji Agus Salim, Padang', 'liga2', 'L2 0.JPG'),
(201, 'BLITAR UNITED VS PSBS', 50000, 10000, 10000, '2019-03-10 18:30:00', 'S Soepriadi, Blitar', 'liga2', 'L2 1.JPG'),
(202, 'PSPS VS PSIR', 50000, 10000, 10000, '2019-03-11 15:30:00', 'Krida, Rembang', 'liga2', 'L2 2.JPG'),
(203, 'PERSIBAT VS ACEH UNITED', 50000, 10000, 10000, '2019-03-11 18:30:00', 'Sarengat', 'liga2', 'L2 3.JPG'),
(204, 'PERSIRAJA VS PERSIK KENDAL', 50000, 10000, 10000, '2019-03-12 15:30:00', 'Dimurthala', 'liga2', 'L2 4.JPG'),
(205, 'KALTENG PUTRA VS PERSIBA BALIKPAPAN', 50000, 10000, 10000, '2019-03-12 18:30:00', 'Batakan', 'liga2', 'L2 5.JPG'),
(206, 'PERSIKA VS CILEGON UNITED', 50000, 10000, 10000, '2019-03-13 15:30:00', 'Singa Perbangsa', 'liga2', 'L2 6.JPG'),
(207, 'MARTAPURA VS PERSIWA', 50000, 10000, 10000, '2019-03-13 18:30:00', 'Demang Lehman', 'liga2', 'L2 7.JPG'),
(208, 'PERSERANG VS PERSITA', 50000, 10000, 10000, '2019-03-14 15:30:00', 'Dasana Indah, Tangerang', 'liga2', 'L2 8.JPG'),
(209, 'MADURA FC VS PSIM', 50000, 10000, 10000, '2019-03-14 18:30:00', 'Sultan Agung, Bantul, Yogyakarta', 'liga2', 'L2 9.JPG'),
(300, 'PERSIB BANDUNG VS PS TNI', 70000, 10000, 11000, '2019-05-01 03:18:25', 'Si Jalak Harupat', 'pialapresiden', 'ppres 0.JPG'),
(301, 'PERSERU SERUI VS PERSEBAYA', 70000, 10000, 11000, '0000-00-00 00:00:00', 'Si Jalak Harupat', 'pialapresiden', 'p pres 1.JPG'),
(302, 'BHAYANGKARA FC VS SEMEN PADANG', 70000, 10000, 11000, '0000-00-00 00:00:00', 'Patriot', 'pialapresiden', 'p pres 2.JPG'),
(303, 'BALI UNITED VS MITRA KUTAI KARTANEGARA', 70000, 10000, 11000, '0000-00-00 00:00:00', 'Patriot', 'pialapresiden', 'p pres 3.JPG'),
(304, 'AREMA FC VS BARITO PUTERA', 70000, 10000, 11000, '0000-00-00 00:00:00', 'Kanjuruhan', '', 'p pres 4.JPG'),
(305, 'PERSITA VS PERSELA LAMONGAN', 70000, 10000, 11000, '2019-05-19 03:00:00', 'Kanjuruhan', 'pialapresiden', 'p pres 5.JPG'),
(306, 'PSS VS MADURA UNITED', 70000, 10000, 11000, '2019-05-19 01:00:00', 'Maguwoharjo', 'pialapresiden', 'p pres 6.JPG'),
(307, 'PERSIJA JAKARTA VS BORNEO FC', 70000, 10000, 11000, '2019-05-19 02:00:00', 'Maguwoharjo', 'pialapresiden', 'p pres 7.JPG'),
(308, 'PSM MAKASSAR VS KALTENG PUTRA', 70000, 10000, 11000, '2019-05-19 03:00:00', 'Madya Magelang', 'pialapresiden', 'p pres 8.JPG'),
(309, 'PSIS VS PERSIPURA JAYAPURA', 70000, 10000, 11000, '2019-05-18 04:00:00', 'Madya Magelang', 'pialapresiden', 'p pres 9.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `no_reservasi` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `tgl_kirim` date NOT NULL,
  `status_kirim` varchar(20) NOT NULL,
  `status_bayar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`no_reservasi`, `admin_id`, `cus_id`, `tgl_reservasi`, `tgl_bayar`, `tgl_kirim`, `status_kirim`, `status_bayar`) VALUES
(1112, 1111, 9897, '2018-10-08', '2018-10-10', '2018-10-11', 'Terkirim', 'Terbayar'),
(1128, 1111, 1, '2018-10-21', '2018-10-22', '2018-10-23', 'Terkirim', 'Terbayar'),
(1211, 1113, 4536, '2018-11-01', '2018-11-02', '2018-11-03', 'Terkirim', 'Terbayar'),
(1240, 1113, 2, '2018-11-26', '2018-11-26', '2018-11-27', 'Terkirim', 'Terbayar'),
(2321, 1112, 9989, '2018-12-01', '2018-12-05', '2018-12-06', 'Terkirim', 'Terbayar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Malas Ngoding', 'ikd', 'ikd123', 'admin'),
(2, 'kususcostumer', 'kid', 'kid123', 'costumer'),
(3, 'kususpengurus', 'jamaludin', 'jamaludin123', 'pengurus');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indeks untuk tabel `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD KEY `no_reservasi` (`no_reservasi`,`kode_pertandingan`),
  ADD KEY `kode_pertandingan` (`kode_pertandingan`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD PRIMARY KEY (`kode_pertandingan`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`no_reservasi`),
  ADD KEY `admin_id` (`admin_id`,`cus_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_reservasi`
--
ALTER TABLE `detail_reservasi`
  ADD CONSTRAINT `detail_reservasi_ibfk_1` FOREIGN KEY (`kode_pertandingan`) REFERENCES `pertandingan` (`kode_pertandingan`),
  ADD CONSTRAINT `detail_reservasi_ibfk_2` FOREIGN KEY (`no_reservasi`) REFERENCES `reservasi` (`no_reservasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

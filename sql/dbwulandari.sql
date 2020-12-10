-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Nov 2020 pada 05.37
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwulandari`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pertanyaan_gpmf`
--

CREATE TABLE `detail_pertanyaan_gpmf` (
  `id_detail_pertanyaan_gpmf` int(11) NOT NULL,
  `id_pertanyaan_gpmf` int(11) NOT NULL,
  `pilihan_jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pertanyaan_gpmf`
--

INSERT INTO `detail_pertanyaan_gpmf` (`id_detail_pertanyaan_gpmf`, `id_pertanyaan_gpmf`, `pilihan_jawaban`) VALUES
(5, 4, 'YA'),
(6, 4, 'TIDAK'),
(7, 5, 'YA'),
(8, 5, 'TIDAK'),
(9, 6, 'YA'),
(10, 6, 'TIDAK'),
(11, 7, 'YA'),
(12, 7, 'TIDAK'),
(13, 8, 'YA'),
(14, 8, 'TIDAK'),
(15, 9, 'YA'),
(16, 9, 'TIDAK'),
(17, 10, 'ADA'),
(18, 10, 'TIDAK ADA'),
(19, 11, 'ADA '),
(20, 11, 'TIDAK ADA'),
(21, 12, 'ADA'),
(22, 12, 'TIDAK ADA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pertanyaan_gpmp`
--

CREATE TABLE `detail_pertanyaan_gpmp` (
  `id_detail_pertanyaan_gpmp` int(11) NOT NULL,
  `id_pertanyaan_gpmp` int(11) NOT NULL,
  `pilihan_jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pertanyaan_gpmp`
--

INSERT INTO `detail_pertanyaan_gpmp` (`id_detail_pertanyaan_gpmp`, `id_pertanyaan_gpmp`, `pilihan_jawaban`) VALUES
(19, 30, 'YA'),
(20, 30, 'TIDAK'),
(21, 31, 'YA'),
(22, 31, 'TIDAK'),
(23, 36, 'JARANG'),
(24, 36, 'SERING'),
(25, 38, 'PERNAH'),
(26, 38, 'TIDAK PERNAH'),
(27, 39, 'YA'),
(28, 39, 'TIDAK'),
(29, 37, 'YA'),
(30, 36, 'TIDAK'),
(31, 40, 'YA'),
(32, 40, 'TIDAK'),
(33, 41, 'YA'),
(34, 41, 'TIDAK'),
(35, 42, 'YA'),
(36, 42, 'TIDAK'),
(37, 43, 'YA'),
(38, 44, 'TIDAK'),
(39, 45, 'YA'),
(40, 45, 'TIDAK'),
(41, 43, 'TIDAK'),
(43, 44, 'YA'),
(44, 47, 'YA'),
(45, 47, 'TIDAK'),
(46, 48, 'YA'),
(47, 48, 'TIDAK'),
(48, 49, 'YA'),
(49, 49, 'TIDAK'),
(50, 40, 'OK'),
(51, 41, 'OK'),
(52, 47, 'OK'),
(53, 50, 'OK'),
(54, 50, 'YA'),
(55, 50, 'TIDAK ADA'),
(56, 51, 'YA'),
(57, 51, 'TIDAK ADA'),
(58, 51, 'ADA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_temuan_gpmf`
--

CREATE TABLE `hasil_temuan_gpmf` (
  `id_hasil_gpmf` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `nama_lembaga` varchar(50) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `catatan_temuan` text NOT NULL,
  `saran_perbaikan` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_temuan_gpmf`
--

INSERT INTO `hasil_temuan_gpmf` (`id_hasil_gpmf`, `tahun`, `nama_lembaga`, `nama_fakultas`, `nama_prodi`, `hari`, `tanggal`, `catatan_temuan`, `saran_perbaikan`, `id_user`) VALUES
(1, '2019-2020', 'UIN', 'Sain Teknologi', 'Sistem Informasi', 'Senin', '2020-10-05', 'aaaa', 'bbbb', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_temuan_gpmp`
--

CREATE TABLE `hasil_temuan_gpmp` (
  `id_hasil_gpmp` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `nama_lembaga` varchar(50) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `catatan_temuan` text NOT NULL,
  `saran_perbaikan` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_temuan_gpmp`
--

INSERT INTO `hasil_temuan_gpmp` (`id_hasil_gpmp`, `tahun`, `nama_lembaga`, `nama_fakultas`, `nama_prodi`, `hari`, `tanggal`, `catatan_temuan`, `saran_perbaikan`, `id_user`) VALUES
(1, '2019-2020', 'UIN', 'Sain Teknologi', 'Sistem Informasi', 'Selasa', '2020-10-04', 'oooo', 'iiii', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_gpmf`
--

CREATE TABLE `jawaban_gpmf` (
  `id_jawaban_gpmf` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `jawaban` text NOT NULL,
  `id_pertanyaan_gpmf` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_target` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban_gpmf`
--

INSERT INTO `jawaban_gpmf` (`id_jawaban_gpmf`, `tahun`, `jawaban`, `id_pertanyaan_gpmf`, `id_user`, `id_target`) VALUES
(16, '', 'YA', 4, 2, 12),
(17, '', 'YA', 5, 2, 12),
(18, '', 'YA', 6, 2, 12),
(19, '', 'YA', 7, 2, 12),
(20, '', 'TIDAK', 8, 2, 12),
(21, '', 'TIDAK', 9, 2, 12),
(22, '', 'ADA', 10, 2, 12),
(23, '', 'ADA ', 11, 2, 12),
(24, '', 'TIDAK ADA', 12, 2, 12),
(25, '2019-2020', 'YA', 4, 2, 13),
(26, '2019-2020', 'YA', 5, 2, 13),
(27, '2019-2020', 'YA', 6, 2, 13),
(28, '2019-2020', 'TIDAK', 7, 2, 13),
(29, '2019-2020', 'TIDAK', 8, 2, 13),
(30, '2019-2020', 'YA', 9, 2, 13),
(31, '2019-2020', 'ADA', 10, 2, 13),
(32, '2019-2020', 'ADA ', 11, 2, 13),
(33, '2019-2020', 'TIDAK ADA', 12, 2, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_gpmp`
--

CREATE TABLE `jawaban_gpmp` (
  `id_jawaban` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `jawaban` text NOT NULL,
  `id_pertanyaan_gpmp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_target` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban_gpmp`
--

INSERT INTO `jawaban_gpmp` (`id_jawaban`, `tahun`, `jawaban`, `id_pertanyaan_gpmp`, `id_user`, `id_target`) VALUES
(36, '2019-2020', 'OK', 50, 3, 14),
(37, '2019-2020', 'YA', 47, 3, 14),
(44, '2019-2020', 'OK', 50, 3, 18),
(45, '2019-2020', 'YA', 47, 3, 18),
(46, '2019-2020', 'YA', 40, 4, 19),
(47, '2019-2020', 'ADA', 41, 4, 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_gpmf`
--

CREATE TABLE `kategori_gpmf` (
  `id_ktg_gpmf` int(11) NOT NULL,
  `nama_kategori_gpmf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_gpmf`
--

INSERT INTO `kategori_gpmf` (`id_ktg_gpmf`, `nama_kategori_gpmf`) VALUES
(1, 'Standar Pendidikan'),
(2, 'Standar Penelitian'),
(3, 'Standar pengabdian pada masyarakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_gpmp`
--

CREATE TABLE `kategori_gpmp` (
  `id_ktg_gpmp` int(11) NOT NULL,
  `nama_kategori_gpmp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_gpmp`
--

INSERT INTO `kategori_gpmp` (`id_ktg_gpmp`, `nama_kategori_gpmp`) VALUES
(1, 'Standar proses pembelajaran'),
(2, 'Standar isi pembelajaran'),
(3, 'Standar pengelolaan pembelajaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan_gpmf`
--

CREATE TABLE `pertanyaan_gpmf` (
  `id_pertanyaan_gpmf` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `pertanyaan` text NOT NULL,
  `id_subktg_gpmf` int(11) NOT NULL,
  `share` varchar(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan_gpmf`
--

INSERT INTO `pertanyaan_gpmf` (`id_pertanyaan_gpmf`, `tahun`, `pertanyaan`, `id_subktg_gpmf`, `share`, `id_user`, `level`) VALUES
(4, '2019-2020', 'iiiii', 1, '1', 1, 'WADEK'),
(5, '2019-2020', 'pppp', 1, '1', 1, 'WADEK'),
(6, '2019-2020', 'aaaa', 2, '1', 1, 'WADEK'),
(7, '2019-2020', 'bbbb', 2, '1', 1, 'WADEK'),
(8, '2019-2020', 'pppp', 3, '1', 1, 'WADEK'),
(9, '2019-2020', 'mmmmm', 3, '1', 1, 'WADEK'),
(10, '2019-2020', 'aaaaaa', 8, '1', 1, 'WADEK'),
(11, '2019-2020', 'bbbbb', 9, '1', 1, 'WADEK'),
(12, '2019-2020', 'vvv', 10, '1', 1, 'WADEK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan_gpmp`
--

CREATE TABLE `pertanyaan_gpmp` (
  `id_pertanyaan_gpmp` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `pertanyaan` text NOT NULL,
  `id_subktg_gpmp` int(11) NOT NULL,
  `share` char(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pertanyaan_gpmp`
--

INSERT INTO `pertanyaan_gpmp` (`id_pertanyaan_gpmp`, `tahun`, `pertanyaan`, `id_subktg_gpmp`, `share`, `id_user`, `level`) VALUES
(40, '2019-2020', 'AAAA', 1, '1', 1, 'MHS'),
(41, '2019-2020', 'BBB', 1, '1', 1, 'MHS'),
(42, '2019-2020', 'CCC', 8, '1', 1, 'MHS'),
(43, '2019-2020', 'VVVV', 8, '1', 1, 'MHS'),
(44, '2019-2020', 'KKKK', 16, '1', 1, 'MHS'),
(45, '2019-2020', 'OOOO', 16, '1', 1, 'MHS'),
(47, '2019-2020', 'adsdsd', 2, '1', 1, 'PRODI'),
(48, '2019-2020', 'aaaa', 16, '1', 1, 'PRODI'),
(49, '2019-2020', 'sdfgf', 8, '1', 1, 'PRODI'),
(50, '2019-2020', 'kjfkdf', 1, '1', 1, 'PRODI'),
(51, '2020-2021', 'aaaa', 1, '1', 1, 'PRODI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkategori_gpmf`
--

CREATE TABLE `subkategori_gpmf` (
  `id_subktg_gpmf` int(11) NOT NULL,
  `id_ktg_gpmf` int(11) NOT NULL,
  `nama_sub_ktg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkategori_gpmf`
--

INSERT INTO `subkategori_gpmf` (`id_subktg_gpmf`, `id_ktg_gpmf`, `nama_sub_ktg`) VALUES
(1, 1, 'Standar kopetensi lulus'),
(2, 1, 'Standar isi pembelajaran'),
(3, 1, 'Standar proses'),
(4, 1, 'Standar penilaian'),
(5, 1, 'Standar dosen dan tenaga kependidikan'),
(6, 1, 'Standar sarana dan prasarana'),
(7, 1, 'Standar pengelolaan pembelajaran'),
(8, 2, 'Standar hasil'),
(9, 2, 'Standar isi'),
(10, 2, 'Standar proses'),
(11, 2, 'Standar penilaian'),
(12, 2, 'Standar peneliti'),
(13, 2, 'Standar sarana dan prasarana'),
(14, 2, 'Standar pengelolaan'),
(15, 2, 'Standar pembiayaan'),
(16, 3, 'Standar proses'),
(17, 3, 'Standar isi'),
(18, 3, 'Standar sumber daya manusia'),
(19, 3, 'Standar hasil'),
(20, 3, 'Standar sarana dan prasaran'),
(21, 3, 'Standar pengelolaan '),
(22, 3, 'Standar pebiayaan'),
(23, 3, 'Standar penilaian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkategori_gpmp`
--

CREATE TABLE `subkategori_gpmp` (
  `id_subktg_gpmp` int(11) NOT NULL,
  `id_ktg_gpmp` int(11) NOT NULL,
  `nama_sub_ktg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkategori_gpmp`
--

INSERT INTO `subkategori_gpmp` (`id_subktg_gpmp`, `id_ktg_gpmp`, `nama_sub_ktg`) VALUES
(1, 1, 'Standar proses pembelajaran'),
(2, 1, 'Standar isi pembelajaran'),
(3, 1, 'Standar pengelolaan pembelajaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `target_monev`
--

CREATE TABLE `target_monev` (
  `id_target` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `nama_ketua_kelas` varchar(40) NOT NULL,
  `nama_dosen` varchar(40) NOT NULL,
  `matakuliah` varchar(40) NOT NULL,
  `pogram_studi` varchar(40) NOT NULL,
  `fakultas` varchar(40) NOT NULL,
  `nama_tim_monev` varchar(40) NOT NULL,
  `jenis_monev` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `target_monev`
--

INSERT INTO `target_monev` (`id_target`, `tahun`, `nama_ketua_kelas`, `nama_dosen`, `matakuliah`, `pogram_studi`, `fakultas`, `nama_tim_monev`, `jenis_monev`) VALUES
(8, '2019-2020', 'Farel', 'Suwarno S.Kom', 'Ilkom', 'Sistem Informasi', 'Teknologi informasi', 'ABC', 'GPMP'),
(9, '2019-2020', '', 'angga', '', '', 'TI', 'asasa', 'GPMF'),
(10, '2019-2020', '', 'angga', '', '', 'Teknologi informasi', 'ggg', 'GPMF'),
(11, '2019-2020', '', 'angga', '', '', 'Teknologi informasi', 'ggg', 'GPMF'),
(12, '2019-2020', '', 'angga', '', '', 'SI', 'adsdsdasds', 'GPMF'),
(13, '2019-2020', '', 'angga', '', '', 'SI', 'adsdsdasds', 'GPMF'),
(17, '2019-2020', '', 'adsd', '', 'Sistem informasi', 'TI', 'adsdsdasds', 'GPMP'),
(18, '2019-2020', '', 'adsd', '', 'Sistem informasi', 'TI', 'adsdsdasds', 'GPMP'),
(19, '2019-2020', 'farel', '', 'MTK', 'Sistem informasi', 'TI', 'sdsd', 'GPMP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `status_user`) VALUES
(1, 'aaa', 'wulan', '1234', 'LPM'),
(2, '', 'angga', '1234', 'WADEK'),
(3, '', 'dowan', '1234', 'PRODI'),
(4, '', 'farel', '1234', 'MHS'),
(5, 'Annisa', 'annisa', '1234', 'GPMP'),
(6, '', 'reza', '1234', 'GPMF'),
(7, 'fgfg', 'dfdf', '1234', 'MHS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pertanyaan_gpmf`
--
ALTER TABLE `detail_pertanyaan_gpmf`
  ADD PRIMARY KEY (`id_detail_pertanyaan_gpmf`);

--
-- Indexes for table `detail_pertanyaan_gpmp`
--
ALTER TABLE `detail_pertanyaan_gpmp`
  ADD PRIMARY KEY (`id_detail_pertanyaan_gpmp`);

--
-- Indexes for table `hasil_temuan_gpmf`
--
ALTER TABLE `hasil_temuan_gpmf`
  ADD PRIMARY KEY (`id_hasil_gpmf`);

--
-- Indexes for table `hasil_temuan_gpmp`
--
ALTER TABLE `hasil_temuan_gpmp`
  ADD PRIMARY KEY (`id_hasil_gpmp`);

--
-- Indexes for table `jawaban_gpmf`
--
ALTER TABLE `jawaban_gpmf`
  ADD PRIMARY KEY (`id_jawaban_gpmf`);

--
-- Indexes for table `jawaban_gpmp`
--
ALTER TABLE `jawaban_gpmp`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `kategori_gpmf`
--
ALTER TABLE `kategori_gpmf`
  ADD PRIMARY KEY (`id_ktg_gpmf`);

--
-- Indexes for table `kategori_gpmp`
--
ALTER TABLE `kategori_gpmp`
  ADD PRIMARY KEY (`id_ktg_gpmp`);

--
-- Indexes for table `pertanyaan_gpmf`
--
ALTER TABLE `pertanyaan_gpmf`
  ADD PRIMARY KEY (`id_pertanyaan_gpmf`);

--
-- Indexes for table `pertanyaan_gpmp`
--
ALTER TABLE `pertanyaan_gpmp`
  ADD PRIMARY KEY (`id_pertanyaan_gpmp`);

--
-- Indexes for table `subkategori_gpmf`
--
ALTER TABLE `subkategori_gpmf`
  ADD PRIMARY KEY (`id_subktg_gpmf`);

--
-- Indexes for table `subkategori_gpmp`
--
ALTER TABLE `subkategori_gpmp`
  ADD PRIMARY KEY (`id_subktg_gpmp`);

--
-- Indexes for table `target_monev`
--
ALTER TABLE `target_monev`
  ADD PRIMARY KEY (`id_target`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pertanyaan_gpmf`
--
ALTER TABLE `detail_pertanyaan_gpmf`
  MODIFY `id_detail_pertanyaan_gpmf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `detail_pertanyaan_gpmp`
--
ALTER TABLE `detail_pertanyaan_gpmp`
  MODIFY `id_detail_pertanyaan_gpmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `hasil_temuan_gpmf`
--
ALTER TABLE `hasil_temuan_gpmf`
  MODIFY `id_hasil_gpmf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hasil_temuan_gpmp`
--
ALTER TABLE `hasil_temuan_gpmp`
  MODIFY `id_hasil_gpmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jawaban_gpmf`
--
ALTER TABLE `jawaban_gpmf`
  MODIFY `id_jawaban_gpmf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `jawaban_gpmp`
--
ALTER TABLE `jawaban_gpmp`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `kategori_gpmf`
--
ALTER TABLE `kategori_gpmf`
  MODIFY `id_ktg_gpmf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori_gpmp`
--
ALTER TABLE `kategori_gpmp`
  MODIFY `id_ktg_gpmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pertanyaan_gpmf`
--
ALTER TABLE `pertanyaan_gpmf`
  MODIFY `id_pertanyaan_gpmf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pertanyaan_gpmp`
--
ALTER TABLE `pertanyaan_gpmp`
  MODIFY `id_pertanyaan_gpmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `subkategori_gpmf`
--
ALTER TABLE `subkategori_gpmf`
  MODIFY `id_subktg_gpmf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `subkategori_gpmp`
--
ALTER TABLE `subkategori_gpmp`
  MODIFY `id_subktg_gpmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `target_monev`
--
ALTER TABLE `target_monev`
  MODIFY `id_target` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

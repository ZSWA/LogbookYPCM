-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2024 pada 11.39
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ypcm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama`, `telepon`, `foto`) VALUES
(12, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '0812838281', '22092020020607employee1.png'),
(19, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user 1', '0812838281', '22092020020520employee3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anak`
--

CREATE TABLE `tb_anak` (
  `id_anak` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `kode_disabilitas` varchar(11) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `Pembimbing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_anak`
--

INSERT INTO `tb_anak` (`id_anak`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `desa`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `kode_disabilitas`, `NIK`, `Pembimbing`) VALUES
(11, 'Loremium', 'Karanganyar', '2007-06-07', 'Perempuan', 'Lorem', 'Ipsum', 'Dolorium', 'Swasta', 'Amet', 'Swasta', '1', '3313100040203221', '3313100040203236'),
(19, 'Tuni', 'Boyolali', '2006-02-14', 'Laki-laki', 'Gondang', 'Rejo', 'Tono', 'Swasta', 'Tini', 'Swasta', '2', '3313221701070002', '3313100040203236'),
(20, 'Lorem', 'Boyolali', '2013-02-13', 'Perempuan', 'Gondangium', 'Rejosari', 'loremiuso', 'Swasta', 'Tinian', 'Swasta', '3', '3313100040203232', '3313100040203211'),
(21, 'Testing', 'Surakarta', '2009-05-21', 'Laki-laki', 'testo', 'tes', 'tesono', 'Guru', 'Testini', 'Swasta', '3', '3313100040203203', ' '),
(22, 'Lorem Ipsum', 'Surakarta', '2007-02-13', 'Perempuan', 'Gondang', 'Rejo', 'loremiusa', 'Swasta', 'Testinia', 'Swasta', '3', '3313100040203111', '3313100040203211'),
(23, 'Ngetest', 'Klaten', '2007-01-30', 'Laki-laki', 'testo', 'tesi', 'testono', 'Swasta', 'Tesini', 'Guru', '1', '3313100040203121', ' '),
(24, 'Sosolar', 'Klaten', '2019-01-15', 'Laki-laki', 'Gondangsz', 'Rejosariz', 'loremiusaa', 'Swasta', 'Tinia', 'Guru', '4', '3313100040203541', ' ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitator`
--

CREATE TABLE `tb_fasilitator` (
  `NIK` varchar(16) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `nama_tempat_kerja` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_fasilitator`
--

INSERT INTO `tb_fasilitator` (`NIK`, `username`, `password`, `nama`, `alamat`, `desa`, `pekerjaan`, `nama_tempat_kerja`, `tempat_lahir`, `tgl_lahir`) VALUES
('3313100040203211', 'Fasilitator', '17f9057572ebc21d98b304452b1e954b', 'Fasilitator', 'Rumah', 'Dukuhan', 'Swasta', 'PT. Fas Maju Jalan', 'Surakarta', '1989-01-13'),
('3313100040203236', 'Kaitoga', '098f6bcd4621d373cade4e832627b4f6', 'Zainuri Septian Wahyu Anggoro', 'Dalon', 'Sroyo', 'Guru', 'SMK 2 Karanganyar', 'Karanganyar', '2001-10-27'),
('3313221801010002', 'Budianto', '819ff8a2cb0ffdb89220fe06e1d352f6', 'Budi', 'Gondangium', 'Rejo', 'Guru', 'SMK 1 Boyolali', 'Boyolali', '2001-06-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_intervensi`
--

CREATE TABLE `tb_intervensi` (
  `kode_intervensi` int(11) NOT NULL,
  `jenis_intervensi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_intervensi`
--

INSERT INTO `tb_intervensi` (`kode_intervensi`, `jenis_intervensi`) VALUES
(1, 'Kunjungan'),
(2, 'Rehabilitasi'),
(5, 'Pengobatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_disabilitas`
--

CREATE TABLE `tb_jenis_disabilitas` (
  `kode_disabilitas` int(255) NOT NULL,
  `jenis_disabilitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jenis_disabilitas`
--

INSERT INTO `tb_jenis_disabilitas` (`kode_disabilitas`, `jenis_disabilitas`) VALUES
(1, 'Tuna Rungu'),
(2, 'Tuna Wisma'),
(3, 'Tuna Daksa'),
(4, 'Hiperaktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapping`
--

CREATE TABLE `tb_mapping` (
  `id_mapping` int(11) NOT NULL,
  `id_anak` int(11) NOT NULL,
  `id_fasilitator` varchar(16) NOT NULL,
  `Tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mapping`
--

INSERT INTO `tb_mapping` (`id_mapping`, `id_anak`, `id_fasilitator`, `Tahun`) VALUES
(2, 11, '3313100040203236', 2023),
(3, 19, '3313100040203236', 2023),
(4, 22, '3313100040203211', 2023),
(5, 20, '3313100040203211', 2023);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `username`, `password`, `nama`, `telepon`) VALUES
(11, 'Abdul', 'e80a0702d314d055d05af996fe60cff9', 'Kliment Vederov', '0812822929'),
(12, 'petugas1', 'd41d8cd98f00b204e9800998ecf8427e', 'Lyudmilla Pavlichenko', '0812838281'),
(14, 'biksu', 'd41d8cd98f00b204e9800998ecf8427e', 'Leonid Budovkin', '0812822929'),
(15, 'viktor', '4e3c1f58d4ace2057d5e18f4a5a478fb', 'Viktor Reznov', '081282939999'),
(16, 'vlad', 'd701fde59d74f76803087b6632186caf', 'Vladimir Vorosilov', '0812838222'),
(17, 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'Petugas', '081280328889');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_riwintervensi`
--

CREATE TABLE `tb_riwintervensi` (
  `id_intervensi` int(11) NOT NULL,
  `tgl_intervensi` date NOT NULL,
  `id_anak` varchar(255) NOT NULL,
  `kode_intervensi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_fasilitator` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_riwintervensi`
--

INSERT INTO `tb_riwintervensi` (`id_intervensi`, `tgl_intervensi`, `id_anak`, `kode_intervensi`, `keterangan`, `foto`, `id_fasilitator`) VALUES
(6, '2023-06-29', '11', '1', 'testing', '29062023185353instrumen.jpg', '3313100040203236'),
(7, '2023-06-29', '19', '2', 'testing part 2 ya', '290620231854097pizdg.jpg', '3313100040203236');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_anak`
--
ALTER TABLE `tb_anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indeks untuk tabel `tb_fasilitator`
--
ALTER TABLE `tb_fasilitator`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `tb_intervensi`
--
ALTER TABLE `tb_intervensi`
  ADD PRIMARY KEY (`kode_intervensi`);

--
-- Indeks untuk tabel `tb_jenis_disabilitas`
--
ALTER TABLE `tb_jenis_disabilitas`
  ADD PRIMARY KEY (`kode_disabilitas`);

--
-- Indeks untuk tabel `tb_mapping`
--
ALTER TABLE `tb_mapping`
  ADD PRIMARY KEY (`id_mapping`),
  ADD KEY `fk_mapping_fasilitator` (`id_fasilitator`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tb_riwintervensi`
--
ALTER TABLE `tb_riwintervensi`
  ADD PRIMARY KEY (`id_intervensi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_anak`
--
ALTER TABLE `tb_anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_intervensi`
--
ALTER TABLE `tb_intervensi`
  MODIFY `kode_intervensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_disabilitas`
--
ALTER TABLE `tb_jenis_disabilitas`
  MODIFY `kode_disabilitas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_mapping`
--
ALTER TABLE `tb_mapping`
  MODIFY `id_mapping` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_riwintervensi`
--
ALTER TABLE `tb_riwintervensi`
  MODIFY `id_intervensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_mapping`
--
ALTER TABLE `tb_mapping`
  ADD CONSTRAINT `fk_mapping_fasilitator` FOREIGN KEY (`id_fasilitator`) REFERENCES `tb_fasilitator` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2021 pada 03.55
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fajar_ipa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lab`
--

CREATE TABLE `lab` (
  `kd_lab` char(10) NOT NULL,
  `nama_lab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lab`
--

INSERT INTO `lab` (`kd_lab`, `nama_lab`) VALUES
('R_0002', 'Komputer'),
('R_0003', 'Fisika'),
('R_0004', 'Kimia'),
('R_0005', 'Bahasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `poi` varchar(50) NOT NULL,
  `persentase` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `tahun`, `poi`, `persentase`) VALUES
(1, '2019', '0.897', '99.897'),
(2, '2020', '0.797', '99.797');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` char(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Jurusan` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `Psd_v` varchar(20) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `jk`, `alamat`, `Kelas`, `Jurusan`, `username`, `password`, `Psd_v`, `kategori`) VALUES
('111001', 'Mukharim Adam', 'L', 'Bululawang', '2', 'IPA', 'adam', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'Siswa'),
('111002', 'Ridwan kamil', 'L', 'Malang', '2', 'IPS', 'kamil', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'Siswa'),
('111003', 'Nur Fitriani', 'P', 'Sukun Malang', '2', 'IPS', 'nur', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'Siswa'),
('111004', 'Dinda Lestari', 'P', 'Arjosari', '2', 'IPA', 'dinda', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'Siswa'),
('111005', 'Novi Kurniawan', 'P', 'Kendalpayak - kepanjen', '2', 'IPA', 'novi', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'Siswa'),
('111006', 'Dewi Sintawati', 'P', 'Gadang', '2', 'IPS', 'dewi', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'Siswa'),
('123', 'Dzrikri', 'L', 'malang', '-', '-', 'dzikri', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'Guru'),
('12324', 'Valentino Rosyy', 'L', 'Malang', '2', 'IPA', 'tino', '55131f0ffa8c6ddfc0101afc7400f576', 'tino', 'Siswa'),
('1233', 'Maulana Fajri', 'L', 'Malang', '2', 'IPA', 'lana', '827ccb0eea8a706c4c34a16891f84e7b', '12345', 'Siswa'),
('4555', 'Nurul Fajar', 'L', 'Bululawang', '3', 'IPA', 'fajar', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'Siswa'),
('4556', 'Nissa Sabyan', 'P', 'Merjosari Malang', '2', 'IPA', 'nissa', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'Siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_atribut`
--

CREATE TABLE `tb_atribut` (
  `kd_atribut` varchar(10) NOT NULL,
  `kd_indikator` varchar(10) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_atribut`
--

INSERT INTO `tb_atribut` (`kd_atribut`, `kd_indikator`, `pertanyaan`) VALUES
('0001', 'IDKT_0002', 'Staf laboratorium bersikap ramah dan berperilaku sopan dalam memberikan pelayanan kepada pengguna layanan ?'),
('0002', 'IDKT_0002', 'Staf laboratorium mudah ditemui dan selalu tepat waktu dalam memberikan pelayanan kepada pengguna layanan ?'),
('0003', 'IDKT_0002', 'Staf laboratorium selalu memberikan respon yang baik terhadap pertanyaan atau keluhan dari pengguna layanan ?'),
('0004', 'IDKT_0001', 'Staf laboratorium mempunyai ketrampilan yang sangat memuaskan dalam memberikan pelayanan kepada pengguna layanan ?'),
('0005', 'IDKT_0005', 'Peralatan di laboratorium cukup lengkap dan mutakhir ?'),
('0006', 'IDKT_0003', 'Jumlah peralatan di laboratorium cukup bagi pengguna layanan ?'),
('0007', 'IDKT_0004', 'Ruangan laboratorium cukup luas, nyaman, dan bersih ?'),
('0008', 'IDKT_0001', 'Di laboratorium telah tersedia kotak pengaduan/keluhan ?'),
('0009', 'IDKT_0004', 'Administrasi penggunaan fasilitas laboratorium mudah dan transparan ?'),
('0010', 'IDKT_0003', 'Alat disimpan pada tempat yang sesuai ?'),
('11', 'IDKT_0001', 'petugas sangat ramah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_kuesioner`
--

CREATE TABLE `tb_detail_kuesioner` (
  `kd_kuesioner` char(10) NOT NULL,
  `kd_atribut` varchar(10) NOT NULL,
  `importance` double NOT NULL,
  `performance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_kuesioner`
--

INSERT INTO `tb_detail_kuesioner` (`kd_kuesioner`, `kd_atribut`, `importance`, `performance`) VALUES
('01', '0001', 5, 1),
('01', '0002', 5, 2),
('01', '0003', 4, 2),
('01', '0004', 4, 2),
('01', '0005', 5, 2),
('01', '0006', 5, 2),
('01', '0007', 4, 2),
('01', '0008', 4, 2),
('01', '0009', 5, 2),
('01', '0010', 5, 2),
('01', '11', 4, 2),
('02', '0001', 1, 4),
('02', '0002', 2, 4),
('02', '0003', 2, 5),
('02', '0004', 2, 5),
('02', '0005', 1, 3),
('02', '0006', 1, 3),
('02', '0007', 2, 2),
('02', '0008', 2, 2),
('02', '0009', 1, 2),
('02', '0010', 2, 4),
('02', '11', 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_indikator`
--

CREATE TABLE `tb_indikator` (
  `kd_indikator` char(10) NOT NULL,
  `indikator` text NOT NULL,
  `Keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_indikator`
--

INSERT INTO `tb_indikator` (`kd_indikator`, `indikator`, `Keterangan`) VALUES
('IDKT_0001', 'Reliability', 'Keandalan'),
('IDKT_0002', 'Responsiveness', 'Daya Tanggap'),
('IDKT_0003', 'Assurance', 'Jaminan'),
('IDKT_0004', 'Empathy', 'Empati'),
('IDKT_0005', 'Tangible', 'Bukti Langsung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kuesioner`
--

CREATE TABLE `tb_kuesioner` (
  `kd_kuesioner` int(10) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kritik_saran` text NOT NULL,
  `id_pengisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kuesioner`
--

INSERT INTO `tb_kuesioner` (`kd_kuesioner`, `tanggal`, `kritik_saran`, `id_pengisi`) VALUES
(1, '2021-02-14 00:00:00', 'test', 'dinda'),
(2, '2021-02-14 00:00:00', 'Sangat bermanfaat tapi perlu ditingkatkan', 'dinda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `kd_petugas` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` char(14) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `psd_v` text NOT NULL,
  `status` enum('S','A','M') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`kd_petugas`, `nama`, `no_hp`, `jk`, `alamat`, `username`, `password`, `psd_v`, `status`) VALUES
('PET_0001', 'Anam', '85736012586', 'L', 'Badean', 'anam', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'A'),
('PET_0002', 'Niko', '086665', 'L', 'Paiton', 'niko', '698d51a19d8a121ce581499d7b701668', '111', 'S'),
('PET_0003', 'Maulana', '085755515998', 'L', 'Mojokerto', 'lana99', '827ccb0eea8a706c4c34a16891f84e7b', '12345', 'S'),
('PET_0004', 'Joko', '02323299999', 'L', 'Malang', 'joko', '9ba0009aa81e794e628a04b51eaf7d7f', 'joko', 'S'),
('PET_0005', 'Nurul Fajar', '08343764374323', 'L', 'Bululawang', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'S'),
('PET_0007', 'Adi nugroho', '081000', 'L', 'malang', 'Adi', '202cb962ac59075b964b07152d234b70', '123', 'S'),
('PET_0008', 'Anaatg', 'Maymt bthetCuu', 'L', 'malang\r\n', 'abc', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_laporan`
--

CREATE TABLE `temp_laporan` (
  `kd_atribut` varchar(10) NOT NULL,
  `prioritas` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `temp_laporan`
--

INSERT INTO `temp_laporan` (`kd_atribut`, `prioritas`) VALUES
('0003', '4'),
('0004', '4'),
('11', '4'),
('0001', '3'),
('0005', '3'),
('0006', '3'),
('0007', '3'),
('0008', '3'),
('0009', '3'),
('0002', '2'),
('0010', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`kd_lab`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tb_atribut`
--
ALTER TABLE `tb_atribut`
  ADD PRIMARY KEY (`kd_atribut`);

--
-- Indeks untuk tabel `tb_indikator`
--
ALTER TABLE `tb_indikator`
  ADD PRIMARY KEY (`kd_indikator`);

--
-- Indeks untuk tabel `tb_kuesioner`
--
ALTER TABLE `tb_kuesioner`
  ADD PRIMARY KEY (`kd_kuesioner`),
  ADD UNIQUE KEY `kd_kuesioner` (`kd_kuesioner`),
  ADD UNIQUE KEY `kd_kuesioner_2` (`kd_kuesioner`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`kd_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kuesioner`
--
ALTER TABLE `tb_kuesioner`
  MODIFY `kd_kuesioner` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

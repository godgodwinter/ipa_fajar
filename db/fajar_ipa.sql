-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 03:22 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fajar_ipa`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
  `kd_lab` char(10) NOT NULL,
  `nama_lab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`kd_lab`, `nama_lab`) VALUES
('R_0002', 'Komputer'),
('R_0003', 'Fisika'),
('R_0004', 'Kimia'),
('R_0005', 'Bahasa');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` char(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  `Jurusan` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `Psd_v` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `jk`, `alamat`, `Kelas`, `Jurusan`, `username`, `password`, `Psd_v`) VALUES
('111001', 'Mukharim Adam', 'L', 'Bululawang', '2', 'IPA', 'adam', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('111002', 'Ridwan kamil', 'L', 'Malang', '2', 'IPS', 'kamil', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('111003', 'Nur Fitriani', 'P', 'Sukun Malang', '2', 'IPS', 'nur', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('111004', 'Dinda Lestari', 'P', 'Arjosari', '2', 'IPA', 'dinda', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('111005', 'Novi Kurniawan', 'P', 'Kendalpayak - kepanjen', '2', 'IPA', 'novi', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('111006', 'Dewi Sintawati', 'P', 'Gadang', '2', 'IPS', 'dewi', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('12324', 'Valentino Rosyy', 'L', 'Malang', '2', 'IPA', 'tino', '55131f0ffa8c6ddfc0101afc7400f576', 'tino'),
('1233', 'Maulana Fajri', 'L', 'Malang', '2', 'IPA', 'lana', '827ccb0eea8a706c4c34a16891f84e7b', '12345'),
('4555', 'Nurul Fajar', 'L', 'Bululawang', '3', 'IPA', 'fajar', '81dc9bdb52d04dc20036dbd8313ed055', '1234'),
('4556', 'Nissa Sabyan', 'P', 'Merjosari Malang', '2', 'IPA', 'nissa', '81dc9bdb52d04dc20036dbd8313ed055', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tb_atribut`
--

CREATE TABLE IF NOT EXISTS `tb_atribut` (
  `kd_atribut` varchar(10) NOT NULL,
  `kd_indikator` varchar(10) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_atribut`
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
('0010', 'IDKT_0003', 'Alat disimpan pada tempat yang sesuai ?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_kuesioner`
--

CREATE TABLE IF NOT EXISTS `tb_detail_kuesioner` (
  `kd_kuesioner` char(10) NOT NULL,
  `kd_atribut` varchar(10) NOT NULL,
  `importance` double NOT NULL,
  `performance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_kuesioner`
--

INSERT INTO `tb_detail_kuesioner` (`kd_kuesioner`, `kd_atribut`, `importance`, `performance`) VALUES
('01', '0001', 5, 5),
('01', '0002', 5, 5),
('01', '0003', 5, 5),
('01', '0004', 5, 4),
('01', '0005', 5, 4),
('01', '0006', 5, 5),
('01', '0007', 5, 5),
('01', '0008', 5, 4),
('01', '0009', 5, 4),
('01', '0010', 5, 5),
('02', '0001', 1, 1),
('02', '0002', 2, 2),
('02', '0003', 3, 3),
('02', '0004', 4, 4),
('02', '0005', 5, 5),
('02', '0006', 5, 4),
('02', '0007', 4, 3),
('02', '0008', 3, 2),
('02', '0009', 2, 3),
('02', '0010', 1, 4),
('03', '0001', 5, 5),
('03', '0002', 5, 5),
('03', '0003', 5, 5),
('03', '0004', 5, 5),
('03', '0005', 5, 5),
('03', '0006', 5, 5),
('03', '0007', 5, 5),
('03', '0008', 5, 5),
('03', '0009', 5, 5),
('03', '0010', 5, 5),
('04', '0001', 5, 5),
('04', '0002', 5, 4),
('04', '0003', 5, 5),
('04', '0004', 5, 4),
('04', '0005', 5, 5),
('04', '0006', 5, 5),
('04', '0007', 5, 5),
('04', '0008', 5, 5),
('04', '0009', 5, 5),
('04', '0010', 5, 5),
('05', '0001', 5, 5),
('05', '0002', 5, 5),
('05', '0003', 5, 5),
('05', '0004', 5, 5),
('05', '0005', 5, 5),
('05', '0006', 5, 5),
('05', '0007', 5, 5),
('05', '0008', 5, 5),
('05', '0009', 5, 5),
('05', '0010', 5, 5),
('06', '0001', 5, 5),
('06', '0002', 5, 5),
('06', '0003', 5, 5),
('06', '0004', 5, 5),
('06', '0005', 5, 5),
('06', '0006', 5, 5),
('06', '0007', 5, 5),
('06', '0008', 5, 5),
('06', '0009', 5, 5),
('06', '0010', 5, 5),
('07', '0001', 3, 5),
('07', '0002', 4, 5),
('07', '0003', 5, 4),
('07', '0004', 5, 3),
('07', '0005', 5, 2),
('07', '0006', 5, 3),
('07', '0007', 5, 4),
('07', '0008', 5, 5),
('07', '0009', 4, 5),
('07', '0010', 3, 5),
('08', '0001', 5, 5),
('08', '0002', 5, 5),
('08', '0003', 5, 5),
('08', '0004', 5, 5),
('08', '0005', 5, 5),
('08', '0006', 5, 5),
('08', '0007', 5, 5),
('08', '0008', 5, 5),
('08', '0009', 5, 5),
('08', '0010', 5, 5),
('09', '0001', 5, 5),
('09', '0002', 5, 5),
('09', '0003', 5, 5),
('09', '0004', 5, 5),
('09', '0005', 5, 5),
('09', '0006', 5, 5),
('09', '0007', 5, 5),
('09', '0008', 5, 5),
('09', '0009', 5, 5),
('09', '0010', 5, 5),
('10', '0001', 5, 5),
('10', '0002', 5, 5),
('10', '0003', 5, 5),
('10', '0004', 5, 5),
('10', '0005', 5, 5),
('10', '0006', 5, 5),
('10', '0007', 5, 5),
('10', '0008', 5, 5),
('10', '0009', 5, 5),
('10', '0010', 5, 5),
('11', '0001', 5, 5),
('11', '0002', 5, 5),
('11', '0003', 5, 5),
('11', '0004', 5, 5),
('11', '0005', 5, 5),
('11', '0006', 5, 5),
('11', '0007', 5, 5),
('11', '0008', 5, 5),
('11', '0009', 5, 5),
('11', '0010', 5, 5),
('12', '0001', 5, 1),
('12', '0002', 5, 1),
('12', '0003', 5, 1),
('12', '0004', 5, 1),
('12', '0005', 5, 1),
('12', '0006', 5, 1),
('12', '0007', 5, 1),
('12', '0008', 5, 1),
('12', '0009', 5, 1),
('12', '0010', 5, 1),
('13', '0001', 5, 5),
('13', '0002', 5, 5),
('13', '0003', 5, 5),
('13', '0004', 5, 5),
('13', '0005', 5, 5),
('13', '0006', 5, 5),
('13', '0007', 5, 5),
('13', '0008', 5, 5),
('13', '0009', 5, 5),
('13', '0010', 5, 5),
('14', '0001', 5, 5),
('14', '0002', 5, 5),
('14', '0003', 5, 5),
('14', '0004', 5, 5),
('14', '0005', 5, 5),
('14', '0006', 5, 5),
('14', '0007', 5, 5),
('14', '0008', 5, 5),
('14', '0009', 5, 5),
('14', '0010', 5, 5),
('15', '0001', 1, 1),
('15', '0002', 1, 1),
('15', '0003', 1, 1),
('15', '0004', 1, 1),
('15', '0005', 1, 1),
('15', '0006', 1, 1),
('15', '0007', 1, 1),
('15', '0008', 1, 1),
('15', '0009', 1, 1),
('15', '0010', 1, 1),
('16', '0001', 1, 1),
('16', '0002', 1, 1),
('16', '0003', 1, 1),
('16', '0004', 1, 1),
('16', '0005', 1, 1),
('16', '0006', 1, 1),
('16', '0007', 1, 1),
('16', '0008', 1, 1),
('16', '0009', 1, 1),
('16', '0010', 1, 1),
('17', '0001', 5, 5),
('17', '0002', 5, 5),
('17', '0003', 5, 5),
('17', '0004', 5, 5),
('17', '0005', 5, 5),
('17', '0006', 5, 5),
('17', '0007', 5, 5),
('17', '0008', 5, 5),
('17', '0009', 5, 5),
('17', '0010', 5, 5),
('16', '0001', 1, 1),
('16', '0002', 2, 2),
('16', '0003', 3, 3),
('16', '0004', 4, 4),
('16', '0005', 5, 5),
('16', '0006', 4, 4),
('16', '0007', 3, 3),
('16', '0008', 2, 2),
('16', '0009', 1, 1),
('16', '0010', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_indikator`
--

CREATE TABLE IF NOT EXISTS `tb_indikator` (
  `kd_indikator` char(10) NOT NULL,
  `indikator` text NOT NULL,
  `Keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_indikator`
--

INSERT INTO `tb_indikator` (`kd_indikator`, `indikator`, `Keterangan`) VALUES
('IDKT_0001', 'Reliability', 'Keandalan'),
('IDKT_0002', 'Responsiveness', 'Daya Tanggap'),
('IDKT_0003', 'Assurance', 'Jaminan'),
('IDKT_0004', 'Empathy', 'Empati'),
('IDKT_0005', 'Tangible', 'Bukti Langsung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kuesioner`
--

CREATE TABLE IF NOT EXISTS `tb_kuesioner` (
`kd_kuesioner` int(10) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kritik_saran` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tb_kuesioner`
--

INSERT INTO `tb_kuesioner` (`kd_kuesioner`, `tanggal`, `kritik_saran`) VALUES
(1, '2018-07-13 00:00:00', 'Semoga Lebih baik lagi'),
(2, '2018-07-13 00:00:00', 'Semakin Joss'),
(3, '2018-07-13 00:00:00', 'Lebih Ditingkatkan lagi Pelayanannya'),
(4, '2018-07-13 00:00:00', 'Lumayan Baik'),
(5, '2018-07-13 00:00:00', 'Mantappp. okeeee'),
(6, '2018-07-13 00:00:00', 'Di Upgrade Labih baik lagi komputernya'),
(7, '2018-07-13 00:00:00', 'Koneksi Internet Lemot'),
(8, '2018-07-13 00:00:00', 'Kereeeennn'),
(9, '2018-07-13 00:00:00', 'Sukses'),
(10, '2018-07-13 00:00:00', 'SMAN 1 Bululawang Jaya'),
(11, '2019-02-12 00:00:00', 'baik'),
(12, '2019-02-12 00:00:00', 'kurang baik'),
(13, '2019-02-12 00:00:00', 'sangat baik'),
(14, '2019-02-12 00:00:00', 'baik sekali'),
(15, '2019-03-14 00:00:00', 'kurang'),
(16, '2019-03-14 00:00:00', 'lumayan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE IF NOT EXISTS `tb_petugas` (
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
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`kd_petugas`, `nama`, `no_hp`, `jk`, `alamat`, `username`, `password`, `psd_v`, `status`) VALUES
('PET_0001', 'Anam', '85736012586', 'L', 'Badean', 'anam', '81dc9bdb52d04dc20036dbd8313ed055', '1234', 'A'),
('PET_0002', 'Niko', '086665', 'L', 'Paiton', 'niko', '698d51a19d8a121ce581499d7b701668', '111', 'S'),
('PET_0003', 'Maulana', '085755515998', 'L', 'Mojokerto', 'lana99', '827ccb0eea8a706c4c34a16891f84e7b', '12345', 'S'),
('PET_0004', 'Joko', '02323299999', 'L', 'Malang', 'joko', '9ba0009aa81e794e628a04b51eaf7d7f', 'joko', 'S'),
('PET_0005', 'Nurul Fajar', '08343764374323', 'L', 'Bululawang', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'S'),
('PET_0006', 'Nurul Fajar', '085791643632', 'L', 'Bululawang', 'fajar', '827ccb0eea8a706c4c34a16891f84e7b', '12345', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `temp_laporan`
--

CREATE TABLE IF NOT EXISTS `temp_laporan` (
  `kd_atribut` varchar(10) NOT NULL,
  `prioritas` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_laporan`
--

INSERT INTO `temp_laporan` (`kd_atribut`, `prioritas`) VALUES
('0001', '3'),
('0002', '3'),
('0008', '3'),
('0009', '3'),
('0010', '3'),
('0003', '2'),
('0004', '2'),
('0005', '2'),
('0006', '2'),
('0007', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
 ADD PRIMARY KEY (`kd_lab`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_atribut`
--
ALTER TABLE `tb_atribut`
 ADD PRIMARY KEY (`kd_atribut`);

--
-- Indexes for table `tb_indikator`
--
ALTER TABLE `tb_indikator`
 ADD PRIMARY KEY (`kd_indikator`);

--
-- Indexes for table `tb_kuesioner`
--
ALTER TABLE `tb_kuesioner`
 ADD PRIMARY KEY (`kd_kuesioner`), ADD UNIQUE KEY `kd_kuesioner` (`kd_kuesioner`), ADD UNIQUE KEY `kd_kuesioner_2` (`kd_kuesioner`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
 ADD PRIMARY KEY (`kd_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kuesioner`
--
ALTER TABLE `tb_kuesioner`
MODIFY `kd_kuesioner` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

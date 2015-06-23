-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jun 2015 pada 12.43
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lei`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asistensi`
--

CREATE TABLE IF NOT EXISTS `asistensi` (
  `asistensi_id` int(11) NOT NULL,
  `nilai_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_user`
--

CREATE TABLE IF NOT EXISTS `jadwal_user` (
  `jadwal_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `jadwal_id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  PRIMARY KEY (`jadwal_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `jadwal_user`
--

INSERT INTO `jadwal_user` (`jadwal_user_id`, `jadwal_id`, `username`) VALUES
(1, 2, '1213'),
(2, 2, 'asasa'),
(3, 2, 'onanda'),
(4, 0, ''),
(5, 0, ''),
(6, 0, ''),
(7, 0, ''),
(8, 1, ''),
(9, 3, ''),
(10, 2, 'fifeka2'),
(14, 1, 'ryan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_nilai`
--

CREATE TABLE IF NOT EXISTS `jenis_nilai` (
  `jenis_nilai_id` varchar(16) NOT NULL,
  `nama` varchar(32) NOT NULL,
  PRIMARY KEY (`jenis_nilai_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_nilai`
--

INSERT INTO `jenis_nilai` (`jenis_nilai_id`, `nama`) VALUES
('lak', 'Laporan Akhir'),
('law', 'Laporan Awal'),
('ra', 'Responsi Awal'),
('tp', 'Tugas Pendahuluan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_peralatan`
--

CREATE TABLE IF NOT EXISTS `jenis_peralatan` (
  `jenis_peralatan_id` int(11) NOT NULL,
  `Jenis_peralatan_nama` varchar(32) NOT NULL,
  PRIMARY KEY (`jenis_peralatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_peralatan`
--

INSERT INTO `jenis_peralatan` (`jenis_peralatan_id`, `Jenis_peralatan_nama`) VALUES
(1, 'Perkakas'),
(2, 'Alat Tulis Kantor'),
(3, 'Komponen'),
(4, 'Buku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok`
--

CREATE TABLE IF NOT EXISTS `kelompok` (
  `jadwal_id` int(11) NOT NULL AUTO_INCREMENT,
  `jadwal_nama` varchar(32) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `jadwal_hari` varchar(32) NOT NULL,
  `jadwal_jam` varchar(32) NOT NULL,
  PRIMARY KEY (`jadwal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `kelompok`
--

INSERT INTO `kelompok` (`jadwal_id`, `jadwal_nama`, `matakuliah_id`, `jadwal_hari`, `jadwal_jam`) VALUES
(1, 'Kelompok 1', 1, 'kamis', '10.00-12.00'),
(2, 'Kelompok 2', 2, 'Selkk', '13.30-15.30'),
(3, 'kelompok 3', 1, 'Selasa ', '16.00-18.00'),
(4, 'kelompok 4', 1, 'Rabu', '10.00-12.00'),
(5, 'Kelompok 5', 2, 'Kamis', '10.00-12.00'),
(6, 'kelompok 3 b', 0, 'kamis', '14.00-16.00'),
(7, 'qwty', 0, 'wetyu', 'wer'),
(8, 'qwert', 0, 'wertyu', 'ert'),
(9, 'qwert', 1, 'wertyu', 'a'),
(10, 'kelompok 5', 1, 'jumat', '10.00-11.40'),
(11, 'kelompok 6', 1, 'senin', '10.00-11.40'),
(12, 'kelompok 7', 1, 'selasa', '09.00-10.40'),
(13, 'kelompok 8', 3, 'rabu', '16.00-17.40'),
(14, 'asfafa', 1, 'Senin', '10.00-11.40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `matakuliah_id` int(11) NOT NULL,
  `matakuliah_nama` varchar(32) NOT NULL,
  `matakuliah_keterangan` varchar(128) NOT NULL,
  PRIMARY KEY (`matakuliah_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`matakuliah_id`, `matakuliah_nama`, `matakuliah_keterangan`) VALUES
(1, 'Rangkaian Logika Teknik Digital', ''),
(2, 'Microprosessor', ''),
(3, 'Microcontroller', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `modul_id` int(11) NOT NULL,
  `modul_nama` varchar(32) NOT NULL,
  PRIMARY KEY (`modul_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`modul_id`, `modul_nama`) VALUES
(1, 'Modul Pertama'),
(2, 'Modul Kedua ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_matakuliah`
--

CREATE TABLE IF NOT EXISTS `nilai_matakuliah` (
  `nilai_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `jadwal_id` int(11) NOT NULL,
  `modul_id` int(11) NOT NULL,
  `jenis_nilai_id` varchar(16) NOT NULL,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`nilai_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data untuk tabel `nilai_matakuliah`
--

INSERT INTO `nilai_matakuliah` (`nilai_id`, `username`, `jadwal_id`, `modul_id`, `jenis_nilai_id`, `nilai`) VALUES
(3, 'vela', 1, 1, 'asis', 3),
(4, 'yudhi', 1, 1, 'asis', 4),
(5, 'wanda', 1, 1, 'asis', 5),
(6, 'ryan', 1, 1, 'asis', 6),
(7, 'vela', 1, 1, 'lak', 1),
(8, 'yudhi', 1, 1, 'lak', 2),
(9, 'wanda', 1, 1, 'lak', 3),
(10, 'ryan', 1, 1, 'lak', 4),
(11, 'vela', 1, 1, 'ra', 9),
(12, 'yudhi', 1, 1, 'ra', 8),
(13, 'wanda', 1, 1, 'ra', 7),
(14, 'ryan', 1, 1, 'ra', 6),
(15, 'vela', 1, 1, 'ra', 9),
(16, 'yudhi', 1, 1, 'ra', 8),
(17, 'wanda', 1, 1, 'ra', 7),
(18, 'ryan', 1, 1, 'ra', 6),
(19, 'vela', 1, 1, 'ra', 9),
(20, 'yudhi', 1, 1, 'ra', 8),
(21, 'wanda', 1, 1, 'ra', 7),
(22, 'ryan', 1, 1, 'ra', 5),
(23, 'vela', 1, 1, 'ra', 9),
(24, 'yudhi', 1, 1, 'ra', 8),
(25, 'wanda', 1, 1, 'ra', 7),
(26, 'ryan', 1, 1, 'ra', 5),
(27, 'vela', 1, 1, 'ra', 9),
(28, 'yudhi', 1, 1, 'ra', 8),
(29, 'wanda', 1, 1, 'ra', 7),
(30, 'ryan', 1, 1, 'ra', 6),
(31, 'vela', 1, 1, 'tp', 9),
(32, 'yudhi', 1, 1, 'tp', 8),
(33, 'wanda', 1, 1, 'tp', 7),
(34, 'ryan', 1, 1, 'tp', 4),
(35, 'vela', 1, 1, 'tp', 9),
(36, 'yudhi', 1, 1, 'tp', 8),
(37, 'wanda', 1, 1, 'tp', 7),
(38, 'ryan', 1, 1, 'tp', 4),
(39, 'vela', 1, 1, 'tp', 6),
(40, 'yudhi', 1, 1, 'tp', 7),
(41, 'wanda', 1, 1, 'tp', 5),
(42, 'ryan', 1, 1, 'tp', 4),
(43, 'vela', 1, 1, 'tp', 6),
(44, 'yudhi', 1, 1, 'tp', 7),
(45, 'wanda', 1, 1, 'tp', 5),
(46, 'ryan', 1, 1, 'tp', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peralatan`
--

CREATE TABLE IF NOT EXISTS `peralatan` (
  `peralatan_id` int(11) NOT NULL,
  `peralatan_nama` varchar(64) NOT NULL,
  `jenis_peralatan_id` int(11) NOT NULL,
  `Baik` int(11) DEFAULT NULL,
  `Rusak_ringan` int(11) DEFAULT NULL,
  `Rusak_berat` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `Catatan` varchar(64) NOT NULL,
  PRIMARY KEY (`peralatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peralatan`
--

INSERT INTO `peralatan` (`peralatan_id`, `peralatan_nama`, `jenis_peralatan_id`, `Baik`, `Rusak_ringan`, `Rusak_berat`, `total`, `Catatan`) VALUES
(1, 'Adaptor 12 Volt', 1, 5, 0, 0, 2, '0'),
(2, 'Battery Charger Lipo', 1, 4, 0, 0, 4, '0'),
(3, 'Bor Manual Besar', 1, 1, 0, 0, 1, '0'),
(4, 'Breadboard', 1, 1, 0, 0, 1, '0'),
(5, 'Desoldering Pump', 1, 1, 0, 4, 5, '0'),
(6, 'asgs', 1, 1, 2, 5, 2, ''),
(7, 'gkhkyhl', 1, 56, 1, 7, 2, ''),
(8, 'gjgh', 1, 4, 6, 4, 8, ''),
(9, 'jkljkljk', 1, 4, 1, 0, 2, ''),
(10, 'k', 1, 5, 1, 7, 2, ''),
(11, 'iiiiiii', 1, 5, 6, 4, 2, ''),
(12, 'Solatip Bening', 2, NULL, NULL, NULL, 1, ''),
(13, 'Spidol Biru Snowman', 2, NULL, NULL, NULL, 7, ''),
(14, 'Spidol Hitam Snowman', 2, NULL, NULL, NULL, 7, ''),
(15, 'Stapler DS-45N', 2, NULL, NULL, NULL, 2, ''),
(16, 'Selotip Hitam', 2, NULL, NULL, NULL, 1, ''),
(17, '555', 3, 2, 0, 1, 7, ''),
(18, '4017', 3, 0, 0, 0, 3, ''),
(19, '7805', 3, NULL, NULL, NULL, 4, ''),
(20, '7812', 3, NULL, NULL, NULL, 8, ''),
(21, '7815', 3, NULL, NULL, NULL, 1, ''),
(22, 'Cooking for dummy', 4, 1, NULL, NULL, 2, 'Penulis : pak tarno'),
(23, 'Harry Potter', 4, 1, NULL, NULL, 1, 'Penulis : J.K.Rowling'),
(24, 'Lord Of The Ring', 4, 1, NULL, NULL, 1, 'Penulis : Tolkien'),
(25, 'Laskar Pelangi', 4, 1, NULL, NULL, 1, 'Penulis : Andrea Hirata'),
(26, 'Robohnya Surau Kami', 4, 1, NULL, NULL, 1, 'Penulis : Buya Hamka'),
(44, 'sdf', 2, NULL, NULL, NULL, 1, 'hhjjjj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL,
  `role_nama` varchar(32) NOT NULL,
  `role_keterangan` varchar(128) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`role_id`, `role_nama`, `role_keterangan`) VALUES
(1, 'aslab', 'Asisten Laboratorium Elektronika Industri/mahasiswa'),
(2, 'kordas', 'Koordinator Asisten Laboratorium Elektronika Industri/mahasiswa'),
(3, 'kalab', 'Kepala Laboratorium Elektronika Industri/dosen'),
(4, 'Praktikan', 'Mahasiswa yang praktikum di  Laboratorium Elektronika Industri'),
(5, 'peminjam', 'orang yang meminjam inventaris di  Laboratorium Elektronika Industri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(11) NOT NULL,
  `Status_nama` varchar(32) NOT NULL,
  `status_keterangan` varchar(128) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`status_id`, `Status_nama`, `status_keterangan`) VALUES
(0, 'Tidak Aktif', ''),
(1, 'Aktif', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nim` varchar(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `no_telepon` varchar(32) NOT NULL,
  `KRS` varchar(128) NOT NULL,
  `status_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nim`, `nama`, `email`, `no_telepon`, `KRS`, `status_id`, `role_id`) VALUES
('ada', '12345', '', 'Ada Ada Aj', 'ada@gmail.com', '35679000', '', 0, 3),
('ala', '12345', '', 'Rela Mati', 'rela@gmail.com', '255555', '', 0, 3),
('dsggg', '12345', '215', 'sdgdh', 'sgsd@gamil.com', '5256', '', 0, 1),
('eu', '12345', '125', 'eytrhf', 'sdgds@gmail.com', '575899', '', 0, 1),
('fdhfh', '12345', '', 'sagsh', 'asgsg@gmail.com', '57868', '', 0, 3),
('fifeka2', '1', '1', '1', '1@sa', '1', 'gambar/N3v3rm1Ã±nd!(203).jpg', 1, 4),
('Fifeka3', '03juni94', '1010963011', 'fifeka wahid', 'fifeka_onanda@yahoo.com', '12345678', 'gambar/4.jpg', 0, 4),
('fikri', '12345', '', 'Rabil Fikri', 'rabilfikri33@gmail.com', '08560893858', '', 0, 3),
('huj', '0', '87', 'l', 'rela@gmail.com', '87', '', 0, 5),
('kalab', 'kalab', '', 'husnil kamil s', 'husnil@gmail.com', '1234557', '', 1, 3),
('kalab1', 'kalab', '', 'husnil kamil', 'husnil@gmail.com', '123455', '', 0, 3),
('kalab3', '1', '', 'husnil', 'husnil@gmail.com', '1234', '', 1, 3),
('modi', 'modi', '1213', 'modi lomura', 'modi@gmail.com', '`2121221', '', 1, 5),
('modia', '3', '1210962001', 'modi lomura', 'modi@gmail.com', '081398643', 'gambar/DSC02867(1).JPG', 0, 4),
('onanda', '9', '12109877', 'fifeka', 'fifekawahid@gmail.com', '12121', 'gambar/20130809_155844.jpg', 0, 4),
('onanda1', '1', '12109877', 'fifeka', 'fifekawahid@gmail.com', '12121', 'gambar/20130809_155844.jpg', 0, 4),
('qwq', '121', 'qw', 'qwqw', 'fifeka_onanda@yahoo.com', 'awq', 'gambar/20130805_233755.jpg', 0, 4),
('Rabil', 'rabil', '1210963012', 'Rabil Fikr', 'rabil@gmail.com', '08575500990', '', 1, 1),
('ravky', 'ravky', '1110963005', 'ravky Vibura', 'ravky@gmail.com', '0857550096', '', 1, 1),
('ryan', '21', '1210962001', 'ryan', '1@sa', '2121', 'gambar/1.41.jpg', 0, 4),
('vela', '12131', '2323', 'vela', 'vela@gmail.com', '12131', 'gambar/1.jpg', 0, 4),
('vvela', '1', 'vvela', 'Vevela', 'vela@gmail.com', '121', '', 1, 1),
('vvela2', '1', '1210962001', 'Vevela', 'vella@gmail.com', '12121', '', 0, 1),
('wanda', 'w', 'wewe', 'wqwq', 'fifeka_onanda@yahoo.com', '12121', 'gambar/1.41.jpg', 0, 4),
('wewaa', 'qwqwq', '2121', 'sfdasd', 'fifekawahid@gmail.com', '1231', 'gambar/20130805_234308.jpg', 0, 4),
('wewaaq', '1', '2121', 'sfdasd', 'fifekawahid@gmail.com', '1231', 'gambar/20130805_234308.jpg', 0, 4),
('wqewqza', 'qwqwqw', 'qwq', 'qwqw', 'fifekawahid@gmail.com', '121', 'gambar/DSC_4613.JPG', 0, 4),
('wqewqzas', 'q', 'qwq', 'qwqw', 'fifekawahid@gmail.com', '121', 'gambar/DSC_4613.JPG', 0, 4),
('yudhi', '12', '2121', '1', '1@sa', '12121', 'gambar/307.jpg', 0, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

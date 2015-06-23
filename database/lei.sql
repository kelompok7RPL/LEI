-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2015 at 11:16 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
-- Table structure for table `jadwal_user`
--

CREATE TABLE IF NOT EXISTS `jadwal_user` (
  `jadwal_user_id` int(11) NOT NULL,
  `jadwal_id` int(11) NOT NULL,
  `username` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE IF NOT EXISTS `kelompok` (
  `jadwal_id` int(11) NOT NULL,
  `jadwal_nama` varchar(32) NOT NULL,
  `matakuliah_id` int(11) NOT NULL,
  `jadwal_hari` varchar(32) NOT NULL,
  `jadwal_shift` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `matakuliah_id` int(11) NOT NULL,
  `matakuliah_nama` varchar(32) NOT NULL,
  `matakuliah_keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `praktikan`
--

CREATE TABLE IF NOT EXISTS `praktikan` (
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nim` varchar(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `email` varchar(32) NOT NULL,
  `no_telepon` varchar(32) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `status_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) NOT NULL,
  `role_nama` varchar(32) NOT NULL,
  `role_keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(11) NOT NULL,
  `Status_nama` varchar(32) NOT NULL,
  `status_keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_user`
--
ALTER TABLE `jadwal_user`
 ADD PRIMARY KEY (`jadwal_user_id`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
 ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
 ADD PRIMARY KEY (`matakuliah_id`);

--
-- Indexes for table `praktikan`
--
ALTER TABLE `praktikan`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`status_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

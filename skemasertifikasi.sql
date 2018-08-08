-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 06:41 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soal-kisi2-skkni`
--

-- --------------------------------------------------------

--
-- Table structure for table `skemasertifikasi`
--

CREATE TABLE IF NOT EXISTS `skemasertifikasi` (
`idSkema` int(2) NOT NULL,
  `skemaSertifikasi` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skemasertifikasi`
--

INSERT INTO `skemasertifikasi` (`idSkema`, `skemaSertifikasi`) VALUES
(1, 'Madya Programmer'),
(2, 'Madya Multimedia'),
(3, 'Madya Networking');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skemasertifikasi`
--
ALTER TABLE `skemasertifikasi`
 ADD PRIMARY KEY (`idSkema`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skemasertifikasi`
--
ALTER TABLE `skemasertifikasi`
MODIFY `idSkema` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

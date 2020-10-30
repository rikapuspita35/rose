-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 08:40 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `jasaweb`
--

CREATE TABLE `jasaweb` (
  `id_perusahaan` int(8) NOT NULL,
  `nama_masjid` varchar(255) NOT NULL,
  `nama_usaha` varchar(50) NOT NULL,
  `jenis_usaha` varchar(255) NOT NULL,
  `produk` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `info1` varchar(50) NOT NULL,
  `info2` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasaweb`
--

INSERT INTO `jasaweb` (`id_perusahaan`, `nama_masjid`, `nama_usaha`, `jenis_usaha`, `produk`, `alamat`, `info1`, `info2`, `latitude`, `longitude`) VALUES
(5, 'Masjid Sabilillah Malang', 'Koperasi Masjid Sabilillah ', 'Koperasi', 'Kebutuhan Sehari hari', 'Jl. A. Yani No.15, Blimbing, Kec. Blimbing, Kota Malang, Jawa Timur 65126', 'Kota Malang', 'Jawa Timur', '-7.9422798', '112.6392374'),
(6, 'Masjid A Yani', 'Kopersai Masjid A Yani', 'Koperasi', 'Kebutuhan Sehari hari', 'Jl. Kahuripan No.12, 3, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65111', 'Kota Malang', 'Jawa Timur', '-7.9739811', '112.65767'),
(7, 'Masjid Manarul Islam', 'Koperasi Masjid Manarul Islam', 'Koperasi', 'Kebutuhan Sehari hari', 'Jl. Danau Bratan, Lesanpuro, Kec. Kedungkandang, Kota Malang, Jawa Timur 65138', 'Kota Malang', 'Jawa Timur', '-7.9739811', '112.65767'),
(8, 'Masjid Abu Dzar Al-Ghifari', 'Koperasi Masjid Abu Dzar Al-Ghifari', 'Koperasi', 'Kebutuhan Sehari hari', 'Perumahan Griya Shanta, Jl. Candi Jolotundo I No.219A, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', 'Kota Malang', 'Jawa Timur', '-7.9416502', '112.6219542'),
(9, 'Masjid Muhajirin', 'Koperasi Masjid Muhajirin', 'Koperasi', 'Kebutuhan Sehari hari', 'Jl. Bunga Coklat, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', 'Kota Malang', 'Jawa Timur', '-7.9456612', '112.6192218'),
(10, 'Masjid Muhajirin', 'Koperasi Masjid Muhajirin', 'Koperasi', 'Kebutuhan Sehari hari', 'Jl. Sigura - Gura No.10, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145', 'Kota Malang', 'Jawa Timur', '-7.9582162', '112.6086066'),
(11, 'Pesantren Mahasiswa Al-Hikam Malang', 'Koperasi Pesantren Mahasiswa Al-Hikam Malang', 'Koperasi', 'Kebutuhan Sehari hari', 'Jl. Cengger Ayam No.25, 02, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', 'Kota Malang', 'Jawa Timur', '-7.9475484', '112.6294985'),
(12, 'Masjid Ainul Yaqin Unisma', 'Koperasi Masjid Ainul Yaqin Unisma', 'Koperasi', 'Kebutuhan Sehari hari', 'Jl. Tata Surya, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', 'Kota Malang', 'Jawa Timur', '-7.9355443', '112.6042229'),
(13, 'Sekolah Dasar Anak Saleh', 'Kopresai Sekolah Dasar Anak Saleh', 'Koperasi', 'Kebutuhan Sehari hari', 'Jl. Arumba No.31, Tunggulwulung, Kec. Lowokwaru, Kota Malang, Jawa Timur 65143', 'Kota Malang', 'Jawa Timur', '-7.9422794', '112.6239164'),
(14, 'Masjid Rois Dahlan', 'Koperasi Masjid Rois Dahlan', 'Koperasi', 'Kebutuhan Sehari hari', 'Jl. Kerto Raharjo No.89a, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', 'Kota Malang', 'Jawa Timur', '-7.9488267', '112.6071573');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jasaweb`
--
ALTER TABLE `jasaweb`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jasaweb`
--
ALTER TABLE `jasaweb`
  MODIFY `id_perusahaan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 02:36 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `asal_buku`
--

CREATE TABLE `asal_buku` (
  `id` int(11) NOT NULL,
  `asal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asal_buku`
--

INSERT INTO `asal_buku` (`id`, `asal`) VALUES
(1, 'Impor'),
(2, 'Lokal');

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE `bahasa` (
  `id` int(11) NOT NULL,
  `nama_bahasa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahasa`
--

INSERT INTO `bahasa` (`id`, `nama_bahasa`) VALUES
(1, 'Bahasa Inggris'),
(2, 'Bahasa Indonesia'),
(3, 'Bahasa Perancis'),
(4, 'Bahasa China'),
(5, 'Bahasa Jepang'),
(6, 'Bahasa Korea'),
(7, 'Bahasa Jerman'),
(8, 'Bahasa Belanda');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto1` varchar(225) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `id_bahasa` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `id_asal` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `harga` int(20) NOT NULL,
  `sinopsis` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `foto1`, `foto2`, `foto3`, `pengarang`, `penerbit`, `id_genre`, `id_bahasa`, `stok`, `kondisi`, `id_asal`, `berat`, `harga`, `sinopsis`) VALUES
(5, 'aku', '1602521095_IMG20200728115908-min.jpg', '1602521095_IMG20200728115914-min.jpg', '1602521095_IMG20200728115921-min.jpg', 'Aku', 'aku', 1, 2, 34, 'AAAAA', 2, 500, 50000, 'SSDSFS');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `nama_genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `nama_genre`) VALUES
(1, 'Import'),
(2, 'Agama dan Kepercayaan'),
(3, 'Anak-Anak'),
(4, 'Bahasa'),
(5, 'Bisnis'),
(6, 'Biografi'),
(7, 'Desain'),
(8, 'Ekonomi dan Akutansi'),
(9, 'Fashion Design'),
(10, 'Hobi dan Keterampilan'),
(11, 'Hukum'),
(12, 'Kamus'),
(13, 'Kedokteran'),
(14, 'Kesehatan'),
(15, 'Kesekretariatan'),
(16, 'Komik'),
(17, 'Komputer'),
(18, 'Majalah'),
(19, 'Manajemen'),
(20, 'Masak'),
(21, 'Novel'),
(22, 'Parenting'),
(23, 'Pariwisata'),
(24, 'Pendidikan'),
(25, 'Pengembangan Diri'),
(26, 'Pertanian'),
(27, 'Politik'),
(28, 'Psikologi'),
(29, 'Sastra'),
(30, 'Sejarah'),
(31, 'Seni dan Budaya'),
(32, 'Sosial'),
(33, 'Teknik'),
(34, 'Filsafat'),
(35, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` enum('admin','user') NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `status`, `email`, `password`) VALUES
(1, 'putri', 'admin', 'ergaputri769@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'della', 'admin', 'deladela929@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'aji', 'user', 'ajiaji54@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asal_buku`
--
ALTER TABLE `asal_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre` (`id_genre`),
  ADD KEY `id_bahasa` (`id_bahasa`),
  ADD KEY `id_asal` (`id_asal`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asal_buku`
--
ALTER TABLE `asal_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id`),
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`id_bahasa`) REFERENCES `bahasa` (`id`),
  ADD CONSTRAINT `buku_ibfk_3` FOREIGN KEY (`id_asal`) REFERENCES `asal_buku` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

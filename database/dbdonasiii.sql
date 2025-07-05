-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2024 at 02:28 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdonasiii`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbdonasi`
--

CREATE TABLE `tbdonasi` (
  `iddonasi` varchar(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kategori` enum('Pria','Wanita','Keduanya') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbdonasi`
--

INSERT INTO `tbdonasi` (`iddonasi`, `nama`, `kota`, `alamat`, `tlp`, `email`, `jumlah`, `kategori`, `foto`, `created_at`) VALUES
('DNS0312241', 'Hajid Da Raffi', 'Depok', 'l. RTM. Gg. H. Muin No. 11D Rt 09/rw 09. Kelapa 2 Depok. Kelurahan Tugu, Kecamatan Cimanggis. Kode pos 16451', '0846858965', 'hajid@gmail.com', 10, 'Keduanya', 'https://www.figcomponents.com/components/footer?id=6306d5c68f4e774af203b9b2', '2024-12-02 23:28:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbdonasi`
--
ALTER TABLE `tbdonasi`
  ADD PRIMARY KEY (`iddonasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

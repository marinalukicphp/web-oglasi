-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 08:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weboglasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id_korisnika` int(11) NOT NULL,
  `ime_prezime` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `adresa` text NOT NULL,
  `telefon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id_korisnika`, `ime_prezime`, `email`, `password`, `adresa`, `telefon`) VALUES
(1, 'Marina Lukic', 'marina@gmail.com', 'marina', 'Sumadijska 17,Mladenovac', '060/1829558');

-- --------------------------------------------------------

--
-- Table structure for table `oglasi`
--

CREATE TABLE `oglasi` (
  `id_oglasa` int(11) NOT NULL,
  `slika` varchar(100) NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `kategorija` varchar(100) NOT NULL,
  `cena` double NOT NULL,
  `opis` text NOT NULL,
  `mesto` varchar(100) NOT NULL,
  `telefon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oglasi`
--

INSERT INTO `oglasi` (`id_oglasa`, `slika`, `naziv`, `kategorija`, `cena`, `opis`, `mesto`, `telefon`) VALUES
(1, 'samsung_galaxy_S10.jpg', 'Samsung galaxy S10', 'mobilni telefoni', 580, 'nov \r\ndual sim\r\ngarancija god.dana', 'Subotica', '111222'),
(2, 'huawei_mate_20_pro.jpg', 'Huawei mate 20 PRO', 'mobilni telefoni', 449, 'nov\r\ndual sim\r\npoklon maska', 'Nis', '222333'),
(3, 'lenovo_Y510P.jpg', 'Lenovo Y 510p', 'laptopovi', 300, '8gb ram\r\n15.6 inca\r\nkamera', 'Beograd', '333444'),
(4, 'hp_elitebook_8470p.jpg', 'HP elitebook 8470p', 'laptopovi', 170, 'intel\r\n14 inca\r\ncitac', 'Beograd', '444555'),
(5, 'toshiba_sattelite.jpg', 'Toshiba sattelite', 'laptopovi', 119, 'intel\r\ncitac \r\ncrna boja', 'Novi Sad', '555666'),
(6, 'nikon_coolpix_L340.jpg', 'Nikon coolpix L340', 'fotoaparati', 100, 'polovan\r\n4AA baterija\r\npoklon futrola\r\n', 'Kraljevo', '666777'),
(7, 'canon_EOS_760D.jpg', 'Canon EOS 760D', 'fotoaparati', 360, 'polovan\r\n4AA baterija\r\npoklon futrola', 'Novi Sad', '777888'),
(8, 'sony_bluetooth_slusalice.jpg', 'Sony bluetooth slusalice', 'audio oprema', 275, 'nove\r\ngarancija 2 god.\r\ncrna boja', 'Subotica', '888999'),
(9, 'apple_airpods.jpg', 'Apple airpods', 'audio oprema', 140, 'nove\r\ngarancija 1 god.\r\nbela boja', 'Nis', '999111'),
(10, 'LG_G7.jpg', 'LG G7', 'mobilni telefoni', 295, 'nov\r\ndual sim\r\nmaska poklon', 'Kraljevo', '222888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id_korisnika`);

--
-- Indexes for table `oglasi`
--
ALTER TABLE `oglasi`
  ADD PRIMARY KEY (`id_oglasa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id_korisnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oglasi`
--
ALTER TABLE `oglasi`
  MODIFY `id_oglasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

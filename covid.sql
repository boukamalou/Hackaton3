-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2020 at 08:07 AM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `cas`
--

CREATE TABLE `cas` (
  `id_pays_key` int(11) NOT NULL,
  `id_cas` int(11) NOT NULL,
  `new_cas` int(11) NOT NULL,
  `deces` int(11) NOT NULL,
  `guerison` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id_pays` int(11) NOT NULL,
  `nom_pays` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id_pays`, `nom_pays`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Chine', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(2, 'Usa', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(3, 'France', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(4, 'Allemagne', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(5, 'Royaume-Uni', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(6, 'Italie', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(7, 'Turquie', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(8, 'Algérie', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(9, 'Tunisie', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(10, 'Maroc', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(11, 'Congo', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(12, 'Mali', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(13, 'Afrique du sud', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(14, 'Australie', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(15, 'Brésil', 'Jo', '2020-05-14', 'Jo', '2020-05-14'),
(16, 'Mexique', 'Jo', '2020-05-14', 'Jo', '2020-05-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cas`
--
ALTER TABLE `cas`
  ADD PRIMARY KEY (`id_cas`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id_pays`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cas`
--
ALTER TABLE `cas`
  MODIFY `id_cas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id_pays` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

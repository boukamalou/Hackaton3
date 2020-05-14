-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 14 Mai 2020 à 15:28
-- Version du serveur :  5.7.30-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `covid`
--

-- --------------------------------------------------------

--
-- Structure de la table `cas`
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

--
-- Contenu de la table `cas`
--

INSERT INTO `cas` (`id_pays_key`, `id_cas`, `new_cas`, `deces`, `guerison`, `date`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(13, 4, 545, 123, 86, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(13, 5, 486, 156, 86, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(13, 6, 512, 180, 102, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(13, 7, 489, 164, 97, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(8, 8, 642, 203, 150, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(8, 9, 590, 186, 230, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(8, 10, 468, 150, 186, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(8, 11, 550, 189, 94, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(4, 12, 654, 126, 98, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(4, 13, 765, 165, 120, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(4, 14, 598, 215, 150, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(4, 15, 635, 189, 96, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(14, 16, 468, 168, 68, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(14, 17, 489, 140, 87, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(14, 18, 687, 105, 165, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(14, 19, 598, 119, 156, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(15, 20, 768, 206, 354, '2020-05-10', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(15, 21, 687, 268, 289, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(15, 22, 598, 156, 169, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(15, 23, 546, 156, 189, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(15, 25, 606, 268, 354, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(1, 26, 670, 168, 103, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(1, 27, 680, 206, 168, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(1, 28, 64, 206, 168, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(1, 29, 643, 298, 206, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(1, 30, 768, 235, 106, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(11, 31, 687, 68, 23, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(11, 32, 598, 268, 84, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(11, 33, 656, 198, 35, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(11, 34, 589, 156, 160, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(3, 44, 765, 210, 87, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(3, 45, 678, 230, 156, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(3, 46, 537, 302, 234, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(3, 47, 675, 254, 389, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(6, 48, 568, 534, 285, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(6, 49, 573, 231, 186, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(6, 50, 678, 154, 354, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(6, 51, 615, 243, 397, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(12, 52, 587, 243, 89, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(12, 53, 678, 156, 168, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(12, 54, 686, 186, 138, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(10, 55, 576, 285, 124, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(10, 56, 645, 153, 203, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(10, 57, 587, 210, 105, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(10, 58, 645, 342, 215, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(16, 59, 453, 122, 150, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(16, 60, 634, 287, 345, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(16, 61, 420, 120, 245, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(16, 62, 576, 275, 354, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(5, 63, 453, 13, 153, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(5, 64, 579, 240, 135, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(5, 65, 678, 201, 215, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(5, 66, 645, 345, 453, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(9, 67, 645, 345, 453, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(9, 68, 453, 120, 243, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(9, 69, 543, 245, 105, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(9, 70, 354, 210, 89, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(7, 71, 354, 210, 89, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(7, 72, 785, 242, 153, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(7, 73, 678, 345, 201, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(7, 74, 756, 257, 186, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(2, 75, 756, 257, 186, '2020-05-11', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(2, 76, 687, 243, 107, '2020-05-12', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(2, 77, 578, 210, 287, '2020-05-13', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14'),
(2, 78, 678, 276, 189, '2020-05-14', 'anonymous', '2020-05-14', 'anonymous', '2020-05-14');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cas`
--
ALTER TABLE `cas`
  ADD PRIMARY KEY (`id_cas`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cas`
--
ALTER TABLE `cas`
  MODIFY `id_cas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

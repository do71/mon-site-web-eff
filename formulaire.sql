-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 10 mai 2023 à 04:41
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `formulaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` smallint NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `Tel_number` int NOT NULL,
  `Date_reservation` varchar(10) NOT NULL,
  `Heure_reservation` varchar(10) NOT NULL,
  `Nombre_de_personnes` int NOT NULL,
  `motDePasse` varchar(24) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `Adresse`, `Tel_number`, `Date_reservation`, `Heure_reservation`, `Nombre_de_personnes`, `motDePasse`) VALUES
(1, 'Dona', 'marketingdigitaluik@gmail.com', 1122344432, '2023-05-19', '23:41', 1, 'azerty'),
(2, 'Asma', 'Asma@gmail.com', 2147483647, '2023-05-21', '23:48', 2, 'position'),
(3, 'Imen', 'Imen@gmail.com', 78976546, '2023-05-12', '23:53', 5, 'azerty'),
(4, '', '', 0, '', '', 0, ''),
(5, 'Jean Evence Fanel st', 'evencenze@gmail.com', 52216205, '', '', 123, '12345678'),
(6, 'Loic', 'Loic@gmail.com', 52216205, '', '', 123, '12345678'),
(7, 'Loic', 'Loic@gmail.com', 52216205, '', '', 123, ''),
(8, 'Fabianne', 'Fabianne@gmail.com', 23456798, '2023-05-19', '02:52', 232, '0987665HGHIJ'),
(9, 'Fabianne', 'Fabianne@gmail.com', 23456798, '2023-05-19', '02:52', 232, 'azerty'),
(10, '', '', 0, '', '', 0, ''),
(11, 'azerrty', 'azerrty@gmail.com', 2345678, '2023-05-13', '06:19', 1, 'azerty'),
(12, 'tyhio', 'hgj@tyg.com', 456789, '2023-05-20', '04:08', 4, '3546789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

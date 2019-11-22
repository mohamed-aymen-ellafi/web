-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 18 nov. 2019 à 20:48
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `em`
--

-- --------------------------------------------------------

--
-- Structure de la table `me`
--

DROP TABLE IF EXISTS `me`;
CREATE TABLE IF NOT EXISTS `me` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `me`
--

INSERT INTO `me` (`id`, `username`, `mail`, `mdp`) VALUES
(1, 'aymen666', 'dsdvkld@sqdq', '7'),
(4, 'x', 'x', 'x'),
(3, 'ellafi', 'dsdvkld@sqdq', '44'),
(5, 'mohamedaymen.ellafi@esprit.tn', 'dsdvkld@sqdq', ','),
(6, 'xy', '(tgf\'re\"f', '\'\"(fr(\"\''),
(7, 'sdv', 'sdv', 'vsd'),
(8, 'hmed', 'hmed', '10'),
(9, '1', '1', '1'),
(10, '1', '1', '1'),
(11, 'dsc', '1', 'sdcsdc'),
(12, 'sdcsdc', 'cdscds', 'sdcdsc'),
(13, 'sdcsdc', 'cdscds', 'sdcdsc'),
(14, '18778', '78546', '77887'),
(15, 'fdertyh', 'fisquare', '5698'),
(16, '5', '5', '5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

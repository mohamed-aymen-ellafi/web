-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 06:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siteweb`
--
CREATE DATABASE IF NOT EXISTS `siteweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `siteweb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `mail` varchar(255) NOT NULL,
  `num` int(11) NOT NULL,
  `cp` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `admin`:
--

-- --------------------------------------------------------

--
-- Table structure for table `best_category`
--

DROP TABLE IF EXISTS `best_category`;
CREATE TABLE `best_category` (
  `id_best_categ` int(11) NOT NULL,
  `id_categ_` int(11) NOT NULL,
  `nb_visites` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `best_category`:
--

-- --------------------------------------------------------

--
-- Table structure for table `best_seller`
--

DROP TABLE IF EXISTS `best_seller`;
CREATE TABLE `best_seller` (
  `id_best_seller` int(11) NOT NULL,
  `id_produits` int(11) NOT NULL,
  `nb_ventes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `best_seller`:
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE `categorie` (
  `refcategorie` int(11) NOT NULL,
  `nomcategorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `categorie`:
--

-- --------------------------------------------------------

--
-- Table structure for table `fidelisation`
--

DROP TABLE IF EXISTS `fidelisation`;
CREATE TABLE `fidelisation` (
  `ref` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `fidelisation`:
--

-- --------------------------------------------------------

--
-- Table structure for table `mailing`
--

DROP TABLE IF EXISTS `mailing`;
CREATE TABLE `mailing` (
  `sujet` varchar(255) NOT NULL,
  `reponse` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `idemail` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `mailing`:
--   `id`
--       `savcontact` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `me`
--

DROP TABLE IF EXISTS `me`;
CREATE TABLE `me` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `me`:
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `messages`:
--

--
-- Dumping data for table `messages`
--

INSERT DELAYED IGNORE INTO `messages` (`id`, `user`, `message`, `date`) VALUES
(6, 'zahra chouchane', ' isisi', '2019-11-26 03:52:07'),
(7, 'zahra chouchane', ' isisi', '2019-11-26 03:52:07'),
(8, 'zahra chouchane', ' isisi', '2019-11-26 03:52:07'),
(9, 'zahra chouchane', ' trah', '2019-11-26 03:52:44'),
(10, 'zahra chouchane', ' HOLA AMIGO', '2019-11-26 04:15:55'),
(11, 'zahra chouchane', ' fdkjfd', '2019-11-26 04:19:57'),
(12, 'zahra chouchane', ' fd', '2019-11-26 04:20:03'),
(13, 'zahra chouchane', ' Abctes', '2019-11-26 04:35:28'),
(14, 'zahra chouchane', ' fd', '2019-11-26 04:42:10'),
(15, 'zahra chouchane', ' fdmia', '2019-11-26 04:42:15'),
(16, 'zahra chouchane', ' fd', '2019-11-26 04:42:20'),
(17, 'zahra chouchane', ' hey zahra', '2019-11-26 04:42:27'),
(18, 'zahra chouchane', 'atta girlll', '2019-11-26 04:42:38'),
(19, 'zahra chouchane', 'chrome here', '2019-11-26 04:42:40'),
(20, 'zahra chouchane', 'brave here', '2019-11-26 04:42:46'),
(21, 'zahra chouchane', ' hihi', '2019-11-26 18:32:11'),
(22, 'zahra chouchane', 'hey', '2019-11-26 18:32:18'),
(23, 'ahmed', ' fd', '2019-11-26 20:37:11'),
(24, 'ahmed', ' fd', '2019-11-26 20:37:14'),
(25, 'ahmed', ' fd', '2019-11-26 20:37:15'),
(26, 'ahmed', ' fdf', '2019-11-26 20:37:16'),
(27, 'ahmed', ' allo', '2019-11-26 20:40:26'),
(28, 'ahmed', ' allof', '2019-11-26 20:40:30'),
(29, 'ahmed', ' alloff', '2019-11-26 20:40:31'),
(30, 'ahmed', ' alloff', '2019-11-26 20:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `nb_clients`
--

DROP TABLE IF EXISTS `nb_clients`;
CREATE TABLE `nb_clients` (
  `id_nbclient` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `nb_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `nb_clients`:
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE `produit` (
  `refproduit` varchar(50) NOT NULL,
  `nomproduit` varchar(50) NOT NULL,
  `marque` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `urlimage` text NOT NULL,
  `quantite` int(11) NOT NULL,
  `prixproduit` int(11) NOT NULL,
  `dateajout` date NOT NULL,
  `refcategorie` varchar(50) NOT NULL,
  `idpromo` int(11) NOT NULL,
  `prixpromo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `produit`:
--

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE `promo` (
  `reference` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `dateDebut` int(11) NOT NULL,
  `dateFin` int(11) NOT NULL,
  `pourcentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `promo`:
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `etat` tinyint(1) NOT NULL,
  `rating` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `review`:
--

--
-- Dumping data for table `review`
--

INSERT DELAYED IGNORE INTO `review` (`id`, `nom`, `email`, `review`, `etat`, `rating`, `date`) VALUES
(2, 'zahra', 'zahracarthage.chouchene@esprit.tn', 'produit genial !! ', 1, 5, '2019-11-30 00:41:39'),
(4, 'zahra chouchane', 'zcarthage@gmail.com', 'produit null ', 1, 1, '2019-12-09 19:21:27'),
(5, 'ahmed', 'messapoud@gmail.com', 'oui c a va ..  ', 1, 3, '2019-12-09 19:23:16'),
(8, 'YASMINE', 'yasminam1@hotmail.fr', 'jofd ', 1, 5, '2019-12-11 00:54:34'),
(10, 'zahra carthage chouchene', 'zcarthage@gmail.com', ' kfdjkd', 0, 5, '2019-12-11 05:09:56'),
(11, 'zahra', 'zcarthage@gmail.com', 'j\'adore le produit !!!!!  ', 1, 5, '2019-12-11 05:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `savcontact`
--

DROP TABLE IF EXISTS `savcontact`;
CREATE TABLE `savcontact` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(320) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `savcontact`:
--

--
-- Dumping data for table `savcontact`
--

INSERT DELAYED IGNORE INTO `savcontact` (`nom`, `prenom`, `email`, `sujet`, `message`, `id`, `etat`) VALUES
('chouchene', 'zahra', 'zcarthage@gmail.com', 'Livraison', 'f', 2, 0),
('chouchene', 'zahra', 'zahracarthage.chouchene@gmail.com', 'Livraison', 'livrez vous a tunis ?', 3, 0),
('zahra', 'ya', 'zahracarthage.chouchene@gmail.com', 'Reclamation', 'k', 5, 0),
('yasmine', 'chene', 'zahracarthage.chouchene@esprit.tn', 'Methodes de paiement', 'stripe ?', 7, 0),
('yasmine', 'chene', 'zahracarthage.chouchene@esprit.tn', 'Methodes de paiement', 'stripe ?', 8, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `best_category`
--
ALTER TABLE `best_category`
  ADD PRIMARY KEY (`id_best_categ`);

--
-- Indexes for table `best_seller`
--
ALTER TABLE `best_seller`
  ADD PRIMARY KEY (`id_best_seller`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`refcategorie`);

--
-- Indexes for table `fidelisation`
--
ALTER TABLE `fidelisation`
  ADD PRIMARY KEY (`ref`);

--
-- Indexes for table `mailing`
--
ALTER TABLE `mailing`
  ADD PRIMARY KEY (`idemail`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `me`
--
ALTER TABLE `me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nb_clients`
--
ALTER TABLE `nb_clients`
  ADD PRIMARY KEY (`id_nbclient`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`refproduit`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`reference`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savcontact`
--
ALTER TABLE `savcontact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mailing`
--
ALTER TABLE `mailing`
  MODIFY `idemail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `me`
--
ALTER TABLE `me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `savcontact`
--
ALTER TABLE `savcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mailing`
--
ALTER TABLE `mailing`
  ADD CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `savcontact` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

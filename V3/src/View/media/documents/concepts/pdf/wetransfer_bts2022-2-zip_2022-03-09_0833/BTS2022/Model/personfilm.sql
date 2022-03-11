-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 05 jan. 2022 à 17:32
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `personfilm`
--
CREATE DATABASE IF NOT EXISTS `personfilm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `personfilm`;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `idFilm` int(11) NOT NULL AUTO_INCREMENT,
  `filmName` varchar(50) NOT NULL,
  PRIMARY KEY (`idFilm`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`idFilm`, `filmName`) VALUES
(1, 'La grande vadrouille'),
(2, 'Seigneur des anneaux 4'),
(3, 'AAZZEE'),
(4, 'AAZZEE');

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `idPerson` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `type` enum('Mineur','Majeur','Retraite') NOT NULL,
  PRIMARY KEY (`idPerson`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `person`
--

INSERT INTO `person` (`idPerson`, `name`, `firstName`, `type`) VALUES
(1, 'Smith', 'John', 'Mineur'),
(2, 'Dupond', 'Alfred', 'Majeur'),
(3, 'Machin', 'Truc', 'Majeur'),
(4, 'AAZZEE', 'qqssdd', 'Mineur');

-- --------------------------------------------------------

--
-- Structure de la table `regarder`
--

DROP TABLE IF EXISTS `regarder`;
CREATE TABLE IF NOT EXISTS `regarder` (
  `idFilm` int(11) NOT NULL,
  `idPerson` int(11) NOT NULL,
  PRIMARY KEY (`idFilm`,`idPerson`),
  KEY `regarder_Person0_FK` (`idPerson`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `regarder`
--

INSERT INTO `regarder` (`idFilm`, `idPerson`) VALUES
(2, 1),
(1, 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `regarder`
--
ALTER TABLE `regarder`
  ADD CONSTRAINT `regarder_Film_FK` FOREIGN KEY (`idFilm`) REFERENCES `film` (`idFilm`),
  ADD CONSTRAINT `regarder_Person0_FK` FOREIGN KEY (`idPerson`) REFERENCES `person` (`idPerson`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

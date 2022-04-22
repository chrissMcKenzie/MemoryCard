-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 17 mars 2022 à 01:04
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bts2a_MemoryCardModel`
--
CREATE DATABASE bts2a_MemoryCardModel;
USE bts2a_MemoryCardModel;
-- --------------------------------------------------------

--
-- Structure de la table `Patient`
--

CREATE TABLE `Patient` (
  `id_patient` int(11) NOT NULL,
  `nom_patient` varchar(50) NOT NULL,
  `prenom_patient` varchar(50) NOT NULL,
  `datenaissance_patient` date NOT NULL,
  `pathologie_patient` varchar(50) NOT NULL,
  `telephone_patient` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Patient`
--

INSERT INTO `Patient` (`id_patient`, `nom_patient`, `prenom_patient`, `datenaissance_patient`, `pathologie_patient`, `telephone_patient`) VALUES
(1, 'P. Langhorne', 'Jessica', '1997-05-11', 'd\'alzheimer', '6103566743'),
(2, 'A. Wessels', 'Randolph', '1959-08-08', 'd\'alzheimer', '4238785443'),
(3, 'Lebel', 'Germain', '1977-09-12', 'AVC', '3605126248'),
(4, 'Du Trieux', 'Rule', '1939-03-25', 'Alzheimer', '3605126248');

-- --------------------------------------------------------

--
-- Structure de la table `Score`
--

CREATE TABLE `Score` (
  `id_score` int(11) NOT NULL,
  `temps` time NOT NULL,
  `niveau` int(11) NOT NULL,
  `nb_coup` int(11) NOT NULL,
  `id_patient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Soignant`
--

CREATE TABLE `Soignant` (
  `id_soignant` int(11) NOT NULL,
  `nom_soignant` varchar(50) NOT NULL,
  `prenom_soignant` varchar(50) NOT NULL,
  `datenaissance_soignant` date NOT NULL,
  `motdepasse_soignant` varchar(150) NOT NULL,
  `poste_soignant` varchar(50) NOT NULL,
  `mail_soignant` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`id_patient`);

--
-- Index pour la table `Score`
--
ALTER TABLE `Score`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `Score_Patient_FK` (`id_patient`);

--
-- Index pour la table `Soignant`
--
ALTER TABLE `Soignant`
  ADD PRIMARY KEY (`id_soignant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Score`
--
ALTER TABLE `Score`
  MODIFY `id_score` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Soignant`
--
ALTER TABLE `Soignant`
  MODIFY `id_soignant` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Score`
--
ALTER TABLE `Score`
  ADD CONSTRAINT `Score_Patient_FK` FOREIGN KEY (`id_patient`) REFERENCES `Patient` (`id_patient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
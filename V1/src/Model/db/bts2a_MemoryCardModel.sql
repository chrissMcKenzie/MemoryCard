-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 23 jan. 2022 à 23:34
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

-- --------------------------------------------------------

--
-- Structure de la table `Patient`
--

CREATE TABLE `Patient` (
  `id_patient` int(11) NOT NULL,
  `nom_patient` varchar(40) CHARACTER SET utf8 NOT NULL,
  `prenom_patient` varchar(40) CHARACTER SET utf8 NOT NULL,
  `datenaissance_patient` date NOT NULL,
  `motdepasse_patient` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pathologie_patient` varchar(30) CHARACTER SET utf8 NOT NULL,
  `temps_patient` time NOT NULL,
  `score_patient` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Patient`
--

INSERT INTO `Patient` (`id_patient`, `nom_patient`, `prenom_patient`, `datenaissance_patient`, `motdepasse_patient`, `pathologie_patient`, `temps_patient`, `score_patient`) VALUES
(1, 'S. Knudsen', 'Storm', '2012-01-07', '@1234567@', 'Alzheimer', '00:05:45', 16);

-- --------------------------------------------------------

--
-- Structure de la table `Score_Patient`
--

CREATE TABLE `Score_Patient` (
  `id_score` int(11) UNSIGNED NOT NULL,
  `id_patient` int(11) NOT NULL,
  `score_patient` int(3) UNSIGNED NOT NULL,
  `temps_patient` time NOT NULL,
  `victoire_patient` int(3) NOT NULL,
  `defaite_patient` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `Soignant`
--

CREATE TABLE `Soignant` (
  `id_soignant` int(11) NOT NULL,
  `nom_soignant` varchar(30) CHARACTER SET utf8 NOT NULL,
  `prenom_soignant` varchar(30) CHARACTER SET utf8 NOT NULL,
  `datenaissance_soignant` date NOT NULL,
  `motdepasse_soignant` varchar(50) NOT NULL,
  `poste_soignant` varchar(30) CHARACTER SET utf8 NOT NULL,
  `mail_soignant` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `Soignant`
--

INSERT INTO `Soignant` (`id_soignant`, `nom_soignant`, `prenom_soignant`, `datenaissance_soignant`, `motdepasse_soignant`, `poste_soignant`, `mail_soignant`) VALUES
(1, 'Tamez Alba', 'Edelberto', '1944-07-10', '[@1234567@]', 'Infirmiere', 'EdelbertoTamezAlba@dayrep.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`id_patient`),
  ADD KEY `cle_score_patient` (`score_patient`),
  ADD KEY `cle_temps_patient` (`temps_patient`);

--
-- Index pour la table `Score_Patient`
--
ALTER TABLE `Score_Patient`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `Clé étrangère` (`id_patient`),
  ADD KEY `fk_score_patient_patient` (`score_patient`),
  ADD KEY `fk_temps_patient` (`temps_patient`);

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
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Score_Patient`
--
ALTER TABLE `Score_Patient`
  MODIFY `id_score` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Soignant`
--
ALTER TABLE `Soignant`
  MODIFY `id_soignant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Score_Patient`
--
ALTER TABLE `Score_Patient`
  ADD CONSTRAINT `fk_score_patient_patient` FOREIGN KEY (`score_patient`) REFERENCES `Patient` (`score_patient`),
  ADD CONSTRAINT `fk_temps_patient` FOREIGN KEY (`temps_patient`) REFERENCES `Patient` (`temps_patient`),
  ADD CONSTRAINT `score_patient_ibfk_1` FOREIGN KEY (`id_patient`) REFERENCES `Patient` (`id_patient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

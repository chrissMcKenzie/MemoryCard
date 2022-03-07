-- DROP DATABASE IF EXISTS bts2a_MemoryCardModel;

CREATE DATABASE bts2a_MemoryCardModel;
USE bts2a_MemoryCardModel;

CREATE TABLE Patient(
-- Colonne |  DataType | PK | NN | UQ | BIN | UN | ZF | AI | G
    id_patient INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom_patient VARCHAR(40) NOT NULL,
    prenom_patient VARCHAR(40) NOT NULL,
    datenaissance_patient DATE NOT NULL,
    motdepasse_patient VARCHAR(50) NOT NULL,
    pathologie_patient VARCHAR(30) NOT NULL,
    temps_patient TIME NOT NULL,
    score_patient INT(3) NOT NULL, -- nbr coups
    difficulte_patient VARCHAR(5) NOT NULL
)ENGINE=InnoDB; -- ALTER TABLE `Patient` CHANGE `score_patient` `score_patient` INT(3) NOT NULL;

CREATE TABLE Soignant(
    id_soignant INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom_soignant VARCHAR(30) NOT NULL,
    prenom_soignant VARCHAR(30) NOT NULL,
    datenaissance_soignant DATE NOT NULL,
    motdepasse_soignant VARCHAR(50) NOT NULL,
    poste_soignant VARCHAR(30) NOT NULL,
    mail_soignant VARCHAR(150) NOT NULL
)ENGINE=InnoDB; -- ALTER TABLE `Score_Patient` CHANGE `id_score` `id_score` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT;

CREATE TABLE Score_Patient(
    id_score INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_patient INT, FOREIGN KEY REFERENCES Patient(id_patient),
    score_patient INT(3), FOREIGN KEY (score_patient) REFERENCES Patient(score_patient),
    temps_patient TIME FOREIGN KEY REFERENCES Patient(temps_patient),
    victoire_patient INT(100) NOT NULL,
    defaite_patient INT(100) NOT NULL,
    difficulte_patient VARCHAR(5) NOT NULL
)ENGINE=InnoDB; -- ALTER TABLE `Score_Patient` ADD CONSTRAINT `fk_score_patient_patient` FOREIGN KEY (`score_patient`) REFERENCES `Patient`(`id_patient`) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO Patient (nom_patient, prenom_patient, datenaissance_patient, motdepasse_patient, pathologie_patient, temps_patient, score_patient)
VALUES ('S. Knudsen', 'Storm', '2012-01-07', '@1234567@', 'Alzheimer', '00:05:45', '16');
--UPDATE `Patient` SET `nom_patient` = 'S. Knudsen', `prenom_patient` = 'Storm' WHERE `Patient`.`id_patient` = 1;


INSERT INTO Soignant (nom_soignant, prenom_soignant, datenaissance_soignant, motdepasse_soignant, poste_soignant, mail_soignant)
VALUES ('Tamez Alba', 'Edelberto', '1944-07-10', '[@1234567@]', 'Infirmiere', 'EdelbertoTamezAlba@dayrep.com');


-- CREATE TABLE Joueur(
-- -- Colonne |  DataType | PK | NN | UQ | BIN | UN | ZF | AI | G
--     id_Joueur INT PRIMARY KEY NOT NULL UNIQUE UNSIGNED AUTO_INCREMENT,
--     nom_Joueur VARCHAR(50) NOT NULL,
--     difficulte_Joueur VARCHAR(5) NOT NULL,
--     role_Joueur VARCHAR(50) NOT NULL,
--     dateDeNaissance_Joueur DATE(20) NOT NULL,
--     motDePasse_Joueur VARCHAR(255) NOT NULL,
--     temps_Joueur VARCHAR(255) NOT NULL,
--     score_Joueur INT(3) NOT NULL,
-- );

-- CREATE TABLE Jeux(
--     id_Jeu INT,
--     nom_Jeu VARCHAR(255),
--     niveau_Jeu VARCHAR(255),
-- score_Joueur INT(3) NOT NULL,
-- CONSTRAINT FOREIGN KEY(score_Joueur) REFERENCES Joueur(score_Joueur) ON DELETE CASCADE ON UPDATE CASCADE
-- );

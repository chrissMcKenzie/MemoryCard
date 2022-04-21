#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Patient
#------------------------------------------------------------

CREATE TABLE Patient(
        id_patient            Int  Auto_increment  NOT NULL ,
        nom_patient           Varchar (50) NOT NULL ,
        prenom_patient        Varchar (50) NOT NULL ,
        datenaissance_patient Date NOT NULL ,
        pathologie_patient    Varchar (50) NOT NULL ,
        telephone_patient     Varchar (10) NOT NULL
	,CONSTRAINT Patient_PK PRIMARY KEY (id_patient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Soignant
#------------------------------------------------------------

CREATE TABLE Soignant(
        id_soignant            Int  Auto_increment  NOT NULL ,
        nom_soignant           Varchar (50) NOT NULL ,
        prenom_soignant        Varchar (50) NOT NULL ,
        datenaissance_soignant Date NOT NULL ,
        motdepasse_soignant    Varchar (150) NOT NULL ,
        poste_soignant         Varchar (50) NOT NULL ,
        mail_soignant          Varchar (50) NOT NULL
	,CONSTRAINT Soignant_PK PRIMARY KEY (id_soignant)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Score
#------------------------------------------------------------

CREATE TABLE Score(
        id_score   Int  Auto_increment  NOT NULL ,
        temps      Time NOT NULL ,
        niveau     Int NOT NULL ,
        nb_coup    Int NOT NULL ,
        id_patient Int NOT NULL
	,CONSTRAINT Score_PK PRIMARY KEY (id_score)

	,CONSTRAINT Score_Patient_FK FOREIGN KEY (id_patient) REFERENCES Patient(id_patient)
)ENGINE=InnoDB;


INSERT INTO `Patient` (`id_patient`, `nom_patient`, `prenom_patient`, `datenaissance_patient`, `pathologie_patient`, `telephone_patient`) VALUES
(1, 'P. Langhorne', 'Jessica', '1997-05-11', 'd\'alzheimer', '6103566743'),
(2, 'A. Wessels', 'Randolph', '1959-08-08', 'd\'alzheimer', '4238785443'),
(3, 'Lebel', 'Germain', '1977-09-12', 'AVC', '3605126248'),
(4, 'Du Trieux', 'Rule', '1939-03-25', 'Alzheimer', '3605126248');

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

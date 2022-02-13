#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
# Table: Patient
#------------------------------------------------------------

CREATE TABLE Patient(
        id_joueur             Int  Auto_increment  NOT NULL ,
        nom_patient           Varchar (20) NOT NULL ,
        prenom_patient        Varchar (100) NOT NULL ,
        datenaissance_patient Date NOT NULL ,
        motdepasse_patient    Varchar (30) NOT NULL ,
        Pathologie_Patient    Varchar (30) NOT NULL
	,CONSTRAINT Patient_PK PRIMARY KEY (id_joueur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Soignant
#------------------------------------------------------------

CREATE TABLE Soignant(
        id_soignant            Int  Auto_increment  NOT NULL ,
        nom_soignant           Varchar (20) NOT NULL ,
        prenom_soignant        Varchar (20) NOT NULL ,
        poste_soignant         Varchar (60) NOT NULL ,
        datenaissance_soignant Date NOT NULL ,
        mail_soignant          Varchar (150) NOT NULL ,
        motdepasse_Soignant    Varchar (100) NOT NULL
	,CONSTRAINT Soignant_PK PRIMARY KEY (id_soignant)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Score_Patient
#------------------------------------------------------------

CREATE TABLE Score_Patient(
        id_score   Int  Auto_increment  NOT NULL ,
        temps_user Int NOT NULL ,
        score_user Int NOT NULL ,
        Victoire   Int NOT NULL ,
        Defaite    Int NOT NULL ,
        id_joueur  Int NOT NULL
	,CONSTRAINT Score_Patient_PK PRIMARY KEY (id_score)

	,CONSTRAINT Score_Patient_Patient_FK FOREIGN KEY (id_joueur) REFERENCES Patient(id_joueur)
)ENGINE=InnoDB;




-- --Drop DATABASE bts2a_ppe;
-- CREATE DATABASE bts2a_ppe
-- use bts2a_ppe;
-- CREATE TABLE Score_Patient(
--     id_score AUTO_INCREMENT,
--     temps_user INT (50),
--     score_user INT (50),
--     Victoire INT (100),
--     Defaite INT(100),
-- );

-- CREATE TABLE Patient(
--     id_joueur AUTO_INCREMENT,
--     nom_patient VARCHAR (20),
--     prenom_patient VARCHAR (15),
--     datenaissance_patient DATE (20),
--     motdepasse_patient VARCHAR (30),
--     pathologie_patient VARCHAR(30),
-- );

-- CREATE table Soignant(
--     id_soignant AUTO_INCREMENT,
--     nom_soignant VARCHAR(20),
--     prenom_soignant VARCHAR (20),
--     poste_soignant VARCHAR (30),
--     datenaissance_soignant DATE (10),
--     mail_soignant VARCHAR (150),
--     motdepasse_soignant VARCHAR (100),
-- );
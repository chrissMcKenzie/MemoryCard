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


<?php
include_once './DatabaseModel.php'; //Model/DatabaseModel.php


class Patient{

    private $id_patient;
    private $nom_patient;
    private $prenom_patient;
    private $datenaissance_patient;
    private $motdepasse_patient;
    private $pathologie_patient;
    private $telephone_patient;
    private $scoreIdList = array();

    public function __construct($id, $nom, $prenom, $date, $mp, $patho, $telephone){
        $this->id_patient = $id;
        $this->nom_patient = $nom;
        $this->prenom_patient = $prenom;
        $this->datenaissance_patient = $date;
        $this->motdepasse_patient = $mp;
        $this->pathologie_patient = $patho;
        $this->telephone_patient = $telephone;
    }


    public function getIdPatient() {
        return $this->id_patient;
    }
    public function getNomPatient() {
        return $this->nom_patient;
    }
    public function getPrenomPatient() {
        return $this->prenom_patient;
    }
    public function getDatePatient() {
        return $this->datenaissance_patient;
    }
    public function getMpPatient() {
        return $this->motdepasse_patient;
    }
    public function getPathoPatient() {
        return $this->pathologie_patient;
    }
    public function getTelephonePatient() {
        return $this->telephone_patient;
    }
    public function getScoreIdList() {
        return $this->ScoreIdList;
    }

    public function addScore($IdScore) {
        // ajoute un objet Film à filmList
        $this->ScoreIdList[] = $IdScore;
    }
}

class ManagePatient{
    private $patientList = array();

    public function getPatientFromDB(){
        $pdo = DatabaseModel::connect(); //on se connecte à la base 
        $sql = 'SELECT * FROM patient ORDER BY id_patient ASC'; //on formule notre requete 
        $result = $pdo->query($sql);
        $allRows = $result->fetchAll();

        foreach ($allRows as $row) { //on cree un objet Person avec chaque valeur retournée
            $id = $row["id_patient"];
            $nom = $row["nom_patient"];
            $prenom = $row["prenom_patient"];
            $date = $row["datenaissance_patient"];
            $mp = $row["motdepasse_patient"];
            $patho = $row["pathologie_patient"];
            $telephone = $row["telephone_patient"];

            $patient = new Patient($id, $nom, $prenom, $date, $mp, $patho, $telephone);
            $this->patientList[] = $patient;
        }
        $result->closeCursor();

        return $this->patientList;
    }

    public function getPatientFromId($id){
        // retourne l'objet Person connaissant son id
        // retourne null si pas trouvée
        foreach ($this->patientList as $patient) {
            if ($patient->getIdPatient() == $id)
                return $patient;
        }
        return null;
    }


    /*
    public function readPatient($security = false){
        if ($this->pdo === null) {
            try {
                $pdo = DatabaseModel::connection_DatabaseModel(); //on se connecte à la base
                $this->pdo = $pdo;
                // var_dump("PDO initialise");
            } catch (PDOException $e) {
                die("#=> Error_readPatient: " . $e->getMessage());
            }
        }
        // var_dump("Requête executé");
        $sql = "SELECT * FROM Patient"; // SELECT DISTINCT * FROM Patient
        $result = $this->pdo->query($sql);
        $allRows = $result->fetchAll(); //PDO::FETCH_OBJ
        return $allRows;
    }
    public function updatePatient($security = false){
        if ($security != null) {
            try {
                // code
            } catch (PDOException $e) {
                die("#=> Error_updatePatient: " . $e->getMessage());
            }
        }
    }
    public function deletePatient($security = false){
        if ($security != null) {
            try {
                // code
            } catch (PDOException $e) {
                die("#=> Error_deleteUser: " . $e->getMessage());
            }
        }
    }
    */
}

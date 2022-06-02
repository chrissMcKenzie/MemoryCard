<?php 
include_once('Model/DatabaseModel.php');


class Patient{

    private $id_patient;
    private $nom_patient;
    private $prenom_patient;
    private $datenaissance_patient;
    private $pathologie_patient;
    private $telephone_patient;
    private $matricule_soignant;

    private $scoreIdList=array();
 
    public function __construct($id, $nom,$prenom,$date,$patho,$telephone,$matricule){
        $this->id_patient=$id;
        $this->nom_patient=$nom;
        $this->prenom_patient=$prenom;
        $this->datenaissance_patient=$date;
        $this->pathologie_patient=$patho;
        $this->telephone_patient=$telephone;
        $this->matricule_soignant=$matricule;
    }

    public function getIdPatient(){
        return $this->id_patient;
    }
    public function getNomPatient(){
        return $this->nom_patient;
    }
    public function getPrenomPatient(){
        return $this->prenom_patient;
    }
    public function getDatePatient(){
        return $this->datenaissance_patient;
    }
    public function getPathoPatient(){
        return $this->pathologie_patient;
    }
    public function getTelephonePatient(){
        return $this->telephone_patient;
    }
    public function getMatriculeSoignant(){
        return $this->matricule_soignant;
    }
    public function getScoreIdList(){
        return $this->ScoreIdList;
    }
    public function addScore($IdScore){
        // ajoute un objet Film à filmList
        $this->ScoreIdList[] = $IdScore;
    }
}

class ManagePatient{
    private $patientList=array();
    private $patientListbyId=array();

    function inscriptionPatient($NOM,$PRENOM,$DATE,$PATHO,$NUMERO,$MATRICULE){
        $pdo = DatabaseModel::connect();

        $req= $pdo->prepare("INSERT INTO patient (id_patient, nom_patient, prenom_patient, datenaissance_patient, pathologie_patient, telephone_patient,id_soignant) values (NULL,?,?,?,?,?,?)");
        $req->execute(array($NOM,$PRENOM,$DATE,$PATHO,$NUMERO,$MATRICULE));
        $lastId = $pdo->lastInsertId();
        $patient= new Patient($lastId,$lastId,$NOM,$PRENOM,$DATE,$PATHO,$NUMERO,);
        $this->patientList[] = $patient;
        return $patient;
    }

    function log($nom,$prenom){

        $pdo = DatabaseModel::connect();

        $req = $pdo->prepare('SELECT * FROM patient WHERE nom_patient = :nom AND prenom_patient = :prenom');
        $req->execute(array(':nom' => $nom,':prenom' => $prenom));
        $allRows = $req->fetchAll();

        foreach ($allRows as $row) { //on cree un objet Person avec chaque valeur retournée
            $id = $row["id_patient"];
            $nom = $row["nom_patient"];
            $prenom = $row["prenom_patient"];
            $date = $row["datenaissance_patient"];
            $patho = $row["pathologie_patient"];
            $telephone = $row["telephone_patient"];
            $matricule = $row["id_soignant"];

            $patient = new Patient($id,$nom,$prenom,$date,$patho,$telephone,$matricule);
            $_SESSION['patient'] = serialize($patient);
            return $_SESSION['patient'];
        }
    }


    public function getPatientFromDB()
    {
        $pdo = DatabaseModel::connect(); //on se connecte à la base 
        $sql = 'SELECT * FROM patient ORDER BY id_patient ASC'; //on formule notre requete 
        $result = $pdo->query($sql);
        $allRows = $result->fetchAll();
    
        foreach ($allRows as $row) { //on cree un objet Person avec chaque valeur retournée
            $id = $row["id_patient"];
            $nom = $row["nom_patient"];
            $prenom = $row["prenom_patient"];
            $date = $row["datenaissance_patient"];
            $patho = $row["pathologie_patient"];
            $telephone = $row["telephone_patient"];
            $matricule = $row["id_soignant"];

            $patient = new Patient($id,$nom,$prenom,$date,$patho,$telephone,$matricule);
            $this->patientList[] = $patient;
        }
        $result->closeCursor();
        
        return $this->patientList;
    }
 
    public function getPatientFromId($id){
      
        foreach ($this->patientList as $patient) {
            if ($patient->getIdPatient() == $id)
                return $patient;
        }
        return null;
    }

    
    public function getPatientByIdSoignant($id){
      
        foreach ($this->patientList as $patient) {
            if ($patient->getMatriculeSoignant() == $id)
                $this->patientListbyId[] = $patient;
        }
        return $this->patientListbyId;
    }

}

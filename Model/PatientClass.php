<?php 
include_once('Model/DatabaseModel.php');


class Patient{

    private $id_patient;
    private $nom_patient;
    private $prenom_patient;
    private $datenaissance_patient;
    private $motdepasse_patient;
    private $pathologie_patient;
    private $telephone_patient;
    private $scoreIdList=array();
 
    public function __construct($id, $nom,$prenom,$date,$mp,$patho,$telephone){
        $this->id_patient=$id;
        $this->nom_patient=$nom;
        $this->prenom_patient=$prenom;
        $this->datenaissance_patient=$date;
        $this->motdepasse_patient=$mp;
        $this->pathologie_patient=$patho;
        $this->telephone_patient=$telephone;
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
    public function getMpPatient(){
        return $this->motdepasse_patient;
    }
    public function getPathoPatient(){
        return $this->pathologie_patient;
    }
    public function getTelephonePatient(){
        return $this->telephone_patient;
    }
    public function getScoreIdList(){
        return $this->ScoreIdList;
    }
    
    public function addScore($IdScore){
        // ajoute un objet Film à filmList
        $this->ScoreIdList[] = $IdScore;
    }
}

class managePatient{
    private $patientList=array();

    
    function enre($NOM,$PRENOM,$DATE,$PWD1,$POSTE,$EMAIL){
        $pdo = DatabaseModel::connect();

        $req="INSERT INTO soignant (nom_soignant, prenom_soignant, datenaissance_soignant, motdepasse_soignant, poste_soignant, mail_soignant) values ('$NOM','$PRENOM','$DATE','$PWD1','$POSTE','$EMAIL')";
        $result = $pdo->query($req);
    }

    function log($nom,$prenom){

        $db = DatabaseModel::connect();

        $req = $db->prepare('SELECT id_patient FROM patient WHERE nom_patient = :nom AND prenom_patient = :prenom');
        $req->execute(array(':nom' => $nom,':prenom' => $prenom));
        $resultat = $req->fetch();
        
        if ($req->rowCount() > 0){
        $_SESSION['nom_patient'] = $nom;
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
            $mp = $row["motdepasse_patient"];
            $patho = $row["pathologie_patient"];
            $telephone = $row["telephone_patient"];
            $patient = new Patient($id,$nom,$prenom,$date,$mp,$patho,$telephone);
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




}

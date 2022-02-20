<?php require_once('./DatabaseModel.php');

//Voici la class Patient et managePatient, nous sommes concient que ce n'est pas complet
//Nous allons implementer et modifier certaine fonctions en fonction du Front et des options

class Patient
{

    private $id_patient;
    private $nom_patient;
    private $prenom_patient;
    private $datenaissance_patient;
    private $motdepasse_patient;
    private $pathologie_patient;
    private $score_patient;
    private $pdo;

    public function __construct($pid, $pnom, $pprenom, $pdate, $pmp, $ppatho, $pscore)
    {
        $this->id_patient = $pid;
        $this->nom_patient = $pnom;
        $this->prenom_patient = $pprenom;
        $this->datenaissance_patient = $pdate;
        $this->motdepasse_patient = $pmp;
        $this->pathologie_patient = $ppatho;
        $this->score_patient = $pscore;
    }


    public function getIdPatient()
    {
        return $this->id_patient;
    }
    public function getNomPatient()
    {
        return $this->nom_patient;
    }
    public function getPrenomPatient()
    {
        return $this->renom_patient;
    }
    public function getDatePatient()
    {
        return $this->datenaissance_patient;
    }
    public function getMpPatient()
    {
        return $this->motdepasse_patient;
    }
    public function getPathoPatient()
    {
        return $this->pathologie_patient;
    }
    public function getScorePatient()
    {
        return $this->score_patient;
    }
}


class managePatient
{


    //Pour la creation du patient nous avons mis en place une methode POST avec un formulaire qui creé dirrectement un patient en base de donné 
    //avec les information rentré par l'utlisateur

    /*
    public function createPatient($nom, $prenom, $datenaissance, $motdepasse, $pathologie, $temps, $score)
    {
        if ($this->pdo === null) {
            try {
                $pdo = DatabaseModel::connection_DatabaseModel(); //on se connecte à la base
                $this->pdo = $pdo;
            } catch (PDOException $e) {
                die("#=> Error_createPatient: " . $e->getMessage());
            }
        }
        $sql = "INSERT INTO Patient(nom_patient, prenom_patient, datenaissance_patient, motdepasse_patient, pathologie_patient, temps_patient, score_patient)
        VALUES('{$nom}', '{$prenom}', '{$datenaissance}', '{$motdepasse}', '{$pathologie}', '{$temps}', '{$score}')
        "; // SELECT DISTINCT * FROM Patient
        $result = $this->pdo->query($sql);
        $allRows = $result->fetchAll(); //PDO::FETCH_OBJ
        return $allRows;

        // return $id;
    }
*/
    public function readPatient()
    {
        if ($this->pdo === null) {
            try {
                $pdo = DatabaseModel::connect(); //on se connecte à la base
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

    public function updatePatient($security = false)
    {
        if ($security != null) {
            try {
                // code
            } catch (PDOException $e) {
                die("#=> Error_updatePatient: " . $e->getMessage());
            }
        }
    }

    public function deletePatient($security = false)
    {
        if ($security != null) {
            try {
                // code
            } catch (PDOException $e) {
                die("#=> Error_deleteUser: " . $e->getMessage());
            }
        }
    }
}

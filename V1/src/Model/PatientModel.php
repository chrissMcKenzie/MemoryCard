<?php include_once('./DatabaseModel.php'); // https://www.copier-coller.com/un-crud-en-php/
class Patient
{
    private $id;
    private $nom;
    private $prenom;
    private $PatientsList = [];
    private $pdo;

    public function __construct()
    {
        $this->id; // = $id
        $this->nom; // = $nom
        $this->prenom; // = $prenom
    }


    /** DatabaseModel CRUD
     * 
     */
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

    public function readPatient($security = false)
    {
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
// ->prepare("SELECT * FROM Patient WHERE id_patient = ?", [$_GET['id']]);
// ->execute()
// ->exec("INSERT INTO Patient SET nom_patient='Albane', prenom_patient='NGENO' ");

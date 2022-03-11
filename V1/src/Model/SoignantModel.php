<?php include_once('./DatabaseModel.php'); // https://www.copier-coller.com/un-crud-en-php/
class Soignant
{
    private $id;

    public function __construct($id)
    {
    }

    /** DatabaseModel CRUD
     * 
     */
    public function createSoignant($nom, $prenom, $datenaissance, $motdepasse, $poste, $mail)
    {
        if ($this->pdo === null) {
            try {
                $pdo = DatabaseModel::connection_DatabaseModel(); //on se connecte à la base
                $this->pdo = $pdo;
            } catch (PDOException $e) {
                die("#=> Error_createSoignant: " . $e->getMessage());
            }
        }
        $sql = "INSERT INTO Patient(nom_soignant, prenom_soignant, datenaissance_soignant, motdepasse_soignant, poste_soignant, mail_soignant)
        VALUES('{$nom}', '{$prenom}', '{$datenaissance}', '{$motdepasse}', '{$poste}', '{$mail}')
        "; // SELECT DISTINCT * FROM Patient
        $result = $this->pdo->query($sql);
        $allRows = $result->fetchAll(); //PDO::FETCH_OBJ
        return $allRows;
    }


    public function readSoignant()
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
    public function updateSoignant(int $id, $nom, $prenom, $datenaissance, $motdepasse, $poste, $mail)
    {
        if ($this->pdo === null) {
            try {
                $pdo = DatabaseModel::connection_DatabaseModel(); //on se connecte à la base
                $this->pdo = $pdo;
            } catch (PDOException $e) {
                die("#=> Error_updateSoignant: " . $e->getMessage());
            }
        }
        $sql = "UPDATE Soignant SET nom_soignant='{$nom}', prenom_soignant='{$prenom}', datenaissance_soignant='{$datenaissance}', motdepasse_soignant='{$motdepasse}',  WHERE id_soignant='{$id}' "; // SELECT DISTINCT * FROM Patient
        $result = $this->pdo->query($sql);
        $allRows = $result->fetchAll(); //PDO::FETCH_OBJ
        return $allRows;
    }
    public function deleteSoignant($id, $name)
    {
        if ($this->pdo === null) {
            try {
                $pdo = DatabaseModel::connection_DatabaseModel(); //on se connecte à la base
                $this->pdo = $pdo;
            } catch (PDOException $e) {
                die("#=> Error_deleteSoignant: " . $e->getMessage());
            }
        }
    }

    public function getScore()
    {
        if ($this->pdo === null) {
            try {
                $pdo = DatabaseModel::connection_DatabaseModel(); //on se connecte à la base
                $this->pdo = $pdo;
            } catch (PDOException $e) {
                die("#=> Error_getScore: " . $e->getMessage());
            }
        }
    }
}

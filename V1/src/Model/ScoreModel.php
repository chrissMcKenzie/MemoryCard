<?php require_once "./PatientModel.php";

class ScorePatient{

    public function __construct()
    {
    }

    public function getScore($id)
    {
        if ($this->pdo === null) {
            try {
                $pdo = DatabaseModel::connexion(); //on se connecte à la base
                $this->pdo = $pdo;
            } catch (PDOException $e) {
                die("#=> Error_getScore: " . $e->getMessage());
            }
        }
    }
}

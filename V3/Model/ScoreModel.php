<?php require_once './DatabaseModel.php';

class Score_Patient
{

    private $idScore;
    private $idPatient;
    private $scorePatient;
    private $tempsPatient;
    private $victoirePatient;
    private $defaitePatient;
    private $difficultePatient;

    public function __construct($sid, $pscore, $ptemps, $pvictoire, $pdefaite, $pdifficulte, $pid)
    {
        $this->idScore = $sid;
        $this->idPatient = $pid;
        $this->scorePatient = $pscore;
        $this->tempsPatient = $ptemps;
        $this->victoirePatient = $pvictoire;
        $this->defaitePatient = $pdefaite;
        $this->difficultePatient = $pdifficulte;
    }

    public function getIdScore()
    {
        return $this->idScore;
    }
    public function getidPatient()
    {
        return $this->idpatient;
    }
    public function getScorePatient()
    {
        return $this->scorepatient;
    }
    public function getTempPatient()
    {
        return $this->tempsPatient;
    }
    public function getVictoirePatient()
    {
        return $this->victoirePatient;
    }
    public function getDefaitePatient()
    {
        return $this->defaitePatient;
    }
    public function getDifficultePatient()
    {
        return $this->difficultePatient;
    }
}

class ManagerScore
{
    private $ScoreList = array();

    private function getScoreFromBD()
    {
        $pdo = DatabaseModel::connect(); //on se connecte à la base 
        $sql = 'SELECT * FROM Score_Patient ORDER BY id_score ASC'; //on formule notre requete 
        $result = $pdo->query($sql);
        $allRows = $result->fetchAll();

        foreach ($allRows as $row) { //on cree un objet Film avec chaque valeur retournée
            $idScore = $row["id_score"];
            $idPatient = $row["id_patient"];
            $scorePatient = $row["score_patient"];
            $tempsPatient = $row["temps_patient"];
            $victoirePatient = $row["victoire_patient"];
            $defaitePatient = $row["defaite_patient"];
            $difficultePatient = $row["difficulte_patient"];

            $score = new ScorePatient($idScore, $idPatient, $scorePatient, $tempsPatient, $victoirePatient, $defaitePatient, $difficultePatient);
            $this->ScoreList[] = $score;
        }

        $result->closeCursor();
        return $this->ScoreList;
    }

    public function getScore()
    {
        if (count($this->ScoreList) == 0)
            $this->getScoreFromDB();
        return $this->ScoreList;
    }
}

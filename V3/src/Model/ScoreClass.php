<?php
   include_once('./DatabaseModel.php');

   class Score_Patient{

    private $id_score;
    private $id_patient;
    private $score;
    private $temps;
    private $victoire;
    private $defaite;
    private $difficulte;

    public function __construct($sid, $pid, $pscore, $stemps, $svictoire, $sdefaite, $sdifficulte){
        $this->id_score=$sid;
        $this->id_patient=$pid;
        $this->score=$pscore;
        $this->temps=$stemps;
        $this->victoire=$svictoire;
        $this->defaite=$sdefaite;
        $this->difficulte=$sdifficulte;
    }

    public function getIdScore(){
        return $this->id_score;
    }
    public function getidPatient(){
        return $this->id_patient;
    }
    public function getScore(){
        return $this->score;
    }
    public function getTemp(){
        return $this->temps;
    }
    public function getVictoire(){
        return $this->victoire;
    }
    public function getDefaite(){
        return $this->defaite;
    }
    public function getDifficulte(){
        return $this->difficulte;
    }

}

class manageScore{
    private $ScoreList=array();


private function getScoreFromBD(){
    $pdo = DatabaseModel::connect(); //on se connecte à la base 
    $sql = 'SELECT * FROM score_patient ORDER BY id_score ASC'; //on formule notre requete 
    $result = $pdo->query($sql);
    $allRows = $result->fetchAll();

    foreach ($allRows as $row) { //on cree un objet Film avec chaque valeur retournée
         $sid = $row["id_score"];  
         $pid = $row["id_patient"];                                                                                    
         $pscore = $row["score"];
         $stemps = $row["temps"];
         $svictoire = $row["victoire"];
         $sdefaite = $row["defaite"];
         $sdifficulte = $row["difficulte"];
    
        $score = new ScorePatient($sid, $pid, $pscore, $stemps, $svictoire, $sdefaite, $sdifficulte);
        $this->ScoreList[] = $score;
        }

        $result->closeCursor();
        return $this->ScoreList;
}

public function getScore(){
    if ( count($this->ScoreList) == 0)
        $this->getScoreFromDB();
    return $this->ScoreList;
}
public function getScoreFromId($idScore){
    foreach ($this->ScoreList as $score) {
        if ($film->getIdScore() == $idScore)
            return $score;
    }
    return null;
}

}
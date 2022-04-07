<?php
include_once('Model/DatabaseModel.php');

   class Score_Patient{

    private $id_score;
    private $score;
    private $temps;    
    private $niveau;
    private $nb_coup;
    private $id_patient;

    public function __construct($sid,$pscore, $ptemps, $pniveau,$pcoup, $pid ){
        $this->id_score=$sid;
        $this->score=$pscore;
        $this->temps=$ptemps;
        $this->niveau=$pniveau;
        $this->nb_coup=$pcoup;
        $this->id_patient=$pid;
    }

    public function getIdScore(){
        return $this->id_score;
    }
    public function getIdPatient(){
        return $this->id_patient;
    }
    public function getScore(){
        return $this->score;
    }
    public function getTemps(){
        return $this->temps;
    }
    public function getNiveau(){
        return $this->niveau;
    }
    public function getnb_coup(){
        return $this->nb_coup;
    }
}

class manageScore{
    private $ScoreList=array();


private function getScoreFromBD(){
    $pdo = DatabaseModel::connect(); //on se connecte à la base 
    $sql = 'SELECT * FROM score ORDER BY id_score ASC'; //on formule notre requete 
    $result = $pdo->query($sql);
    $allRows = $result->fetchAll();

    foreach ($allRows as $row) { //on cree un objet Film avec chaque valeur retournée
         $sid = $row["id_score"];  
         $pid = $row["id_patient"];                                                                                    
         $ptemps = $row["temps"];
         $pcoup = $row["nb_coup"];
         $pniveau = $row["niveau"];
         $pscore = $row["score"];

        $score = new ScorePatient($sid, $pid, $pscore, $ptemps, $pcoup, $pniveau);
        $this->ScoreList[] = $score;
        }

        $result->closeCursor();
        return $this->ScoreList;
}


function recup_score($SCORE, $SESSIONPAT,$DATE,$DATE2){
    $pdo = DatabaseModel::connect();
    $req="INSERT INTO score ( temps, niveau,nb_coup,id_patient,score,date1) values ('$DATE','$DATE','$SCORE','$SESSIONPAT','$SCORE','$DATE2')";
    $result = $pdo->query($req);
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
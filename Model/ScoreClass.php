<?php
include_once('Model/DatabaseModel.php');

   class Score{

    private $id_score;
    private $temps;    
    private $niveau;
    private $score;    
    private $date;
    private $id_patient;

    public function __construct($sid,$ptemps,$pniveau, $pscore, $pdate, $pid ){
        $this->id_score=$sid;
        $this->temps=$ptemps;        
        $this->niveau=$pniveau;
        $this->score=$pscore;
        $this->date=$pdate;
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
    public function getDate(){
        return $this->date;
    }
}

class manageScore{
    private $ScoreList=array();
    private $scorePatient=array();

    public function getScoreFromBD(){
        $pdo = DatabaseModel::connect(); //on se connecte à la base 
        $sql = 'SELECT * FROM score ORDER BY id_score ASC'; //on formule notre requete 
        $result = $pdo->query($sql);
        $allRows = $result->fetchAll();

        foreach ($allRows as $row) { 
            $sid = $row["id_score"];
            $ptemps = $row["temps"];
            $pniveau = $row["niveau"];
            $pscore = $row["score"];
            $pdate = $row["date_score"];
            $pid = $row["id_patient"];                                                                                    

            $score = new Score($sid,$ptemps,$pniveau, $pscore, $pdate, $pid );
            $this->ScoreList[] = $score;
            }

            $result->closeCursor();
            return $this->ScoreList;
    }

    public function add_score($SCORE,$SESSIONPAT,$DATE,$TIME,$LEVEL){
        $pdo = DatabaseModel::connect();
        $req= $pdo->prepare("INSERT INTO score (temps,niveau,score,date_score,id_patient) values (?,?,?,?,?)");
        $req->execute(array($TIME,$LEVEL,$SCORE,$DATE,$SESSIONPAT));
    }

    public function getScoreFromId($id){
      
        foreach ($this->ScoreList as $score) {
            if ($score->getIdPatient() == $id)
                $this->scorePatient[] = $score;
        }        
        return $this->scorePatient;
    }

}
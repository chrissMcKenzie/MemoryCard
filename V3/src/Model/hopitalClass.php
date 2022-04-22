<?php
include_once('Model/DatabaseModel.php');

   class hopital{

    private $id_hopital;
    private $nom_hopital;
    private $adresse_hopital;    
    private $codePostal_hopital;
    private $ville_hopital;

    public function __construct($hid,$hnom, $hadresse, $hcode,$hville ){
        $this->id_hopital=$hid;
        $this->nom_hopital=$hnom;
        $this->adresse_hopital=$hadresse;
        $this->codePostal_hopital=$hcode;
        $this->ville_hopital=$hville;
    }

    public function getIdhopital(){
        return $this->id_hopital;
    }
    public function getnomhompital(){
        return $this->nom_hopital;
    }
    public function getadressehopital(){
        return $this->adresse_hopital;
    }
    public function getcodehopital(){
        return $this->codePostal_hopital;
    }
    public function getvillehopital(){
        return $this->ville_hopital;
    }
}

class manageHopital{
    private $hopitalList=array();


private function getHopitalFromBD(){
    $pdo = DatabaseModel::connect(); //on se connecte à la base 
    $sql = 'SELECT * FROM hopital ORDER BY id_hopital ASC'; //on formule notre requete 
    $result = $pdo->query($sql);
    $allRows = $result->fetchAll();

    foreach ($allRows as $row) { //on cree un objet Film avec chaque valeur retournée
         $hid = $row["id_hopital"];  
         $hnom = $row["nom_patient"];                                                                                    
         $hadresse = $row["adresse_hopital"];
         $hcode = $row["codePostal_hopital"];
         $hville = $row["ville_hopital"];

        $hopital = new hopital($sid, $pid, $pscore, $ptemps, $pcoup, $pniveau);
        $this->hopitalList[] = $hopital;
        }

        $result->closeCursor();
        return $this->hopitalList;
}


public function gethopitalFromId($id_hopital){
    foreach ($this->hopitalList as $hopital) {
        if ($film->getIdhopital() == $id_hopital)
            return $hopital;
    }
    return null;
}

}
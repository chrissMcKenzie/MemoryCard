<?php 

include_once('Model/DatabaseModel.php');

class Soignant{

        private $id_soignant;
        private $nom_soignant;
        private $prenom_soignant;
        private $datenaissance_soignant;
        private $motdepasse_soignant;
        private $poste_soignant;
        private $mail_soignant;
     
        public function __construct($id, $nom,$prenom,$date,$mp,$poste,$mail){
            $this->id_soignant=$id;
            $this->nom_soignantt=$nom;
            $this->prenom_soignant=$prenom;
            $this->datenaissance_soignant=$date;
            $this->motdepasse_soignant=$mp;
            $this->poste_soignant=$poste;
            $this->mail_soignant=$mail;
        }

        public function getIdSoignant(){
            return $this->id_soignant;
        }
        public function getNomSoignant(){
            return $this->nom_soignant;
        }
        public function getPrenomSoignant(){
            return $this->prenom_soignant;
        }
        public function getDateSoignant(){
            return $this->datenaissance_soignant;
        }
        public function getMpSoignant(){
            return $this->motdepasse_soignant;
        }
        public function getPosteSoignant(){
                return $this->poste_soignant;
        }
        public function getMailSoignant(){
                return $this->mail_soignant;
        }
}

class manageSoignant{

        private $soignantList=array();

        function inscriptionSoignant($NOM,$PRENOM,$DATE,$PWD1,$POSTE,$EMAIL){

                $pdo = DatabaseModel::connect();
                $req= $pdo->prepare("INSERT INTO soignant (id_soignant,nom_soignant, prenom_soignant, datenaissance_soignant, motdepasse_soignant, poste_soignant, mail_soignant) values (NULL,?,?,?,?,?,?)");
                $req->execute(array($NOM,$PRENOM,$DATE,$PWD1,$POSTE,$EMAIL));
                $lastId = $pdo->lastInsertId();
                $soignant= new Soignant($lastId,$NOM,$PRENOM,$DATE,$PWD1,$POSTE,$EMAIL);
                $this->soignantList[] = $soignant;
                return $soignant;
        }
        
        function log($email,$pass){

                $db = DatabaseModel::connect();

                $req = $db->prepare('SELECT id_soignant FROM soignant WHERE mail_soignant = :email AND motdepasse_soignant = :pass');
                $req->execute(array(':email' => $email,':pass' => $pass));
                $resultat = $req->fetch();

                if ($req->rowCount() > 0){
                $_SESSION['mail_soignant'] = $email;
                }
        }

        public function getSoignantFromDB()
        {
            $pdo = DatabaseModel::connect(); //on se connecte à la base 
            $sql = 'SELECT * FROM soignant ORDER BY id_soignant ASC'; //on formule notre requete 
            $result = $pdo->query($sql);
            $allRows = $result->fetchAll();
          
            foreach ($allRows as $row) { //on cree un objet Patient avec chaque valeur retournée
                $id = $row["id_soignant"];
                $nom = $row["nom_soignant"];
                $prenom = $row["prenom_soignant"];
                $date = $row["datenaissance_soignant"];
                $mp = $row["motdepasse_soignant"];
                $poste = $row["poste_soignant"];
                $mail = $row["mail_soignant"];
                $soignant = new Soignant($id,$nom,$prenom,$date,$mp,$poste,$mail);
                $this->soignantList[] = $soignant;
            }
            $result->closeCursor();
            
            return $this->soignantList;
        }
    
        public function getSoignantFromId($id){
            // retourne l'objet Person connaissant son id
            // retourne null si pas trouvée
            foreach ($this->soignantList as $soignant) {
                if ($soignant->getIdSoignant() == $id)
                    return $soignant;
            }
            return null;
        }

        public function getSoignantByEmail($email){
            // retourne l'objet Person connaissant son id
            // retourne null si pas trouvée
            foreach ($this->soignantList as $soignant) {
                if ($soignant->getMailSoignant() == $email)
                    return $soignant;
            }
            return null;
        }


}
?>
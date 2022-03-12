<?php
include_once('connectionSql.php'); //on inclut notre fichier de connection si pas déjà fait

// https://www.copier-coller.com/un-crud-en-php/  
class Film {

    private $idFilm;
    private $name;
    private $personIdList=array(); // id des Person associés au Film

    public function __construct($pid, $pname){
        $this->idFilm = $pid;
        $this->name = $pname;
    }

    public function getIdFilm(){
        return $this->idFilm;
    }
    public function getName(){
        return $this->name;
    }
    public function getPersonIdList(){
        return $this->personIdList;
    }


    public function addPerson($pIdPerson){
        // ajoute un objet Person à personList
        $this->personIdList[] = $pIdPerson;
    }
}

class ManageFilms {
    private $filmList=array();

    public function getFilmsFromDB()
    {
        $pdo = Database::connect(); //on se connecte à la base 
        $sql = 'SELECT * FROM film ORDER BY idFilm ASC'; //on formule notre requete 
        $result = $pdo->query($sql);
        $allRows = $result->fetchAll();

        foreach ($allRows as $row) { //on cree un objet Film avec chaque valeur retournée
            $name = $row["filmName"];
            $id = $row["idFilm"];
            $film = new Film($id,$name);
            $this->filmList[] = $film;
            // il faut renseigner les id des Person éventuels associés au Film
            $sqlPerson = "SELECT idPerson FROM regarder where idFilm = $id"; 
            $resultPerson = $pdo->query($sqlPerson);
            $allRowsPerson = $resultPerson->fetchAll();
            foreach ($allRowsPerson as $rowPerson){
                $idPerson = $rowPerson["idPerson"];
                $film->addPerson($idPerson);
            }
        }
        $result->closeCursor();
        return $this->filmList;

    }
    public function getFilms(){
        if ( count($this->filmList) == 0)
            $this->getFilmsFromDB();
        return $this->filmList;
    }
    public function getFilmFromId($id){
        // retourne l'objet Film connaissant son id
        // retourne null si pas trouvé
        foreach ($this->filmList as $film) {
            if ($film->getIdFilm() == $id)
                return $film;
        }
        return null;
    }
    public function getFilmOffsetFromId($id){
        // retourne le rang dans filmList de l'objet Film connaissant son id
        // retourne -1 si pas trouvée
        $offset = 0;
        foreach ($this->filmList as $film) {
            if ($film->getIdFilm() == $id)
                return $offset;
            $offset ++;
        }
        return -1;
    }

    public function addFilm($pname) {
        // crée un objet Film et une ligne dans la table Film
        // retourne l'objet Film
        if (gettype($pname) != 'string')
            return null;
        $pdo = Database::connect();
        $req = $pdo->prepare("INSERT INTO film (idFilm, filmName) VALUES (NULL, ?)");
        if ($req->execute(array($pname)) == true) {
            echo "Film ajouté $pname"; // le temps du debug
            $lastId = $pdo->lastInsertId();
            $film = new Film($lastId, $pname);
            $this->filmList[] = $film;
            // echo "<br>Add<br>";
            // print_r($this->filmList); // debug
            // echo "<br>";
            return $film;
        }
        else
            return null;
    }

    public function addPersonToFilm($pIdFilm, $pIdPerson){
        // Modifier la table regarder
        
        $pdo = Database::connect();
        $req = $pdo->prepare("INSERT INTO regarder (idFilm, idPerson) VALUES (?, ?)");
        if ($req->execute(array($pIdFilm, $pIdPerson)) == true) {
            // Modifier la liste personIdList de l'objet Film
            $film = $this->getFilmFromId($pIdFilm);
            $film->addPerson($pIdPerson);
        }

    }

    public function deleteFilm($id){
        // supprimer un film connaissant son id
        // retourne true si ok
        $pdo = Database::connect();
        $req = $pdo->prepare("DELETE FROM film WHERE film.idFilm = ?;"); // supprimer en BD
        if ($req->execute(array($id)) == true) {
            // supprimer maintenant l'objet
            $offset = $this->getFilmOffsetFromId($id);
            if ($offset == -1)
                return false;
            unset($this->filmList[$offset]);
            // echo "<br>Delete film $id<br>";
            // print_r($this->filmList); // debug
            // echo "<br>";
            return true;
        }
    }
    public function modifyFilm($pid,$pname) {
        // modifie les données en Bd et dans l'objet 
        // A implémenter
    }

    public function deletePersonInFilms($pidPerson){
        // Dans les objets Film supprime l'idPerson 
        foreach ($this->filmList as $film) {
            $idList = $film->getPersonIdList();
            $idListCopy = $idList; // pour faire la boucle sur une copie
            $offset = 0;
            foreach ($idListCopy as $idPerson){
                if ($idPerson == $pidPerson){
                    unset($idList[$offset]);
                }
                $offset ++;
            }
        }
    }

}

//pour debug
/*$manager = new ManageFilms();
$manager->getFilmsFromDB();
$manager->addFilm("AAZZEE");
$manager->deleteFilm(5);*/
?>
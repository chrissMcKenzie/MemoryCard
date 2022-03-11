<?php
include_once('connectionSql.php'); //on inclut notre fichier de connection 
 
class Person {

    private $idPerson;
    private $name;
    private $firstName;
    private $filmIdList=array(); // id des films associés à la Person

    public function __construct($pid, $pname, $pfirstName){
        $this->idPerson = $pid;
        $this->name = $pname;
        $this->firstName = $pfirstName;
    }

    public function getIdPerson(){
        return $this->idPerson;
    }
    public function getName(){
        return $this->name;
    }
    public function getFisrtName(){
        return $this->firstName;
    }
    public function getFilmIdList(){
        return $this->filmIdList;
    }

    public function addFilm($pIdFilm){
        // ajoute un objet Film à filmList
        $this->filmIdList[] = $pIdFilm;
    }
}

class ManagePersons {
    private $personList=array();
    private $manageFilms;   // pour réaliser l'association Person vers Film

    public function setManageFilms($pManageFilms){
        $this->manageFilms = $pManageFilms;
    }

    public function getPersonsFromDB()
    {
        $pdo = Database::connect(); //on se connecte à la base 
        $sql = 'SELECT * FROM person ORDER BY idPerson ASC'; //on formule notre requete 
        $result = $pdo->query($sql);
        $allRows = $result->fetchAll();

        foreach ($allRows as $row) { //on cree un objet Person avec chaque valeur retournée
            $name = $row["name"];
            $firstName = $row["firstName"];
            $id = $row["idPerson"];
            $person = new Person($id,$name,$firstName);
            $this->personList[] = $person;
            // il faut renseigner les id de films éventuels de la personne
            $sqlFilm = "SELECT idFilm FROM regarder where idPerson = $id"; 
            $resultFilm = $pdo->query($sqlFilm);
            $allRowsFilm = $resultFilm->fetchAll();
            foreach ($allRowsFilm as $rowFilm){
                $idFilm = $rowFilm["idFilm"];
                $person->addFilm($idFilm);
            }
        }
        $result->closeCursor();
        
        return $this->personList;

    }
    public function getPersons(){
        if ( count($this->personList) == 0)
            $this->getPersonsFromDB();
        return $this->personList;
    }
    public function getPersonFromId($id){
        // retourne l'objet Person connaissant son id
        // retourne null si pas trouvée
        foreach ($this->personList as $person) {
            if ($person->getIdPerson() == $id)
                return $person;
        }
        return null;
    }
    public function getPersonOffsetFromId($id){
        // retourne le rang dans personList de l'objet Person connaissant son id
        // retourne -1 si pas trouvée
        $offset = 0;
        foreach ($this->personList as $person) {
            if ($person->getIdPerson() == $id)
                return $offset;
            $offset ++;
        }
        return -1;
    }

    public function addPerson($pname, $pfirstName, $type='Mineur') {
        // crée un objet Person et une ligne dans la table Person
        // retourne l'objet Person
        if (gettype($pname) != 'string' or gettype($pfirstName) != 'string')
            return null;
        $pdo = Database::connect();
        $req = $pdo->prepare("INSERT INTO person (idPerson, name, firstName, type) VALUES (NULL, ?, ?, ?)");
        if ($req->execute(array($pname, $pfirstName, $type)) == true) {
            echo "Personne ajoutée $pname"; // le temps du debug
            $lastId = $pdo->lastInsertId();
            $person = new Person($lastId, $pname, $pfirstName);
            $this->personList[] = $person;
            // echo "<br>Add<br>";
            // print_r($this->personList); // debug
            // echo "<br>";
            return $person;
        }
        else
            return null;
    }

    public function addFilmToPerson($pIdPerson, $pIdFilm){
        // Pour la Person correspondant à $pIdPerson, ajouter le film en BD et dans l'objet Person
        $pdo = Database::connect();
        // Vérifier d'abord que ce film n'est pas déjà affecté à la personne
        $sql = "SELECT * FROM regarder WHERE idFilm=$pIdFilm AND idPerson=$pIdPerson"; //on formule notre requete 
        $result = $pdo->query($sql);
        $allRows = $result->fetchAll();
        if (sizeof($allRows) != 0)
            return; // déjà affecté

        $req = $pdo->prepare("INSERT INTO regarder (idPerson, idFilm) VALUES (?, ?)");
        if ($req->execute(array($pIdPerson, $pIdFilm)) == true) {
            echo "Film ajouté"; // le temps du debug
            $person = $this->getPersonFromId($pIdPerson);
            $person->addFilm($pIdFilm);
        }
    }

    public function deletePerson($pIdPerson){
        // supprimer une personne connaissant son id
        // retourne true si ok
        $pdo = Database::connect();
        // avant de supprimer la personne en BD, il faut d'abord supprimer les liens vers les films
        // dans la table regarder, sinon le serveur BD refuse
        $req = $pdo->prepare("DELETE FROM regarder WHERE regarder.idPerson = ?;"); // supprimer le lien en BD
        if ($req->execute(array($pIdPerson)) == true) {
            $req = $pdo->prepare("DELETE FROM person WHERE person.idPerson = ?;"); // supprimer cette fois la Person en BD
            if ($req->execute(array($pIdPerson)) == true) {
                // supprimer maintenant l'objet
                $offset = $this->getPersonOffsetFromId($pIdPerson);
                if ($offset == -1)
                    return false;
                unset($this->personList[$offset]);
                // echo "<br>Delete<br>";
                // print_r($this->personList); // debug
                // echo "<br>";
                // supprimer l'idPerson coté Film
                $this->manageFilms->deletePersonInFilms($pIdPerson);
                return true;
            }
        }
        return false;
    }
    public function modifyPerson($pid,$pname, $pfirstName) {
        // modifie les données en Bd et dans l'objet 
        // A implémenter
    }

}
/*
$manager = new ManagePersons();
$manager->getPersonsFromDB();
$manager->addPerson("AAZZEE","qqssdd");
$manager->deletePerson(6);
*/
?>
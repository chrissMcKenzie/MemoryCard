<?php

include_once('../model/connectionSql.php');
include_once('../model/Film.class.php');
include_once('../model/Person.class.php');
$managerFilm = new ManageFilms();
$filmList = $managerFilm->getFilmsFromDB();

$managerPerson = new ManagePersons();
$managerPerson->setManageFilms($managerFilm); // pour réaliser l'association de Person vers Film
$personList = $managerPerson->getPersonsFromDB();
$newPerson = $managerPerson->addPerson("BBBBB","qqssdd");
$managerPerson->deletePerson($newPerson->getIdPerson());

?>
<h2> Personnes existantes : </h2>
<?php
foreach($personList as $person){ 
    $name = $person->getName();
    $firstName = $person->getFisrtName();
    $idPerson = $person->getIdPerson();
    echo "$idPerson : $name $firstName<br>";
    $idFilmList = $person->getFilmIdList();
    foreach ($idFilmList as $idFilm){
        $filmName = $managerFilm->getFilmFromId($idFilm)->getName();
        echo "id = $idFilm name=$filmName, ";
    }
    echo "<br>";
}
?>
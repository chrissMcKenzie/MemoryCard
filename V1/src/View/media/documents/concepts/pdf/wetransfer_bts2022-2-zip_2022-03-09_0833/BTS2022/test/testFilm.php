<?php

include_once('../model/connectionSql.php');
include_once('../model/Film.class.php');
$manager = new ManageFilms();
$filmList = $manager->getFilmsFromDB();
$film = $manager->addFilm("AAZZEE");
$manager->deleteFilm($film->getIdFilm()); // detruire ce film

?>
<h2> Films existants : </h2>
<?php
foreach($filmList as $film){ 
    $name = $film->getName();
    $idFilm = $film->getIdFilm();
    echo "$idFilm : $name <br>";
    $idPersonList = $film->getPersonIdList();
    foreach ($idPersonList as $idPerson){
        echo "id = $idPerson ";
    }
    echo "<br>";
}
?>
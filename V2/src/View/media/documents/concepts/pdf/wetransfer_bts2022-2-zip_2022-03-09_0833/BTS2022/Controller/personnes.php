<?php

include_once('./model/connectionSql.php');
include_once('./model/Film.class.php');
include_once('./model/Person.class.php');
$managerFilm = new ManageFilms();
$filmList = $managerFilm->getFilmsFromDB();

$managerPerson = new ManagePersons();
$managerPerson->setManageFilms($managerFilm); // pour réaliser l'association de Person vers Film
$personList = $managerPerson->getPersonsFromDB();
include("view/personneView.php");  // cette vue dispose de $personList
?>





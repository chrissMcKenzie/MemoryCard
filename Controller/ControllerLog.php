<?php


include_once('./model/connectionSql.php');
include_once('./model/Film.class.php');
include_once('./model/Person.class.php');

$verif = $managerPerson->getPersonsFromDB();
include("view/personneView.php");  // cette vue dispose de $personList


?>


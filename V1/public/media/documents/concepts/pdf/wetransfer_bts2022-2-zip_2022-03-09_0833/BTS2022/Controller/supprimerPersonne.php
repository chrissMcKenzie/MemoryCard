<?php
    include_once('./model/connectionSql.php');
    include_once('./model/Film.class.php');
    include_once('./model/Person.class.php');
    $managerFilm = new ManageFilms();
    $filmList = $managerFilm->getFilmsFromDB();

    $managerPerson = new ManagePersons();
    $managerPerson->setManageFilms($managerFilm); // pour réaliser l'association de Person vers Film
    $managerPerson->getPersonsFromDB();

    if(isset($_GET['index'])) {		// l'URL complétée par ?page=7&index=yy fournit l'index Person souhaité
        $index = $_GET['index'];
        $person = $managerPerson ->getPersonFromId($index);
        if ($person != null){
            $managerPerson->deletePerson($index); // enlève de la BD et de la liste
            header("Location: index.php?page=1");
        }
    }
?>
<?php
    include_once('./model/connectionSql.php');
    include_once('./model/Film.class.php');
    include_once('./model/Person.class.php');
    $managerFilm = new ManageFilms();
    $allFilmList = $managerFilm->getFilmsFromDB();

    $managerPerson = new ManagePersons();
    $managerPerson->setManageFilms($managerFilm); // pour réaliser l'association de Person vers Film
    $managerPerson->getPersonsFromDB();

    if(isset($_GET['index'])) {		// l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
        $index = $_GET['index'];
        $person = $managerPerson ->getPersonFromId($index);
        if ($person != null){
            // établir la liste des films associés à cette Person
            $filmList = array();
            $filmIdList = $person->getFilmIdList();
            foreach ($filmIdList as $idFilm){
                $film = $managerFilm->getFilmFromId($idFilm);
                $filmList[] = $film;
            }
            include("view/detailPersonneView.php");  // cette vue dispose de $person, $filmList, $allFilmList
        }
    }
    if (isset($_POST['name'])){
        echo "retour de formulaire";
        // mettre à jour le nom prénom de Person (Non implémenté)
        // mettre à jour le film associé
        // $person est connu à cet endroit
        if (isset($_POST['films'])){
            $idFilm = $_POST['films'];
            $idPerson = $person->getIdPerson();
            $managerPerson->addFilmToPerson($idPerson, $idFilm);
            //header("Location: index.php?page=3&index=$idPerson");  // rappel de la même page cette fois en GET
            echo "<meta http-equiv=\"refresh\" content=\"0\"; url=\"index.php?page=3&index=$idPerson\">"; // rappel de la même page cette fois en GET
        }
    }
?>
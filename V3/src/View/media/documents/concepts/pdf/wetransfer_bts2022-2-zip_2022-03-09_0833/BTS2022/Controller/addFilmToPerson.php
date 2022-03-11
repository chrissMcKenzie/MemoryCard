<?php
    include_once('./model/connectionSql.php');
    include_once('./model/Film.class.php');
    include_once('./model/Person.class.php');
    $managerFilm = new ManageFilms();
    $allFilmList = $managerFilm->getFilmsFromDB();

    $managerPerson = new ManagePersons();
    $managerPerson->setManageFilms($managerFilm); // pour réaliser l'association de Person vers Film
    $managerPerson->getPersonsFromDB();

    if (isset($_POST['name'])){
        $username = $_REQUEST['username'];      // appelé au retour de formulaire
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $usersManager = new ManageUsers();
        $user = $usersManager->verifyUser($username, $email, $password);
        if($user != null){
            $_SESSION['user'] = $user;
            header("Location: index.php");
        }else{
            $message = "Le nom d'utilisateur, mail ou le mot de passe est incorrect.";
        }
    }
    ?>
?>
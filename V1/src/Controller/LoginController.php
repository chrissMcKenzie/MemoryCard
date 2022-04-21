<?php session_start();
include_once './../Model/DatabaseModel.php';
include_once './../Model/SoignantModel.php';
include_once './../Model/PatientModel.php';

    // connexion à la base de données
    if(isset($_POST['submit'])){

        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

        if (!empty($email) && !empty($pass)) {
            $managerpat = new ManagerSoignant();
            $managerpat->log($email,$pass);
            include_once('View/LoginSoignant.php');
        }

    } else{
        include_once('View/LoginSoignant.php');
    }

//!Methode 2
// connexion à la base de données
// if (!empty($email) && !empty($pass)) {
//     $db = DatabaseModel::connect();

//     $req = $db->prepare('SELECT id_soignant FROM soignant WHERE mail_soignant = :email AND motdepasse_soignant = :pass');
//     $req->execute(array(':email' => $email, ':pass' => $pass));
//     $resultat = $req->fetch();

//     if ($req->rowCount() > 0) {
//         $_SESSION['mail_soignant'] = $email;
//         echo '<center><h1>Félicitation vous etes connecté !</h1></center>';
//     } else {
//         echo '<center><h1>Vos identifiants sont incorrects !</h1></center>';
//     }
// }

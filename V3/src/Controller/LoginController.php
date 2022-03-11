<?php        
session_start();

include_once('./model/DatabaseModel.php');
include_once('./model/SoignantClass.php');

    // connexion à la base de données
    if(isset($_POST['submit'])){

        $email=isset($_POST['email']) ? $_POST['email'] : '';
        $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

        if (!empty($email) && !empty($pass)) {    
        
            $managerpat = new manageSoignant();
            $managerpat->log($email,$pass);
            include_once('View/LoginSoignant.php');
        }
    }
    else{
        include_once('View/LoginSoignant.php');
    }

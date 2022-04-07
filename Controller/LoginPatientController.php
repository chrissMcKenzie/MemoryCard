<?php        
session_start();

include_once('./model/DatabaseModel.php');
include_once('./model/PatientClass.php');

    // connexion à la base de données
    if(isset($_POST['submit'])){

        $nom=isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
        $prenom= isset($_POST['pre']) ? htmlspecialchars($_POST['pre']) : '';

        if (!empty($nom) && !empty($prenom)) {    
        
            $managerpat = new managePatient();
            $managerpat->log($nom,$prenom);
            include_once('View/LoginPatient.php');
        }
    }
    else{
        include_once('View/LoginPatient.php');
    }

?>
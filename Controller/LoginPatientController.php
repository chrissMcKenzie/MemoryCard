<?php        
session_start();

include_once('./model/DatabaseModel.php');
include_once('./model/PatientClass.php');

    // connexion à la base de données
    if(isset($_POST['submit'])){

        $nom=isset($_POST['nom']) ? $_POST['nom'] : '';
        $prenom= isset($_POST['pre']) ? $_POST['pre'] : '';

        if (!empty($nom) && !empty($prenom)) {    
        
            $managersoi = new managePatient();
            $managersoi->log($nom,$prenom);
            include_once('View/LoginPatient.php');        }
    }
    else{
        include_once('View/LoginPatient.php');
    }

?>
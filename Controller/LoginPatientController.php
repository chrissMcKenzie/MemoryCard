<?php        
session_start();

include_once('./model/DatabaseModel.php');
include_once('./model/PatientClass.php');

    if(isset($_POST['submit'])){

        $nom=isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
        $prenom= isset($_POST['pre']) ? htmlspecialchars($_POST['pre']) : '';

        if (!empty($nom) && !empty($prenom)) {    
        
            $managerpat = new managePatient();
            $managerpat->log($nom,$prenom);
            echo'<script>alert("Vous etes connecté !");</script>';
            include_once('View/LoginPatient.php');
        }
    }
    else{
        echo"<script>alert('Erreur d'authentification');</script>";
        include_once('View/LoginPatient.php');
    }

?>
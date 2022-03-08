<?php
include_once('./model/DatabaseModel.php');
include_once('./model/PatientClass.php');
include_once('./View/InscriptionPatient.php');

if(isset($_POST['submit']))
{
$NOM=isset($_POST['nom']) ? $_POST['nom'] : '';
$PRENOM=isset($_POST['pre']) ? $_POST['pre'] : '';
$DATE=isset($_POST['daten']) ? $_POST['daten'] : '';
$PATHO=isset($_POST['patho']) ? $_POST['patho'] : '';
$NUMERO=isset($_POST['numero']) ? $_POST['numero'] : '';

    if (empty($_POST['nom']) OR empty($_POST['pre']) OR empty($_POST['daten']) OR empty($_POST['patho']) OR empty($_POST['numero'])) 
    {
        echo'<script>alert("Veuillez remplir toute les cases du formulaire");</script>';
    }

    $managerpatient = new managePatient();
    $managerpatient->enre($NOM,$PRENOM,$DATE,$PATHO,$NUMERO);
    echo'<script>alert("Félicitation vous etes inscrit ! Veuillez vous connecter .");</script>';
    echo "<script type='text/javascript'>document.location.replace('index.php?page=1');</script>";

}


?>
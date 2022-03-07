<?php

include_once('./model/DatabaseModel.php');
include_once('./model/SoignantClass.php');

if(isset($_POST['submit']))
{
$NOM=isset($_POST['nom']) ? $_POST['nom'] : '';
$PRENOM=isset($_POST['pre']) ? $_POST['pre'] : '';
$DATE=isset($_POST['daten']) ? $_POST['daten'] : '';
$PWD=isset($_POST['pwd']) ? $_POST['pwd'] : '';
$POSTE=isset($_POST['poste']) ? $_POST['poste'] : '';
$EMAIL=isset($_POST['eml']) ? $_POST['eml'] : '';


if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $EMAIL))
{
    $email_valide = true;
}

if(empty($EMAIL) OR !isset($email_valide))
{
    echo '<center><h2>L\'adresse e-mail n\'est pas valide </h2></center>';
    include_once('./View/InscriptionSoignant.php');
}
 
// Si tout est ok on enregistre le membre
else
{
$managersoignant = new manageSoignant();
$managersoignant->enre($NOM,$PRENOM,$DATE,$PWD,$POSTE,$EMAIL);

echo '<center><h2>Félicitation vous etes inscrit ! Veuillez vous connecter .</h2></center>';
include_once('./View/InscriptionSoignant.php');
}

}

else{    
    include_once('./View/InscriptionSoignant.php');
}

?>
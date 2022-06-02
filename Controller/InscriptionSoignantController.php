<?php

include_once('./model/DatabaseModel.php');
include_once('./model/SoignantClass.php');
include_once('./View/InscriptionSoignant.php');

if(isset($_POST['submit']))
{
$NOM=isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
$PRENOM=isset($_POST['pre']) ? htmlspecialchars($_POST['pre']) : '';
$DATE=isset($_POST['daten']) ?htmlspecialchars($_POST['daten']) : '';
$PWD1=isset($_POST['pwd1']) ? htmlspecialchars($_POST['pwd1']) : '';
$PWD2=isset($_POST['pwd2']) ? htmlspecialchars($_POST['pwd2']) : '';
$POSTE=isset($_POST['poste']) ? htmlspecialchars($_POST['poste']) : '';
$EMAIL=isset($_POST['eml']) ? htmlspecialchars($_POST['eml']) : '';
$HOPITAL=isset($_POST['hop']) ? htmlspecialchars($_POST['hop']) : '';


    if (empty($_POST['nom']) OR empty($_POST['pre']) OR empty($_POST['daten']) OR empty($_POST['pwd1']) OR empty($_POST['pwd2']) OR empty($_POST['poste']) OR empty($_POST['eml'])) 
    {
        echo'<script>alert("Veuillez remplir toute les cases du formulaire");</script>';
        $v_valide = true;
    }

    if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $EMAIL))
    {
        $email_valide = true;
    }

    else
    {
        echo'<script>alert("Email non conforme");</script>';
    }

    if(!(preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$PWD1))){
        echo'<script>alert("Le mot de passe doit contenir au moin une lettre minuscule, une lettre majuscule, un nombre et un charactere speciale");</script>';
    }

    if(($_POST['pwd1'])==($_POST['pwd2']) )
    {
        $PWD1 = hash('sha1',$PWD1);
        $mp_valide = true;
    }

    else{
        echo'<script>alert("Les mots de passes doivent etre identique");</script>'; 
    }

    if((!isset($v_valide))&&(isset($email_valide))&&(isset($mp_valide))){
    $managersoignant = new manageSoignant();
    $managersoignant->inscriptionSoignant($NOM,$PRENOM,$DATE,$PWD1,$POSTE,$EMAIL);
    echo'<script>alert("Félicitation vous etes inscrit ! Veuillez vous connecter .");</script>';
    echo "<script type='text/javascript'>document.location.replace('index.php?page=1');</script>";

}
}


?>
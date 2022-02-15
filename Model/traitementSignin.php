<?php

include_once('DatabaseModel.php');

$pdo = DatabaseModel::connect();
$NOM=isset($_POST['nom']) ? $_POST['nom'] : '';
$PRENOM=isset($_POST['pre']) ? $_POST['pre'] : '';
$DATE=isset($_POST['date']) ? $_POST['date'] : '';
$PWD=isset($_POST['pwd']) ? $_POST['pwd'] : '';
$POSTE=isset($_POST['poste']) ? $_POST['poste'] : '';
$EMAIL=isset($_POST['eml']) ? $_POST['eml'] : '';

$req="INSERT INTO soignant (nom_soignant, prenom_soignant, datenaissance_soignant, motdepasse_soignant, poste_soignant, mail_soignant) values ('$NOM','$PRENOM','$DATE','$PWD','$POSTE','$EMAIL')";
$result = $pdo->query($req);

?>


<!DOCTYPE html>
<html lang="fr">
    <center><h1>Félicitation vous etes inscrit !</h1></center>
</html>

<style>
.patient{
        display: inline-block;
        background-color: #7b38d8;
        border-radius: 10px;
        border: 4px double #cccccc;
        color: #eeeeee;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 200px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }
</style>
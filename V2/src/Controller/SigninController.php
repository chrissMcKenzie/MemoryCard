<?php include_once './../Model/DatabaseModel.php';
include_once './../Model/SoignantModel.php';
include_once './../Model/PatientModel.php';


if (isset($_POST['submit'])) {
    $NOM = isset($_POST['nom']) ? $_POST['nom'] : '';
    $PRENOM = isset($_POST['pre']) ? $_POST['pre'] : '';
    $DATE = isset($_POST['daten']) ? $_POST['daten'] : '';
    $PWD = isset($_POST['pwd']) ? $_POST['pwd'] : '';
    $POSTE = isset($_POST['poste']) ? $_POST['poste'] : '';
    $EMAIL = isset($_POST['eml']) ? $_POST['eml'] : '';

    // if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $EMAIL)) {
    //     $email_valide = true;
    // }
    if (!filter_var($EMAIL, FILTER_VALIDATE_EMAIL)) {
        $email_valide = true;
    }

    if (empty($EMAIL) or !isset($email_valide)) {
        echo "<center><h2>L'adresse e-mail n'est pas valide </h2></center>";
        include_once './../View/auth/SigninSoignantView.php';
    } else { // Si tout est ok on enregistre le membre
        $managersoignant = new ManageSoignant();
        $managersoignant->enregistrementInBD($NOM, $PRENOM, $DATE, $PWD, $POSTE, $EMAIL);
        echo "<center><h2>Félicitation vous etes inscrit ! Veuillez vous connecter .</h2></center>";
        include_once './../View/auth/SigninSoignantView.php';
    }
} else {
    echo "<center><h2>Veilliez-vous inscrire </h2></center>";
    include_once './../View/auth/SigninSoignantView.php';
}


?>

<!-- <!DOCTYPE html>
<html lang="fr">
<center>
    <h1>Félicitation vous etes inscrit !</h1>
</center>

</html>

<style>
    .patient {
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
</style> -->
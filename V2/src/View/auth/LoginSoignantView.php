<?php //include_once './../../Controller/LoginController.php';
?>

<!DOCTYPE html>
<html lang="fr">

<?php
if (isset($_SESSION['mail_soignant'])) {
    echo "<center > Vous etes connecté en tant que : " . $_SESSION['mail_soignant'] . "</center>";
    include_once('./View/OrganisationAdminSession/NavBar.php');

?>

<?php
} else {
?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <!-- CSS LINKPACK -->
        <link rel="stylesheet" href="./../pages/css/LoginSoignantView.css">
        <!-- <script src="./Login.js" defer></script> -->
    </head>

    <body>
        <header id="Header">
            <section class="container">
                <!-- <div>
                    <img src="View/assets/soignant.png" id="img1">
                </div> -->
            </section>

        </header>
        <br>

        <main id="Main">
            <section class="container">
                <h1>Connexion</h1>
            </section>

            <section class="container">
                <form id="formulaire" method="POST">
                    <label for="Email"><b>Email:</b><i>*</i></label>
                    <input type="text" id="Email" name="email" placeholder="Email ?" required>
                    <br>
                    <label for="MotDePasse"><b>Mot de passe:</b><i>*</i></label>
                    <input type="password" id="MotDePasse" name="pass" placeholder="password ?" required>
                    <br>
                    <button type="submit" name="submit" id="Connexion"><b>Connexion</b></button>
                    </div>
                    <div class="Option">
                        <a href="./SigninSoignantView.php">Inscription</a>
                        <a href="./ForgotPasswordView.php">Mot De Passe Oublié ?</a>
                        <!-- <a href="index.php?page=LoginSoignant">Inscription</a>
                        <a href="index.php?page=Forgot">Mot De Passe Oublié ?</a> -->
                    </div>
                </form>
            </section>
        </main>

        <br>
    </body>

<?php

}
?>

</html>
<?php //require_once './template/TemplateView.php';  
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/View/pages/css/ForgotPasswordView.css">

</head>


<body style="background-color: gray;">
    <header id="Header">
        <!-- <section class="container">
      <div>
        <img src="View/assets/patient.png" id="img2">
      </div>
    </section> -->

    </header>

    <main id="Main">
        <section class="container">
            <h1 id="H1">Nouveau mot de passe</h1>
        </section>

        <form id="formulaire" method="POST">
            <label for="Email"><b>Email:</b><i>*</i></label>
            <input type="text" id="Email" name="email" placeholder="Email ?" required>
            <br>
            <button type="submit" name="submit" id="Connexion"><b>Connexion</b></button>
            </div>
            <div class="Option">
                <a href="index.php?page=SigninSoignant">Inscription</a>
                <a href="index.php?page=Accueil">ACCUEIL</a>
            </div>
        </form>

    </main>

    <br>
    <footer id="Footer">
        <section class="container">
            <div>Copyright © 2020-2021 www.chrissMcKenzie.com. Tous Droits Réservés</div>
            <div>Codeur, Développeur (c) 2020 chrissMcKenzie.com</div>
        </section>
    </footer>
</body>

</html>
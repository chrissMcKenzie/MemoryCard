<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Admin</title>
    <!-- CSS LINKPACK -->
    <!-- <link rel="stylesheet" href="./Admin.css"> -->
    <!-- <script src="./Admin.js" defer></script> -->
    <!-- <script src="./Login.js"></script> -->


</head>

<body>
    <header id="Header">
        <section class="container">
            <div class="Menu">
                <img src="../../media/images/Logo_SessionAdmin.png" height="200px" alt="Logo Session Admin">
                <ul class="Sous_Menu">
                    <li>
                        <a href="./Home/Home.html">Home</a>
                        <hr>
                    </li>
                    <li>
                        <a href="./Home/Jeux/MemoryCard.html">Jeux</a>
                        <hr>
                    </li>
                    <li>
                        <a href="./Home/Chambre/Chambre.html">Chambre</a>
                        <hr>
                    </li>
                    <li>
                        <a href="./Home/Labo/index.teste.php">Teste</a>
                    </li>
                </ul>
            </div>
            <div class="profile">
                <img src="../../media/images/chrissMcKenzie - CarteDeVisite [940x520].png" width="100px" height="70px" alt="Logo Session Admin">
            </div>
        </section>

    </header>
    <br>

    <main id="Main">
        <section class="container">
            <scrip>if()
                <h1 id="H1">Connexion à la Session Admin</h1>
            </scrip>
        </section>

        <section class="container">
            <div id="formulaire">
                <label for="Email"><b>Email:</b></label>
                <input type="text" id="Email" placeholder="Email ?" required>
                <br>
                <label for="MotDePasse"><b>Mot de passe:</b></label>
                <input type="password" id="MotDePasse" placeholder="password ?" required>
                <br>

                <button type="submit" id="Connexion"><b>Connexion</b></button>
            </div>
            <button type="submit" id="Deconnexion"><b>Deconnexion</b></button>

        </section>

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
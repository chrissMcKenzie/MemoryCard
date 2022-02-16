<?php //require_once './template/TemplateView.php';
session_start();
?>

<!DOCTYPE html>
<html lang="fr">


<?php
if (isset($_SESSION['mail_soignant'])) {
    echo "<center> Vous etes connecté en tant que : " . $_SESSION['mail_soignant'] . "</center";
?>

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

    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
        }

        html {
            width: 100%;
            height: 100%;
        }

        body {
            /* width: 100%; height: 100%; */
            /* background: url('../../media/images/Background_Login0.jpeg') repeat space; */
            background: url("../../media/images/Background_Login1.jpeg") repeat-y;
            background-position: left;
            /* background-size: cover; */
            background-color: black;
            color: white;
        }

        header,
        main,
        footer {
            /* width:500px; */
            margin: 0 auto;
            margin-bottom: 0%;
            padding: 3%;
            width: 50%;
            height: 12%;
            text-align: center;
            font-size: 32px;
        }

        header {
            display: flex;
            margin: 1%;
            margin-left: 0%;
        }

        .Menu {
            display: block;
            position: absolute;
            top: 1%;
            left: 3%;
        }

        .Sous_Menu {
            background-color: black;
            text-shadow: 3px 2px 2px blue;
            color: white;
        }

        .Sous_Menu a {
            color: white;
        }

        .profile {
            display: block;
            position: absolute;
            top: 1%;
            right: 1%;
        }

        h1 {
            text-align: center;
        }

        main {
            display: block;
            margin-top: -6%;
            text-align: left;
        }

        footer {
            display: block;
            position: absolute;
            left: 25%;
            bottom: 0%;
            padding-top: 15%;
            width: 600px;
            font-size: 21px;
        }

        /* Full-width inputs */
        input[type="text"],
        input[type="password"] {
            display: inline-block;
            margin: 8px 0;
            padding: 12px 20px;
            width: 100%;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button[type="submit"] {
            margin: 8px 0;
            padding: 14px 20px;
            width: 100%;
            background-color: red;
            border: none;
            font-size: 21px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            border: 2px solid #53af57;
        }
    </style>

    <body>
        <header id="Header">
            <section class="container">
                <div class="Menu">
                    <img src="./media/images/Logo_SessionAdmin.png" height="200px" alt="Logo Session Admin">
                    <ul class="Sous_Menu">
                        <li>
                            <a href="./Home/Home.php">Home</a>
                            <hr>
                        </li>
                        <li>
                            <a href="./Home/Jeux/View/JeuxView.php">Jeux</a>
                            <hr>
                        </li>
                        <li>
                            <a href="./Home/Bedroom/Chambre.php">Chambre</a>
                            <hr>
                        </li>
                        <li>
                            <a href="./Home/Labo/index.teste.php">Teste</a>
                        </li>
                    </ul>
                </div>
                <div class="profile">
                    <img src="./media/images/chrissMcKenzie - CarteDeVisite [940x520].png" width="100px" height="70px" alt="Logo Session Admin">
                </div>
            </section>

        </header>
        <br>

        <main id="Main">
            <section class="container">
                <h1 id="H1">Connexion à la Session Admin</h1>

            </section>

            <section class="container">
                <div id="formulaire" action="Admin.php" method="POST">
                    <label for="Email"><b>Email:</b></label>
                    <input type="text" id="Email" placeholder="Email ?" required>
                    <br>
                    <label for="MotDePasse"><b>Mot de passe:</b></label>
                    <input type="password" id="MotDePasse" placeholder="password ?" required>
                    <br>

                    <button type="submit" id="Connexion"><b>Connexion</b></button>
                </div>
                <button type="submit" id="Deconnexion" onclick="window.location.href = 'index.php?page=6';"><b>Deconnexion</b></button>

            </section>

        </main>

        <br>
        <footer id="Footer">
            <section class="container">
                <div>Copyright © 2020-2021 www.chrissMcKenzie.com. Tous Droits Réservés</div>
                <div>Codeur, Développeur (c) 2020 chrissMcKenzie.com</div>
            </section>
        </footer>

        <script type="text/javascript">
            formulaire.style.display = "none" // let formulaire = document.getElementById("formulaire")

            // const pseudo = "";
            if (localStorage.getItem("Email") && localStorage.getItem("MotDePasse")) {
                if (localStorage.pseudo != null) {
                    const pseudo = localStorage.pseudo
                    H1.innerHTML = `Bonjour <br> ${pseudo}`
                } else {
                    const pseudo = prompt("Entrez votre pseudo")
                    localStorage.pseudo = pseudo // local = JSON.parse(localStorage.getItem("Email"))
                    H1.innerHTML = `Bonjour <br> ${pseudo}`
                }

            }

            /*  Deconnexion.onclick = () => {
            document.location.pathname = "model/logout.php"
            localStorage.clear()
        }
    */
            //document.querySelector(h1).innerText = `${Email}`

            //chrissMcKenzie.IT.Agence@gmail.com
        </script>
    </body>

</html>
<?php
} else {
?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connexion</title>
        <!-- CSS LINKPACK -->
        <!-- <link rel="stylesheet" href="./Login.css"> -->
        <!-- <script src="./Login.js" defer></script> -->
    </head>

    <body>
        <header id="Header">
            <section class="container">
                <div>
                    <!-- <img src="../../media/images/Logo_SessionAdmin.png" alt="Logo Session Admin"> -->
                </div>
            </section>

        </header>
        <br>

        <main id="Main">
            <section class="container">
                <h1>Connexion</h1>
            </section>

            <section class="container">
                <form id="formulaire" action="Model/traitementLogin.php" method="POST">
                    <label for="Email"><b>Email:</b><i>*</i></label>
                    <input type="text" id="Email" name="email" placeholder="Email ?" required>
                    <br>
                    <label for="MotDePasse"><b>Mot de passe:</b><i>*</i></label>
                    <input type="password" id="MotDePasse" name="pass" placeholder="password ?" required>
                    <br>
                    <button type="submit" name="submit" id="Connexion"><b>Connexion</b></button>
                    </div>
                    <div class="Option">
                        <a href="index.php?page=2">Inscription</a>
                        <a href="index.php?page=3">Mot De Passe Oublié ?</a>
                </form>
            </section>

        </main>

        <br>
        <footer id="Footer">
            <section class="container">
                <div>Copyright © 2021-2022 www.chrissMcKenzie.com. Tous Droits Réservés</div>
                <div>Codeur, Développeur (c) 2021 chrissMcKenzie.com</div>
            </section>
        </footer>

    </body>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html {
            width: 100%;
            height: 100%;
        }

        body {
            /* width: 100%; height: 100%; */
            /* background: url('../../media/images/Background_Login0.jpeg') repeat space; */
            background: url('./media/images/Background_Login0.jpeg') no-repeat;
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.1);
        }

        header,
        main,
        footer {
            /* width:500px; */
            margin: 0 auto;
            margin-bottom: 0%;
            padding: 3%;
            width: 50%;
            height: 12%;
            text-align: center;
            font-size: 32px;

        }

        header {
            margin: 1%;
            margin-left: -10%;
        }

        h1 {
            text-align: center;
            margin-bottom: 2%;
            font-size: 64px;
        }

        main {
            margin-top: -6%;
            text-align: left;
        }

        footer {
            padding-top: 6%;
            width: 600px;
            font-size: 21px;
        }


        /* Full-width inputs */
        input[type=text],
        input[type=password] {
            display: inline-block;
            margin: 8px 0;
            padding: 12px 20px;
            width: 100%;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: black;
            color: white;
        }

        button[type=submit] {
            margin: 8px 0;
            padding: 14px 20px;
            width: 100%;
            border: none;
            font-size: 21px;
            cursor: pointer;

        }

        button[type=submit]:hover {
            border: 2px solid #53af57;
            color: #53af57;
        }

        .Option {
            text-align: center;
            margin-top: -2%;
        }

        .Option a {
            color: black;
            font-size: 20px;

        }

        .Option a:nth-child(2) {
            margin-left: 3%;
            font-size: 19px;
        }
    </style>
<?php

}
?>



</html>
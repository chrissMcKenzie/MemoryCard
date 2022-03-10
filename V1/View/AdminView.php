<?php session_start();
include_once './../Model/DatabaseModel.php';
include_once './../Model/PatientModel.php';
include_once './../Model/SoignantModel.php';
//require_once './template/TemplateView.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Admin</title>
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

    table {
        margin-top: 0%;
        margin-left: -7px;
        font-size: 18.5px;
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

    h1,
    h2 {
        text-align: center;
    }

    h1 {
        font-style: italic;
    }

    h2 {
        color: #66FF00;
        margin-top: 3%;
        font-size: 32px;
    }

    li:hover {
        background-color: white;
    }

    li a:hover {
        color: black;
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
                <img src="./View/media/images/Logo_SessionAdmin.png" height="200px" alt="Logo Session Admin">
                <ul class="Sous_Menu">
                    <li>
                        <a href="./Home/Home.php">Home</a>
                        <hr>
                    </li>
                    <li>
                        <a href="index.php?page=JeuxView">Jeux</a>
                        <hr>
                    </li>
                    <li>
                        <a href="index.php?page=ChambreView">Chambre</a>
                        <hr>
                    </li>
                    <li>
                        <a href="./Home/Labo/index.teste.php">Teste</a>
                    </li>
                </ul>
            </div>
            <div class="profile">
                <img src="./View/media/images/PhotoDeProfil_Admin1.png" width="100px" height="70px" alt="Logo Session Admin">
            </div>
        </section>

    </header>
    <br>

    <main id="Main">
        <section class="container">
            <h1 id="H1">Connexion à la Session Admin</h1>

        </section>

        <section class="container">
            <form action="index.php?page=AccueilView" method="POST">
                <button type="submit" name="Deconnexion"><b>Deconnexion</b></button>
            </form>

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

        Deconnexion.onclick = () => {
            document.location.pathname = "model/logout.php"
            localStorage.clear()
        }

        //document.querySelector(h1).innerText = `${Email}`

        //chrissMcKenzie.IT.Agence@gmail.com
    </script>
</body>

</html>
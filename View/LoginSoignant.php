<!DOCTYPE html>
<html lang="fr">

<?php
    if(isset($_SESSION['mail_soignant']))
    {        
        echo"<center > Vous etes connecté en tant que : " . $_SESSION['mail_soignant']. "</center>";
        include_once('./View/OrganisationAdminSession/NavBar.php');       
        
?>

<?php
    }
    else{
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
            <img src="View/assets/soignant.png" id="img1">
            </div>
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
                <a href="index.php?page=6">Inscription</a>
                <a href="index.php?page=3">Mot De Passe Oublié ?</a>
            </form>
        </section>
    </main>

    <?php
        include_once('controller/LoginController.php');
    ?>
    <br>
</body>

<style>
    #img1{
    height: 50px;
    width: 50px;
   margin-left:110px;
}
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
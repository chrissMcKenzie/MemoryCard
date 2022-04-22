<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserView</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
    }

    pre {
        margin: 0%;
        margin-top: -10%;
        padding: 0%;
        font-size: small;
        color: #66FF00;
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
        background-color: blue;
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

    .Menu{
        display:flex;
    }
</style>

<body>
    <header id="Header">
        <section class="container">
            
            
            
        </section>

    </header>
    <br>

    <main id="Main">
        <section class="container">
            <pre>
                
            </pre>
            <h1 id="H1">
                <?php 
                    echo"<center> Bienvenue dans votre espace</center>";
                ?>
            </h1>

        </section>
    </main>
<div class="Menu">
                <div>
                        <a href="index.php?page=12">Jeux</a>
</div>
<div>
                    <a class="btn" id="centerbar-elem" href="Controller/Logout.php" >Déconnexion</a>
                    </div>

            </div>
    <br>
  
</body>

</html>
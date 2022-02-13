<?php require_once './template/TemplateView.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
</head>

<style>
    main {
        margin-top: 3%;
        margin-left: 0%;
        margin-bottom: 3%;
        padding: 1%;

        text-align: center;
    }


    /* .logotitle {
        display: flex;
        margin: 50px 500px 0px 500px;
    } */

    h1 {
        font-family: impact;
        font-size: 40px;
        margin-left: -30px;

    }

    h2 {
        font-size: 50px;
        margin-left: -80px;
    }

    .titre {
        position: absolute;
        font-size: 50px;
        font-family: impact;
        margin-left: 80px;
    }

    .soignant {
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

    button {
        width: 500px;
        height: 80px;
        font-style: arial;
    }

    .buttons {
        position: absolute;
        margin: 200px 100px 100px 150px;
    }
</style>


<body>
    <main class="container-fluid mx-0">
        <section>
            <div class="logotitle">
                <h1 class="titre">Bienvenue sur MemoryCard </h1>
                <img class="logo" src="./media/images/téléchargement.png">

                <div class="buttons">

                    <button class=patient onclick="window.location.href = 'index.php?page=7';"> Patient </button>
                    <button class=soignant onclick="window.location.href = 'index.php?page=1';"> Soignant </button>
                    <h2>Veuillez choisir votre espace</h2>
                </div>
            </div>
        </section>
    </main>

    <!-- <footer>
        <h2></h2>
    </footer> -->
</body>

</html>
<?php //require_once './template/TemplateView.php'; 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- XAMP server -->
    <!-- <link rel="stylesheet" href="./src/View/pages/css/AccueilView.css"> -->
    <!-- php local server -->
    <link rel="stylesheet" href="./pages/css/AccueilView.css">

</head>

<body>
    <main class="container-fluid mx-0">
        <section>
            <div class="card">
                <div class="card__inner">
                    <div class="card__face card__face--front">
                        <span>Bienvenue sur MEMORY CARD !</span>
                        <!-- XAMP server -->
                        <!-- <img src="./src/View/media/images/LogoGif.gif" id='gif'> -->
                        <img src="./media/images/LogoGif.gif" id='gif'>

                    </div>
                    <div class="card__face card__face--back">
                        <div class="logotitle">
                            <div class="buts">
                                <div class="but1">
                                    <!-- <img src="./src/View/media/images/patient.png" id="img2">
                                    <button class="patient" onclick="window.location.href = 'index.php?page=SigninPatient';">Patient</button> -->
                                    <img src="./media/images/patient.png" id="img2">
                                    <button class="patient" onclick="window.location.href = '/src/View/auth/SigninPatientView.php';">Patient</button>
                                </div>
                                <div class="but2">
                                    <!-- <img src="./src/View/media/images/soignant.png" id="img1">
                                    <button class="soignant" onclick="window.location.href = 'index.php?page=SigninSoignant';">Soignant</button> -->
                                    <img src="./media/images/soignant.png" id="img1">
                                    <button class="soignant" onclick="window.location.href = '/src/View/auth/SigninSoignantView.php';">Soignant</button>
                                </div>
                            </div>
                            <span class="spacetitle">Veuillez choisir votre espace</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <script type="text/javascript">
        const card = document.querySelector(".card__inner");
        card.addEventListener("click", function(e) {
            card.classList.toggle('is-flipped');
        });
    </script>
</body>

</html>
<?php //session_start();
//include_once './../Model/DatabaseModel.php';
//include_once './../Model/SoignantModel.php';
//include_once './../Model/PatientModel.php';

//require_once './template/TemplateView.php';

// $PDO = DatabaseModel::connect();

// $SQL = "SELECT * FROM Patient";
// $REQUÊTE = $PDO->query($SQL);
// $RESULTAT_PATIENTS = $REQUÊTE->fetchAll();

// $SQL = "SELECT * FROM Score";
// $REQUÊTE = $PDO->query($SQL);
// $RESULTAT_SCORES = $REQUÊTE->fetchAll();

// foreach ($allRows as $row) { //on cree un objet Person avec chaque valeur retournée
//     $id = $row["id_soignant"];
//     $nom = $row["nom_soignant"];
//     $prenom = $row["prenom_soignant"];
//     $date = $row["datenaissance_soignant"];
//     $mp = $row["motdepasse_soignant"];
//     $poste = $row["poste_soignant"];
//     $mail = $row["mail_soignant"];
// }

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Admin</title>
    <link rel="stylesheet" href="./src/View/pages/css/AdminView.css">
    <!-- php local server -->
    <link rel="stylesheet" href="./pages/css/AdminView.css">

    <!-- Bootstrap CSS -->
    <?php //if (!empty($REQUÊTE)) : 
    ?>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <?php //endif 
    ?>

</head>

<body>
    <header id="Header">
        <section class="container">
            <div class="Menu">
                <!-- <img src="./src/View/media/images/Logo_SessionAdmin.png" height="200px" alt="Logo Session Admin"> -->
                <img src="./media/images//PhotoDeProfil_Admin1.png" height="150px" alt="Logo Session Admin">
                <ul class="Sous_Menu">
                    <li>
                        <a href="index.php?page=Accueil">Home</a>
                        <hr>
                    </li>
                    <li>
                        <a href="index.php?page=Jeux">Jeux</a>
                        <hr>
                    </li>
                    <li>
                        <a href="index.php?page=Chambre">Chambre</a>
                        <hr>
                    </li>
                    <li>
                        <a href="./../../../../../Labo/index.teste.php">Teste</a>
                        <a href="./../Model/test/testTables.php">TesteTables</a>
                    </li>
                </ul>
            </div>
            <div class="profile">
                <img src="./src/View/media/images/PhotoDeProfil_Admin1.png" width="100px" height="70px" alt="Logo Session Admin">
                <!-- <img src="./media/images/PhotoDeProfil_Admin0.jpeg" width="100px" height="70px" alt="Logo Session Admin"> -->
            </div>
        </section>

    </header>
    <br>

    <main id="Main">
        <section class="container">
            <h1 id="H1">Connexion à la Session Admin</h1>

        </section>

        <section>
            <div>
                <h2>GESTIONNAIRE DE PATIENTS</h2>
                <table class="table table-dark table-hover" style="border-style: double double double double;" border="1">
                    <thead>
                        <tr>
                            <?php $Entête = ["ID", "NOM", "PRENOM", "DATENASSANCE", "PATHOLOGIE", "TELEPHONE", "CONTRÔLE"];
                            foreach ($Entête as $champ) {
                                echo "<th scope='col'>$champ</th>";
                            }
                            ?>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($RESULTAT_PATIENTS as $DATA) : ?>
                            <tr class="table-active" style="text-align: center;">
                                <th scope="row"><?php echo $DATA['id_patient'] ?></th>
                                <td style="color: white;"><?php echo $DATA['nom_patient']; ?></td>
                                <td style="color: white;"><?php echo $DATA['prenom_patient']; ?></td>
                                <td class="Title" style="text-align: left;"><?php echo $DATA['datenaissance_patient']; ?></td>
                                <td style="padding: 0px 2px; color: white;"><?php echo $DATA['pathologie_patient']; ?></td>
                                <td style="padding: 0px 2px; color: red;"><?php echo $DATA['telephone_patient']; ?> Coups</td>
                                <td><button class="UPDATE">UPDATE</button> <button class="DELETE">DELETE</button></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>

                </table>
            </div>
            <div>
                <h2>SCORE DES PATIENTS</h2>
                <table class="table table-dark table-hover" style="border-style: double double double double;" border="1">
                    <thead>
                        <tr>
                            <?php $Entête = ["ID_SCORE", "TEMPS", "NIVEAU", "COUPS", "ID_PATIENT", "CONTRÔLE"];
                            foreach ($Entête as $champ) {
                                echo "<th scope='col'>$champ</th>";
                            }
                            ?>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($RESULTAT_SCORES as $DATA) : ?>
                            <tr class="table-active" style="text-align: center;">
                                <th scope="row"><?php echo $DATA['id_score'] ?></th>
                                <td style="color: white;"><?php echo $DATA['temps']; ?></td>
                                <td style="color: white;"><?php echo $DATA['niveau']; ?></td>
                                <td class="Title" style="text-align: left;"><?php echo $DATA['nb_coup']; ?></td>
                                <td><?php echo $DATA['id_patient']; ?></td>
                                <td><button class="UPDATE">UPDATE</button> <button class="DELETE">DELETE</button></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>

                </table>
            </div>
        </section>

        <section class="container">
            <form action="index.php?page=Accueil" method="POST">
                <button type="submit" name="Deconnexion"><b>Deconnexion</b></button>
            </form>

        </section>

    </main>

    <br>
    <footer id="Footer">
        <!-- <section class="container">
            <div>Copyright © 2020-2021 www.chrissMcKenzie.com. Tous Droits Réservés</div>
            <div>Codeur, Développeur (c) 2020 chrissMcKenzie.com</div>
        </section> -->
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
            document.location.pathname = "index.php?page=Logout"
            localStorage.clear()
        }

        //document.querySelector(h1).innerText = `${Email}`

        //chrissMcKenzie.IT.Agence@gmail.com
    </script>
</body>

</html>
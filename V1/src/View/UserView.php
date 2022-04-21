<?php //session_start();
include_once './../Model/DatabaseModel.php';
//include_once './../Model/PatientModel.php';

$PDO = DatabaseModel::connect();
$SQL = "SELECT * FROM Score WHERE id_score = 1";
$REQUÊTE = $PDO->query($SQL);
$RESULTAT = $REQUÊTE->fetchAll();

//$Patient = new ManagePatient();
//$listePatients = $Patient->getPatientFromDB();

// function getPDOConnexion(){
//     $HOST = 'localhost';
//     $DBNAME = 'bts2a_MemoryCardModel';
//     $DSN = "mysql:host=$HOST; dbname=$DBNAME";
//     $USER = 'root';
//     $PASSWORD = '';
//     $OPTIONS = [
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//     ];

//     try {
//         $DB_CONNEXION = new PDO($DSN, $USER, $PASSWORD, $OPTIONS);
//     } catch (PDOException $e) {
//         die("ErrorConnexion: " . $e->getMessage());
//     }

//     return $DB_CONNEXION;
// }

// function listePatients(){
//     $PDOConnexion = getPDOConnexion();
//     $SQL_CODE = "SELECT * FROM Patient";
//     $SQL_REQUÊTE = $PDOConnexion->query($SQL_CODE);
//     $SQL_RESULTAT = $SQL_REQUÊTE->fetchAll();

//     // foreach ($SQL_RESULTAT as $DATA) {
//     //     foreach ($DATA as $champ => $value) {
//     //         if (!is_int($champ)) {
//     //             echo "<th scope='col'>{$champ}</th>";
//     //         }
//     //     }
//     //     echo "<tr class='table-active' style='text-align: center;'>{$DATA['id_patient']}</tr>";
//     // }

//     return $SQL_RESULTAT;
// }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserView</title>
    <link rel="stylesheet" href="./src/View/pages/css/UserView.css">
    <!-- php local server -->
    <link rel="stylesheet" href="./pages/css/UserView.css">
</head>


<body>
    <header id="Header">
        <section class="container">
            <div class="Menu">
                <!-- <img src="./src/View/media/images/Logo_SessionAdmin.png" height="200px" alt="Logo Session Admin"> -->
                <img src="./media/images/PhotoDeProfil_Admin1.png" height="150px" alt="Logo Session Admin">
                <ul class="Sous_Menu">
                    <li>
                        <a href="./JeuxView.php">Jeux</a>
                        <hr>
                    </li>
                </ul>
            </div>
            <div class="profile">
                <img src="./View/media/images/Logo_SessionAdmin.png" width="100px" height="70px" alt="Logo Session Admin">
            </div>
        </section>

    </header>
    <br>

    <main id="Main">
        <section class="container">
            <pre>
                <?php //echo "OK";
                //var_dump($PDO);
                //var_dump($patientsListe);
                //print_r(listePatients());
                ?>
            </pre>
            <h1 id="H1">Connexion à la Session User</h1>

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
                        <?php foreach ($RESULTAT as $DATA) : ?>
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
            <!-- XAMP Server-->
            <form method="POST" action="./AccueilView.php">
                <button type="submit" name="Deconnexion"><b>Deconnexion</b></button>
            </form>
            <!-- XAMP Server-->
            <!-- <form method="POST" action="index.php?page=Accueil">
                <button type="submit" name="Deconnexion"><b>Deconnexion</b></button>
            </form> -->

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
        //formulaire.style.display = "none" // let formulaire = document.getElementById("formulaire")

        // const pseudo = "";
        // if (localStorage.getItem("Email") && localStorage.getItem("MotDePasse")) {
        //     if (localStorage.pseudo != null) {
        //         const pseudo = localStorage.pseudo
        //         H1.innerHTML = `Bonjour <br> ${pseudo}`
        //     } else {
        //         const pseudo = prompt("Entrez votre pseudo")
        //         localStorage.pseudo = pseudo // local = JSON.parse(localStorage.getItem("Email"))
        //         H1.innerHTML = `Bonjour <br> ${pseudo}`
        //     }

        // }

        // Deconnexion.onclick = () => {
        //     document.location.pathname = "model/logout.php"
        //     localStorage.clear()
        // }

        //document.querySelector(h1).innerText = `${Email}`

        //chrissMcKenzie.IT.Agence@gmail.com
    </script>
</body>

</html>
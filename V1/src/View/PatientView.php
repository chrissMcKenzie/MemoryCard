<?php //session_save_path(); include_once "./../Controller/PatientController.php";
session_start();
require_once './../Model/DatabaseModel.php';

//include_once './../Model/PatientModel.php';

//require_once './template/TemplateView.php';

try {
    $PDO = DatabaseModel::connexion();

    //* SESSION
    //$_SESSION['mail_patient']
    if (isset($_SESSION['nom_patient']) && isset($_SESSION['prenom_patient']) && isset($_SESSION['pathologie_patient'])) {
        $emailPatient = $_SESSION['nom_patient'];
        echo "<h1>Vous êtes connecté en tant que : <br>".$emailPatient."</h1>";

        $SQL_SELECT = "SELECT nom_patient, prenom_patient, pathologie_patient FROM Patient WHERE nom_patient = ? AND prenom_patient = ?";
        $REQUÊTE = $PDO->query($SQL_SELECT);
        $RESULTAT_PATIENTS = $REQUÊTE->fetchAll();
        foreach ($RESULTAT_PATIENTS as $DATA) {
            // $id = $row["id_patient"];
            // $nom = $row["nom_patient"];
            $penomPatient = $DATA["prenom_patient"];
            $postePatient = $DATA["poste_patient"];
            // $date = $row["datenaissance_patient"];
            // $mp = $row["motdepasse_patient"];
            // $mail = $row["mail_patient"];
        }

        $_SESSION["Admin"] = [
            "prenom" => $penomPatient,
            "email" => $emailPatient,
            "poste" => $postePatient
        ];

        $SQL_SELECT = "SELECT * FROM Patient";
        $REQUÊTE = $PDO->query($SQL_SELECT);
        $RESULTAT_PATIENTS = $REQUÊTE->fetchAll();

        $SQL_SELECT = "SELECT * FROM Score";
        $REQUÊTE = $PDO->query($SQL_SELECT);
        $RESULTAT_SCORES = $REQUÊTE->fetchAll();
        
    }else{
        header('Location: ./auth/LoginPatientView.php');
    }

    //* DECONNEXION SESSION
    if (isset($_POST['Deconnexion'])) {
        header('Location: ./AccueilView.php');
        unset($_SESSION['mail_patient']);
        unset($_SESSION['Admin']);
        echo "<h1 style='color: red;'>Vous êtes Déconnecté</h1>";
    }

}catch (PDOException $e) {
    // echo $SQL_STATIC . "<br>" . $e->getMessage();
    // echo $SQL_DYNAMIQUE . "<br>" . $e->getMessage();
    echo $SQL_SELECT . "<br>" . $e->getMessage();
  }

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
                        <a href="./Jeux0View.php">MemoryCard 1.0</a>
                        <hr>
                    </li>
                    <li>
                        <a href="./Jeux1View.php">MemoryCard 2.0</a>
                        <hr>
                    </li>
                </ul>
            </div>
            <div class="profile">
                <img src="./media/images/Background_LoginPatient.jpg" width="100px" height="70px" alt="Logo Session Admin">
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
            <form action="./auth/LogoutView.php" method="POST">
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

</body>

</html>
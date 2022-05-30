<?php //session_save_path(); include_once "./../Controller/AdminController.php";
session_start();
require_once './../Model/DatabaseModel.php';
//include_once './../Model/SoignantModel.php';
//include_once './../Model/PatientModel.php';

//require_once './template/TemplateView.php';

try {
    $PDO = DatabaseModel::connexion();

    //* SESSION
    //$_SESSION['mail_soignant']
    if (isset($_SESSION['mail_soignant'])) {
        $emailSoignant = $_SESSION['mail_soignant'];
        echo "<h1>Vous êtes connecté en tant que : <br>".$emailSoignant."</h1>";

        $SQL_SELECT = "SELECT prenom_soignant, poste_soignant FROM Soignant WHERE mail_soignant = '$emailSoignant'";
        $REQUÊTE = $PDO->query($SQL_SELECT);
        $RESULTAT_SOIGNANTS = $REQUÊTE->fetchAll();
        foreach ($RESULTAT_SOIGNANTS as $DATA) {
            // $id = $DATA["id_soignant"];
            // $nom = $DATA["nom_soignant"];
            $penomData = $DATA["prenom_soignant"];
            $posteData = $DATA["poste_soignant"];
            // $date = $DATA["datenaissance_soignant"];
            // $mp = $DATA["motdepasse_soignant"];
            // $mail = $DATA["mail_soignant"];
        }

        $_SESSION["Admin"] = [
            "prenom" => $penomData,
            "email" => $emailSoignant,
            "poste" => $posteData
        ];

        $SQL_SELECT = "SELECT * FROM Patient";
        $REQUÊTE = $PDO->query($SQL_SELECT);
        $RESULTAT_PATIENTS = $REQUÊTE->fetchAll();

        $SQL_SELECT = "SELECT * FROM Score";
        $REQUÊTE = $PDO->query($SQL_SELECT);
        $RESULTAT_SCORES = $REQUÊTE->fetchAll();
        
    }else{
        header('Location: ./auth/LoginSoignantView.php');
    }

    //* DECONNEXION SESSION
    if (isset($_POST['Deconnexion'])) {
        header('Location: ./AccueilView.php');
        unset($_SESSION['mail_soignant']);
        unset($_SESSION['Admin']);
        echo "<h1 style='color: red;'>Vous êtes Déconnecté</h1>";
    }

}catch (PDOException $e) {
    // echo $SQL_STATIC . "<br>" . $e->getMessage();
    // echo $SQL_DYNAMIQUE . "<br>" . $e->getMessage();
    echo $SQL_SELECT . "<br>" . $e->getMessage();
  }

// $PDO = DatabaseModel::connect();
// $SQL = "SELECT * FROM Score WHERE id_score = 1";
// $REQUÊTE = $PDO->query($SQL);
// $RESULTAT = $REQUÊTE->fetchAll();

//$Patient = new ManagePatient();
//$listePatients = $Patient->getPatientFromDB();

// function getPDOConnexion(){
//     $HOST = 'localhost';
//     $DBNAME = 'bts2a_MemoryCardModel';
//     $DSN = "mysql:host=$HOST; dbname=$DBNAME";
//     $USER = 'root';
//     $PASSWORD = '';
    // $OPTIONS = [
    //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    // ];

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
    <title>Session Admin</title>
    <!-- <link rel="stylesheet" href="./src/View/pages/css/AdminView.css"> -->
    <!-- php local server -->
    <link rel="stylesheet" href="./pages/css/AdminView.css">

    <!-- Bootstrap CSS -->
    <?php //if (!empty($REQUÊTE)):
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
                <img src="./media/images/PhotoDeProfil_Admin1.png" height="150px" alt="Logo Session Admin">
                <ul class="Sous_Menu">
                    <li>
                        <a href="./AccueilView.php">Home</a>
                        <hr>
                    </li>
                    <!-- <li>
                        <a href="./Jeux0View.php">MemoryCard 1.0</a>
                        <hr>
                    </li>
                    <li>
                        <a href="./Jeux1View.php">MemoryCard 2.0</a>
                        <hr>
                    </li> -->
                    <li>
                        <a href="./auth/SigninPatientView.php">Insrire un Patient</a>
                    </li>
                    <li>
                        <a href="./auth/LoginPatientView.php">Tester un Patient</a>
                        <hr>
                    </li>
                    <!-- <li>
                        <a href="index.php?page=Chambre" aria-disabled="true">Chambre</a>
                        <hr>
                    </li> -->
                    <li>
                        <a href="./../../../../../Labo/index.teste.php">Teste</a>
                        <a href="./../Model/test/testTables.php">TesteTables</a>
                    </li>
                </ul>
            </div>
            <div class="profile">
                <img src="./media/images/PhotoDeProfil_Admin0.jpeg" width="100px" height="70px" alt="Photo Admin">
                <!-- <img src="./media/images/PhotoDeProfil_Admin0.jpeg" width="100px" height="70px" alt="Photo Admin"> -->
            </div>
        </section>

    </header>
    <br>

    <main id="Main">
        <section class="container">
            <pre><?php //var_dump($_SESSION); ?></pre>
            <h1 id="H1">
                Connexion à la Session <b style="color: blue;"><?php echo $_SESSION["Admin"]["poste"]; ?></b>
                <p><b style="color: red;"><?php echo $_SESSION["Admin"]["prenom"]; ?></b></p>
            </h1>
            

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
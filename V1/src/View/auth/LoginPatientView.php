<?php //include_once './../../Controller/LoginController.php';
session_start(); //$_SESSION["Admin"];
require_once "./../../Model/DatabaseModel.php";

/**
 * Methode Prépare
 */
try {
  $PDO = DatabaseModel::connexion();

  // * DONNÉES STATIC
  // $SQL_STATIC = "SELECT mail_patient, motdepasse_patient FROM patient WHERE mail_patient = Jeaffy.BambiMahicka@gmail.com AND motdepasse_patient = @1234567@";
  // $REQUÊTE_INSERT = $PDO->prepare($SQL_STATIC);
  // $REQUÊTE_INSERT->execute(['Jeaffy.BambiMahicka@gmail.com', '@1234567@']);
  
  // * DONNÉES DYNAMIQUE
  // $Nom = "BAMBI"; $Prenom = "Jeaffy";
  // $DateDeNaissance = "1996-01-23";
  // $MotDePasse = "@1234567@"; $Poste = "Medecin";
  
  // $SQL_DYNAMIQUE = "SELECT mail_patient, motdepasse_patient FROM patient WHERE mail_patient = ? AND motdepasse_patient = ?";
  // $REQUÊTE_INSERT = $PDO->prepare($SQL_DYNAMIQUE);
  // $REQUÊTE_INSERT->execute([$Nom, $Prenom, $DateDeNaissance]);

  // * DONNÉES FORMULAIRE
  if (isset($_POST['submit'])) {

    $Nom = isset($_POST['nom']) ? htmlspecialchars(trim($_POST['nom'])) : '';
    $Prenom = isset($_POST['prenom']) ? htmlspecialchars(trim($_POST['prenom'])) : '';
    $Pathologie = isset($_POST['pathologie']) ? htmlspecialchars(trim($_POST['pathologie'])) : '';
    
    $SQL_FORMULAIRE = "SELECT nom_patient, prenom_patient, pathologie_patient FROM Patient WHERE nom_patient = ? AND prenom_patient = ?";
    $REQUÊTE_SELECT = $PDO->prepare($SQL_FORMULAIRE);
    $REQUÊTE_SELECT->execute([$Nom, $Prenom]);

    // sha1($Prenom)
    $RESULTAT = $REQUÊTE_SELECT->fetchAll();
    foreach($RESULTAT as $DATA){
        $nom_Data = $DATA["nom_patient"];
        $prenom_Data = $DATA["prenom_patient"];
        $pathologie_Data = $DATA["pathologie_patient"];
    }

    if($Nom === $nom_Data && $Prenom === $prenom_Data && $Pathologie === $pathologie_Data){
        header('Location: ./../PatientView.php');
        $_SESSION['nom_patient'] = $nom_Data;
        $_SESSION['prenom_patient'] = $prenom_Data;
        $_SESSION['pathologie_patient'] = $prenom_Data;
        include_once "./../PatientView.php";
    }else{
        echo "<h2 style='color: red;'>Erreur à la Connexion<h2>";
    }
    
  }

} catch (PDOException $e) {
  // echo $SQL_STATIC . "<br>" . $e->getMessage();
  // echo $SQL_DYNAMIQUE . "<br>" . $e->getMessage();
  echo $SQL_FORMULAIRE . "<br>" . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion Patient</title>
  <!-- CSS LINKPACK -->
  <!-- <link rel="stylesheet" href="./src/View/pages/css/LoginPatientView.css"> -->
  <link rel="stylesheet" href="./../pages/css/LoginPatientView.css">
  <!-- <script src="./Login.js" defer></script> -->
</head>

<body>
  <header id="Header">
    <!-- <section class="container">
      <div>
        <img src="View/assets/patient.png" id="img2">
      </div>
    </section> -->

  </header>
  <br>

  <main id="Main">
    <section class="container">
      <h1>Connexion Patient</h1>
    </section>

    <section class="container">
      <form action="./../PatientView.php" method="POST">
        <label for="Nom"><b>Nom:</b><i>*</i></label>
        <input type="text" name="nom" placeholder="Nom ?" required>
        <br>
        <label for="Prenom"><b>Prenom:</b><i>*</i></label>
        <input type="text" name="prenom" placeholder="Prenom ?" required>
        <br>
        <label for="Pathologie"><b>Pathologie:</b><i>*</i></label>
        <select name="pathologie" id="Pathologie" required>
          <option>AVC</option>
          <option>Autisme</option>
          <option>Alzheimer</option>
        </select><br />
        <!-- <label for="Email"><b>Email:</b><i>*</i></label>
        <input type="text" id="Email" name="email" placeholder="Email ?" required>
        <br>
        <label for="MotDePasse"><b>Mot de passe:</b><i>*</i></label>
        <input type="password" id="MotDePasse" name="pass" placeholder="password ?" required>
        <br> -->
        <button type="submit" name="submit" id="Connexion"><b>Connexion</b></button>
        </div>
        <div class="Option">
          <a href="./SigninPatientView.php">Inscription</a>
          <a href="./ForgotPasswordView.php">Mot De Passe Oublié ?</a>
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

</html>
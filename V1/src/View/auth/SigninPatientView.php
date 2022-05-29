<?php //require_once './template/TemplateView.php';
require_once "./../../Model/DatabaseModel.php";

/**
 * Methode Prépare
 */
try {
  $PDO = DatabaseModel::connexion();

  // * DONNÉES STATIC
  // $SQL_STATIC = "INSERT INTO Patient(nom_patient, prenom_patient, datenaissance_patient, pathologie_patient, telephone_patient) VALUES(?, ?, ?, ?, ?)";
  // $REQUÊTE_INSERT = $PDO->prepare($SQL_STATIC);
  // $REQUÊTE_INSERT->execute(['BAMBI', 'Jeaffy', '1996-01-23', '@1234567@', 'pathologie', '0611223344']);
  
  // * DONNÉES DYNAMIQUE
  // $Nom = "BAMBI"; $Prenom = "Jeaffy";
  // $DateDeNaissance = "1996-01-23";
  // $MotDePasse = "@1234567@"; $Pathologie = "pathologie";
  // $Telephone = "0611223344";
  
  // $SQL_DYNAMIQUE = "INSERT INTO Patient(nom_patient, prenom_patient, datenaissance_patient, pathologie_patient, telephone_patient) VALUES(?, ?, ?, ?, ?)";
  // $REQUÊTE_INSERT = $PDO->prepare($SQL_DYNAMIQUE);
  // $REQUÊTE_INSERT->execute([$Nom, $Prenom, $DateDeNaissance, $Pathologie, $Telephone]);

  // * DONNÉES FORMULAIRE
  if (isset($_POST['submit'])) {

    // $Nom = $_POST['nom']; $Prenom = $_POST['prenom'];
    // $DateDeNaissance = $_POST['dateDeNaissance'];
    // $Pathologie = $_POST['pathologie'];
    // $Telephone = $_POST['telephone'];

    $Nom = isset($_POST['nom']) ? htmlspecialchars(trim($_POST['nom'])) : '';
    $Prenom = isset($_POST['prenom']) ? htmlspecialchars(trim($_POST['prenom'])) : '';
    $DateDeNaissance = isset($_POST['dateDeNaissance']) ? htmlspecialchars(trim($_POST['dateDeNaissance'])) : '';
    $Pathologie = isset($_POST['pathologie']) ? htmlspecialchars(trim($_POST['pathologie'])) : '';
    $Telephone = isset($_POST['telephone']) ? htmlspecialchars(trim($_POST['telephone'])) : '';

    $SQL_FORMULAIRE = "INSERT INTO Patient(nom_patient, prenom_patient, datenaissance_patient, pathologie_patient, telephone_patient) VALUES(?, ?, ?, ?, ?)";
    $REQUÊTE_INSERT = $PDO->prepare($SQL_FORMULAIRE);
    $REQUÊTE_INSERT->execute([$Nom, $Prenom, $DateDeNaissance, $Pathologie, $Telephone]);

    header('Location: ./LoginPatientView.php'); // header('Location: /dashboard/Adminphp/Home/Jeux/MemoryCard/V1/src/View/auth/LoginPatientView.php');
  }

} catch (PDOException $e) {
  // echo $SQL_STATIC . "<br>" . $e->getMessage();
  // echo $SQL_DYNAMIQUE . "<br>" . $e->getMessage();
  echo $SQL_FORMULAIRE . "<br>" . $e->getMessage();
  echo "<h2>Erreur à l'Inscription<h2>";
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signin | Inscription</title>
  <!-- CSS LINKPACK -->
  <!-- <link rel="stylesheet" href="./src/View/pages/css/SigninPatientView.css"> -->
  <link rel="stylesheet" href="./../pages/css/SigninPatientView.css">
  <!-- <script src="./Signin.js" defer></script> -->
</head>

<body>
  <header id="Header">
    <section class="container">
      <!-- <div>
        <img src="/src/View/media/" alt="">
      </div> -->
    </section>

  </header>

  <main id="Main">
    <section class="container">
      <!-- <div class="BarreDeNotification">
        <p></p>
      </div> -->
      <h1>Inscription Patient</h1>
    </section>

    <section class="container">
      <!-- <form action="./../../Controller/SigninController.php" method="POST"> -->
      <!-- <form action="./LoginPatientView.php" method="POST"> -->
      <form action="#" method="POST">
        <label for="Nom"><b>Nom:</b><i>*</i></label>
        <input type="text" name="nom" placeholder="Nom ?">
        <br>
        <label for="Prenom"><b>Prenom:</b><i>*</i></label>
        <input type="text" name="prenom" placeholder="Prenom ?">
        <br>
        <label for="Date"><b>Date de naissance:</b><i>*</i></label>
        <input type="date" name="dateDeNaissance" placeholder="Date de naissance ?">
        <br>
        <label for="Pathologie"><b>Pathologie:</b><i>*</i></label>
        <select name="pathologie" id="Pathologie">
          <option>AVC</option>
          <option>Autisme</option>
          <option>Alzheimer</option>
        </select><br />
        <label for="Tel"><b>Télephone:</b><i>*</i></label>
        <input type="tel" name="telephone" placeholder="Téléphone ?">
        <br>
        <button type="submit" name="submit" id="Inscription"><b>Inscription</b></button>
      </form>

      <div class="Option">
        <a href="./LoginPatientView.php">Connexion</a>
      </div>
    </section>

  </main>

  <footer id="Footer">
    <section class="container">
      <div>Copyright © 2021-2022 www.chrissMcKenzie.com. Tous Droits Réservés</div>
      <div>Codeur, Développeur (c) 2021 chrissMcKenzie.com</div>
    </section>
  </footer>

</body>

</html>
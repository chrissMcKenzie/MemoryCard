<?php //include_once './../../Controller/SigninController.php';
require_once "./../../Model/DatabaseModel.php";

/**
 * Methode Prépare
 */
try {
  $PDO = DatabaseModel::connexion();

  // * DONNÉES STATIC
  // $SQL_STATIC = "INSERT INTO Soignant(nom_soignant, prenom_soignant, datenaissance_soignant, motdepasse_soignant, poste_soignant, mail_soignant) VALUES(?, ?, ?, ?, ?, ?)";
  // $REQUÊTE_INSERT = $PDO->prepare($SQL_STATIC);
  // $REQUÊTE_INSERT->execute(['BAMBI', 'Jeaffy', '1996-01-23', '@1234567@', 'Medecin', 'Jeaffy.BambiMahicka@gmail.com']);
  
  // * DONNÉES DYNAMIQUE
  // $Nom = "BAMBI"; $Prenom = "Jeaffy";
  // $DateDeNaissance = "1996-01-23";
  // $MotDePasse = "@1234567@"; $Poste = "Medecin";
  // $Email = "Jeaffy.BambiMahicka@gmail.com";
  
  // $SQL_DYNAMIQUE = "INSERT INTO Soignant(nom_soignant, prenom_soignant, datenaissance_soignant, motdepasse_soignant, poste_soignant, mail_soignant) VALUES(?, ?, ?, ?, ?, ?)";
  // $REQUÊTE_INSERT = $PDO->prepare($SQL_DYNAMIQUE);
  // $REQUÊTE_INSERT->execute([$Nom, $Prenom, $DateDeNaissance, $MotDePasse, $Poste, $Email]);

  // * DONNÉES FORMULAIRE
  if (isset($_POST['submit'])) {

    $Nom = $_POST['nom']; $Prenom = $_POST['prenom'];
    $DateDeNaissance = $_POST['dateDeNaissance'];
    $MotDePasse = $_POST['motDePasse'];
    $Poste = $_POST['poste']; $Email = $_POST['email'];

    $Nom = isset($_POST['nom']) ? htmlspecialchars(trim($_POST['nom'])) : '';
    $Prenom = isset($_POST['prenom']) ? htmlspecialchars(trim($_POST['prenom'])) : '';
    $DateDeNaissance = isset($_POST['dateDeNaissance']) ? htmlspecialchars(trim($_POST['dateDeNaissance'])) : '';
    $MotDePasse = isset($_POST['motDePasse']) ? htmlspecialchars(trim($_POST['motDePasse'])) : '';
    $Poste = isset($_POST['poste']) ? htmlspecialchars(trim($_POST['poste'])) : '';
    $Email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';

    $SQL_FORMULAIRE = "INSERT INTO Soignant(nom_soignant, prenom_soignant, datenaissance_soignant, motdepasse_soignant, poste_soignant, mail_soignant) VALUES(?, ?, ?, ?, ?, ?)";
    $REQUÊTE_INSERT = $PDO->prepare($SQL_FORMULAIRE);
    $REQUÊTE_INSERT->execute([$Nom, $Prenom, $DateDeNaissance, $MotDePasse, $Poste, $Email]);

    header('Location: ./LoginSoignantView.php'); // header('Location: /dashboard/Adminphp/Home/Jeux/MemoryCard/V1/src/View/auth/LoginSoignantView.php');
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
    <title>Inscription | Signin</title>
    <!-- CSS LINKPACK -->
    <!-- <link rel="stylesheet" href="./src/View/pages/css/SigninSoignantView.css"> -->
    <link rel="stylesheet" href="./../pages/css/SigninSoignantView.css">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <script src="./Signin.js" defer></script> -->
  </head>

  <body>
    <header id="Header">
      <section class="container">
        <div class="Debug" style="display: none;">
          <h2>Debug Page => SigninSoignantView
            <pre>
            <?php var_dump($_POST['submit']);
            var_dump($_POST['nom']);
            var_dump($_POST['prenom']);
            var_dump($_POST['email']);
            var_dump($_POST['dateDeNaissance']);
            var_dump($_POST['motDePasse']);
            var_dump($_POST['poste']);
            ?>
            </pre>
          </h2>

        </div>
      </section>


    </header>
    <br>

    <main id="Main">
      <section class="container">
        <div class="BarreDeNotification">
          <p></p>
        </div>
        <h1>Inscription Soignant</h1>
      </section>

      <section class="container">
        <!-- <form action="./../../Controller/SigninController.php" method="POST"> -->
        <!-- <form action="./LoginSoignantView.php" method="POST"> -->
        <form action="#" method="POST">
          <label for="Nom"><b>Nom:</b><i>*</i></label>
          <input type="text" name="nom" placeholder="Nom ?" required autocomplete="name">
          <br>
          <label for="Prenom"><b>Prenom:</b><i>*</i></label>
          <input type="text" name="prenom" placeholder="Prenom ?" required autocomplete="additional-name">
          <br>
          <label for="Email"><b>Email:</b><i>*</i></label>
          <input type="email" name="email" placeholder="Email ?" required autocomplete="email">
          <br>
          <label for="Date"><b>Date de naissance:</b><i>*</i></label>
          <input type="date" name="dateDeNaissance" placeholder="Date de naissance ?" required>
          <br>
          <label for="MotDePasse"><b>Mot de passe:</b><i>*</i></label>
          <input type="password" name="motDePasse" placeholder="Password ?" required>
          <br>
          <label for="Poste"><b>Poste:</b><i>*</i></label>
          <select name="poste" id="Poste" required>
            <option>Medecin(e)</option>
            <option>Infirmier(e)</option>
            <option>Aide Soigant(e)</option>
          </select><br />
          <button type="submit" name="submit" id="Inscription"><b>Inscription</b></button>
        </form>

        <div class="Option">
          <a href="./LoginSoignantView.php">Connexion</a>
        </div>
      </section>

    </main>
    <br>


  </body>

</html>
<?php //include_once './../../Controller/LoginController.php';
session_start(); //$_SESSION["Admin"];
require_once "./../../Model/DatabaseModel.php";

/**
 * Methode Prépare
 */
try {
  $PDO = DatabaseModel::connexion();

  // * DONNÉES STATIC
  // $SQL_STATIC = "SELECT mail_soignant, motdepasse_soignant FROM Soignant WHERE mail_soignant = Jeaffy.BambiMahicka@gmail.com AND motdepasse_soignant = @1234567@";
  // $REQUÊTE_INSERT = $PDO->prepare($SQL_STATIC);
  // $REQUÊTE_INSERT->execute(['Jeaffy.BambiMahicka@gmail.com', '@1234567@']);
  
  // * DONNÉES DYNAMIQUE
  // $Nom = "BAMBI"; $Prenom = "Jeaffy";
  // $DateDeNaissance = "1996-01-23";
  // $MotDePasse = "@1234567@"; $Poste = "Medecin";
  // $Email = "Jeaffy.BambiMahicka@gmail.com";
  
  // $SQL_DYNAMIQUE = "SELECT mail_soignant, motdepasse_soignant FROM Soignant WHERE mail_soignant = ? AND motdepasse_soignant = ?";
  // $REQUÊTE_INSERT = $PDO->prepare($SQL_DYNAMIQUE);
  // $REQUÊTE_INSERT->execute([$Nom, $Prenom, $DateDeNaissance, $MotDePasse, $Poste, $Email]);

  // * DONNÉES FORMULAIRE
  if (isset($_POST['submit'])) {

    $Email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $MotDePasse = isset($_POST['motDePasse']) ? htmlspecialchars(trim($_POST['motDePasse'])) : '';
    
    $SQL_FORMULAIRE = "SELECT mail_soignant, motdepasse_soignant FROM Soignant WHERE mail_soignant = ? AND motdepasse_soignant = ?";
    $REQUÊTE_SELECT = $PDO->prepare($SQL_FORMULAIRE);
    $REQUÊTE_SELECT->execute([$Email, $MotDePasse]);

    // sha1($motDePasse_Data)
    $RESULTAT = $REQUÊTE_SELECT->fetchAll();
    foreach($RESULTAT as $DATA){
        $email_Data = $DATA["mail_soignant"];
        $motDePasse_Data = $DATA["motdepasse_soignant"];
        $prenom_Data = $DATA["prenom_soignant"];
    }

    if($Email === $email_Data && $MotDePasse === $motDePasse_Data){
        header('Location: ./../AdminView.php'); // header('Location: /dashboard/Adminphp/Home/Jeux/MemoryCard/V1/src/View/auth/LoginSoignantView.php');
        $_SESSION['mail_soignant'] = $email_Data;
        // $_SESSION['prenom_soignant'] = $prenom_Data;
        include_once "./../AdminView.php";
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
    <title>Connexion Soignant</title>
    <!-- CSS LINKPACK -->
    <!-- <link rel="stylesheet" href="./src/View/pages/css/LoginSoignantView.css"> -->
    <link rel="stylesheet" href="./../pages/css/LoginSoignantView.css">
    <!-- <script src="./Login.js" defer></script> -->
</head>

<body>
    <header id="Header">
    <section class="container">
        <div class="Debug" style="display: none;">
          <h2>Debug Page => LoginSoignantView
            <pre>
            <?php var_dump($_POST['submit']);
            var_dump($_POST['email']);
            var_dump($_POST['motDePasse']);
            ?>
            </pre>
            <pre>
                <?php echo $email_Data." ".$motDePasse_Data; ?>
            </pre>

          </h2>

        </div>
      </section>

    </header>
    <br>

    <main id="Main">
        <section class="container">
            <h1>Connexion Soignant</h1>
        </section>

        <section class="container">
            <!-- <form action="./../AdminView.php" method="POST"> -->
            <form action="#" method="POST">
                <label for="Email"><b>Email:</b><i>*</i></label>
                <input type="text" name="email" id="Email" placeholder="Email ?" required>
                <br>
                <label for="MotDePasse"><b>Mot de passe:</b><i>*</i></label>
                <input type="password" name="motDePasse" id="MotDePasse" placeholder="password ?" required>
                <br>
                <button type="submit" name="submit" id="Connexion"><b>Connexion</b></button>

                <div class="Option">
                    <a href="./SigninSoignantView.php">Inscription</a>
                    <a href="./ForgotPasswordView.php">Mot De Passe Oublié ?</a>
                </div>
            </form>
        </section>
    </main>

    <br>
</body>

</html>
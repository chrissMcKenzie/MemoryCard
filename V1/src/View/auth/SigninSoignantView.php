<?php //include_once './../../Controller/SigninController.php';
require_once __DIR__ . "/../../Model/DatabaseModel.php";
//Inscription Check
//
if (!empty($_POST['submit']) && isset($_POST['submit'])) {
  // $Nom = htmlspecialchars(trim($_POST['nom']));
  // $Prenom = htmlspecialchars(trim($_POST['prenom']));
  // $Email = htmlspecialchars(trim($_POST['email']));
  // $DateDeNaissance = htmlspecialchars(trim($_POST['dateDeNaissance']));
  // $MotDePasse = htmlspecialchars(trim($_POST['motDePasse']));
  // $Poste = htmlspecialchars(trim($_POST['poste']));

  // $Nom = isset($_POST['nom']) ? htmlspecialchars(trim($_POST['nom'])) : '';
  // $Prenom = isset($_POST['prenom']) ? htmlspecialchars(trim($_POST['prenom'])) : '';
  // $Email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
  // $DateDeNaissance = isset($_POST['dateDeNaissance']) ? htmlspecialchars(trim($_POST['dateDeNaissance'])) : '';
  // $MotDePasse = isset($_POST['motDePasse']) ? htmlspecialchars(trim($_POST['motDePasse'])) : '';
  // $Poste = isset($_POST['poste']) ? htmlspecialchars(trim($_POST['poste'])) : '';

  $PDO = DatabaseModel::connexion();
  $SQL = "INSERT INTO Soignant(nom_soignant, prenom_soignant, datenaissance_soignant, motdepasse_soignant, poste_soignant, mail_soignant)
          VALUES(?, ?, ?, ?, ?, ?)";
  $REQUÊTE_INSERT = $PDO->prepare($SQL);
  $REQUÊTE_INSERT->execute([$_POST['nom'], $_POST['prenom'], $_POST['dateDeNaissance'], $_POST['motDePasse'], $_POST['poste'], $_POST['email']]);

  // if(!empty($Nom) && !empty($Prenom) && !empty($Email) && !empty($DateDeNaissance) && !empty($MotDePasse) && !empty($Poste)){
    // $PDO = DatabaseModel::connexion();

    // $SQL = "INSERT INTO Soignant(nom_soignant, prenom_soignant, datenaissance_soignant, motdepasse_soignant, poste_soignant, mail_soignant)
    //       VALUES(?, ?, ?, ?, ?, ?)
    //      ";
    // $REQUÊTE_INSERT = $PDO->prepare($SQL);
    // $REQUÊTE_INSERT->execute([$Nom, $Prenom, $DateDeNaissance, $MotDePasse, $Poste, $Email]);

    // $SQL = "INSERT INTO Soignant(nom_soignant, prenom_soignant, datenaissance_soignant, motdepasse_soignant, poste_soignant, mail_soignant)
    //       VALUES(:nom_soignant, :prenom_soignant, :datenaissance_soignant, :motdepasse_soignant, :poste_soignant, :mail_soignant)
    //      ";
    // $REQUÊTE_INSERT = $PDO->prepare($SQL);
    // $REQUÊTE_INSERT->execute([
    //   ":nom_soignant" => $Nom,
    //   ":prenom_soignant" => $Prenom,
    //   ":datenaissance_soignant" => $DateDeNaissance,
    //   ":motdepasse_soignant" => $MotDePasse,
    //   ":poste_soignant" => $Poste,
    //   ":mail_soignant" => $Email]);
  // }

  
}

// else {
//   // header('Location: index.php?page=SigninSoignant');
//   echo "<h2>Echec Inscription Soignant<h2>";
// }

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription | Signin</title>
  <!-- CSS LINKPACK -->
  <link rel="stylesheet" href="./src/View/pages/css/SigninSoignantView.css">
  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <!-- <script src="./Signin.js" defer></script> -->
</head>

<body>
  <header id="Header">
    <section class="container">
      <div>

      </div>
      <div class="Debug">
        <h2>Debug Page => SigninSoignantView
          <pre>
          <?php
          var_dump($_POST['submit']);
          var_dump($_POST['nom']);
          // var_dump($Nom);
          var_dump($_POST['prenom']);
          // var_dump($Prenom);
          var_dump($_POST['email']);
          // var_dump($Email);
          var_dump($_POST['dateDeNaissance']);
          // var_dump($DateDeNaissance);
          var_dump($_POST['motDePasse']);
          // var_dump($MotDePasse);
          var_dump($_POST['poste']);
          // var_dump($Poste);
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
      <form action="index.php?page=SigninSoignant" method="POST">
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
        <a href="index.php?page=LoginSoignant">Connexion</a>
      </div>
    </section>

  </main>
  <br>

  <script type="text/javascript">
    // document.body.style.backgroundImage = "./src/View/media/images/Background_LoginSoignant.jpg"
    // document.body.style.backgroundImage = "./public/Background_LoginSoignant.jpg"
    // document.body.style.backgroundImage = "./../media/images/Background_LoginSoignant.jpg"
    // if(!localStorage.getItem("Email") && !localStorage.getItem("MotDePasse")){
    // }else{

    // }
    // BarreDeNotification

    Inscription.onclick = () => {
      const annee = `${new Date().getFullYear()}`;
      const mois = `${new Date().getMonth()+1}`;
      const date = `${new Date().getDate()}`;
      const jour = `${new Date().getDay()}`
      const horaire = `${new Date().getHours()}${new Date().getMinutes()}${new Date().getSeconds()}`
      const idInscription = `${annee}${mois}${date}${jour}${horaire}`
      const dateInscription = `${new Date().getDate()}-${new Date().getMonth()+1}-${new Date().getFullYear()}`
      localStorage.setItem("idInscription", idInscription)
      localStorage.setItem("dateInscription", dateInscription.valueOf())
      //localStorage.setItem("idInscription", idInscription.value)
      //localStorage.setItem("idInscription", idInscription.valueOf())
      localStorage.setItem("Nom", Nom.value);
      localStorage.setItem("Prenom", Prenom.value)
      localStorage.setItem("Email", Email.value)
      localStorage.setItem("MotDePasse", MotDePasse.value)

      // document.location.reload()
      //document.location.pathname = "dashboardAdminphp/Home/Jeux/MemoryCard/V3/index.php?page=SigninSoignant.php"
    }

    /** Recherche window.open(?url, ?target, ?features)
     * @exemple window.open('mailto:test@example.com?subject=subject&body=body');
     * @test window.open('mailto:jeaffy.bambimahicka@gmail.com?subject=JSSendMail&body=VraiBackEnd');
     */
    //chrissMcKenzie.IT.Agence@gmail.com
    //Jeaffy.BambiMahicka@gmail.com
  </script>
</body>

</html>
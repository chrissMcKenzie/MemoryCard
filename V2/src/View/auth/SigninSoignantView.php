<?php //include_once './../../Controller/SigninController.php';
require_once './../Model/DatabaseModel.php';

$PDO = DatabaseModel::connect();
if (isset($_POST['submit'])) {
  $NOM = isset($_POST['nom']) ? $_POST['nom'] : '';
  $PRENOM = isset($_POST['pre']) ? $_POST['pre'] : '';
  $DATE = isset($_POST['daten']) ? $_POST['daten'] : '';
  $PWD = isset($_POST['pwd']) ? $_POST['pwd'] : '';
  $POSTE = isset($_POST['poste']) ? $_POST['poste'] : '';
  $EMAIL = isset($_POST['eml']) ? $_POST['eml'] : '';


  $SQL = "INSERT INTO Patient(nom_patient, prenom_patient, datenaissance_patient, motdepasse_patient, pathologie_patient, temps_patient, score_patient)";
  $REQUÊTE_INSERT = $PDO->query($SQL);
  $RESULTAT_PATIENTS = $REQUÊTE_INSERT->fetchAll(); //*OK
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
  <link rel="stylesheet" href="./../pages/css/SigninSoignantView.css">
  <!-- <link rel="stylesheet" href="./src/View/pages/css/SigninSoignantView.css"> -->
  <!-- <script src="./Signin.js" defer></script> -->
</head>

<body>
  <header id="Header">
    <!-- <section class="container">
      <div>
        <img src="./src/View/media/images/soignant.png" id="img1">
        <img src="./../../../src/View/media/images/soignant.png" id="img1">
      </div>
    </section> -->

  </header>
  <br>

  <main id="Main">
    <section class="container">
      <div class="BarreDeNotification">
        <p></p>
      </div>
      <h1>Inscription</h1>
    </section>

    <section class="container">
    <form action="./LoginSoignantView.php" method="POST">
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
        <!-- <a href="index.php?page=LoginSoignant">Connexion</a> -->
      </div>
    </section>

  </main>
  <br>

  <script type="text/javascript">
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
  </script>
</body>

</html>
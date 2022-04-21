<?php //require_once './template/TemplateView.php';
require_once __DIR__ . "/../../Model/DatabaseModel.php";

// $SQL = "SELECT * FROM Score";
// $REQUÊTE = $PDO->query($SQL);
// $RESULTAT_SCORES = $REQUÊTE->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signin | Inscription</title>
  <!-- CSS LINKPACK -->
  <link rel="stylesheet" href="./src/View/pages/css/SigninPatientView.css">
  <!-- <script src="./Signin.js" defer></script> -->
</head>

<body>
  <header id="Header">
    <!-- <section class="container">
      <div>
        <img src="../../media/images/Logo_SessionAdmin.png" alt="Logo Session Admin">
      </div>
    </section> -->

  </header>

  <main id="Main">
    <section class="container">
      <!-- <div class="BarreDeNotification">
        <p></p>
      </div> -->
      <h1>Inscription Patient</h1>
    </section>

    <section class="container">
      <form action="./../../Controller/SigninController.php" method="POST">
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
        <button type="submit" name="submit" id="Inscription"><b>Inscription</b></button>
      </form>
      <div class="Option">
        <a href="index.php?page=LoginPatient">Connexion</a>
      </div>
    </section>

  </main>

  <footer id="Footer">
    <!-- <section class="container">
      <div>Copyright © 2021-2022 www.chrissMcKenzie.com. Tous Droits Réservés</div>
      <div>Codeur, Développeur (c) 2021 chrissMcKenzie.com</div>
    </section> -->
  </footer>

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
      // document.location.pathname = "dashboard/Admin/Login.php"

    }

    /** Recherche window.open(?url, ?target, ?features)
     * @exemple window.open('mailto:test@example.com?subject=subject&body=body');
     * @test window.open('mailto:jeaffy.bambimahicka@gmail.com?subject=JSSendMail&body=VraiBackEnd');
     */

    //chrissMcKenzie.IT.Agence@gmail.com
  </script>
</body>

</html>
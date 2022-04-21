<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <!-- CSS LINKPACK -->
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
      <h1>Connexion</h1>
    </section>

    <section class="container">
      <form id="formulaire" method="POST">
        <label for="Email"><b>Email:</b><i>*</i></label>
        <input type="text" id="Email" name="email" placeholder="Email ?" required>
        <br>
        <label for="MotDePasse"><b>Mot de passe:</b><i>*</i></label>
        <input type="password" id="MotDePasse" name="pass" placeholder="password ?" required>
        <br>
        <button type="submit" name="submit" id="Connexion"><b>Connexion</b></button>
        </div>
        <div class="Option">
          <a href="./SigninPatientView.php">Inscription</a>
          <a href="./ForgotPasswordView.php">Mot De Passe Oublié ?</a>
          <!-- <a href="index.php?page=LoginSoignant">Inscription</a>
                        <a href="index.php?page=Forgot">Mot De Passe Oublié ?</a> -->
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





  <script type="text/javascript">
    // if(!localStorage.getItem("Email") && !localStorage.getItem("MotDePasse")){
    // }else{

    // }
    // BarreDeNotification

    Inscription.onclick = () => {
      const annee = `${new Date().getFullYear()}`
      const mois = `${new Date().getMonth()+1}`
      const date = `${new Date().getDate()}`
      const jour = `${new Date().getDay()}`
      const horaire = `${new Date().getHours()}${new Date().getMinutes()}${new Date().getSeconds()}`
      const idInscription = `${annee}${mois}${date}${jour}${horaire}`
      const dateInscription = `${new Date().getDate()}-${new Date().getMonth()+1}-${new Date().getFullYear()}`
      localStorage.setItem("idInscription", idInscription)
      localStorage.setItem("dateInscription", dateInscription.valueOf())
      //localStorage.setItem("idInscription", idInscription.value)
      //localStorage.setItem("idInscription", idInscription.valueOf())
      localStorage.setItem("Nom", Nom.value)
      localStorage.setItem("Prenom", Prenom.value)
      localStorage.setItem("Email", Email.value)
      localStorage.setItem("MotDePasse", MotDePasse.value)

      // document.location.reload()
      document.location.pathname = "dashboard/Admin/Login.php"

    }

    /** Recherche window.open(?url, ?target, ?features)
     * @exemple window.open('mailto:test@example.com?subject=subject&body=body');
     * @test window.open('mailto:jeaffy.bambimahicka@gmail.com?subject=JSSendMail&body=VraiBackEnd');
     */

    //chrissMcKenzie.IT.Agence@gmail.com
  </script>
</body>

</html>

<!-- 
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sélecteurs CSS</title>
  <style>
    th,
    td {
      border-style: dotted;
    }
  </style>
</head>
<body>
  <form>
    Nom d'utilisateur: <input type="text" id="nom"><br />
    Mot de passe: <input type="password" id="pass"><br />
    Sexe:
    H <input type="radio" id="H" name="sexe" value="H">
    F <input type="radio" id="F" name="sexe" value="F"><br />
    Fonction: <select id="fonction">
      <option VALUE="etudiant">Etudiant</option>
      <option VALUE="ingenieur">Ingénieur</option>
      <option VALUE="enseignant">Enseignant</option>
      <option VALUE="retraite">Retraité</option>
      <option VALUE="autre">Autre</option>
    </select><br /><br />
    <input type="submit" id="envoyer" value="Envoyer">
    <input type="reset" id="annuler" value="Annuler">
  </form>
  <p id='log'>Log</p>
  <script src="jquery.js"></script>
  <script>
    $(function () {
      // Entrer les instructions jQuery ici
      // $('#nom').val("bond")
      // sur appui du bouton submit
      $("form").submit(function (e) {
        e.preventDefault(); //empêche de changer de page
        var Nom = $('#nom').val(); var Password = $('#pass').val()
        var H = $('input#H').val(); //console.log('input#H', H1) //#=> "H"
        var F = $('input#F').val(); //console.log('input#F', F) //#=> "F"
        var Genre = $(':radio:checked').val(); console.log(':radio:checked', Genre) //#=> "undefined" | "H" | "F"
        var Sexe = (Genre === 'H') ? H : F
        var Fonction = $('#fonction').val()
        switch (Fonction) {
          case 'etudiant': $('#fonction').val('etudiant'); break;
          case 'ingenieur': $('#fonction').val('ingenieur'); break;
          case 'enseignant': $('#fonction').val('enseignant'); break;
          case 'retraite': $('#fonction').val('retraite'); break;
          case 'autre': $('#fonction').val('autre'); break;
          default:
            $('#fonction').html('NOT DEFINED')
            break;
        }
        console.log("#=> info contenue de la variable Fonction", Fonction)
        var Log = $('#log').html(`
          <table style="width:50%">
            <tr>
              <th>Nom</th>
              <th>pass</th>
              <th>Sex</th>
              <th>Fonction</th>
            </tr>
            <tbody>
              <tr>
                <td>${Nom}</td>
                <td>${Password}</td>
                <td>${Sexe}</td>
                <td>${Fonction}</td>
              </tr>
            </tbody>
          </table>`)
      })
      // setInterval(() => {
      //   document.location.reload()
      // }, 20000);
    })
  </script>
</body>
</html>
 -->
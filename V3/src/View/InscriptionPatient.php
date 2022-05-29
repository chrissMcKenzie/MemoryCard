<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signin | Inscription</title>
  <!-- CSS LINKPACK -->
  <!-- <link rel="stylesheet" href="./Signin.css"> -->
  <!-- <script src="./Signin.js" defer></script> -->
</head>

<body>
  <header id="Header">
    <section class="container">
    <div>
      <a href='index.php?page=6'>
        <img src="View/assets/soignant.png" id="img1">
      </a>
      <a href='index.php?page=11'>
        <img src="View/assets/patient.png" id="img2">
      </a>
      </div>
    </section>

  </header>
  <br>

  <main id="Main">
    <section class="container">
      <div class="BarreDeNotification">
        <p></p>
      </div>
      <h1>Inscription Patient</h1>
    </section>

    <section class="container">
      <form id="formulaire" action="index.php?page=11" method="POST">
        <label for="Nom"><b>Nom:</b><i>*</i></label>
        <input type="text" name="pre" placeholder="Nom" required>
        <br>
        <label for="Prenom"><b>Prenom:</b><i>*</i></label>
        <input type="text" name="nom" placeholder="Prenom" required>
        <br>
        <label for="Date"><b>Date de naissance:</b><i>*</i></label>
        <input type="date" name="daten" placeholder="Date de naissance" required>
        <br>
        <label for="Patho"><b>Pathologie:</b><i>*</i></label>
        <input type="text" name="patho" placeholder="Pathologie " required>
        <br>
        <label for="numero"><b>Numero de telephone:</b><i>*</i></label>
        <input type="text" name="numero" placeholder="numero de telephone " required>
        <br>
        <button type="submit" name="submit" id="Inscription"><b>Inscription</b></button>
      </form>
      <div class="Option">
        <a href="index.php?page=9">Connexion</a>
      </div>
    </section>
  </main>
  <br>

<style>
  #img1{
      height: 50px;
      width: 50px;
    margin-left:300px;
  }
  #img2{
      height: 50px;
      width: 50px;
  }

    * {
      margin: 0;
      padding: 0;
    }

    html {
      width: 100%;
      height: 100%;
    }

    body {
      /* width: 100%; height: 100%; */
      /* background: url('../../media/images/Background_Login0.jpeg') repeat space; */
      background: url("./media/images/Background_Login0.jpeg") no-repeat;
      background-size: cover;
      background-color: rgba(0, 0, 0, 0.1);
    }

    header,
    main,
    footer {
      /* width:500px; */
      margin: 0 auto;
      margin-bottom: 0%;
      padding: 3%;
      width: 50%;
      height: 12%;
      text-align: center;
      font-size: 32px;

    }

    header {
      margin: 1%;
      margin-left: -10%;
    }

    h1 {
      text-align: center;
      margin-bottom: 2%;
      font-size: 64px;
    }

    main {
      margin-top: -6%;
      text-align: left;
    }

    footer {
      padding-top: 6%;
      width: 600px;
      font-size: 21px;
    }


    /* Full-width inputs */
    input[type=text],
    input[type=password] {
      display: inline-block;
      margin: 8px 0;
      padding: 12px 20px;
      width: 100%;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: black;
      color: white;
    }

    button[type=submit] {
      margin: 8px 0;
      padding: 14px 20px;
      width: 100%;
      border: none;
      font-size: 21px;
      cursor: pointer;

    }

    button[type=submit]:hover {
      border: 2px solid #53af57;
    }

    .Option {
      text-align: center;
      margin-top: -2%;
    }

    .Option a {
      color: black;
      font-size: 20px;

    }

    .Option a:nth-child(2) {
      margin-left: 3%;
      font-size: 19px;
    }
</style>

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
<!DOCTYPE html>
<html lang="fr">
<?php
  if(isset($_SESSION['patient']))
      {     
          $prenom = unserialize($_SESSION['patient'])->getPrenomPatient();
          $nom = unserialize($_SESSION['patient'])->getNomPatient();
          $idpat = unserialize($_SESSION['patient'])->getIdPatient();
          $date =  unserialize($_SESSION['patient'])->getPathoPatient();
          $telephone=  unserialize($_SESSION['patient'])->getTelephonePatient();
          
      
          echo"<div class='flextop'> <div class='co'>Vous etes connecté en tant que Patient numero " .$prenom. "&nbsp;<span>".$nom."</span></div> <div class='deco'><a href='Controller/Logout.php' >Déconnexion</a></div></div>";          
          include_once('UserView.php');

?>

<?php
    }
    else{
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <!-- CSS LINKPACK -->
  <!-- <link rel="stylesheet" href="./Signin.css"> -->
  <!-- <script src="./Signin.js" defer></script> -->
</head>

<body>
  <header id="Header">
    <section class="container">
      <div>
      <img src="View/assets/patient.png" id="img2">
      </div>
    </section>

  </header>
  <br>

  <main id="Main">
    <section class="container">
      <div class="BarreDeNotification">
        <p></p>
      </div>
      <h1>Connexion</h1>
    </section>

    <section class="container">
      <form id="formulaire" method="POST">
        <label for="Nom"><b>Nom:</b><i>*</i></label>
        <input type="text" name="nom" placeholder="Nom "  required>
        <br>
        <label for="Prenom"><b>Prenom:</b><i>*</i></label>
        <input type="text" name="pre" placeholder="Prenom"  required>
        <br>
        <button type="submit" name="submit" id="connexion"><b>Connexion</b></button>
      </form>
    </section>


    <?php
        include_once('controller/LoginPatientController.php');
    ?>


  </main>
  <br>
  



<style>


  #img2{
    height: 50px;
    width: 50px;
   margin-left:110px;
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
    background-size: cover;
    background-color: rgba(0, 0, 0, 0.1);
  }

  header,
  main,
  footer {
    /* width:500px; */
    margin: 0 auto;
    margin-top: 20%;
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

</body>
<?php
        
    }
?>
<footer id="Footer">
      <div>Copyright © 2021-2022 JMS Corporation Tous Droits Réservés</div>
      <div>Codeur, Développeur (c) 2021 OMRANI Sofiane</div>
  </footer>
</html>

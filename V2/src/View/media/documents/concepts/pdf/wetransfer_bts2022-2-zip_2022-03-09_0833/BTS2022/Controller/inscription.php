<?php
include_once('./model/connectionSql.php');
include_once('./model/User.class.php');

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
    // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
    //requéte SQL + mot de passe crypté
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $usersManager = new ManageUsers();
    
    if($usersManager->addUser($username, $email, $password) != null){
      echo "<div class='sucess'>
            <h3>Vous êtes inscrit avec succès.</h3>
            <p>Cliquez ici pour vous <a href='index.php?page=6'>connecter</a></p>
      </div>";
    }
    else {
      echo "<div class='failure'>
             <h3>Problème d'inscription.</h3>
             <p>Cliquez ici pour vous <a href='index.php?page=5'>inscrire</a></p>
       </div>";
    }
}else{
?>
<form class="box" action="" method="post">
  
    <h1 class="box-title">S'inscrire</h1>
  <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="index.php?page=6">Connectez-vous ici</a></p>
</form>
<?php } ?>
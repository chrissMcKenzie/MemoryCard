<?php
session_start();
include_once('./model/connectionSql.php');
include_once('./model/User.class.php');

if (isset($_POST['username'])){
    $username = $_REQUEST['username'];      // appelé au retour de formulaire
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $usersManager = new ManageUsers();
    $user = $usersManager->verifyUser($username, $email, $password);
    if($user != null){
        $_SESSION['user'] = $user;
        header("Location: index.php");
    }else{
        $message = "Le nom d'utilisateur, mail ou le mot de passe est incorrect.";
    }
}
?>
<form class="box" action="" method="post" name="login">
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<input type="text" class="box-input" name="email" placeholder="Mail">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="index.php?page=5">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
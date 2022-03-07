
<?php        
session_start();

    include_once('DatabaseModel.php');

    // connexion à la base de données

    $email = $_POST['email'];
    $pass = $_POST['pass'];
      
    if (!empty($email) && !empty($pass)) {    
        $db = DatabaseModel::connect();

        $req = $db->prepare('SELECT id_soignant FROM soignant WHERE mail_soignant = :email AND motdepasse_soignant = :pass');
        $req->execute(array(':email' => $email,':pass' => $pass));
        $resultat = $req->fetch();
        
        if ($req->rowCount() > 0){
        $_SESSION['mail_soignant'] = $email;
        echo '<center><h1>Félicitation vous etes connecté !</h1></center>';
        }
    
        else
        {   
            echo '<center><h1>Vos identifiants sont incorrects !</h1></center>';
        }
    }


?>

<?php
include_once('connectionSql.php'); //on inclut notre fichier de connection 
 
class User {
    private $idUser;
    private $username;
    private $email;
    private $password;

    public function __construct($pIdUser,$pUsername, $pEmail, $pPassword)
    {
        $this->idUser = $pIdUser;
        $this->username = $pUsername;
        $this->email = $pEmail;
        $this->password = $pPassword;
    }
}

class ManageUsers {
    public function addUser($pUsername, $pEmail, $pPassword) {
        // ajoute une entrée dans la table User
        // crée un objet User
        if (gettype($pUsername) != 'string' or gettype($pEmail) != 'string' or gettype($pPassword) != 'string')
            return null;
        $pdo = Database::connect();
        // vérifier d'abord que ce user n'existe pas déjà
        $req = $pdo->prepare("SELECT * FROM users WHERE username=? AND email=?");
        if ($req->execute(array($pUsername, $pEmail)) == true) {
            $allRows = $req->fetchAll();
            if (sizeof($allRows) != 0){ // il y a déja un user avec ce username et email
                echo "Utilisateur déjà existant $pUsername"; // le temps du debug
                return null;
            }
        }

        $req = $pdo->prepare("INSERT INTO users (id, username, email, password) VALUES (NULL, ?, ?, ?)");
        $hashPswd = hash('sha256', $pPassword);
        if ($req->execute(array($pUsername, $pEmail, $hashPswd)) == true) {
            echo "Utilisateur ajouté $pUsername"; // le temps du debug
            $lastId = $pdo->lastInsertId();
            $user = new User($lastId, $pUsername, $pEmail, $hashPswd);
            return $user;
        }
        return null;
    }

    public function verifyUser($pUsername, $pEmail, $pPassword){
        $pdo = Database::connect(); //on se connecte à la base 
        $req = $pdo->prepare("SELECT * FROM users WHERE username=? and email=? and password=?;");
        $hashPswd = hash('sha256', $pPassword);
        $result = $req->execute(array($pUsername, $pEmail, $hashPswd));
        if ($result == true) {
            $allRows = $req->fetchAll();
            if (sizeof($allRows) == 1){
                $user = new User($allRows[0]["id"], $pUsername, $pEmail, $hashPswd);
                return $user;
            }
        }
    }
}
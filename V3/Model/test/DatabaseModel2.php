<?php

class DatabaseModel2{

    private $_HOST = 'localhost';
    private $_DBNAME = 'dbname=bts2a_MemoryCardModel';
    private $_DSN = "mysql:host="; //private $_DSN = "mysql:host=".DatabaseModel2::$_HOST.";".DatabaseModel2::$_DBNAME;
    private $_USER = 'root';
    private $_PASSWORD = '';
    private $_OPTIONS = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    public function __construct(){
        die('Init function is not allowed');
        $this->_HOST;
    }

    public function getHost(){
        return $this->_HOST;
    }

    public static function getPDOConnexion0(){
        try {
            $DB_CONNEXION = new PDO(DatabaseModel2::$_DSN.DatabaseModel2::$_HOST.";".DatabaseModel2::$_DBNAME, DatabaseModel2::$_USER, DatabaseModel2::$_PASSWORD, DatabaseModel2::$_OPTIONS);
        } catch (PDOException $e) {
            die("ErrorConnexion: " . $e->getMessage());
        }

        return $DB_CONNEXION;
    }
    // public static function getPDOConnexion1() {
    //     try {
    //         $DB_CONNEXION = new PDO("mysql:host=".$_HOST."; dbname=". $_DBNAME, $_USER, $_PASSWORD, $_OPTIONS);
    //     } catch (PDOException $e) {
    //         die("ErrorConnexion: " . $e->getMessage());
    //     }

    //     return $DB_CONNEXION;
    // }

    public function listePatients(){
        $PDOConnexion = getPDOConnexion();
        $SQL_CODE = "SELECT * FROM Patient";
        $SQL_REQUÊTE = $PDOConnexion->query($SQL_CODE);
        $SQL_RESULTAT = $SQL_REQUÊTE->fetchAll();

        // foreach ($SQL_RESULTAT as $DATA) {
        //     foreach ($DATA as $champ => $value) {
        //         if (!is_int($champ)) {
        //             echo "<th scope='col'>{$champ}</th>";
        //         }
        //     }
        //     echo "<tr class='table-active' style='text-align: center;'>{$DATA['id_patient']}</tr>";
        // }

        return $SQL_RESULTAT;
    }
}

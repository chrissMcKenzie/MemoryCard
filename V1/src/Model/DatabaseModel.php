<?php

class DatabaseModel{
    private static $dbName = 'bts2a_MemoryCardModel';
    private static $dbHost = 'localhost';
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';
    private static $connexion = null;
    private static $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    //$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    public function __construct(){
        die('Init function is not allowed');
    }

    public static function connexion(){
        if (self::$connexion == null) {
            try {
                self::$connexion = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword, self::$options);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$connexion;
    }

    public static function deconnexion(){
        self::$connexion = null;
    }
}

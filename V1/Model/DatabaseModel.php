<?php class DatabaseModel
{
    private $_DIE = "";
    private static $_HOST = "localhost";
    private static $_USER = "root";
    private static $_PASSWORD = "";
    private static $_DBNAME = "bts2a_MemoryCardModel";
    // private static $_DSN = "; 'dbname='self::$_DBNAME';' dbname=$_DBNAME";
    private static $_DatabaseModel = null;

    public function __construct($_DIE = false) //$_HOST, $_USER, $_PASSWORD, $_DBNAME
    {
        if ($_DIE == false) {
            $this->_HOST; //= $_HOST
            $this->_USER; //= $_USER
            $this->_PASSWORD; //= $_PASSWORD
            $this->_DBNAME; //= $_DBNAME
        } else {
            die("L'instanciation de cette classe est INTERDITE");
        }
    }


    /*private*/
    public static function connection_DatabaseModel()
    {
        if (self::$_DatabaseModel == NULL) {
            try {
                self::$_DatabaseModel = new PDO("mysql:host=" . self::$_HOST . ";" . "dbname=" . self::$_DBNAME, self::$_USER, self::$_PASSWORD);
                self::$_DatabaseModel->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("#=> Error_connection_DatabaseModel: " . $e->getMessage());
            }
        }

        return self::$_DatabaseModel;
    }

    public static function deconnection_DatabaseModel()
    {
        self::$_DatabaseModel = null;
        return "Déconnexion à la base de données";
    }

    public function __destruct()
    {
    }
}



// $ConnexionMYSQL->getScore();

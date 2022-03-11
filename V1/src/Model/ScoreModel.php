<?php

class Score_Patient
{

    public function __construct()
    {
    }


    public function getScore($id)
    {
        if ($this->pdo === null) {
            try {
                $pdo = DatabaseModel::connection_DatabaseModel(); //on se connecte à la base
                $this->pdo = $pdo;
            } catch (PDOException $e) {
                die("#=> Error_getScore: " . $e->getMessage());
            }
        }
    }
}

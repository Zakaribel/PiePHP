<?php
namespace Core;
use PDO;
class Database
{
    protected $bdd;

    public function __construct()
    {
        try {
            $this->bdd = new PDO('mysql:dbname=cinema;host=localhost', 'root', 'root');
        } catch (\Exception $e) {
            die('la connexion a échoué :' . $e->getMessage());
        }
    }

    public function getDB()
    {
        return $this->bdd;
    }
}

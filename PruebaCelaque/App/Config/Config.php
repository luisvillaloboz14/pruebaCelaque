<?php
namespace App\Config;
class Config{
    private $pdo;

    public function __construct()
    {
        try {
             $this->connect(); 
        } catch (\PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    private function connect(){
        $pdo = new \PDO('mysql:host=localhost;dbname=pruebaCelaque;charset=utf8','root','');
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public function getConnection()
    {
        return $this->connect();
    }
    
}

?>
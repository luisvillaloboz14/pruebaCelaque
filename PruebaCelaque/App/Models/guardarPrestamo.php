<?php
    namespace App\Models;

    class GuardarPrestamo
    {
        public function guardarPrestamo($params){
            require_once '../Config/Config.php';
            $database = new \App\Config\Config();

            $pdo = $database->getConnection();
            $statement = $pdo->prepare('call GuardarPrestamo('.$params.')');
            $statement->execute();
        }
            
    }
?>
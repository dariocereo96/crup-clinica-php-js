<?php
class Conexion{
    private $hostname="localhost";
    private $database="phpdb";
    private $username="root";
    private $password="";

    public function getConnection (){
        try {
            $connection = "mysql:host=".$this->hostname.";dbname=".$this->database.";charset=utf8";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($connection,$this->username,$this->password,$options);

            return $pdo;

            echo "conexion exitosa";
        } catch (PDOException $e) {
            echo "Error en la base de datos: ".$e->getMessage;
        }
    }
}

<?php 

    namespace App\Model;
    use PDO;
    class DataBase {

        public static function getConexao(){
            $host = "meu-mysql-php";
            $user = "root";
            $password = "root";
            $db = "API";

            $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
            return $conn;
        }
    }
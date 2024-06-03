<?php
    namespace App\Http;

    class Request{
        public static function method(){
            return $_SERVER['REQUEST_METHOD'];
        }

        public static function body(){
            $json = json_decode(file_get_contents("php://input"), true) ?? [];
        
            $method = self::method();
            switch($method) {
                case "GET":
                    $data = $_GET;
                    break;
                case "POST":
                case "PUT":
                case "DELETE":
                    $data = $json;
                    break;
                default:
                    $data = [];
            }
        
            return $data;
        }

        public static function auth(){
            $auth = getallheaders();

            if(!isset($auth['Authorization'])) return ['error' => 'sorry, autenticação nao provida'];

            $auth = explode(' ', $auth['Authorization']);

            return $auth[1]  ?? '';
        }
        
    }
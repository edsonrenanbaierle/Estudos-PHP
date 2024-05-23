<?php
    require_once "model.php";
    require_once "view.php";

    class Controller{
        public function index(){
            $model = new Model();
            $view = new View();
            $string = $model->getString();
            $view -> render($string);   
        }
    }
?>
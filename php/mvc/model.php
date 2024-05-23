<?php

    class Model{
        public $string;

        public function __construct()
        {
            $this->string = 
            date("l")
            ;;
        }

        public function getString(){
            return $this->string;
        }
    }
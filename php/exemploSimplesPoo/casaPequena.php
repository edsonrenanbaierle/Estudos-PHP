<?php 

    class casaPequena{
        private $quartos;
        private $sala;
        private $cosinha;
        private $banheiro;
        private $largura;
        private $comprimento;
        private $corCasa;

        public function __construct($largura = 10, $comprimento = 20){
            $this->quartos = 2;
            $this->sala = 1;
            $this->cosinha = 1;
            $this->banheiro = 2;
            $this->corCasa = "Verde ";
            $this->largura = $largura;
            $this->comprimento = $comprimento;

            if($largura > 10){
                $this->largura = 10;
            }else{
                $this->largura = $largura;
            }

            if($comprimento > 20){
                $this->comprimento = 20;
            }else{
                $this->comprimento = $comprimento;
            }

        }

        public function setCorCasa($corCasa){
            if(!empty($corCasa)){
                $this->corCasa = $corCasa;
            }
        }

        public function getCorCasa() : string {
            return $this->corCasa;
        }

        
    }
?>
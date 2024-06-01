<?php 

    class casaGrande{
        private $quartoHospedes;
        private $quartoSuite;
        private $salaDeJantar;
        private $salaDeEstar;
        private $cosinha;
        private $banheiroGeral;
        private $banheiroPrivativo;
        private $largura;
        private $comprimento;
        private $piscina;
        private $corCasa;

        public function __construct($largura = 10, $comprimento = 30){
            $this->quartoHospedes = 2;
            $this->quartoSuite = 1;
            $this->salaDeJantar = 1;
            $this->salaDeEstar = 1;
            $this->cosinha = 1;
            $this->banheiroGeral = 2;
            $this->banheiroPrivativo = 1;
            $this->piscina = 1;
            $this->corCasa = "Azul";
            $this->largura = $largura;
            $this->comprimento = $comprimento;
        }

        public function setCorCasa($corCasa){
            if(!empty($corCasa)){
                $this->corCasa = $corCasa;
            }
        }

        public function getCorCasa() : string {
            return $this->corCasa;
        }

        public function showCasa(){
            $html = "<h1> Dados da minha casa grande</h1><br>";
            $html .= "Quarto de hospedes: " . $this->quartoHospedes . "<br>";
            $html .= "Quarto Suite: " . $this->quartoSuite . "<br>";
            $html .= "Sala de Jantar: " . $this->salaDeJantar . "<br>";
            $html .= "Sala de Estar: " .  $this->salaDeEstar . "<br>";
            $html .= "Cosinha: " . $this->cosinha . "<br>";
            $html .= "Banheiro Geral: " . $this->banheiroGeral . "<br>";
            $html .= "Banheiro Privativo: " . $this->banheiroPrivativo . "<br>";
            $html .= "Piscina: " . $this->piscina . "<br>";
            $html .= "Cor da Casa: " . $this->corCasa . "<br>";
            $html .= "Largura: " . $this->largura . "<br>";
            $html .= "Comprimento: " . $this->comprimento . "<br>";
            
            return $html;
        }

        
    }
?>
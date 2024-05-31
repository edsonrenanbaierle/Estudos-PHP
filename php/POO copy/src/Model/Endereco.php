<?php
    namespace Baierle\Teste\Model; 

    class Endereco{
        private string $cidade;
        private string $uf;
        private string $rua;

        public function __construct($cidade, $uf, $rua)
        {
            $this->cidade = $cidade;
            $this->uf = $uf;
            $this->rua = $rua;
        }

        public function getCidade() : string{
            return $this->cidade;
        }

        public function setCIdade($cidade) : void {
            $this->cidade = $cidade;
        }

        public function getUf() : string{
            return $this->uf;
        }

        public function setUf($uf) : void {
            $this->uf = $uf;
        }

        public function getRua() : string{
            return $this->rua;
        }

        public function setRua($rua) : void {
            $this->rua = $rua;
        }
    }

    
?>
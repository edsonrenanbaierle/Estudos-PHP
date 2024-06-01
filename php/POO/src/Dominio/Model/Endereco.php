<?php
    namespace Baierle\Teste\Dominio\Model;  

    class Endereco{
        private ?int $idEndereco;
        private string $cidade;
        private string $uf;
        private string $rua;
        private ?int $idFuncionario;

        public function __construct(?int $idEndereco, $cidade, $uf, $rua, ?int $idFuncionario)
        {   
            $this->idEndereco = $idEndereco;
            $this->cidade = $cidade;
            $this->uf = $uf;
            $this->rua = $rua;
            $this->idFuncionario = $idFuncionario;
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
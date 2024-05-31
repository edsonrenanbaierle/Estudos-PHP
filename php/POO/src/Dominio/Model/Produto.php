<?php 
    namespace Baierle\Teste\Dominio\Model; 

    class Produto{
        private ?int $idProduto;
        private string $nomeProduto;
        private float $precoProduto;

        public function __construct(?int $idProduto, string $nomeProduto, float $precoProduto)
        {
            $this->idProduto = $idProduto;
            $this->nomeProduto = $nomeProduto;
            $this->precoProduto = $precoProduto;
        }

        //getters
        public function getIdProduto(){
            return $this->idProduto;
        }

        public function getnomeProduto(){
            return $this->nomeProduto;
        }

        public function getPrecoProduto(){
            return $this->precoProduto;
        }

        //setters
        public function setIdProduto($idProduto){
            $this->idProduto = $idProduto;
        }

        public function setnomeProduto($nomeProduto){
            $this->nomeProduto = $nomeProduto;
        }

        public function setPrecoProduto($precoProduto){
            $this->precoProduto = $precoProduto;
        }
    }
?>



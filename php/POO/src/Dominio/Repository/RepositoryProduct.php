<?php
    namespace Baierle\Teste\Dominio\Repository;

    use Baierle\Teste\Dominio\Model\Produto;

    interface RepositoryProduct
    {
        public function todosOsProdutos():array;
        public function salvar(Produto $produto):bool;
        public function createProduto(Produto $produto):bool;
        public function readProduto(Produto $produto):array;
        public function updateProduto(Produto $produto):bool;
        public function deleteProduto(Produto $produto):bool;

    }
?>
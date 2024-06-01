<?php
    namespace Baierle\Teste\Dominio\Repository;

    use Baierle\Teste\Dominio\Model\Funcionario;

    interface RepositoryFuncionario
    {
        public function todosOsFuncionarios():array;
        public function salvar(Funcionario $funcionario):bool;
        public function ler(Funcionario $funcionario):array;
        public function delete(Funcionario $funcionario):bool;

    }
?>
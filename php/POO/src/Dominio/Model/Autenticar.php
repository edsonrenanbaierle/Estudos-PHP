<?php
    namespace Baierle\Teste\Dominio\Model; 

    interface Autenticar {
        public function login(string $senha, string $nome) : string;
    }
?>
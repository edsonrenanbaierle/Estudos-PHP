<?php
    namespace Baierle\Teste\Model; 

    interface Autenticar {
        public function login(string $senha, string $nome) : string;
    }
?>
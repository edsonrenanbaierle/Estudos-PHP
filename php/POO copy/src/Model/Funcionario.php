<?php
    namespace Baierle\Teste\Model; 
    require_once __DIR__ . "/Autenticar.php";


    class Funcionario extends Pessoa implements Autenticar{
        private float $salario;
        private string $senha;

        public function __construct(string $nome, int $idade, Endereco $endereco, float $salario)
        {
            parent::__construct($nome, $idade, $endereco);
            $this->salario = $salario;
        }

        public function printValorDeDEsconto(){
            echo "Desconto de 5%";
        }

        public function login(string $senha, string $nome) : string{
            if($this->senha == $senha && $this->nome == $nome){
                return "Usuario " . $this->nome . " feito login com sucesso!";
            }else{
                return "Falha ao efetuar login";
            }
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }
    }

?>
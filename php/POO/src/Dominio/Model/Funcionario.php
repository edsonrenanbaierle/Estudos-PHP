<?php
    namespace Baierle\Teste\Dominio\Model;

    use DateTimeInterface;

    
    require_once __DIR__ . "/../../../autoload.php";


    class Funcionario extends Pessoa implements Autenticar{
        private float $salario;
        private string $senha;
        private string $cargo;

        public function __construct(?int $id, string $nome, DateTimeInterface $dataDeNascimento, Endereco $endereco, float $salario, $cargo)
        {
            parent::__construct($id, $nome, $dataDeNascimento, $endereco);
            $this->salario = $salario;
            $this->cargo = $cargo;
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

        public function getSalario() : float{
            return $this->salario;
        }

        public function getCargo() : string{
            return $this->cargo;
        }
    }

?>
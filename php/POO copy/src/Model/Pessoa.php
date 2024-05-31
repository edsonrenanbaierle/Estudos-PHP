<?php

namespace Baierle\Teste\Model; 

abstract class Pessoa{
    protected string $nome;
    protected int $idade; 
    protected static int $numeroDePessoas = 0;
    protected Endereco $endereco;

    public function __construct(string $nome, int $idade, Endereco $endereco)  
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        self::avaliaIdade($idade);
        self::$numeroDePessoas++;

    }

    public function __destruct()
    {
        self::$numeroDePessoas--;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setIDade($idade){
        $this->idade = $idade;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getIDade(){
        return $this->idade;
    }

    public function getEndereco() : Endereco {
        return $this->endereco;
    }

    private function avaliaIdade($idade){
        if($idade > 0 && $idade < 120){
            $this->idade = $idade;
        }else{
            echo "Idade Invalida";
            exit;
        }
    }

    public abstract function printValorDeDEsconto();
}
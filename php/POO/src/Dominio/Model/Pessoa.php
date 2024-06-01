<?php

namespace Baierle\Teste\Dominio\Model;

use DateTimeInterface;

abstract class Pessoa{
    protected ?int $id;
    protected string $nome;
    protected DateTimeInterface $dataDeNascimento; 
    protected static int $numeroDePessoas = 0;
    protected Endereco $endereco;

    public function __construct(?int $id, string $nome, DateTimeInterface $dataDeNascimento, Endereco $endereco)  
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->dataDeNascimento = $dataDeNascimento;
        self::$numeroDePessoas++;

    }

    public function __destruct()
    {
        self::$numeroDePessoas--;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setDataDeNascimento(DateTimeInterface $dataDeNascimento){
        $this->dataDeNascimento = $dataDeNascimento;
    }

    public function getNome() : string{
        return $this->nome;
    }

    public function getDataDeNascimento() : DateTimeInterface{
        return $this->dataDeNascimento;
    }

    public function getEndereco() : Endereco {
        return $this->endereco;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getEnderec() : Endereco{
        return $this->endereco;
    }

    public function setEndereco(Endereco $endereco){
        $this->endereco = $endereco;
    }



    // private function avaliaIdade($idade){
    //     if($idade > 0 && $idade < 120){
    //         $this->idade = $idade;
    //     }else{
    //         echo "Idade Invalida";
    //         exit;
    //     }
    // }

    public function idade() : int {
        return $this->getDataDeNascimento()->diff(new \DateTimeImmutable()) ->y;
    }

    public abstract function printValorDeDEsconto();
}
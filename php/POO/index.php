<?php
    require_once "autoload.php";

use Baierle\Teste\Dominio\Model\Endereco;
use Baierle\Teste\Dominio\Model\Funcionario;
use Baierle\Teste\Infraestrutura\Repository\PdoRepositoryProduto;
    use Baierle\Teste\Dominio\Model\Produto;
    use Baierle\Teste\Dominio\Model\FunciPdoRepositoryFuncionario;
use Baierle\Teste\Infraestrutura\persistencia\CriadorConexao;
use Baierle\Teste\Infraestrutura\Repository\PdoRepositoryFuncionario;

    echo '<pre>';
    // $repository = new PdoRepositoryProduto(CriadorConexao::criarConexao());

    // $produto1 = new Produto(1, "Carinho de Mao", 21.90);
    // $produto2 = new Produto(2, "Moto", 27.90);
    // $produto3 = new Produto(NULL, "Jogo da Velha", 11);
    // $produto4 = new Produto(NULL, "Pirulito", 45);
    // $produto5 = new Produto(NULL, "Casinha", 23.60);

    // var_dump($repository);
    // var_dump($produto1);
    
    // $repository->salvar($produto2);
    // $repository->salvar($produto3);
    //$repository->updateProduto($produto1);
    //$repository->deleteProduto($produto1);
    // $repository->readProduto($produto2);
    //$repository->todosOsProdutos($produto2);



    //Funcionarios
    $repository = new PdoRepositoryFuncionario(CriadorConexao::criarConexao());
    $endereco = new Endereco(NULL, "Santa Cruz do Sul", "Rs", "Rua Doutor Pedro Eggler", NULL);
    $funcionario = new Funcionario(null, "Edson", new DateTimeImmutable("2003-11-26"), $endereco, 1200, "Programaodor");
    $repository->salvar($funcionario);
    echo '</pre>';
?>
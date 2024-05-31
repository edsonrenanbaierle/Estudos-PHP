<?php
    require_once "./src/Pessoa.php";
    require_once "./src/Endereco.php";
    require_once "./src/Funcionario.php";

    $endereco = new Endereco("Santa Cruz do Sul", "Rs", "Rua Doutor Pedro Eggler");


    //  $pessoa = new Pessoa("Edson Renan Baierle", 20, $endereco);
    // $pessoa2 = new Pessoa("Caua Mahl", 20);
    // $pessoa3 = new Pessoa("Edson Renan Baierle", 20);
    // $pessoa4 = new Pessoa("Caua Mahl", 20);

    $funcionario = new Funcionario("Edson", 20, $endereco, 500);
    $funcionario->setSenha("123");

    var_dump($funcionario);
    echo "<br>";
    echo "<br>";
    echo $funcionario->login("123", "Edson");
    //echo $funcionario->printValorDeDEsconto();
    // var_dump($pessoa->getEndereco());

?>
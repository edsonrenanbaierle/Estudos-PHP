<?php
    include_once __DIR__."/style.php";
    $array = ['banana', 'maça', 'melancia', 'uva'];

    $arrayAssoc = [
        "nome"  => "edson",
        "idade" => 20,
        "nacionalidade" => "Brasileira"
    ];

    echo "<h1>Funcoes</h1>";

    echo "<h2>count</h2>";
    echo count($array);
    echo "<br>";
    echo count($arrayAssoc);
    echo "<hr>";

    echo "<h2>Array key</h2>";
    print_r(array_keys($arrayAssoc));
    echo "<hr>";

    echo "<h2>Array values</h2>";
    print_r(array_values($arrayAssoc));
    echo "<hr>";

    echo "<h2>In Array</h2>";
    var_dump(in_array("banana", $array));
    echo "<br>";
    var_dump(in_array("idade", $arrayAssoc));
    echo "<hr>";

    echo "<h2>Array Search</h2>";
    var_dump(array_search("melancia", $array));
    echo "<br>";
    var_dump(array_search("Brasileira", $arrayAssoc));
    echo "<hr>";

    echo "<h2>isset</h2>";
    var_dump(isset($array[0]));
    echo "<br>";
    var_dump(isset($arrayAssoc['nome']));
    echo "<hr>";

    echo "<h2>Array key exist</h2>";
    var_dump(array_key_exists(100, $array));
    echo "<br>";
    var_dump(array_key_exists('nome', $arrayAssoc));
    echo "<hr>";

    echo "<h2>Array key first</h2>";
    var_dump(array_key_first($arrayAssoc));
    echo "<hr>";

    echo "<h2>Array key last</h2>";
    var_dump(array_key_last($arrayAssoc));
    echo "<hr>";

    echo "<h2>Array Flip</h2>";
    print_r(array_flip($array));
    echo "<hr>";

    echo "<h2>Implode</h2>";
    echo implode(",", $array);
    echo "<hr>";

    echo "<h2>Explode</h2>";
    print_r(explode(",", "banana,maça,melancia,uva"));
    echo "<hr>";
?>

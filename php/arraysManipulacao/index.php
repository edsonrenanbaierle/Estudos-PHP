<?php
    include_once __DIR__."/style.php";

    $array = ['banana', 'maça', 'melancia', 'uva'];
    $array[] = 'goiaba';

    $arrayAssoc = [
        "nome"  => "edson",
        "idade" => 20,
        "nacionalidade" => "Brasileira"
    ];
    
    echo "<h1>Definicao</h1>";
    echo "<h2>Lista Ordenada</h2>";
    print_r($array);
    echo "<hr>";


    echo "<h2>Array Associativo</h2>";
    print_r($arrayAssoc);
    echo "<hr>";

    echo "<h2>Array Associativo add</h2>";
    $arrayAssoc['Estado'] = "Rs";
    print_r($arrayAssoc);
    echo "<hr>";

    echo "<h2>Array Multidimensional</h2>";
    $array = [
        'Pessoas' =>
        [
            "nome" => "Edson",
            "idade" => 20,
            "nacionalidade" => "brasileria"
        ],
        [
            "nome" => "Maria",
            "idade" => 22,
            "nacionalidade" => "brasileria"
        ],
        [
            "nome" => "João",
            "idade" => 23,
            "nacionalidade" => "Americano"
        ]   
    ];
    print_r($array);
    echo "<hr>";

    echo "<h2>Obtendendo Valores dos Arrays</h2>";
    $array = [
        'pessoas' => [
            [
                "nome" => "Edson",
                "idade" => 20,
                "nacionalidade" => "brasileria"
            ],
            [
                "nome" => "Maria",
                "idade" => 22,
                "nacionalidade" => "brasileria"
            ],
            [
                "nome" => "João",
                "idade" => 23,
                "nacionalidade" => "Americano"
            ]   
        ]
        
    ];
    print_r($array['pessoas']);
    echo "<br>";
    echo "<br>";
    print_r($array['pessoas'][0]);
    echo "<br>";
    echo "<br>";
    print_r($array['pessoas'][0]['nacionalidade']);

    echo "<hr>";

?>

<?php
    include_once __DIR__."/style.php";
    


    echo "<h1>Dados</h1>";

    echo "<h2>array unique</h2>";
    $array = [1, 2, 3, 1, 1, 4, 5, 2];
    print_r(array_unique($array));
    echo "<hr>";

    echo "<h2>array filter</h2>";
    $array = [
        "nome"  => "edson",
        "idade" => 20,
        "nacionalidade" => null
    ];
    print_r(array_filter($array));
    echo "<hr>";


    echo "<h2>array diff</h2>";
    $arrayA = [1, 2, 3];
    $arrayB = [3, 4, 5];
    print_r(array_diff($arrayB, $arrayA));
    echo "<hr>";

    echo "<h2>array_intersect</h2>";
    $arrayA = [1, 2, 3];
    $arrayB = [3, 4, 5];
    print_r(array_intersect($arrayB, $arrayA));
    echo "<hr>";

    echo "<h2>array_collumn</h2>";
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
    print_r(array_column($array['pessoas'], 'nome'));
    echo "<hr>";

    echo "<h2>array combine</h2>";
    $arrayA = [1, 2, 3];
    $arrayB = ['a', 'b', 'c'];
    print_r(array_combine($arrayA, $arrayB));
    echo "<hr>";

    echo "<h2>array merge</h2>";
    $arrayA = [1, 2, 3];
    $arrayB = ['a', 'b', 'c'];
    print_r(array_merge($arrayA, $arrayB));
    echo "<hr>";

    echo "<h2>array Pad</h2>";
    $array = ["Joao", "Ana"];
    print_r(array_pad($array, 10, "nada"));
    echo "<hr>";

    echo "<h2>array Shift</h2>";
    $array = ["Joao", "Ana", "Jose"];
    echo array_shift($array);
    echo "<br>";
    print_r($array);
    echo "<hr>";

    echo "<h2>array unShift</h2>";
    $array = ["Joao", "Ana", "Jose"];
    echo array_unshift($array, "carlos");
    echo "<br>";
    print_r($array);
    echo "<hr>";

    echo "<h2>array pop</h2>";
    $array = ["Joao", "Ana", "Jose"];
    echo array_pop($array);
    echo "<br>";
    print_r($array);
    echo "<hr>";

    echo "<h2>array unset</h2>";
    $array = ["Joao", "Ana", "Jose"];
    unset($array[1]);
    echo "<br>";
    print_r($array);
    echo "<hr>";

    echo "<h2>array_map</h2>";
    $array = [
        'pessoas' => 
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
    $map = array_map(function($valor){
        $valor['nome'] =  strtolower($valor['nome']);
        $valor['novo'] = random_int(200, 1000);
        return $valor;
    }, $array);

    print_r($map);
    echo "<hr>";

?>

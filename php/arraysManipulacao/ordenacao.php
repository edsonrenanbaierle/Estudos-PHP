<?php
    include_once __DIR__."/style.php";
    


    echo "<h1>Ordenacao</h1>";

    echo "<h2>Sort</h2>";
    $array = ['uva', 'maça', 'melancia', 'banana'];
    sort($array);
    print_r($array);
    echo "<hr>";

    echo "<h2>Asort</h2>";
    $array = ['uva', 'maça', 'melancia', 'banana'];
    asort($array);
    print_r($array);
    echo "<hr>";

    echo "<h2>Rsort</h2>";
    $array = ['uva', 'maça', 'melancia', 'banana'];
    rsort($array);
    print_r($array);
    echo "<hr>";

    echo "<h2>Arsort</h2>";
    $array = ['uva', 'maça', 'melancia', 'banana'];
    arsort($array);
    print_r($array);
    echo "<hr>";

    echo "<h2>Ksort</h2>";
    $arrayAssoc = [
        "nome"  => "edson",
        "idade" => 20,
        "nacionalidade" => "Brasileira"
    ];
    ksort($arrayAssoc);
    print_r($arrayAssoc);
    echo "<hr>";

    echo "<h2>Krsort</h2>";
    $arrayAssoc = [
        "nome"  => "edson",
        "idade" => 20,
        "nacionalidade" => "Brasileira"
    ];
    krsort($arrayAssoc);
    print_r($arrayAssoc);
    echo "<hr>";


    echo "<h2>Usort</h2>";

    $arrayAssoc2 = [
        'Pessoas' => [
            [
                "nome" => "Edson",
                "idade" => 20,
                "nacionalidade" => "brasileria"
            ],
            [
                "nome" => "Maria",
                "idade" => 26,
                "nacionalidade" => "brasileria"
            ],
            [
                "nome" => "João",
                "idade" => 23,
                "nacionalidade" => "Americano"
            ]   
        ]
    ];

    usort($arrayAssoc2['Pessoas'], function($a, $b){
        if($a['idade'] == $b['idade']){
            return 0; //sao iguais (mesma idade)
        }elseif($a['idade'] < $b['idade']){
            return -1; //a < b 
        }else{
            return 1; //b > a;
        }
    });

    print_r($arrayAssoc2);

    echo "<hr>";



    echo "<h2>Uasort</h2>";

    $arrayAssoc2 = [
        'Pessoas' => [
            [
                "nome" => "Edson",
                "idade" => 20,
                "nacionalidade" => "brasileria"
            ],
            [
                "nome" => "Maria",
                "idade" => 26,
                "nacionalidade" => "brasileria"
            ],
            [
                "nome" => "João",
                "idade" => 23,
                "nacionalidade" => "Americano"
            ]   
        ]
    ];

    uasort($arrayAssoc2['Pessoas'], function($a, $b){
        if($a['idade'] == $b['idade']){
            return 0; //sao iguais (mesma idade)
        }elseif($a['idade'] < $b['idade']){
            return -1; //a < b 
        }else{
            return 1; //b > a;
        }
    });

    print_r($arrayAssoc2);

    echo "<hr>";

    
    echo "<h2>Shuffle</h2>";
    $array = ['uva', 'maça', 'melancia', 'banana'];
    shuffle($array);
    print_r($array);
    echo "<hr>";

    echo "<h2>Natsort</h2>";
    $array = ['10.0v', '1.0v', '2.4v', '18.2v'];
    natsort($array);
    print_r($array);
    echo "<hr>";

?>

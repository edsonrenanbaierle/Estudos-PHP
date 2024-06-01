<?php 
    require_once('./casaGrande.php');
    require_once('./casaPequena.php');

    $minhaCasa = new casaGrande(10, 30);
    $minhaCasa->setCorCasa("Branco");

    $minhaCasaPequena = new casaPequena(10, 30);
    print($minhaCasa->showCasa());

    echo "<pre>";
    echo "<p> Casa Pequena </p>";
    print_r($minhaCasaPequena);

    echo "</pre>";
?>
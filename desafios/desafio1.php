<?php
    $array = scandir('files/');

    foreach ($array as $key => $value) {
        $diretorioCompleto = "files/" . $value;
        $fopen = fopen($diretorioCompleto, "r");
        $file = fread($fopen, filesize($diretorioCompleto));

        $arr = explode(",", $file);
        echo $arr[0];

        //descriptografia
        //$descriptografado = base64_decode($arr[1]);
        //echo $descriptografado;

        $explode1 = explode('/', );

        // $regex = '\/(...)';
        // preg_match_all($regex, $arr[0], $resultado);
        // echo $resultado;
        
        
    }

    //$diretorioCompleto = "arquivos/file1.txt";
    //$fopen = fopen($diretorioCompleto, "r");
    //$file = fread($fopen, filesize($diretorioCompleto));
    //$arr = explode(",", $file);


    
?>
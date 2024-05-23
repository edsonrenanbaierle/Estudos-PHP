<?php
    $array = scandir('files/');

    //comando unsset para retirar os . e ..
    unset($array[0]);
    unset($array[1]);

    foreach ($array as $key => $value) {
        //caminho para a pasta
        $diretorioCompleto = "files/" . $value;

        //abro pasta no modo read
        $fopen = fopen($diretorioCompleto, "r");

        //pego o conteudo contido na pasta
        $file = fread($fopen, filesize($diretorioCompleto));

        //separo o coteudo na , ficando 2 posições
        

        //pegar extensao do arquivo
        $regex = '/\/(.*?);/'; //regex para pegar do / até o ;
        preg_match_all($regex, $arr[0], $resultado); //delve um array bidimensional
        $extensao = $resultado[1][0];//acesso a posição desejada

        //descriptografia
        $descriptografado = base64_decode($arr[1]);
        


        //salvar dados na image
        $fileName = date('d.m.Y');
        $diretorioCompletoImage = "images/" . $fileName . "." . $extensao;
        $fopenImage = fopen($diretorioCompletoImage, 'w');

        $str = $descriptografado;

        fwrite($fopenImage, $str);

        fclose($fopenImage);
        fclose($fopen);
        
        
    }

?>
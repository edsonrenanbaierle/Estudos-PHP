<?php
    require_once __DIR__ . "/utils/returnArrayFilter.php";
    require_once __DIR__ . "/utils/returnExtArquivo.php";
    require_once __DIR__ . "/utils/salvarDados.php";

    $files = scandir('files/'); //retorna o nome dos arquivos na pasta file
    $filesFiltrado = array_filter($files, 'returnArrayFilter'); //devole o array filtrado segundo as especifidades
    $filesFiltrado = array_values($filesFiltrado);//coloca as chaves do array para 0, 1, 2 novamente

    foreach ($filesFiltrado as $key => $nomeArq) {

        $diretorioCompleto = "files/" . $nomeArq;
        $fopen = fopen($diretorioCompleto, "r"); //abrir para leitura
        $fileConteudo = fread($fopen, filesize($diretorioCompleto));//conteudo da pasta

        $arrayFileConteudo = explode(",", $fileConteudo);  //retorna array dividindo pela virgula

        $extensao = extArquivo($arrayFileConteudo[0]);//retorna a extensao do arquivo
        $fileConteudoDescriptografado = base64_decode($arrayFileConteudo[1]); //retorna o conteudo do arquivo descriptografado

        //salvar dados na image
        $nomeArquivo = date('d.m.Y');
        salvarDados($nomeArquivo, $extensao, $fileConteudoDescriptografado);

        //fechamento dos arquivos
        fclose($fopen);

    }
?>
<?php

    function salvarDados($nomeDoArquivo, $extensao, $conteudoDoArquivo){
        //salvar dados na image
        $diretorioCompletoImage = "./images/" . $nomeDoArquivo . "." . $extensao;
        $fopenImage = fopen($diretorioCompletoImage, 'w');
        fwrite($fopenImage, $conteudoDoArquivo);
    }
?>
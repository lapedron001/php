<?php
$arquivo = 'arquivo.txt';
$conteudo = "conteudo de texte\r\n";

$tamanhoArquivo = filesize($arquivo);

$arquivoAberto = fopen($arquivo, 'r');

while(!feof($arquivoAberto)){
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha. "<br>";
}


fclose($arquivoAberto);
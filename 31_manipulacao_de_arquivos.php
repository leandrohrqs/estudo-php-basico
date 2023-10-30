<?php
// Manipulação de arquivos
/*
 * fopen()
 * fclose()
 * fwrite()
 * !feof()
 * fgets()
 * filesize()
 */

$arquivo = 'arquivo.txt';
$conteudo = "Conteudo de teste\r\n";

$arquivoAberto = fopen($arquivo, 'r');
// fwrite($arquivoAberto, $conteudo);
// fclose($arquivoAberto);

$tamanhoArquivo = filesize($arquivo);

while (!feof($arquivoAberto)){
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha . "<br>";
}
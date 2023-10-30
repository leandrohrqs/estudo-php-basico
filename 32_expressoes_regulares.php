<?php
/*
 * ^ - Indica o início da expressão
 * $ - Indica o fim da expressão
 * [A-Z] - Letras maiúsculas
 * [a-z] - Letras minúsculas
 * [a-zA-Z] - Letras maiúsculas e minúsculas
 * [a-zA-Z0-9] - Letras maiúsculas, minúsculas e números
 * i - Ao final da ultima barra ignora o case sensitive
 * {} - Define a quantidade de caracteres
 * ? - Aceita uma ou nenhuma ocorrencia
 * * - Aceita 0 ou várias ocorrencias
 * + Aceita uma ou mais ocorrencias
 */

$string = "contato@gmail.com";
$padrao = '/^[a-zA-Z0-9.\-_]+@[a-z-09.\-_]+\.(com|br|com.br|net)$/i';

if (preg_match($padrao, $string)){
    echo "Válido";
    echo "<hr>";
    echo $string;
}else{
    echo "Inválido";
    echo "<hr>";
}

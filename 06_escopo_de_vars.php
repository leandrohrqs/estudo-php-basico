<?php
//Escopo global
$nome = "Leandro Henriques";
$a = 1;
$b = 3;
$c = 7;
// Escopo local
function mostrarNome(){
// para acessar a variável global, deve atribuir a palavra "global"
    global $nome;
    echo $nome;
}
mostrarNome();

function mostrarCidade(){
    global $cidade;
    $cidade = "Belo Horizonte";
}
echo "<br>";
echo "<br>";
mostrarCidade();
echo $cidade;
/////////////////////////////////////////////

function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
echo "<br>";
echo "<br>";
soma();

<?php

$carros = array("BMW", "Veloster", "Hilux");

// echo $carros
// Este código gera um erro, existe uma funcção para mostra arrays
// Porém é possível exibir pelos índices, exemplo: echo $carros[0] -> mostraria: "BMW"

print_r($carros);

// Para exibir a quantidade de elementos de um array, utilizamos a função count()
echo "<br>";
echo count($carros); // Mostra a quantidade de intens dentro do array

$totalCarros = count($carros);
echo "<hr>";
// Foreach

foreach($carros as $valor){
    echo $valor."<br>";
}
echo "<hr>";
// Arrays associativos - É um array quando os índices são strings

$pessoa = array("nome"=> "Leandro", "idade"=> 19, "altura"=> 1.75);
$pessoa["cidade"] = "Belo Horizonte";
var_dump($pessoa);
echo "<hr>";
foreach($pessoa as $indice => $valor){
    echo $indice.":".$valor."<br>";
}

// Array Dimensional = São arrays que tem outros arrays dentro.
$estados = array(
    "sul"=> array("Paraná", "Santa Catarina", "Rio Grande do Sul"),
    "sudeste"=> array("Espirito Santo", "Minas Gerais", "São Paulo", "Rio de Janeiro"),
    "nordeste"=> array("Alagoas", "Bahia", "Ceará", "Maranhão", "Paraíba", "Pernambuco", "Piauí", "Rio Grande do Norte", "Sergipe")
);
echo "<hr>";

foreach ($estados["sudeste"] as $indice => $valor){
    echo $indice.":".$valor."<br>";
}
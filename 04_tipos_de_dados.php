<?php
/******** Dados Escalares *******/

// string = sequencia de caracteres
$nome = "Leandro";

var_dump($nome);

if(is_string($nome)):
    echo "<br> É uma string";
else:
    echo "Não é uma string";
endif;
echo "<br>";

// Int = representa números inteiros
$idade = 19;
echo "<br>";
echo is_int($idade); // Mostra "1" se for
// Float = Representa números reais
$saldo = 1972.93;

// Boolean = representa verdadeiro ou falso

$admin = True;
$owner = False;

/******** Dados Compostos *******/

// Array = Representa vários valores
echo "<br>";
echo "<br>";
$carros = array("Gol", "Uno", "Fusca");
var_dump($carros);

// Objeto

class Cliente {
    public $name;

    public function setName($name)
    {
        $this->$name = $name;
    }
}
echo "<br>";
echo "<br>";
$cliente = new Cliente();
$cliente->setName("Leandro");
var_dump($cliente);

/******** Especiais *******/

//Null = Não tem valor algum
echo "<br>";
echo "<br>";
$pais = null;

echo "$pais";
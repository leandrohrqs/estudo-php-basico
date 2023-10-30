<?php
$contador = 0;
// For = utilizado quando já sabe o numero de repetições que precisa

for ($contador = 0; $contador <= 10; $contador++):
    echo "8 x $contador = " . ($contador * 8) . "<br>";
endfor;

echo "<hr>";

// Foreach = utilizado para percorrer arrays

$cores = ["verde", "amarelo", "azul"];

foreach ($cores as $indice => $cor):
    echo "$indice = $cor <br>";
endforeach;
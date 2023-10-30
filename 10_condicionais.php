<?php
/*
if
else
elsif
endif
 */

$numero = 10;

if($numero == 10):
    echo "é igual a 10";
elseif($numero <= 9):
    echo "é menor ou igual a 9";
else:
    echo "É diferente de 10";
endif;

echo "<hr>";

$media = 6;
echo ($media >=7) ? "Aprovado" : "Reprovado";

echo "<hr>";

// Switch case

$cor = "Azul";

switch ($cor):
    case "Vermelho":
        echo "Sua cor preferida é o vermelho";
        break;
    case "Verde":
        echo "Sua cor ŕeferida é o verde!";
        break;
    case "Azul":
        echo "Sua cor preferida é o azul!";
        break;
    default:
        echo "Cor preferida, não é vermelhor, verde ou azul";
    endswitch;

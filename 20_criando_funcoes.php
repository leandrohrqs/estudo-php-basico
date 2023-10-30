<?php

function getName($name) {
    echo "Meu nome é $name";
}

getName("Leandro Henriques");

echo "<hr>";

function calcMedia($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    if ($media >= 7):
        echo "Aprovado";
    else:
        echo "Reprovado";
    endif;
}

calcMedia(9, 4);
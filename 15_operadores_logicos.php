<?php
/*
 * Operadores lógicos
 * and (&&)
 * or (||)
 * exclusive (xor)
 * negation (!)
 */


$idade = 19;
$nome = "Joaquim";

if (($idade == 25) and ($nome == "Joaquim")):
    echo "é verdade";
else:
    echo "é falso";
endif;
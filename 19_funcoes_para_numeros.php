<?php
/*
 * Numbers functions
 * number_format()
 * round()
 * ceil()
 * floor()
 * rand()
 */

$db = 1234.56;
$preco = number_format($db, 2, ',', '.');
echo "O valor do produto é R$ $preco";

echo "<hr>";

echo rand(1, 100);

<?php
// Constantes = É o identificador para um valor único
// parametro 1 = nome do identificador, parametro 2 = valor
// Não é possível alterar a constante depois
// O identificador deve ser sempre em letra maiúscula
define("NOME", "Leandro Henriques");
define("IDADE", 24);
define("ALTURA", 1.75);
define("CASADO", false);

define("TIME", ["Atletico Mineiro", "Cuiaba", "Vasco", "Santos"]);


echo 'Meu nome é '.NOME.', minha idade é '.IDADE.', minha altura é '.ALTURA;
echo "<br>";
echo TIME[0];
//O conteúdo do [] vai ate o final da lista/array

// !!!!!! Os identificadores são globais. !!!!!!!

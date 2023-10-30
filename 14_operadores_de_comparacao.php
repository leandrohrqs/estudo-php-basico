<?php
/*
 * Operadores de comparação
 * ==
 * !=
 * === (identidade, se é identico, importa o tipo)
 * !== (identidade, se é diferente, importa o tipo)
 * <> (diferença)
 * <
 * >
 * <=
 * >=
 * <=> (Operador "spaceship", retorna apenas 3 valores: 1, 0 ou -1
 * se o lado esquerdo for menor ele retorna -1, se for igual ele retorna 0 e se o lado direito for menor ele retorna 1)
 */

if(10 <> 11):
    echo "Verdadeiro";
else:
    echo "Falso";
endif;
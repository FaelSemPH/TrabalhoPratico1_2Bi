<?php
/*********
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2B
Componentes:
 26004475-2 - Henrique Cardoso Velozo
 26009165-2 - Kauan Correia Glodzinski 
 26011550-2 - Luis Fernando Buchmann Moreira
 26005865-2- Miguel Alves de Lima
 26009929-2 - Rafael da Silva Barbosa
 26008249-2 - Vítor Hugo Martins Prates 
Data: 19 de Setembro de 2026
Descritivo: A função recebe um limite numérico n e inicializa um array vazio. 
Ela executa um laço de repetição começando em 0 e avançando até n
**********************/

function gerarArrayPares($n) {
    $pares = [];

    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            $pares[] = $i;
        }
    }

    return $pares;
}

print_r(gerarArrayPares(10));
?>

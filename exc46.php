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
Descritivo: A função recebe um número n. Primeiramente, ela elimina casos óbvios que testa a divisão de n por todos
os números inteiros a partir de 2 até a raiz quadrada de n. Se o resto de qualquer uma dessas divisões
for igual a zero, a função é interrompida e retorna false.
Caso o laço termine sem encontrar divisores, ela retorna true.
**********************/

function ehPrimo($numero) {

    if ($numero < 2) {
        return false;
    }

    for ($i = 2; $i < $numero; $i++) {

        if ($numero % $i == 0) {
            return false;
        }

    }

    return true;
}
?>
?>

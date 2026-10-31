<?php
/***********************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2B
Componentes:
 26004475-2 - Henrique Cardoso Velozo
 26009165-2 - Kauan Correia Glodzinski 
 26011550-2 - Luis Fernando Buchmann Moreira
 26005865-2 - Miguel Alves de Lima
 26009929-2 - Rafael da Silva Barbosa
 26008249-2 - Vítor Hugo Martins Prates 
Data: 24 de Outubro de 2026
Descritivo: Procedimento com Array: Crie um procedimento imprimirArray que receba um array e imprima todos os seus elementos.
****************************************************************/

function imprimirArray($array) {
    foreach ($array as $elemento) {
        echo $elemento . "\n";
    }
}

imprimirArray([1, 2, 3, 4, 5]);
?>
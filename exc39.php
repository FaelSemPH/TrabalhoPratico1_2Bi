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
Descritivo: Procedimento: Crie um procedimento contagem Regressiva que receba um número e imprima uma contagem regressiva a partir dele até 0.
****************************************************************/

function contagemRegressiva($numero) {
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . "\n";
    }
}

contagemRegressiva(10);
?>

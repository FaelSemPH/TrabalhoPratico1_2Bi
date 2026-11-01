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
Descritivo: Procedimento: Elabore um procedimento chamado calcularMediaAluno que receba duas notas e imprima a média e se o aluno foi "Aprovado" (média >=7) ou "Reprovado".
****************************************************************/

function calcularMediaAluno($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;
    echo "Média: " . $media . "\n";
    
    if ($media >= 7) {
        echo "Situação: Aprovado\n";
    } else {
        echo "Situação: Reprovado\n";
    }
}

calcularMediaAluno(8.5, 6.0);
?>

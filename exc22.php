<?php
/******************************************************************************
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
Descritivo: Usando o array do exercício 21, imprima cada dado no formato "chave: valor".
Explicação: O código cria um array associativo para armazenar os dados de dois alunos, incluindo nome, idade e curso. 
Em seguida, utiliza um loop foreach para percorrer os arrays e imprimir as informações de cada aluno no formato "chave: valor".
Exemplo de saída: 
Nome: João Silva
Idade: 20
Curso: Engenharia de Software
*******************************************************************************/

    $alunos = [
        [
            "Nome" => "João Silva",
            "Idade" => 20,
            "Curso" => "Engenharia de Software"
        ],
        [
            "Nome" => "Angela Costa",
            "Idade" => 24,
            "Curso" => "Ciência da Computação"
        ]
    ];

    echo("Informações dos alunos:\n");

    foreach ($alunos as $aluno) {
        foreach ($aluno as $chave => $valor) {
            echo "$chave: $valor\n";
        }
        echo "\n";
    }

    echo("Programa encerrado.");
?>

<?php
    echo("EXERCÍCIO 22\n\n");

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
<?php
    echo("EXERCÍCIO 21\n\n");
    
    $alunos = array(
        "Nome" => array("João Silva", "Angela Costa"),
        "Idade" => array(20, 24),
        "Curso" => array("Engenharia de Software", "Ciência da Computação"),
    );

    echo("Informações dos alunos:\n");

    for ($i = 0; $i < count($alunos["Nome"]); $i++) {
        echo("Nome: " . $alunos["Nome"][$i] . "\n");
        echo("Idade: " . $alunos["Idade"][$i] . "\n");
        echo("Curso: " . $alunos["Curso"][$i] . "\n\n");
    }

    echo("Programa encerrado.");
?>
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
Descritivo: Crie um array associativo para armazenar os dados de um aluno (nome, idade, curso).
Explicação: O código cria um array associativo para armazenar os dados de dois alunos, incluindo nome, idade e curso. 
Em seguida, utiliza um loop for para percorrer os arrays e imprimir as informações de cada aluno em linhas separadas.
*******************************************************************************/
    
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

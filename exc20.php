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
Descritivo: Crie um array com os 7 dias da semana e imprima-os usando um laço for.
Explicação: O código cria um array com os dias da semana e utiliza um loop que for para imprimir cada dia em uma linha.
*******************************************************************************/
    $semana = array(
        "Segunda-feira",
        "Terça-feira",
        "Quarta-feira",
        "Quinta-feira",
        "Sexta-feira",
        "Sábado",
        "Domingo",
    );

    for ($i = 0; $i < count($semana); $i++) {
        echo("Dia da semana: " . $semana[$i] . "\n");
    }

    echo("\nPrograma encerrado.")
?>

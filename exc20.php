<?php
    echo("EXERCÍCIO 20\n\n");
    
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
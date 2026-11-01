<?php
    echo("EXERCÍCIO 19\n");
    
    $numeros = array(
        2,
        4,
        8,
        16,
        32,
    );

    $soma = 0;
    echo("Os valores para somar são: ");
    foreach ($numeros as $numero) {
        $soma += $numero;
        echo($numero . ", ");
    }
    echo("\nResultado final: " . $soma . "\nPrograma encerrado.");
?>
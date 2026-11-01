<?php
    echo("EXERCÍCIO 25\n\n");
    
    $numeros = array(
        159,
        24,
        3947,
        4,
        57,
    );

    $quantidade = count($numeros);
    echo "O array possui " . $quantidade . " elementos:";

    foreach ($numeros as $numero) {
        echo("\n" . $numero);
    }

    echo("\n\nPrograma encerrado.");
?>
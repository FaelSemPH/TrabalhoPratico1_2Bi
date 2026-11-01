<?php
    echo("EXERCÍCIO 24\n\n");

    $produtos = [
        [
            "Nome" => "caderno",
            "Preço" => 25.00,
        ],
        [
            "Nome" => "caneta",
            "Preço" => 3.00,
        ]
    ];


    echo("Informações dos produtos:\n");

    foreach ($produtos as $produto) {
        foreach ($produto as $chave => $valor) {
            echo "$chave: " . "R$ " . $valor . "\n";
        }
        echo "\n";
    }

    echo("Programa encerrado.");
?>
<?php
    echo("EXERCÍCIO 23\n\n");
   
    $produtos = [
        [
            "Nome" => "Caderno",
            "Preço" => 25.00,
        ],
        [
            "Nome" => "Caneta",
            "Preço" => 3.00,
        ]
    ];

    echo($produtos[0]["Nome"] . " custa R$ " . $produtos[0]["Preço"] . "\n");
    echo($produtos[1]["Nome"] . " custa R$ " . $produtos[1]["Preço"] . "\n");
?>
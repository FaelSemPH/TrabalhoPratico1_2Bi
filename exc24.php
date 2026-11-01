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
Descritivo: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto.
Explicação: O código cria um array de produtos, onde cada produto é representado por um array associativo contendo o nome e o preço. 
Em seguida, utiliza um loop foreach para percorrer os arrays e imprimir as informações de cada produto no formato "chave: valor", com o preço precedido de "R$".
*******************************************************************************/

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

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
Descritivo: Crie um array de produtos, onde cada produto é um array associativo com "nome" e "preço".
Explicação: O código cria um array de produtos, onde cada produto é representado por um array associativo contendo o nome e o preço. 
Em seguida, imprime o nome e o preço de cada produto.
*******************************************************************************/
   
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

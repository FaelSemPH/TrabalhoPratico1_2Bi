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
Descritivo: Usando o array de cidades do exercício 16, imprima cada cidade em uma nova linha usando foreach.
Explicação: O código cria um array de cidades e utiliza um loop foreach para imprimir cada cidade em uma nova linha.
*******************************************************************************/
    $cidades = array(
        "São Paulo",
        "Rio de Janeiro",
        "Belo Horizonte",
        "Curitiba",
        "Salvador",
    );

    echo("Cidades disponíveis: " . "\n");
    foreach ($cidades as $cidade) {
        echo($cidade . "\n");
    }
    echo("\nPrograma encerrado.");
?>

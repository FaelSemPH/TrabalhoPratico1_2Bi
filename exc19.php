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
Descritivo: Usando o array de números do exercício 17, calcule e imprima a soma de todos os números com foreach.
Explicação: O código cria um array de números e utiliza um loop foreach para calcular a soma de todos os números. 
Em seguida, imprime os valores que foram somados e o resultado final da soma.
*******************************************************************************/
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

<?php
/***********************
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
Descritivo: Sistema recebe um número e mostra sua tabuata de 1 a 10
****************************************************************/

	//função que calcula e exibe a tabuada de um número 
    function  mostrarTabuada($numero) {
        echo $numero . "x1 = " . $numero*1 . "\n";
        echo $numero . "x2 = " . $numero*2 . "\n";
        echo $numero . "x3 = " . $numero*3 . "\n";
        echo $numero . "x4 = " . $numero*4 . "\n";
        echo $numero . "x5 = " . $numero*5 . "\n";
        echo $numero . "x6 = " . $numero*6 . "\n";
        echo $numero . "x7 = " . $numero*7 . "\n";
        echo $numero . "x8 = " . $numero*8 . "\n";
        echo $numero . "x9 = " . $numero*9 . "\n";
        echo $numero . "x10 = " . $numero*10 . "\n";
    }
    
    //código que chama a função e pede para digitar o número que vai ser calculada a tabuada
    mostrarTabuada(readline("Digite um número: "));
?>

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
 26005865-2 - Miguel Alves de Lima
 26009929-2 - Rafael da Silva Barbosa
 26008249-2 - Vítor Hugo Martins Prates 
Data: 24 de Outubro de 2026
Descritivo: Função: Crie uma função chamada somar que receba dois números e retorne a soma deles.
****************************************************************/

function somar($num1, $num2) {
    return $num1 + $num2;
}

$resultado = somar(15, 25);
echo "A soma é: " . $resultado . "\n";
?>

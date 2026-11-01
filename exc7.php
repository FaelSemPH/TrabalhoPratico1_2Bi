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
Descritivo: esse pede um numero para o usuário, até que ele acerte o numero definido, nesse caso 7
****************************************************************/

$numero = 7;

$tentativa = 0;

while ($tentativa != $numero) {
    $tentativa = (int) readline("Adivinhe o número: ");
}

echo "Parabéns! Você acertou!";
?>

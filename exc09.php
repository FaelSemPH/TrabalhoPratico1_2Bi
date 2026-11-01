<?php
/*********************************************************
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
Descritivo: Soma de numeros onde o usuario determina quantos serão
********************************************************/

$soma = 0;

while (true) {
    $numero = (int) readline("Digite um número (0 para sair): ");
    
    if ($numero == 0) {
        break;
    }
    
    $soma += $numero;
}

echo "A soma total dos números é: $soma\n";
?>

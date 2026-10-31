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
Descritivo: Faz um menu de opções
**/*******************************************************/

<?php
do {
    echo "\n--- MENU ---\n";
    echo "1. Iniciar\n";
    echo "2. Parar\n";
    echo "3. Sair\n";
    
    $opcao = readline("Escolha uma opção: ");
    
    if ($opcao == 1) {
        echo "Você escolheu: Iniciar\n";
    } elseif ($opcao == 2) {
        echo "Você escolheu: Parar\n";
    } elseif ($opcao == 3) {
        echo "Saindo do programa...\n";
    } else {
        echo "Opção inválida!\n";
    }
    
} while ($opcao != 3);
?>
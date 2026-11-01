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
Descritivo: Aplicação imprime uma lista de números espalhados em ordem crescente
****************************************************************/
	//lista de números
    $listaNumeros = [10, 2, 5, 8, 1];
    
    //método que organiza a lista
    sort($listaNumeros);
    
    //função que mostra todos os números
    print_r($listaNumeros);
?>

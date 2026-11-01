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
Descritivo: Sistema verifica se existe o elemento maçã dentro de uma lista de frutas
****************************************************************/

    $frutas = ["banana", "abacate", "laranja",];

	//código busca o elemento maçã e retorna uma mensagem confirmando de existe ou não
    if(in_array("maçã", $frutas)){
        echo "Tem maçã";
    } else {
        echo "Não tem maçã";
    }
?>

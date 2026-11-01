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
Descritivo: Sistema tem uma lista com 4 notas de um aluno e calcula sua média
****************************************************************/

	//lista de notas
    $aluno = [
        "disciplina01" => 8.5,
        "disciplina02" => 6.2,
        "disciplina03" => 5.7,
        "disciplina04" => 6.7
    ];
    
    //método de calcular a média
    $media = array_sum($aluno)/4;
    
    //print da média com arredondamento
    print_r(round($media, 2))
?>

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
Descritivo: Procedimento: Faça um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados.
****************************************************************/

function imprimirDadosCarro($carro) {
    echo "Marca: " . $carro['marca'] . "\n";
    echo "Modelo: " . $carro['modelo'] . "\n";
    echo "Ano: " . $carro['ano'] . "\n";
}

$meuCarro = ["marca" => "Peugeot", "modelo" => "BB1", "ano" => 2010];
imprimirDadosCarro($meuCarro);
?>

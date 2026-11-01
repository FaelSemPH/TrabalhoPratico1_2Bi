<?php
/*********
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
Descritivo: A função recebe uma string como parâmetro de entrada e utiliza
 um método nativo da linguagem para processar a string inteira de uma só vez, devolvendo o 
 texto modificado sem alterar os caracteres especiais ou numéricos.
**********************/

function converterParaMaiusculas($texto) {
    return strtoupper($texto);
}
?>

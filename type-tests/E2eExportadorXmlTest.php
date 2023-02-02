<?php

require_once 'Pessoa.php';
require_once 'ExportadorDePessoaEmXml.php';

//Preparando cenário de teste
$pessoa = new Pessoa('Arthur Isvi', new DateTimeImmutable('2001-09-01'));
$exportador = new ExportadorDePessoaEmXml($pessoa);

//Executa a ação a ser testada
$xml = $exportador->exporta();

//Verifica se o resultado é o esperado
$xmlEsperado = '<pessoa>';
$xmlEsperado .= '<nome>Arthur Isvi</nome>';
$xmlEsperado .= '<idade>21</idade>';
$xmlEsperado .= '</pessoa>';

if(str_contains($xml, $xmlEsperado)){
  print('Teste passou');
}else{
  print('Teste falhou');
}


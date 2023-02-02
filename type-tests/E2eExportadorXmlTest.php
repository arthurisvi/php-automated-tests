<?php

require_once 'Pessoa.php';
require_once 'ExportadorDePessoaEmXml.php';

//Preparando cenário de teste
// dublê de teste
$exportador = new ExportadorDePessoaEmXml(new class extends Pessoa
{

  public function __construct(){}

  public function nome(): string
  {
    return 'Arthur Isvi';
  }

  public function idade(): int
  {
    return 21;
  }
});

//Executa a ação a ser testada
$xml = $exportador->exporta();

//Verifica se o resultado é o esperado
$xmlEsperado = '<pessoa>';
$xmlEsperado .= '<nome>Arthur Isvi</nome>';
$xmlEsperado .= '<idade>21</idade>';
$xmlEsperado .= '</pessoa>';

if (str_contains($xml, $xmlEsperado)) {
  print('Teste passou');
} else {
  print('Teste falhou');
}

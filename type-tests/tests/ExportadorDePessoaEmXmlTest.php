<?php

use PHPUnit\Framework\TestCase;

class ExportadorDePessoaEmXmlTest extends TestCase {

  public function testExportarPessoaEmXmlDeveFuncionar(){

    //Prepara o cenário de teste
    $pessoa = $this->createStub(Pessoa::class);
    $pessoa->method('nome')->willReturn('Arthur Isvi');
    $pessoa->method('idade')->willReturn(21);
    $exportador = new ExportadorDePessoaEmXml($pessoa);

    //Executa a ação a ser testada
    $xml = $exportador->exporta();

    $xmlEsperado = '<pessoa>';
    $xmlEsperado .= '<nome>Arthur Isvi</nome>';
    $xmlEsperado .= '<idade>21</idade>';
    $xmlEsperado .= '</pessoa>';
    
    //Verifica se o resultado é o esperado
    $this->assertTrue(str_contains($xml, $xmlEsperado));
  }

}

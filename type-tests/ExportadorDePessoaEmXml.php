<?php

class ExportadorDePessoaEmXml{

  private Pessoa $pessoa;

  public function __construct(Pessoa $pessoa) {
    $this->pessoa = $pessoa;
  }

  public function exporta(): string {
    $xml = new SimpleXMLElement('<pessoa/>');
    $xml->addChild('nome', $this->pessoa->nome());
    $xml->addChild('idade', $this->pessoa->idade());

    return $xml->asXML();
  }
}
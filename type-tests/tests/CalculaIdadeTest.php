<?php

use PHPUnit\Framework\TestCase;

class CalculaIdadeTest extends TestCase {
  public function testCalculaIdadeDeveFuncionar()
  {
    //Preparando cenário de teste
    $pessoa = new Pessoa('Arthur Isvi', new DateTimeImmutable('2001-09-01'));

    //Executa a ação a ser testada
    $idade = $pessoa->idade();

    //Verifica se o resultado é o esperado
    $this->assertEquals(21, $idade);
  }
}
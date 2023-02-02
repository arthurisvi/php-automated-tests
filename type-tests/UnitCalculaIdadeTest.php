<?php

require_once 'Pessoa.php';

//Preparando cenário de teste
$pessoa = new Pessoa('Arthur Isvi', new DateTimeImmutable('2001-09-01'));

//Executa a ação a ser testada
$idade = $pessoa->idade();

//Verifica se o resultado é o esperado
if($idade === 21){
  print('Teste passou');
}else{
  print('Teste falhou');
}
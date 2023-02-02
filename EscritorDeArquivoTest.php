<?php

require_once './EscritorDeArquivo.php';

//Preparando cenário de teste
$caminhoArquivo = 'arquivo.txt';
$escritor = new EscritorDeArquivo($caminhoArquivo);

//Executa a ação a ser testada
$escritor->escreve('Primeira linha');
$escritor->escreve('Segunda linha');

//Verifica se o resultado é o esperado
$conteudoEsperado = 'Primeira linha
Segunda linha
';

$conteudoArquivo = file_get_contents($caminhoArquivo);

if($conteudoEsperado === $conteudoArquivo){
  print('Teste passou');
}else{
  print('Teste falhou');
}

unlink($caminhoArquivo);



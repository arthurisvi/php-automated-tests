<?php

class Pessoa {
  private string $nome;
  private DateTimeImmutable $dataNascimento;

  public function __construct(string $nome, DateTimeImmutable $dataNascimento) {
    $this->nome = $nome;
    $this->dataNascimento = $dataNascimento;
  }

  public function nome(): string {
    return $this->nome;
  }

  public function idade(): int {
    $hoje = new DateTimeImmutable();
    $idade = $hoje->diff($this->dataNascimento)->y;

    return $idade;
  }

}
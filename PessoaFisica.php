<?php

class PessoaFisica extends Pessoa {
  private $cpf;

 
  public function __construct($nome, $idade, $telefone, $endereço, $cpf)
  {
     parent::__construct($nome, $idade, $telefone, $endereço);
    
     $this ->cpf = $cpf; 
  }

}
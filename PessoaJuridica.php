<?php

class PessoaFisica extends Pessoa {
  private $cnpj;

 
  public function __construct($nome, $idade, $telefone, $endereço, $cnpj)
  {
     parent::__construct($nome, $idade, $telefone, $endereço);
    
     $this ->cnpj = $cnpj; 
  }

}
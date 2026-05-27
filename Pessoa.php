<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $telefone; 
    protected Endereco $endereco; 
 
    public function __construct($nome, $idade, $telefone, $endereço) {
       $this ->nome = $nome;
    }
}

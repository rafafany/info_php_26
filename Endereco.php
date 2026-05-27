<?php

abstract class Endereco {
    protected $rua;
    protected $bairro;
    protected $cep; 
    protected $numero; 

    public function __construct($cep, $bairro, $rua, $numero)
    {

    }
 
}
<?php


class funcionarioModel {
    private $banco;

    public function __construct(BancoDeDados $banco)
    {
        $this ->banco = $banco;
    }

    public function listar()
    {
        $sql = "SELECT * FROM {$this->tabela}";
        return $this->banco->execQuery($sql, "não foi possivel obter os funcionarios."); 
    }

}
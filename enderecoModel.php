<?php

class enderecoModelModel {
    private $banco;

    public function __construct(BancoDeDados $banco)
    {
        $this ->banco = $banco;
    }

     public function listar($filtros = [], $limite = 20, $offset = 0)
    {
        $sql = "SELECT * FROM {$this->tabela}";

        if (!empty($filtros)) {
            $where = [];

            foreach ($filtros as $campo => $valor) {
                $where[] = "$campo = '$valor'";
            }
            
            $sql .= " WHERE " . implode(" AND ", $where);
        }

        $sql .= " LIMIT $limite OFFSET $offset";

        return $this->banco->execQuery($sql, "Não foi possivel obter o endereco");
    }

    public function listarPorId($id)
    {
        $sql = "SELECT * FROM {$this->tabela} WHERE id = $id LIMIT 1";
        return $this->banco->execQuery($sql, "Não foi possivel obter o endereco");
    }

    public function excluir($id)
    {
        $sql = "DELETE FROM {$this->tabela} WHERE id = $id";

        return $this->banco->execQuery($sql, "Não foi possivel obter o endereco.");
    }
    
    public function criar($dados) {

        $campos = implode(", ", array_keys($dados));
        $valores = implode("', '", array_values($dados));

        $sql = "INSERT INTO {$this->tabela} ($campos) VALUES ('$valores')";

        return $this->banco->execQuery($sql, "Não foi possivel obter o endereco");
    }

    public function atualizar($id, $dados) {
        $set = [];

        foreach ($dados as $campo => $valor) {
            $set[] = "$campo = '$valor'";
        }

        $setString = implode(", ", $set);

        $sql = "UPDATE {$this->tabela} SET $setString WHERE id = $id";

        return $this->banco->execQuery($sql, "Não foi possivel obter o endereco");
    }

}
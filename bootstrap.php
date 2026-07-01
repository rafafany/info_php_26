<?php

require_once "conexao.php";
require_once "BancoDeDados.php";
require_once "enderecoModel.php";

$banco = new BancoDeDados($conexao);
$enderecoModel = new enderecoModel($banco);   
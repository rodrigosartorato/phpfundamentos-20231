<?php

// Conectando com o SQLite
$conexao = new PDO('sqlite:bancoPHP.db');

$sql = "SELECT * FROM users";

$retorno = $conexao->query($sql);
$dados = $retorno->fetchAll(PDO::FETCH_ASSOC);

var_dump($retorno, $sql, $dados);


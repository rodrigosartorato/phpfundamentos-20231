<?php

// Conectando com o SQLite
$conexao = new PDO('sqlite:bancoPHP.db');

$sqlInsert = "SELECT * FROM users";

$retorno = $conexao->query($sqlInsert);
$retorno->setFetchMode(PDO::FETCH_ASSOC);

// var_dump($retorno);

foreach ($retorno as $dado) {
    print_r($dado);
}



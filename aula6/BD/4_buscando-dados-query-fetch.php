<?php

// Conectando com o SQLite
$conexao = new PDO('sqlite:bancoPHP.db');

$sqlInsert = "SELECT * FROM users WHERE name LIKE 'A%'";
$sqlInsert = "SELECT * FROM users";
$retorno = $conexao->query($sqlInsert);
// $dado = $retorno->fetch(PDO::FETCH_ASSOC);
// var_dump($dado);

// Fetch busca a próxima linha do resultado
while ($dado = $retorno->fetch(PDO::FETCH_ASSOC)) {
    echo '<br>' . var_export($dado) ;
}

var_dump($dado, $sqlInsert);


<?php

// Conectando com o SQLite
$conexao = new PDO('sqlite:bancoPHP.db');

$sql = "SELECT * FROM users WHERE name = :name";

$consulta = $conexao->prepare($sql);
$consulta->bindValue(':name', 'Angela');
$consulta->execute();
$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
print_r($dados);

echo PHP_EOL . 'Primeiro registro: ' . $dados[0]['name'] . PHP_EOL;

foreach ($dados as $dado) {
    echo PHP_EOL . "id: {$dado['id']} | name: {$dado['name']}";
}
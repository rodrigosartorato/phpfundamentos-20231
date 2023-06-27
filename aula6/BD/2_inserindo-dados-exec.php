<?php

// Conectando com o SQLite
$conexao = new PDO('sqlite:bancoPHP.db');

// Criando tabela users
$retorno = $conexao->exec('CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    email TEXT
 ); ');
var_dump($retorno);

// Inserindo dados com EXEC
$sqlInsert = "INSERT INTO users (name, email) VALUES 
('Pedro Alvares Cabral', 'descobridor@emailemail.com'), 
('Maria da Silva', 'ms@email.com'),
('Joaquim José da Silva Xavier', 'tiradentes@mg.com')";
$retorno = $conexao->exec($sqlInsert);

var_dump($sqlInsert, $retorno);

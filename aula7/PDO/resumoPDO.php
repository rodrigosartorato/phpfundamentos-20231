<?php

// Conectando com o SQLite 
// Particularidade do SQLite
//   - Cria o arquivo do banco caso o banco não exista
//   - É necessário informar apenas o Data Source Name para o PDO
$dsn = '';
$username = null;
$password = null;
$options = null;

// SQLite
$dsn = 'sqlite:treinamento.sqlite';
$conexao = new PDO($dsn, $username, $password, $options);

// Criando tabela users
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT,
    email TEXT
 );";
$retorno = $conexao->exec($sqlCreateTable);
var_dump($retorno);

// Inserindo dados com exec()=>retorna quantidade de linhas afetadas
$sqlInsert = "INSERT INTO users (name, email) VALUES 
    ('Pedro Alvares Cabral', 'descobridor@emailemail.com'), 
    ('Maria da Silva', 'ms@email.com'),
    ('Joaquim José da Silva Xavier', 'tiradentes@mg.com')";
$retorno = $conexao->exec($sqlInsert);
var_dump($sqlInsert, $retorno);

// Consultando dados sem parâmetros / qrery()
$sqlConsulta = "SELECT * FROM users";
$retorno = $conexao->query($sqlConsulta);
$dados = $retorno->fetchAll(PDO::FETCH_ASSOC);
print_r($dados);

// Consultando dados com parâmetros / prepare() + execute()
$sqlConsulta = "SELECT * FROM users WHERE name = :name";
$consulta = $conexao->prepare($sqlConsulta);
// bindValue() - Vincula o parâmetro ao valor
$consulta->bindValue(':name', 'Angela', PDO::PARAM_STR); 
$consulta->execute();
$dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
print_r($dados);

// Percorrendo resultado da consulta
foreach ($dados as $dado) {
    echo PHP_EOL . "id: {$dado['id']} | name: {$dado['name']}";
}
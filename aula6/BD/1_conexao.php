<?php

$dsn = '';
$username = null;
$password = null;
$options = null;

// SQLite
$dsn = 'sqlite:treinamento.sqlite';
$conexao = new PDO($dsn, $username, $password, $options);
var_dump($conexao);

exit;

// MS SQLServer
$dsn = 'sqlsrv:server=localhost;database=treinamento';
$username = 'sa';
$password = 'P@ssw0rd';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
$conexao = new PDO($dsn, $username, $password, $options);

// MySQL
$dsn = 'mysql:host=localhost:3307;dbname=treinamento';
$username = 'root';
$password = 'P@ssw0rd';
$options = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];
$conexao = new PDO($dsn, $username, $password, $options);


echo 'Conectado - dsn: <b>' . $dsn . '<b>';
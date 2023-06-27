<?php

// Conectando com o SQLite
$conexao = new PDO('sqlite:bancoPHP.db');

// Tipo de valor que causa erro no banco
$valor = '1; DROP TABLE users; --';
$valor = '1 OR 1=1';


/* 
    Não é uma boa prática utilizar interpolação 
    de variáveis sem tratamento
*/
$sql = "SELECT * FROM users WHERE id = {$valor}";
var_dump($sql); 

$valor = '1 OR 1=1';
$sql = "SELECT * FROM users WHERE id = {$valor}";
var_dump($sql); 

exit();

$retorno = $conexao->query($sql);
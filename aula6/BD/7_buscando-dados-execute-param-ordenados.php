<?php

// Conectando com o SQLite
$conexao = new PDO('sqlite:bancoPHP.db');

$sql = "SELECT * FROM users WHERE name like ? OR id = ? ";

$consulta = $conexao->prepare($sql);

$consulta->bindValue(1, 'A%', PDO::PARAM_STR);
$consulta->bindValue(2, 1, PDO::PARAM_INT);
$consulta->execute();
$consulta->setFetchMode(PDO::FETCH_ASSOC);

/* Acessando os dados da consulta diretamente através do PDOStatement */
foreach ($consulta as $dado) {
    echo PHP_EOL . $dado['name'];
}

/* 
    Pegando os dados com fetchAll().
    Neste código específico, ele não retornará nenhum valor porque os dados
    já foram consumidos no loop foreach acima.
    Ao executar o fetchAll() abaixo, o ponteiro já chegou ao final
    e não há mais nenhuma linha restante para recuperar.

    Para resolver isso, remova o foreach acima e então poderá 
    fazer um foreach no $dados que é retornado do fetchAll()

*/
$dados = $consulta->fetchAll();
print_r($dados);



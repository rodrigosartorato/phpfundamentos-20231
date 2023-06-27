<?php

require_once 'Curso.php';
require_once 'ValidacaoGenerica.php';
require_once 'SQLiConnection.php';

$curso1 = new Curso('PHP');
$curso2 = new Curso('Laravel');
$curso3 = new Curso('Simfony');

echo PHP_EOL . 'Total de instancias:' . Curso::qtdInstancias();


// Chamando método estático - referente a classe
var_dump(ValidacaoGenerica::validaEmail('a@'));
var_dump(ValidacaoGenerica::validaURL('http://'));


// Utilizando os métodos estáticos
SQLiteConnection::connect('database.sqlite');
SQLiteConnection::createTable();
SQLiteConnection::insertDemo();

$results = SQLiteConnection::query("SELECT * FROM users");
foreach ($results as $row) {
    echo $row['name'] . "<br>";
}
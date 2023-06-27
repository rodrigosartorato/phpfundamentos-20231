<?php

require 'Pessoa.php';
require 'Funcionario.php';
require 'Cliente.php';

$funcionario = new Funcionario('Maria');
$funcionario->setNascimento('10/07/2000');
$funcionario->setCargo('Analista Desenvolvedor');
$funcionario->setSalario(3200);

$cliente = new Cliente('João');
$cliente->setNascimento('10/12/1997');
$cliente->setCodigo(999);

printf('<p>A idade do %s é %s</p>', $funcionario->getNome(), $funcionario->getIdade());
printf('<p>A idade do %s é %s</p>', $cliente->getNome(), $cliente->getIdade());
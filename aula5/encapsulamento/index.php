<?php

require_once 'Calculadora.php';
require_once 'CalculadoraPersonalizada.php';

$calc1 = new Calculadora(15, 5, '/');
echo PHP_EOL . 'Resultado => ' . $calc1->getResultado();

$calc2 = new CalculadoraPersonalizada(4, 0, '*');
echo PHP_EOL . 'Resultado => ' . $calc2->getResultado();
echo PHP_EOL . 'Resultado => ' . $calc2->getResultadoString();

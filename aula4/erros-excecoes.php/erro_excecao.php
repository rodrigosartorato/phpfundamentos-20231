<?php

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);

// Turn off all error reporting
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// ini_set('log_errors', 0);
// ini_set('error_log', './error.log');

// Exemplo de E_WARNING
$array = [1,2,3];
echo $array[5];

// Exemplo de E_ERROR (erro fatal)
function soma() {}
// function soma() {}


echo PHP_EOL . 'Fim de programa!';
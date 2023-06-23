<?php

error_reporting(E_ALL);

$dividendo = 10;
$divisor = 0;

try {
    
    $divisao = $dividendo / $divisor;
    echo "$dividendo / $divisor = $divisao<br>" ;

} catch (\Throwable $t) {

    echo 'Erro capturado: ' . $t->getMessage();
}

echo 'Fim do programa.';

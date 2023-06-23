<?php

error_reporting(E_ALL);

$dividendo = 10;
$divisor = 0;

try {
    // Trecho com possível erro
    $divisao = $dividendo / $divisor;
    echo "$dividendo / $divisor = $divisao<br>" ;
} catch (\Throwable $t) {
    // Captura do erro
    echo 'Erro capturado: ' . $t->getMessage();
} finally {
    // Trecho sempre executado (opcional)
    // Geralmente usado para fechar conexão com banco,
    // ou fechar arquivo 
    echo 'mensagem qualquer<br>';
}

echo 'Fim do programa.';
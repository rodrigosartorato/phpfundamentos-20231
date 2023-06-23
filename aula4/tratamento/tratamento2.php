<?php

function funcao3() {
    echo 'Entrei na função 3' . PHP_EOL;

    try {
        $divisao = intdiv(10, 0);
        echo $divisao;
        funcao4();
        echo 'Saindo da função 3' . PHP_EOL;
    } catch (\Throwable $p) {
        echo 'Problema capturado: ' . $p->getMessage();
    }

}

function funcao4() {
    echo 'Entrei na função 4' . PHP_EOL;
    for ($i = 6; $i <=10; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 4' . PHP_EOL;
}
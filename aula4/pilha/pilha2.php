<?php

function funcao3() {
    echo 'Entrei na função 3' . PHP_EOL;
    funcao4();
    echo 5/0;
    echo 'Saindo da função 3' . PHP_EOL;
}

function funcao4() {
    echo 'Entrei na função 4' . PHP_EOL;
    for ($i = 6; $i <=10; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 4' . PHP_EOL;
}
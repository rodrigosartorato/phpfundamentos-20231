<?php

function funcao1() {
    echo 'Entrei na função 1' . PHP_EOL;
    funcao2();
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2() {
    echo 'Entrei na função 2' . PHP_EOL;
    for ($i = 1; $i <=5; $i++) {
        echo $i . PHP_EOL;
    }
    require 'tratamento2.php';

    try {        
        funcao3();
    //} catch (RuntimeException | DivisionByZeroError $problema) {
    } catch (\RuntimeException $p) {
        echo 'Problema capturado na funcao3(). => ' . $p->getMessage();
    } catch (\DivisionByZeroError $p) {
        echo 'Problema de divisão por zero capturado na funcao3. => ' . $p->getMessage();
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
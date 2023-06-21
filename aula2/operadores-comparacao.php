<?php

var_dump(2 == '2');     // Igual                 - Saída: true
var_dump(2 === 2);      // Idêntico              - Saída: true
var_dump(2 != 3);       // Diferente             - Saída: true
var_dump(2 <> 3);       // Diferente             - Saída: true
var_dump(2 !== '2');    // Não idêntico          - Saída: true 
var_dump(2 > 3);        // Maior que             - Saída: false
var_dump(2 >= 3);       // Maior ou igual que    - Saída: false
var_dump(2 < 3);        // Menor que             - Saída: true
var_dump(2 <= 3);       // Menor ou igual que    - Saída: true

echo PHP_EOL;

var_dump(0 == "a"); // Antes do PHP 8, se uma string fosse comparada com um número, ela era convertida

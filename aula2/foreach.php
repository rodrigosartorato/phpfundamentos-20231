<?php

$frutas = array('maçã', 'banana', 'laranja', 'morango');

foreach ($frutas as $i => $fruta) {
  echo $i . ' '. $fruta . "\n";
}

$alfabeto = 'abcdefghijklmnopqrstuvwxyz';
$alfabeto = str_split($alfabeto); // converte uma string em array
// var_dump($alfabeto);
$nome = 'fundamentos de php';

foreach ($alfabeto as $i => $value) {

    if (str_contains($nome, $value)) {
        echo "'$value' está contido na palavra '$nome'";
        $letras[] = $value;
        continue;
    }
    echo $i . ' ' . PHP_EOL;
    
}

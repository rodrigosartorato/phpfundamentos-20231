<?php

// Array multidimensional
$filme = [
    'titulo' => 'O rei leão',
    'ano' => 1994,
    'diretores' => ['Rob Minkoff', 'Roger Allers'],
];

echo $filme['titulo'];
echo PHP_EOL;
echo 'Diretores: '. $filme['diretores'][0] . ' e '. $filme['diretores'][1] . PHP_EOL . PHP_EOL;


// Interpolação com array - utilizando heredoc
echo <<<Sinopse
O filme "{$filme['titulo']}" foi lançado em {$filme['ano']} e foi um
sucesso de bilheteria.
Este desenho animado da Disney mostra as aventuras de um leão jovem 
de nome Simba, o herdeiro de seu pai, Mufasa.
Diretores: {$filme['diretores'][0]}, {$filme['diretores'][1]}
Sinopse;
<?php
define('V', true);
define('F', false);

// Tabela verdade

// Conjunção (e)
echo 'Conjunção (and)' . PHP_EOL;
var_dump(V && V); // V ^ V = V
var_dump(V && F); // V ^ F = F
var_dump(F && V); // F ^ V = F
var_dump(F && F); // F ^ F = F
echo PHP_EOL;

// Disjunção (ou)
echo 'Disjunção (or)' . PHP_EOL;
var_dump(V || V); // V v V = V
var_dump(V || F); // V v F = V
var_dump(F || V); // F v V = V
var_dump(F || F); // F v F = F
echo PHP_EOL;

// Ou exclusivo
echo 'Exclusivo (xor)' . PHP_EOL;
var_dump(V xor V); // V xor V = F
var_dump(V xor F); // V xor F = V
var_dump(F xor V); // F xor V = V
var_dump(F xor F); // F xor F = F
echo PHP_EOL;

// Negação
echo 'Negação' . PHP_EOL;
var_dump(!V); // ~V = F
var_dump(!F); // ~F = V
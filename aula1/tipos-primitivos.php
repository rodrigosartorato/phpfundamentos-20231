<?php

// Tipos escalares - primitivos
$idade = 25;            // int
$salario = 31500.54;    // float
$ativo = true;          // bool
$nome = 'Maria';        // string

echo $idade, PHP_EOL , $salario, PHP_EOL, $ativo, PHP_EOL, $nome, PHP_EOL;

// Outras formas de declarar uma string
$nowdoc = <<<'NOWDOC'
    Esta é uma sintaxe de bloco de texto.
Esta string é delimitada com "NOWDOC" que facilita a
escrita de textos com várias linhas mas sem 'interpolação'.
    No/without interpolation
Aqui a variável $nome é lida de forma literal
NOWDOC;

$heredoc = <<<HEREDOC
    Esta é uma sintaxe de bloco de texto também.
Esta string é delimitada com "HEREDOC" que facilita a 
escrita de textos com várias linhas e aceita interpolação de
variável \$nome = '$nome'.
    heredoc = here documents
HEREDOC;

echo $nowdoc, $heredoc;
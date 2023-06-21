<?php

$nome = 'Maria';
$quantidade = 6;
$altura = 1.58;

// Casting - Conversão de tipos
// https://www.php.net/manual/pt_BR/language.types.type-juggling.php#language.types.typecasting
$divisao = 5 / 3;
var_dump((int) $divisao); // converte $divisao(float) para inteiro
var_dump( $divisao); // converte $divisao(float) para inteiro
exit;

// https://www.php.net/manual/pt_BR/function.settype.php
settype($altura, 'integer');
var_dump($altura);

// Funções que retornam um valor convertido, sem alterar a váriavel
// https://www.php.net/manual/pt_BR/function.intval.php
var_dump(intval($divisao)); // retorna $divisao(float) como inteiro
var_dump(boolval($nome)); // retorno $nome em booleano
var_dump(strval($altura)); // retorno $nome em booleano

